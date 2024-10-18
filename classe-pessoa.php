<?php
class Endereco {
    public $bairro;
    public $rua;
    public $numero;
    //CONSTRUTOR PARA INICIALIZAR O ENDEREÇO
    public function __construct($bairro, $rua, $numero){
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
    public function __toString(): string {
        return
        "Bairro: $this->bairro," . PHP_EOL .
        "Rua: $this->rua," . PHP_EOL .
        "Número: $this->numero";
    }
}

class Pessoa {
    public int $nasc;
    public string $nome;
    public string $cargo;
    public Endereco $endereco;
    public float $saldo;

    //METODO PARA CALCULAR IDADE
    public function idade($ano, $nasc): int{
        return $ano - $nasc;
    }

    public function __construct($nasc, $nome, $cargo, $saldo, $bairro, $rua, $numero) {
        $this->nasc = $nasc;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->saldo = $saldo;
        $this->endereco = new Endereco($bairro, $rua, $numero);

    }
    public function __toString(): string {
        return
        "Nome: $this->nome," . PHP_EOL .
        "Cargo: $this->cargo," . PHP_EOL .
        "Nascimento: $this->nasc," . PHP_EOL .
        "Endereço:" . PHP_EOL .
        "$this->endereco.". PHP_EOL;
    }
};