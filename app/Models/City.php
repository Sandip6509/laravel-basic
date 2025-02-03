<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class City extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
