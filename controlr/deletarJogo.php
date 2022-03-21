<?php
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
include_once("../view/hader.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarJogo($conn,$codigojogo)){
    echo("Usuario excluido com sucesso");
    
      }else{
    echo("Usuario não excluido");
      }
  include_once("../view/footer.php");
?>