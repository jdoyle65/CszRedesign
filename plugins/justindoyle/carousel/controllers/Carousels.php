<?php namespace JustinDoyle\Carousel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Carousels extends Controller
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

        BackendMenu::setContext('JustinDoyle.Carousel', 'index');
    }
}