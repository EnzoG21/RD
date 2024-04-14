<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = ['Date', 'user_id', 'KitID', 'FormID', 'Price'];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kit()
    {
        return $this->belongsTo(Kit::class, 'KitID');
    }

    public function form()
    {
        return $this->belongsTo(Form::class, 'FormID');
    }
}

