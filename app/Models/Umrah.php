<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umrah extends Model
{
    use HasFactory;
    function rel_to_duration(){
        return $this->belongsTo(UmrahDuration::class, 'duration');
    }
    function rel_to_type(){
        return $this->belongsTo(UmrahPackage::class, 'type');
    }
}
