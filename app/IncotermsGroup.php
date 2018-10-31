<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncotermsGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'incoterms_groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias',
        'name','term_en',
        'specification',
        'available',
    ];

    /**
     * Get the incoterms items assigned for the group.
     */
    public function incoterms()
    {
        return $this->hasMany('App\Incoterm', 'group_id', 'id');
    }

}
