<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'KitID', 'JerseyID'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

    public function jersey()
    {
        return $this->belongsTo(Jersey::class);
    }
}
