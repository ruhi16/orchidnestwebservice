<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Location;

class Organisation extends Model
{
    use HasFactory;


    public function locations(){
        return $this->hasMany(Location::class, 'organisation_id', 'id');
    }


}
