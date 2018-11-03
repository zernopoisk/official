<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationRegionDistrict extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location_regions_districts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_id',
        'alias', 'name', 'translit',
        'available',
    ];

    /**
     * Get the region that owns the district.
     */
    public function region()
    {
        return $this->belongsTo('App\LocationRegion', 'region_id');
    }

}
