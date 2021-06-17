<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ViaCEP{
  public function Buscar(string $cep)
  {
    /**
     * Consulta CEP no via cep
     * @param string $cep
     * @return boolean\\array
     */
    $url = sprintf('https://viacep.com.br/ws/%s/json/', $cep);

    $resposta = Http::get($url);

    if ($resposta->failed()){
      return false;
    }

    if(isset($dados['erro']) && $dados['erro'] === true){
      return false;
    }

    $dados = $resposta->json();

    return $dados;

  }
}