<?php namespace JustinDoyle\Carousel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Carousel extends Controller
{
    protected $carouselId;

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

    public function index($carouselId = null)
    {
        $this->carouselId = $carouselId;

        // Call the ListController behavior index() method
        $this->asExtension('ListController')->index();
    }


    public function listExtendQuery($query)
    {
        // Extend the list query to filter by the user id
        if ($this->carouselId) {
            $query->where('carousel_id', $this->carouselId);
        }
    }


}