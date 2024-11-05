<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Organisation;
use App\Models\Location;
use App\Models\Asset;
use App\Models\Room;



class Asset extends Model
{
    use HasFactory;

    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
        // 'location_id' is the foreign key in the locations table
        // 'id' is the primary key in the locations table
    }

    public function rooms(){
        return $this->hasMany(Room::class, 'asset_id', 'id');
        // 'asset_id' is the foreign key in the rooms table
        // 'id' is the primary key in the rooms table
    }


}
