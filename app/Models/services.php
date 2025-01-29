<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id',
    ];

    public function services()
    {
        return $this->belongsTo(services::class);
    }
}
