<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'associate_id';
    protected $table = 'associates';

    public function service_charge_breakings(){
        return $this->hasMany(Service_charge_breaking::class, 'associate_id', 'id');
    }

    public function associate_role(){
        return $this->belongsTo(Associate_role::class, 'associate_role_id', 'id');
    }
}
