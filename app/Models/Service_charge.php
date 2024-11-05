<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Service;
use App\Models\Service_charge_breaking;

class Service_charge extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'service_charges';

    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
        // 'service_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }


    public function service_charge_breakings(){
        return $this->hasMany(Service_charge_breaking::class, 'service_charge_id', 'id');
        // 'service_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }




}
