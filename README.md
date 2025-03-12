<html>
    <body>
        <form method="post" action="exer2.php">
        Informe nota1: <input type="text" name="nota1"><br>
        Informe nota2: <input type="text" name="nota2"><br>
        Informe nota3: <input type="text" name="nota3"><br>
        <input type="submit" value="calcular">
        </form>
    </body>
</html>

<html>
    <body>
        <?php 
        $x = $_POST["nota1"];
        $y = $_POST["nota2"];
        $a = $_POST["nota3"];
        $n1p= $x*0.2;
        $n2p= $y*0.3;
        $n3p= $a*0.5;
        $media= ($n1p + $n2p + $n3p)/3;
        echo "Sua media final e: $media";
        ?>
    </body>
</html>
