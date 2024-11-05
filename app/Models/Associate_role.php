<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Associate;
use App\Models\User;

class Associate_role extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
    ];

    public function associates(){
        return $this->hasMany(Associate::class, 'associate_role_id', 'id');
    }

    public function users(){
        return $this->hasMany(User::class, 'associate_role_id', 'id');
    }
}
