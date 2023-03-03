<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winkelmandje extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price',
        'groote',
    ];
    public function PizzaPrijs() : float
    {
        return $this->price * $this->groote;
    }
}
