<?php

namespace App\Http\Controllers;

use App\Models\Diarist;
use Illuminate\Http\Request;

use App\Services\ZipCode;

class searchDiaristCep extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ZipCode $zipcode)
    {   

        $validatorAddress = $zipcode->search($request->cep);

        if($validatorAddress === false) {
            return response()->json(['erro' => 'Cep inválido'], 400);
        }

        $diarists = Diarist::searchForDiarists($validatorAddress['ibge']);

        $quantityDiarists = Diarist::searchQuantityDiarists($validatorAddress['ibge']);

        return [
            'diarists' => $diarists,
            'quantityDiarists' => $quantityDiarists
        ];
    }
}
