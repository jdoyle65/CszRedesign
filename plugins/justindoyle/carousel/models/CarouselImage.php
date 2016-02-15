<?php namespace JustinDoyle\Carousel\Models;

use Cms\Classes\MediaLibrary;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;
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

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new CarouselNameScope());
    }

    public function getCarouselNameAttribute($value) {
        return $this->carousel->name;
    }

    public function getCarouselIdOptions($keyvalue = null) {
        $carousels = \JustinDoyle\Carousel\Models\Carousel::all();
        $options = [];

        foreach($carousels as $carousel) {
            $options[$carousel->id] = $carousel->name;
        }

        return $options;
    }

    public function getImageUrlOptions($keyvalue = null) {
        $options = [];

        $files = MediaLibrary::instance()->findFiles('');
        foreach($files as $file) {
            $options[$file->publicUrl] = $file->path;
        }

        return $options;
    }

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

class CarouselNameScope implements ScopeInterface {
    public function apply(Builder $builder, \Illuminate\Database\Eloquent\Model $model)
    {
        $builder->with('carousel');
    }

    public function remove(Builder $builder, \Illuminate\Database\Eloquent\Model $model) {     }
}