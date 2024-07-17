<header>
    <h3>Cadastro de Contatos</h3>
</header>

<div>
    <form class="needs-validation" action="index.php?menuop=inserir-contato" method="post" novalidate>
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <input class="form-control" type="text" name="nomeContato" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Nome não foi preenchido!
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContato">E-Mail</label>
            <input class="form-control" type="email" name="emailContato" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Email não foi preenchido!
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <input class="form-control" type="text" name="telefoneContato" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Telefone não foi preenchido!
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <input class="form-control" type="text" name="enderecoContato" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Endereço não foi preenchido!
            </div>
        </div>

        <div class="row">

            <div class="mb-3 col-6">
                <label class="form-label" for="sexoContato">Sexo</label>
                <select class="form-control" name="sexoContato" id="sexoContato" required>
                    <option selected value="">Selecione o sexo do aluno</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outros</option>
                </select>
                <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Sexo não foi preenchido!
            </div>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="dataNascContato">Data de Nascimento</label>
                <input class="form-control" type="date" name="dataNascContato" required>
                <div class="valid-feedback">
                Tudo certo!
            </div>
            <div class="invalid-feedback">
                O campo Data de Nascimento não foi preenchido!
            </div>
            </div>
        </div>

        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="Adicionar">
        </div>

    </form>

</div>