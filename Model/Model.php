<?php

namespace App\Model;

use Exception;

abstract class Model
{
    /**Propriedade que armazenará o array retornado da DAO
     * 
     */
    public $rows;
}