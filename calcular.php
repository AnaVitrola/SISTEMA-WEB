<html>
    <body>
        <?php 
        $x = $_POST["peso"];
        $y = $_POST["altura"];
        $imc = $x/($y*$y);
        if($imc< 18.5)
            $situacao = "peso normal (ideal)";

        elseif($imc>= 18.5 && $imc<=24.9)
            $situacao = "peso normal (ideal)";
        
        elseif ($imc>= 20 && $imc<=29.9)
            $situacao = "Sobrepeso";

        elseif ($imc>= 30 && $imc<=34.9)
            $situacao = "Obesidade grau I";

        elseif ($imc>= 35 && $imc<=39.9)
            $situacao = "Obesidade grau II";

        elseif ($imc>=40)
            $situacao = "Obesidade grau III";
        echo "Seu imc é= $imc, e sua situação é= $situacao";
        ?>
    </body>
</html>

