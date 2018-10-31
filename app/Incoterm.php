<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incoterm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'incoterms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id',
        'alias', 'abbr',
        'term_en', 'specification',
        'type_of_transport',
        'available',
    ];

    /**
     * Get the group that owns the incoterm item.
     */
    public function group()
    {
        return $this->belongsTo('App\IncotermsGroup');
    }

}
