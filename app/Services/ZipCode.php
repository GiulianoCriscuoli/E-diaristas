<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ZipCode {

    public function search(string $cep) {

        $url = sprintf('viacep.com.br/ws/%s/json/', $cep);

        $response = Http::get($url);

        if($response->failed()) {

            return false;
        }

        $data = $response->json();

        if(isset($data['erro']) && $data['erro'] !== false) {
            return false;
        }

        return $data;
    }

}