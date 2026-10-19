<?php
// src/Planta.php
class Planta
{
    private string $nome;
    private string $especie;
    private int $aguaPorDia;

    public function __construct(string $nome, string $especie, int $aguaPorDia)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        // $this->setAguaDiaria($aguaPorDia);
        $this->aguaPorDia = $aguaPorDia;
    }

     public function getNome(): string
    {
        return $this->nome;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getAguaPorDia(): int
    {
        return $this->aguaPorDia;
    }

    public function calcularAguaSemanal(): 
    {
        return ;
    }
}

   


    

    