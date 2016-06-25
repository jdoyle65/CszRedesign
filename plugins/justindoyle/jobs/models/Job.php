<?php namespace JustinDoyle\Contacts\Models;

use Model;

/**
 * Carousel Model
 */
class Contact extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'justindoyle_contacts_contacts';

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
    public $belongsTo = [
        'category' => 'JustinDoyle\Contacts\Models\Category'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getCategoryIdOptions($keyValue = null)
    {
        $categories = Category::all();
        $options = [];
        foreach($categories as $category) {
            $options[$category->id] = $category->title_en;
        }

        return $options;
    }

}