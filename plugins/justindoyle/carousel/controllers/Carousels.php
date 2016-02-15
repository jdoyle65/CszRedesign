<?php namespace JustinDoyle\Carousel\Controllers;

use Backend\Classes\Controller;

class Carousels extends Controller
{
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JustinDoyle.Carousel', 'index');
        SettingsManager::setContext('October.Backend', 'index');
    }

    public function index() {
    }
}