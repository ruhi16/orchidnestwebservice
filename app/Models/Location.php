<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Organisation;
use App\Models\Asset;


class Location extends Model{
    use HasFactory;

    public function organisation(){
        return $this->belongsTo(Organisation::class, 'organisation_id', 'id');
    }

    public function assets(){
        return $this->hasMany(Asset::class, 'location_id', 'id');
    }
}
