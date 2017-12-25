<?php

namespace App\Models;

class Aircraft extends BaseModel
{
    public $table = 'aircraft';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'subfleet_id',
        'airport_id',
        'name',
        'registration',
        'tail_number',
        'active',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'active'       => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'         => 'required',
    ];

    /**
     * foreign keys
     */

    public function airport()
    {
        return $this->belongsTo('App\Models\Airport', 'airport_id');
    }

    public function subfleet()
    {
        return $this->belongsTo('App\Models\Subfleet', 'subfleet_id');
    }
}
