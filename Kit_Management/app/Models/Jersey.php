<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    protected $table = 'jersey';
    protected $primaryKey = 'JerseyID';

    protected $fillable = ['number', 'size'];

    public function jerseys()
    {
        return $this->belongsTo(Jersey::class);
    }
}
