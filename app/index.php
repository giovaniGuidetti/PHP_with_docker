<?php

require 'functions.php';

//require 'router.php';

require 'Database.php';

$db = new Database();

$pessoas = $db->getPessoas();

foreach($pessoas as $pessoa){
    echo "<li>" . $pessoa['nome'] . " tem" . $pessoa['idade'] . " anos de idade, para contatar envie uma mensagem para: " . $pessoa['email'] . "</li>";
};