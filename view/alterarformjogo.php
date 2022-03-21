<?php
include_once("hader.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
extract($_REQUEST,EXTR_OVERWRITE);
$informa = visuJogoCod($conn,$idjogo);
?>

<link rel="stylesheet" type="text/css" href="css/estilo.css">


<div class="container">

<form class="row g-3" action="../controlr/alterarJogo.php"  method="POST">

  <input type="hidden" name="codigojogo" value="<?=$informa["idjogo"]?>">

  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome jogo</label>
    <input type="text" name="nomejogo" value="<?=$informa["nomejogo"]?>" class="form-control" id="inputNome4" placeholder="Digite seu nome"  required >
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Valor jogo</label>
    <input type="decimal" name="valorjogo" value="<?=$informa["valorjogo"] ?>" class="form-control" id="inputEmail4"  required>
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Gnero Jogo</label>
    <input type="text" name="generojogo" value="<?=$informa["generojogo"] ?>" class="form-control" id="inputAddress" placeholder="(00) 00000-0000" required>
  </div>

  <div class="col-md-6">
    <label for="inputCPF" class="form-label">Quantidade</label>
    <input type="text" name="qtdjogo" value="<?=$informa["qtdjogo"] ?>" class="form-control" id="inputCPF" placeholder="000.000.000-00" required>
  </div>

  <div class="col-2">
    <label for="inputCEP" class="form-label">Data de Lançamento</label>
    <input type="text" name="datalancamentojogo" value="<?=$informa["datalancamentojogo"] ?>"class="form-control" id="inputAddress2"  required>
  </div>

  <div class="col-md-2">
    <label for="inputNum" class="form-label">Studio</label>
    <input type="text" name="studiojogo" value="<?=$informa["studiojogo"] ?>" class="form-control" id="inputNum" required>
  </div>



  </div>
  <div class="col-4">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>

</div>


<?php
 include_once("footer.php");
 ?>