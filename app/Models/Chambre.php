<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = ['type_id', 'description', 'etage', 'prix'];
    public function type()
    {
        return $this->belongsTo(Types::class);
    }

}
