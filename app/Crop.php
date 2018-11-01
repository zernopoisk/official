<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'alias', 'name', 'translit',
        'available'
    ];

    /**
     * Get the category that owns the crop item.
     */
    public function category()
    {
        return $this->belongsTo('App\CropCategory', 'category_id', 'id');
    }

}
