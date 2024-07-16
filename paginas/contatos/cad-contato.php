<header>
    <h3>Cadastro de Contatos</h3>
</header>

<div>
    <form action="index.php?menuop=inserir-contato" method="post">
    <div class="mb-3">
        <label class="form-label" for="nomeContato">Nome</label>
        <input class="form-control" type="text" name="nomeContato">
    </div>

    <div class="mb-3">
        <label class="form-label" for="emailContato">E-Mail</label>
        <input class="form-control" type="email" name="emailContato">
    </div>

    <div class="mb-3">
        <label class="form-label"  for="telefoneContato">Telefone</label>
        <input class="form-control" type="text" name="telefoneContato">
    </div>

    <div class="mb-3">
        <label class="form-label"  for="enderecoContato">Endereço</label>
        <input class="form-control" type="text" name="enderecoContato">
    </div>

    <div class="row">

        <div class="mb-3 col-6">
            <label class="form-label"  for="sexoContato">Sexo</label>
            <select class="form-control" name="sexoContato" id="sexoContato">
                <option selected>Selecione o sexo do aluno</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outros</option>
            </select>
        </div>
    
        <div class="mb-3 col-6">
            <label class="form-label"  for="dataNascContato">Data de Nascimento</label>
            
                
            <input class="form-control" type="date" name="dataNascContato">
            
        </div>
    </div>

    <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Adicionar" name="Adicionar">
    </div>

    </form>
    
</div>