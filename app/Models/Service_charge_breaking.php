<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Service_charge;

class Service_charge_breaking extends Model
{
    use HasFactory;
    protected $table = 'service_charge_breakings';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    public function service_charge(){
        return $this->belongsTo(Service_charge::class, 'service_charge_id', 'id');
        // 'service_charge_id' is the foreign key of service_charges table
        // 'id' is the primary key of service_charges table
    }


    public function associate(){
        return $this->belongsTo(Associate::class, 'associate_id', 'id');
        // 'associate_id' is the foreign key of associates table
        // 'id' is the primary key of associates table
    }
}
