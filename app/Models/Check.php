<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'check',
        'checked',
        'lat',
        'long',
        'pdf'
    ];

    public function comments() {
        return $this->hasMany(Comments::class, 'check_id', 'id');
    }
}
