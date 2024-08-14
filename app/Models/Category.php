<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catgeory_name',
    ];

    public function cars() {
        return $this->hasMany(Car::class);

    }
}
