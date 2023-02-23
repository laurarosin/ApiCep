<?php

use ApiCep\Controller\EnderecoController;

$urI = parse_url($_SERVER['REQUEST_URl'], PHP_URL_PATH);

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
 * [OK] Exemplo de Acesso:
*/

 case '/cidade/by-uf':
    EnderecoController::getCidadesByUf();
 break;

 /**
  * [OK] Exemplo de Acesso:
  */

  case '/bairro/by-cidade':
    EnderecoController::getBairrosByIdCidade();
 break;

 default:
    http_response_code(403);
 break;

}