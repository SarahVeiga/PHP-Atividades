<!-- O programa exibe os dados recebidos em lista no formato de tabela -->
 <?php
 //Array associativo contendo informações de produtos
 $produtos = [
    ["nome" => "Camiseta", "preco" => 50.00, "quantidade" => 10],
    ["nome" => "Calça Jeans", "preco" => 100.00, "quantidade" => 5],
    ["nome" => "Tênis", "preco" => 150.00, "quantidade" => 7],
    ["nome" => "Moletom", "preco" => 70.00, "quantidade" => 14],
    ["nome" => "Jaqueta", "preco" => 130.00, "quantidade" => 9],
    ["nome" => "Cropped", "preco" => 40.00, "quantidade" => 13],
    ["nome" => "Óculos", "preco" => 30.00, "quantidade" => 17],
    ["nome" => "Salto Alto", "preco" => 160.00, "quantidade" => 4],
    ["nome" => "Brinco", "preco" => 15.00, "quantidade" => 6],
    ["nome" => "T-Shirt", "preco" => 70.00, "quantidade" => 35],
    ["nome" => "Short", "preco" => 45.00, "quantidade" => 8],
    ["nome" => "Saia", "preco" => 40.00, "quantidade" => 12],
 ];

 //Exibe os produtos em formato de tabela
 echo "<table border='1'>";

    //Títulos da tabela
    echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";

    //para cada 'produto' do vetor 'produtos'
    foreach ($produtos as $produto) {
        echo "<tr>";
        echo "<td>" . $produto['nome'] . "</td>";
        echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
        echo "<td>" . $produto['quantidade'] . "</td>";
        echo "</tr>";
    }
echo "</table>";
?>