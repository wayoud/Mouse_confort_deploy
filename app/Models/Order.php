<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'nom',
        'prenom',
        'commande',
        'lieu_livraison',
        'telephone',
        'email',
         'status',
    ];
}
