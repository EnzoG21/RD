<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitCheck extends Model
{
    use HasFactory;

    protected $table = 'kit_checks';

    protected $fillable = ['KitID', 'Result', 'notes', 'Date'];
}
