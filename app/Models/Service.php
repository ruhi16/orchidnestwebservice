<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Service_category;
use App\Models\Trip;
use App\Models\Trip_day;
use App\Models\Trip_day_service;
use App\Models\service_charge;


class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    public function service_category(){
        return $this->belongsTo(Service_category::class, 'service_category_id', 'id');
        // 'service_category_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }

    public function trip_day_services(){
        return $this->hasMany(Trip_day_service::class, 'service_id', 'id');
        // 'service_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }


    public function service_charges(){
        return $this->hasMany(Service_charge::class, 'service_id', 'id');
        // 'service_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }




}
