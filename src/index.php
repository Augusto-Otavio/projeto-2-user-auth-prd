<?php

require_once 'UserManager.php';

$manager = new UserManager();

echo "Caso 1 — Cadastro válido" . PHP_EOL;
echo $manager->registerUser("Maria Oliveira", "maria@email.com", "Senha123") . PHP_EOL . PHP_EOL;

echo "Caso 2 — Cadastro com e-mail inválido" . PHP_EOL;
echo $manager->registerUser("Pedro", "pedro@@email", "Senha123") . PHP_EOL . PHP_EOL;

$manager->registerUser("João Silva", "joao@email.com", "SenhaForte1");
echo "Caso 3 — Tentativa de login com senha errada" . PHP_EOL;
echo $manager->loginUser("joao@email.com", "Errada123") . PHP_EOL . PHP_EOL;

$usuarios = $manager->listUsers();
$idJoao = $usuarios[0]['id'] ?? null;
echo "Caso 4 — Reset de senha válido" . PHP_EOL;
if ($idJoao !== null) {
    echo $manager->resetPassword($idJoao, "NovaSenha1") . PHP_EOL . PHP_EOL;
} else {
    echo "Erro: Usuário não encontrado para reset de senha." . PHP_EOL . PHP_EOL;
}

echo "Caso 5 — Cadastro de usuário com e-mail duplicado" . PHP_EOL;
echo $manager->registerUser("Outra Maria", "maria@email.com", "SenhaValida1") . PHP_EOL . PHP_EOL;
