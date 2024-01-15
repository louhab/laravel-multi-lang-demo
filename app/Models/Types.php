<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chambre ;
class Types extends Model
{
    use HasFactory;
    protected $table = 'types';
    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }

}
