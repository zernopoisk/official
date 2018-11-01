<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crops_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias', 'name', 'translit',
    ];

    /**
     * Get the crop items assigned for the category.
     */
    public function crops()
    {
        return $this->hasMany('App\Crop', 'category_id', 'id');
    }

}
