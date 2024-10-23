<?php
class Impares { //DESAFIO, MOSTRAR NUMEROS IMPARES

    //MINHA SOLUÇÃO
    function MinhaSolucao(): string  {
        $numero = 1;
        $resultado = "";
        for ($i = 0; $i < 100;  $i+=2) {
            $resultado .= $numero + $i . PHP_EOL;
        }
        return $resultado;
    }
    
    //SOLUÇÃO DO PROFESSOR
    function SolucaoDoProfessor(): string    {
        $resultado = "";
        for ($i = 1; $i < 100; $i++){
            if ($i % 2 != 0) {
                $resultado .= $i . PHP_EOL;
            }
        }
        return $resultado;
    }

    //OUTRA OPÇÃO
    function outraOpcao(): string{
        $resultado = "";  
        for ($i = 1; $i < 100; $i++){
            if ($i % 2 == 0) {
            continue;
            }
            $resultado .= $i . PHP_EOL;
        }
        return $resultado;
    }
}

class Tabuada { //EXIBIR TABUADA DE UM NUMERO
    
    function MinhaSolucao(float $numero): string  {
        $resultado = "";
        for ($i = 1; $i <= 10; $i++) {
            $resultado .= "$i x $numero = " . $i * $numero . PHP_EOL;
        }
        return $resultado;
    }

    function SolucaoDoProfessor(){
        $multiplicador = 3;
        for ($i = 1; $i < 10; $i++){
            $resultado = $multiplicador * $i;
            echo "$multiplicador x $i = $resultado" . PHP_EOL;
        }
    }

}

class IMC { //IMC
    function MinhaSolucao(float $altura, float $peso): string{
        $IMC = number_format($peso / $altura**2, 2);

        switch ($IMC) {
            case ($IMC < 18.5):
                return "O IMC é $IMC e você está abaixo do peso!";
            case($IMC < 24.9):
                return "O IMC é $IMC e você está no peso ideal!";
            case($IMC < 29.9):
                return "O IMC é $IMC e você está com sobrepeso!";
            case($IMC < 34.9):
                return "O IMC é $IMC e você está com obesidade grau 1!";
            case($IMC < 39.9):
                return "O IMC é $IMC e você está com obesidade grau 2!";
            default:
                return "O IMC é $IMC e você está com obesidade grau 3!";
        }
    }

    function solucaoDoProfessor(): void{    
        $peso = 60;
        $altura = 1.74;
        $imc = $peso / $altura ** 2;
        
        echo "Seu IMC é de $imc. Você está com o IMC ";
        
        if ($imc < 18.5) {
            echo "abaixo";
        } elseif ($imc < 25) {
            echo "dentro";
        } else {
            echo "acima";
        }
        
        echo " do recomendado";
    }

}
 
$obj = new IMC();
echo $imc->MinhaSolucao(1.83,81);