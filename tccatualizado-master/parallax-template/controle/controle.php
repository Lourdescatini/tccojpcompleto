<?php 

require_once("conexao.php");

function ins_dados($pgs){
    
          if (isset($pgs)) {
            	include_once $pgs;
            } else{ include_once "paginainicial.php";} 
           
}