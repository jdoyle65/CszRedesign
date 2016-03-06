<?php namespace JustinDoyle\Contacts\Models;

use Model;

/**
 * Carousel Model
 */
class Category extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'justindoyle_contacts_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['*'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}