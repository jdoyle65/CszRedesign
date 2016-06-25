<?php namespace JustinDoyle\Jobs\Models;

use Model;

/**
 * Job Model
 */
class Job extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'justindoyle_jobs_jobs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['*'];

    protected $dates = ['closing'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'category' => 'JustinDoyle\Jobs\Models\Category'
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