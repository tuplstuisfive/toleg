<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $guarded = [
        'id',
    ];

    public function transactions()
    {
        return $this->belongsTo(transaction::class);
    }
}
