<?php namespace JustinDoyle\Carousel\Models;

use Model;

/**
 * CarouselImage Model
 */
class CarouselImage extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'justindoyle_carousel_carousel_images';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'carousel' => 'JustinDoyle\Carousel\Models\Carousel'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}