<?php
include_once 'includes/header.php';
?>

<div id="conteiner">
    <div class="divForm">
        <h1>Cadastrar Cliente</h1>
        <form action="php_action/create.php" method="POST">
            <div class="col">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" aria-label="First name" name="nome">
            </div>
            <div class="col">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" aria-label="Last name" name="sobrenome">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="text" class="form-control" aria-label="email" name="email">
            </div>
            <div class="col">
                <label class="form-label">Idade</label>
                <input type="text" class="form-control" aria-label="age" name="idade">
            </div>
            <div class="buttonsForm">
                <a href="index.php" class="btn btn-primary">Lista de clientes</a>
                <button type="submit" class="btn btn-success" name="btn-cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>