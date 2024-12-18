<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    //gestione nome
        $prezzoAbbonamento = 45;
        $nome = $_GET['nome'];
        echo "<h2>NOME UTENTE: </h2>";
        echo "<h4>";
        echo $nome;
        echo "</h4>";

        //gestione età
        $eta = $_GET['eta'];
        if($eta <18 || $eta > 64){
            $prezzoAbbonamento = 35;
        }
        echo "<h2>ETÀ: </h2>";
        echo "<h4>";
        echo $eta;
        echo "</h4>";


        //gestione sconto e pagamento
        $pagamento = $_GET['pagamento'];
        if($pagamento == 'mensile'){
            //non è necessario applicare sconti
        }else{
            //sconto del 10%
            if($pagamento == 'bimestrale'){
                $prezzoAbbonamento = ($prezzoAbbonamento/100) * 10;
            }
        }else{
            //sconto del 15%
            if($pagamento == 'trimestrale'){

            }
        }else{
            //sconto del 20%
            if($pagamento == 'annuale'){

            }
        }

        echo "<h2>PREZZO DELL'ABBONAMENTO: </h2>";
        echo "<h4>";
        echo $prezzoAbbonamento;
        echo "</h4>";
        

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>