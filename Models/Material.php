<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'dateLivrision',
        'etat',
        'lieu',
        'probleme',
        'type_id'
    ];
    public function etablisements(){
        return $this->belongsToMany(Etablisement::class);
    }
    // public function probleme(){
    //     return $this->belongsTo(Probleme::class);
    // }
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
