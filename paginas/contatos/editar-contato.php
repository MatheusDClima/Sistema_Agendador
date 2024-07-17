<?php
$idContato = $_GET["idContato"];

$sql = "SELECT * FROM tbContatos WHERE idContato = {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div class="row">

    <div class="col-6">
        <form class="needs-validation" action="index.php?menuop=atualizar-contato" method="post" novalidate>

            <div class="mb-3">
                <label class="form-label" for="idContato">ID</label>
                <input class="form-control" type="text" name="idContato" value="<?= $dados["idContato"] ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label" for="nomeContato">Nome</label>
                <input class="form-control" type="text" name="nomeContato" value="<?= $dados["nomeContato"] ?>" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    O campo Nome não foi preenchido!
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="emailContato">E-Mail</label>
                <input class="form-control" type="email" name="emailContato" value="<?= $dados["emailContato"] ?>" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    O campo E-Mail não foi preenchido!
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="telefoneContato">Telefone</label>
                <input class="form-control" type="text" name="telefoneContato" value="<?= $dados["telefoneContato"] ?>" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    O campo Telefone não foi preenchido!
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="enderecoContato">Endereço</label>
                <input class="form-control" type="text" name="enderecoContato" value="<?= $dados["enderecoContato"] ?>" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    O campo endereço não foi preenchido!
                </div>
            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label" for="sexoContato">Sexo</label>
                    <select class="form-control" type="text" name="sexoContato" value="<?= $dados["sexoContato"] ?>" required>
                        <option <?php echo ($dados['sexoContato'] == '') ? 'selected' : '' ?> value="">Selecione o gênero do contato</option>
                        <option <?php echo ($dados['sexoContato'] == 'F') ? 'selected' : '' ?> value="F">Feminino</option>
                        <option <?php echo ($dados['sexoContato'] == 'M') ? 'selected' : '' ?> value="M">Masculino</option>
                        <option <?php echo ($dados['sexoContato'] == 'O') ? 'selected' : '' ?> value="O">Outros</option>
                    </select>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        O campo Sexo não foi preenchido!
                    </div>
                </div>

                <di class="mb-3 col-6">
                    <label class="form-label" for="dataNascContato">Data de Nascimento</label>
                    <input class="form-control" type="date" name="dataNascContato" value="<?= $dados["dataNascContato"] ?>" required>
            </div>
            <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Data de Nasc. não foi preenchido!
            </div>


            <div class="mb-3">
                <input class="btn btn-warning" type="submit" value="Atualizar" name="Atualizar">
            </div>

        </form>

    </div>


    <div class="col-6">
        <?php
        if ($dados["nomeFotoContato"] == "" || !file_exists('./paginas/contatos/fotos-contatos/' . $dados["nomeFotoContato"])) {
            $nomeFoto = "SemFoto.jpg";
        } else {
            $nomeFoto = $dados["nomeFotoContato"];
        }
        ?>
        <div class="mb-3">

            <img class="img-fluid img-thumbnail" width="500" src="./paginas/contatos/fotos-contatos/<?= $nomeFoto ?>" alt="Foto do contato">
        </div>

        <div class="mb-3">
            <button class="btn btn-info" id="btn-editar-foto">
                Editar Foto
            </button>
        </div>
        <div id="editar-foto">
            <form id="form-upload-foto" class="mb-3" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idContato" value="<?=$idContato?>">
                <label class="form-label" for="arquivo">Selecione um arquivo de imagem da foto</label>
                <div class="input-group">
                    <input class="form-control" type="file" name="arquivo" id="arquivo">
                    <input class="btn btn-secondary" type="submit" value="enviar">
                </div>
            </form>
            <div id="mensagem" class="mb-3 alert alert-success">
                mensagem aqui.
            </div>
            <div id="preloader" class="progress">
                <div id="barra" class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div>
    </div>
            
</div>