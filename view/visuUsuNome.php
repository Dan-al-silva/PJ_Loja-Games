<?php
include_once("../view/hader.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="center" form>
<form action="#" method="POST" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">Name</div>
      <input type="text" name="nomeUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-success">Procurar</button>
  </div>
</form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cod</th>

      <th scope="col">Nome</th>

      <th scope="col">Email</th>

      <th scope="col">Telefone</th>

      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
    
  </thead>
  <tbody>
  <?php
$nomeusu = isset($_POST["nomeUsu"])?$_POST["nomeUsu"] :"";

if($nomeusu){
$dado = visuUsuarioNome($conn,$nomeusu);

foreach($dado as $nomeUsuarios):
?>
    <tr>
      <th scope="row"><?php  echo($nomeUsuarios["idusu"]);?></th>
      <td><?=$nomeUsuarios["nomeusu"]?></td>
      <td><?=$nomeUsuarios["emailusu"]?></td>
      <td><?=$nomeUsuarios["foneusu"]?></td>

      <td>
      <form action="../view/alterarform.php" method="POST">
        <input type="hidden" value="<?=$nomeUsuarios["idusu"]?>"
        name="idusu">
      <button type="submit" class="btn btn-outline-primary">Alterar</button>
      </form>
      </td>
      <td><?=$nomeUsuarios["idusu"]?></td>
    </tr>
  

    <?php
endforeach;
}
    ?>
  </tbody>
</table>

<?php
include_once("footer.php");
?>