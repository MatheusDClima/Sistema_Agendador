
<header>
    <h3>Excluir Contato</h3>
</header>


<?php
    $idContato = mysqli_real_escape_string($conexao,$_GET["idContato"]);
    
    $sql = "DELETE FROM tbContatos WHERE idContato = '{$idContato}'";

    mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
    echo "Registro excluído com sucesso!";

?>

