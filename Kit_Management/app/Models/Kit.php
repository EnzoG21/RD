<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    protected $table = 'kit';
    protected $primaryKey = 'KitID';
    protected $fillable = ['brand', 'model', 'size', 'status', 'date'];
    public function kit()
    {
        return $this->hasMany(Kit::class);
    }
}
