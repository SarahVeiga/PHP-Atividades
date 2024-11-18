<?php

//Verificar os dados do formulário
//Utilizando o método POST

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $senha = $_POST['senha'];

    if($senha === '1234567') {
        //Redireciona para a página de 'boas vindas'
        header("Location: 4b_bem_vindo.php");
        exit();
    } else {
        //Exibe mensagem de erro
        $erro = "Senha incorreta. Tente novamente.";
    }
}
?>

<!-- Parte em HTML para exibição das informações -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>
<body>
    <h1>Tente realizar o acesso</h1>
    <h2>Digite a senha para continuar</h2>
    <form method="post" action="">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>

    <!-- 2º parte em PHP, retorna o valor de acordo com a condicional -->
    <?php
    //Exibe a mensagem de erro, se existir
    if (isset($erro)) {
        echo "<p style=color: red,'>$erro</p>";
    }
    ?>
</body>
</html>


