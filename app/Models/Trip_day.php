<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Trip_day;
use App\Models\Trip_day_service;

class Trip_day extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function trip() {
        return $this->belongsTo(Trip::class, 'trip_day_id', 'id');
        // 'trip_id' is the foreign key of trips table
        // 'id' is the primary key of trips table
    }


    public function trip_day_services(){
        return $this->hasMany(Trip_day_service::class, 'trip_day_id', 'id');
        // 'trip_day_id' is the foreign key of trip_days table
        // 'id' is the primary key of trip_days table
    }
}
