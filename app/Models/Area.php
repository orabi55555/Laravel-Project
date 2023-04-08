<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $fillable = [
        'name',
    ];



public function address()
{
    return $this->hasMany(Address::class);
    
    
}


}   

