<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationRegionCenter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location_regions_centers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_id',
        'alias', 'name', 'translit'
    ];

    /**
     * Get the region that owns the administrative center.
     */
    public function region()
    {
        return $this->belongsTo('App\LocationRegion', 'region_id');
    }

}
