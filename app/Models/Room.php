<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Organisation;
use App\Models\Location;
use App\Models\Asset;
use App\Models\Room;


class Room extends Model
{
    use HasFactory;


    public function asset(){
        return $this->belongsTo(Asset::class, 'asset_id', 'id');
    }
}
