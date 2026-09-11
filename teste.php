<?php

require_once "Departamento.php";
require_once "Funcionario.php";

$dept = new Departamento();

echo "Departamento criado com sucesso!";
echo PHP_EOL;

$f1 = new Funcionario("João", "Assistente", 2100.0);
$f2 = new Funcionario("Carlos", "Assistente", 2100.0);
$f3 = new Funcionario("Ana", "Analista", 3400.0);
$f4 = new Funcionario("Fábio", "Coordenador", 4200.0);

echo "Funcionários criados com sucesso!";
echo PHP_EOL;

$dept->adicionarFuncionario($f1);
$dept->adicionarFuncionario($f2);
$dept->adicionarFuncionario($f3);
$dept->adicionarFuncionario($f4);

echo "Funcionários adicionados ao departamento com sucesso!";
echo PHP_EOL . PHP_EOL;

echo "Preencha os dados de mais um funcionário:";
echo PHP_EOL . PHP_EOL;

$nome = readline("Nome: ");
$cargo = readline("Cargo: ");
$salario = (float) readline("Salário: R$ ");

$f5 = new Funcionario($nome, $cargo, $salario);

echo PHP_EOL;
echo "Novo funcionário cadastrado com sucesso!";
echo PHP_EOL;

$dept->adicionarFuncionario($f5);

echo "Novo funcionário adicionado ao departamento com sucesso!";
echo PHP_EOL . PHP_EOL;

echo "Folha salarial total: ";
echo "R$ " . number_format($dept->calcularFolhaTotal(), 2, ",", ".");
echo PHP_EOL;

echo "Média salarial: ";
echo "R$ " . number_format($dept->mediaSalarial(), 2, ",", ".");
