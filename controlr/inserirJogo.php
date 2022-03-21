<?php
include_once("../view/hader.php");

    include_once("../model/conexao.php");
    include_once("../model/jogomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);


  if(inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo)){
echo("Os dados foram cadastrados com sucesso");

  }else{
echo("Não possiel cadastrar seu sdados. Por favor revise seus dados");
  }

 
?>
 