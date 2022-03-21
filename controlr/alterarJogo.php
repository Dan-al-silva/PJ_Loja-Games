<?php
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
include_once("../view/hader.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarJogo ($conn,$codigojogo,$nomejogo,
$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,
$studiojogo)){
    echo("Dados alterados com sucesso");
}else{
    echo("Dados não alterados");
}

include_once("../view/footer.php");
?>