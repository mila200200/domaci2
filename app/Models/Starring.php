<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Starring extends Model
{
    use HasFactory;
    
    protected $guarded=['id'];

    public function series()
    {
        return $this->hasMany(Series::class);
    }
}
