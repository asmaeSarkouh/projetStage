<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablisement extends Model
{
    use HasFactory;
    protected $fillable = [
        'codeEtablisement',
        'nom',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function materials(){
        return $this->belongsToMany(Material::class);
    }

}
