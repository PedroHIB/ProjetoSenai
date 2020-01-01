
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "projeto");

if (!$link) {
    echo "Error: Erro de conexão com o MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conexão estabelecida com sucesso!" . PHP_EOL;
echo "Informação do SERVIDOR " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>