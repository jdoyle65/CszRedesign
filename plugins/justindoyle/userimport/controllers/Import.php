<?php namespace JustinDoyle\UserImport\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Input;

class Import extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JustinDoyle.UserImport', 'index', 'import');
    }

    public function index() {

    }

    public function submit() {
        $file = Input::file('import-file');

        dd($file);
    }
}