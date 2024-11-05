<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Trip_day;

class Trip extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function trip_days() {
        return $this->hasMany(Trip_day::class, 'trip_id', 'id');
        // 'trip_id' is the foreign key of trips table
        // 'id' is the primary key of trips table
    }

}
