<?php namespace JustinDoyle\UserImport\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Input;
use October\Rain\Exception\ExceptionBase;
use October\Rain\Exception\ValidationException;
use RainLab\User\Models\User;

class Import extends Controller
{
    private static $excelCols = [
        'memberNumber' => 'A',
        'lastName' => 'B',
        'firstName' => 'C',
        'email' => 'K',
        'username' => 'K',
        'institution' => 'X',
        'addressLineOne' => 'D',
        'addressLineTwo' => 'E',
        'city' => 'F',
        'province' => 'G',
        'country' => 'H',
        'postalCode' => 'I',
        'phoneOne' => 'J'
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JustinDoyle.UserImport', 'index', 'import');
    }

    public function index() {

    }

    public function submit() {
        $file = Input::file('import-file');

        if($file !== null) {
            $this->processUserFile($file);
        }


    }

    private function processUserFile($file) {
        try {
            $fileType = \PHPExcel_IOFactory::identify($file);
            $reader = \PHPExcel_IOFactory::createReader($fileType);
            $table = $reader->load($file);
        } catch(\PHPExcel_Reader_Exception $e) {
            die('Error loading file: ' . $e->getMessage());
        }

        $sheet = $table->getSheet(0);
        $firstRow = 1;
        $lastRow = $sheet->getHighestRow();

        for($i = $firstRow; $i <= $lastRow; $i++) {

            $memberNumber = $this->userMemberNumber($i, $sheet);
            $user = User::where('member_number', $memberNumber)->first();

            if($user === null) {
                $user = $this->createUserFromRow($i, $sheet);
                if($user !== null) {
                    try {
                        $user->save();
                    } catch(\Exception $e) {
                        \Log::error($e);
                    }
                }
            } else {
                $this->updateUserFromRow($i, $sheet, $user);
                try {
                    $user->save();
                } catch(\Exception $e) {
                    \Log::error($e);
                }
            }
        }
    }

    private function createUserFromRow($row, \PHPExcel_Worksheet $sheet) {
        if($this->isValidEmail($this->userEmail($row, $sheet))) {
            $user = new User();
            $password = $this->userMemberNumber($row, $sheet);
            $this->userFillUpdatableFields($user, $row, $sheet);
            $user->member_number = $this->userMemberNumber($row, $sheet);
            $user->password = $password;
            $user->password_confirmation = $password;
            $user->reset_password_code = uniqid(str_random());
            $user->activation_code = md5(str_random());
            $user->is_activated = 0;
            $user->receive_emails = 0;
            $user->membership_status = 'Unknown';
            $user->membership_type = 'Unknown';
            $user->cmd_member = 0;
            $user->pie_member = 0;
            $user->cpb_member = 0;
            $user->eee_member = 0;

            return $user;
        } else {
            return null;
        }
    }

    private function updateUserFromRow($row, \PHPExcel_Worksheet $sheet, User $user) {
        if($this->isValidEmail($this->userEmail($row, $sheet))) {
            $this->userFillUpdatableFields($user, $row, $sheet);
        }
    }

    private function userFillUpdatableFields(User $user, $row, \PHPExcel_Worksheet $sheet) {
        $user->name = $this->userName($row, $sheet);
        $user->surname = $this->userSurname($row, $sheet);
        $user->email = $this->userEmail($row, $sheet);
        $user->username = $this->userUsername($row, $sheet);
        $user->institution = $this->userInstitution($row, $sheet);
        $user->address_line_one = $this->userAddressLineOne($row, $sheet);
        $user->address_line_two = $this->userAddressLineTwo($row, $sheet);
        $user->city = $this->userCity($row, $sheet);
        $user->province = $this->userProvince($row, $sheet);
        $user->country = $this->userCountry($row, $sheet);
        $user->postal_code = $this->userPostalCode($row, $sheet);
        $user->phone_one = $this->userPhoneOne($row, $sheet);
    }

    private function valueFromRow($row, $col, \PHPExcel_Worksheet $sheet) {
        return $sheet->getCellByColumnAndRow(\PHPExcel_Cell::columnIndexFromString($col) - 1, $row)->getValue();
    }

    private function userMemberNumber($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['memberNumber'], $sheet);
    }

    private function userName($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['firstName'], $sheet);
    }

    private function userSurname($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['lastName'], $sheet);
    }

    private function userEmail($row, \PHPExcel_Worksheet $sheet) {
        $emails = explode(',', $this->valueFromRow($row, self::$excelCols['email'], $sheet));
        $email = trim($emails[0]);
        $email = trim(utf8_decode($email)," \t\n\r\0\x0B\xA0");

        return $email;
    }

    private function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function userUsername($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['email'], $sheet);
    }

    private function userInstitution($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['institution'], $sheet);
    }

    private function userAddressLineOne($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['addressLineOne'], $sheet);
    }

    private function userAddressLineTwo($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['addressLineTwo'], $sheet);
    }

    private function userCity($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['city'], $sheet);
    }

    private function userProvince($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['province'], $sheet);
    }

    private function userCountry($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['country'], $sheet);
    }

    private function userPostalCode($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['postalCode'], $sheet);
    }

    private function userPhoneOne($row, \PHPExcel_Worksheet $sheet) {
        return $this->valueFromRow($row, self::$excelCols['phoneOne'], $sheet);
    }
}