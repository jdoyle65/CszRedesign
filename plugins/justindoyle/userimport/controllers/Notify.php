<?php namespace JustinDoyle\UserImport\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Input;
use Mail;
use October\Rain\Exception\ExceptionBase;
use October\Rain\Exception\ValidationException;
use RainLab\User\Models\User;

class Notify extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JustinDoyle.UserImport', 'index', 'notify');
    }

    public function index() {
        $users = User::where('is_activated', 0)->get();

        $this->vars['usersToActivate'] = $users;
    }

    public function send() {
        $members = Input::get('member-checkbox', []);

        if(is_array($members)) {
            $users = User::whereIn('member_number', $members)->get();
        } else {
            $users = User::where('member_number', $members)->get();
        }

        foreach($users as $user) {
            $activationLink = 'www.csz-scz.ca/activate/' . $user->activation_code;

            $vars = [
                'user' => $user,
                'activationLink' => $activationLink
            ];
            Mail::sendTo($user->email, 'justindoyle.userimport::mail.notify', $vars);
        }
    }
}