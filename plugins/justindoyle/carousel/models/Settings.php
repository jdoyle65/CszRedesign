<?php namespace JustinDoyle\Carousel\Models;

use Model;

class Settings extends Model {
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'justindoyle_carousel_settings';

    public $settingsFields = 'fields.yaml';
}