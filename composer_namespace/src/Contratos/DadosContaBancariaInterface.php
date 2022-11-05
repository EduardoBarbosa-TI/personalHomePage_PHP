<?php

declare(strict_types=1);

namespace User\DockerPhpMysql\Contratos;

interface DadosContaBancariaInterface
{
    public function getBanco(): string;
    public function getNomeTitular(): string;
    public function getNumeroAgencia(): string;
    public function getNumeroConta(): string;
}