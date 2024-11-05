<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Trip_day;
use App\Models\Trip_day_service;

class Trip_day_service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function trip_day(){
    //     return $this->belongsTo(Trip_day::class, 'trip_day_id', 'id');
    //     // 'trip_day_id' is the foreign key of trip_days table
    //     // 'id' is the primary key of trip_days table
    // }


    public function trip_day(){
        return $this->belongsTo(Trip_day::class, 'trip_day_service_id', 'id');
        // 'trip_day_id' is the foreign key of trip_days table
        // 'id' is the primary key of trip_days table
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
        // 'trip_day_service_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }

    

}
