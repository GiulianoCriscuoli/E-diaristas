<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarist extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'cpf', 'email',
     'phone', 'address', 'number',
     'district', 'complement', 'city', 'state', 'cep',
     'code_ibge', 'user_photo'
    ];

    protected $visible = ['fullname', 'city', 'user_photo', 'reputation'];

    protected $appends = ['reputation'];

    static public function searchForDiarists (int $codeIbge) {

        return Self::where('code_ibge', $codeIbge)->limit(6)->get();
    }

    static public function  searchQuantityDiarists (int $codeIbge) {
        
        $quantityDiarists = Self::where('code_ibge', $codeIbge)->count();

        return $quantityDiarists > 6 ? $quantityDiarists - 6 : 0;
    }

    public function  getReputationAttribute ($value) {

        return mt_rand(1, 5);
    }
}
