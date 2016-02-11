<?php namespace JustinDoyle\Carousel\Models;

use Model;

class Settings extends Model {
    public $implement = ['System.Behavious.SettingsModel'];

    public $settingCode = 'justindoyle_carousel_settings';

    public $settingsFields = 'fields.yaml';
}