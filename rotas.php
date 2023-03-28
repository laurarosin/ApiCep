<?php

use ApiCep\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
  /**
   * [OK] Exemplo de Acesso:
   * 
   */
  case '/endereco/by-cep':
    EnderecoController::getLogradouroByCep();
  break;

/**
  * [OK] Exemplo de Acesso:
 */
    
  case '/logradouro/by-bairro':
    EnderecoController::getLogradouroByBairroAndCidade();
  break;

/**
 * [OK] Exemplo de Acesso: http://localhost:8000/cidade/by-uf?uf=SP
*/
 case '/cidade/by-uf':
    EnderecoController::getCidadesByUf();
 break;

 /**
  * [OK] Exemplo de Acesso: http://localhost:8000/bairro/by-cidade?id_cidade=200
  */

  case '/bairro/by-cidade':
    EnderecoController::getBairrosByIdCidade();
 break;

 default:
    http_response_code(403);
 break;

}