<?php

require_once "Funcionario.php";

class Departamento {
    private array $funcionarios = [];

    public function adicionarFuncionario(Funcionario $f): void {
        $this->funcionarios[] = $f;
    }

    public function calcularFolhaTotal(): float {
        $folhaTotal = 0;

        foreach ($this->funcionarios as $f) {
            $folhaTotal += $f->calcularSalarioLiquido();
        }

        return $folhaTotal;
    }

    public function funcionariosPorCargo(string $cargo): array {
        $funcionariosDoCargo = [];

        foreach ($this->funcionarios as $f) {
            if ($f->getCargo() == $cargo) {
                $funcionariosDoCargo[] = $f;
            }
        }

        return $funcionariosDoCargo;
    }

    public function mediaSalarial(): float {
        if (count($this->funcionarios) > 0)
            return $this->calcularFolhaTotal() / count($this->funcionarios);

        return 0.0;
    }
}
