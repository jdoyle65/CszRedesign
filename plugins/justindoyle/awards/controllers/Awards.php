<?php namespace JustinDoyle\Awards\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Awards extends Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController'
    ];
    public $listConfig = 'list_config.yaml';
    public $formConfig = 'form_config.yaml';


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JustinDoyle.Awards', 'index', 'awards');
    }
}