<?php

include_once("../model/conexao.php");

include_once("../model/jogomodel.php");

$nomejogo = $_POST ("nomejogo");

if(visuJogo($conn,$nomejogo)){
    header("Location:../view/visujogoCod.php");
}

else{
    header("Location:../view/visujogoCod.php");
}

?>