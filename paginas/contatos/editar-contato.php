<?php
    $idContato = $_GET["idContato"];
    
    $sql = "SELECT * FROM tbContatos WHERE idContato = {$idContato}";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">

    <div class="mb-3">
        <label  class="form-label" for="idContato">ID</label>
        <input class="form-control" type="text" name="idContato" value="<?=$dados["idContato"]?>" readonly>
    </div>
    <div class="mb-3">
        <label  class="form-label" for="nomeContato">Nome</label>
        <input class="form-control" type="text" name="nomeContato" value="<?=$dados["nomeContato"]?>">
    </div>

    <div class="mb-3">
        <label  class="form-label" for="emailContato">E-Mail</label>
        <input class="form-control" type="email" name="emailContato" value="<?=$dados["emailContato"]?>">
    </div>

    <div class="mb-3">
        <label  class="form-label" for="telefoneContato">Telefone</label>
        <input class="form-control" type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">
    </div>
    <div class="mb-3">
        <label  class="form-label" for="enderecoContato">Endereço</label>
        <input class="form-control" type="text" name="enderecoContato" value="<?=$dados["enderecoContato"]?>">
    </div>

    <div class="row">

        <div class="mb-3 col-6">
            <label  class="form-label" for="sexoContato">Sexo</label>
            <select class="form-control" type="text" name="sexoContato" value="<?=$dados["sexoContato"]?>">
                <option <?php echo ($dados['sexoContato']=='')?'selected':'' ?> value="">Selecione o gênero do contato</option>
                <option <?php echo ($dados['sexoContato']=='F')?'selected':'' ?> value="F">Feminino</option>
                <option <?php echo ($dados['sexoContato']=='M')?'selected':'' ?> value="M">Masculino</option>
                <option <?php echo ($dados['sexoContato']=='O')?'selected':'' ?> value="O">Outros</option>
            </select>    
        </div>
    
        <di class="mb-3 col-6">
            <label  class="form-label" for="dataNascContato">Data de Nascimento</label>
            <input class="form-control" type="date" name="dataNascContato" value="<?=$dados["dataNascContato"]?>">
        </div>
    </div>

    <div class="mb-3">
        <input class="btn btn-warning" type="submit" value="Atualizar" name="Atualizar">
    </div>

    </form>
    
</div>