<?php
    include 'Pessoas.php';
    include 'Funcionarios.php';

    $pessoaUm = new Pessoas();
    $pessoaUm ->nome = 'Victor';
    $pessoaUm ->mudarIdade(52);
    
    echo "<h1>".$pessoaUm->nome."</h1>";
    echo "<h1>".$pessoaUm->acessarIdade()."</h1>";

    $pessoaDois = new Pessoas();
    $pessoaDois ->nome = 'Vinicius';
    var_dump($pessoaDois);

    $funcionarioUm = new Funcionarios();
    $funcionarioUm ->nome = 'Ligia';
    var_dump($funcionarioUm);
    


?>