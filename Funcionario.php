<?php

class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $valor): void {
        if ($valor > 0) {
            $this->salario = $valor;
        }
    }

    public function setCargo(string $novoCargo): void {
        $cargosAceitos = ["Analista", "Assistente", "Coordenador"];

        if (in_array($novoCargo, $cargosAceitos)) {
            $this->cargo = $novoCargo;
        }
    }

    public function calcularSalarioLiquido(): float {
        $salarioLiquido = $this->salario * 0.89; // desconto de 11%

        if ($this->salario > 5000) {
            return $salarioLiquido * 0.95; // desconto adicional de 5%
        }

        return $salarioLiquido;
    }

    public function ehElegivelParaBonus(): bool {
        if ($this->cargo == "Coordenador" && $this->calcularSalarioLiquido() > 4000) {
            return true;
        }

        return false;
    }
}
