<?php

include_once("../view/hader.php");

?>

<link rel="stylesheet" type="text/css" href="css/estilo.css">


<div class="container">
<form class="row g-3" action="../controlr/inserirJogo.php" method="GET">
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" name="nomejogo" class="form-control" id="inputNome4" placeholder="Digite o nome do jogo"  required >
  </div>


 


  <div class="col-6">
    <label for="inputAddress" class="form-label">Valor jogo</label>
    <input type="text" name="valorjogo" class="form-control" id="inputAddress" placeholder="Preço do jogo" required>
  </div>


  <div class="col-6">
    <label for="inputAddress" class="form-label">Genero Jogo</label>
    <input type="text" name="generojogo" class="form-control" id="inputAddress" placeholder="Genero Jogo" required>
  </div>


  <div class="col-md-4">
    <label for="inputCPF" class="form-label">Data de lançamento</label>
    <input type="date" name="datalancamentojogo" class="form-control" id="inputCPF" placeholder="00/00/0000" required>
  </div>


  <div class="col-2">
    <label for="inputCEP" class="form-label">Produtora</label>
    <input type="text" name="studiojogo" class="form-control" id="inputAddress2" placeholder="" required>
  </div>


  <div class="col-md-2">
    <label for="inputNum" class="form-label">Quantidade</label>
    <input type="text" name="qtdjogo" class="form-control" id="inputNum" placeholder="Qantidade"required>
  </div>


 

  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">Aceito o contrato </label>
       
      
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>



<?php
 include_once("footer.php");
 ?>