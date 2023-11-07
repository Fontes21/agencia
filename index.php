<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>
<form action="">
    
        <label for="nome">Número</label>
        <input type="text" name="numero">
        <br>
        <label for="nome">Agência</label>
        <input type="text" name="agencia">
        <br>        
        <label for="nome">Proprietario</label>
        <input type="text" name="proprietario">
        <br>        
        <label for="nome">Saldo</label>
        <input type="text" name="saldo">
        <br>        
        <label for="nome">Limite</label>
        <input type="text" name="limite">
        <br>
        <input type="submit" value="Salvar">
    </form>

    <?php
         include("conta.php");
         $conta = new conta;

         if (isset($_GET["agencia"]))
         {
            $conta = new conta();
             
            conta->create($_GET["numero"], $_GET["agencia"], $_GET["proprietario"], $_GET["saldo"], $_GET["limite"]);
         }
    ?>

</body>
</html>