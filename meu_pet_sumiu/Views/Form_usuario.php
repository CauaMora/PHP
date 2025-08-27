<?php
    require_once "Cabecalho.php";
?>    
<div class="content">
<div class="container">
<form class="row g-3" action="#" method="post">
  <div class="col-md-6">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-6 text-danger"><?php echo $msg[0];?></div>
  <div class="col-md-6 text-danger"><?php echo $msg[1];?></div>
  <div class="col-md-6"> 
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <div class="col-6">
    <label for="celular" class="form-label">Celular</label>
    <input type="text" class="form-control" id="celular" name="celular">
  </div>
  <div class="col-md-6 text-danger"><?php echo $msg[2];?></div>
  <div class="col-md-6 text-danger"><?php echo $msg[3];?></div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div class="container">
</div class="content">
</body>
</html>