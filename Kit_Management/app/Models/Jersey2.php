<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jersey2 extends Model
{
    protected $fillable = ['number', 'size'];

    public function jerseys()
    {
        return $this->belongsTo(Jersey2::class);
    }
}
