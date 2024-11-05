<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Service;

class Service_category extends Model
{
    use HasFactory;
    protected $table = 'service_categories';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    public function services(){
        return $this->hasMany(Service::class, 'service_category_id', 'id');
        // 'service_category_id' is the foreign key of services table
        // 'id' is the primary key of services table
    }



}
