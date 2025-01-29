<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    /** @use HasFactory<\Database\Factories\StatusFactory> */
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [
        'id',
    ];

    public function status()
    {
        return $this->belongsTo(status::class);
    }
}
