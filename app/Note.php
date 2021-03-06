<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id', 'user_id', 'created_at', 'updated_at', 'deleted_at'];

    
    /**
     * Get all of the owning likeable models.
     */
    public function noteable()
    {
        return $this->morphTo();
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
