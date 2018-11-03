<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropClassiness extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crops_classiness';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias','name','translit','number',
        'available'
    ];
}
