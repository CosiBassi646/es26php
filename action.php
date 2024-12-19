<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <?php 
    //gestione nome
        $prezzoAbbonamento = 45;
        $nome = $_GET['nome'];
        

        //gestione età
        $eta = $_GET['eta'];
        if($eta <18 || $eta > 64){
            $prezzoAbbonamento = 35;
        }

        $prezzoIniziale = $prezzoAbbonamento;


        //gestione sconto e pagamento
        $pagamento = $_GET['pagamento'];
        if($pagamento == 'mensile'){
            //non è necessario applicare sconti
        }else
            //sconto del 10%
            if($pagamento == 'bimestrale'){
                $sconto = ($prezzoAbbonamento*10) / 100;
                $prezzoAbbonamento = $prezzoAbbonamento - $sconto;
            
        }else
            //sconto del 15%
            if($pagamento == 'trimestrale'){
                $sconto = ($prezzoAbbonamento*15) / 100;
                $prezzoAbbonamento = $prezzoAbbonamento - $sconto;

            
        }else
            //sconto del 20%
            if($pagamento == 'annuale'){
                $sconto = ($prezzoAbbonamento*20) / 100;
                $prezzoAbbonamento = $prezzoAbbonamento - $sconto;
            
        }
        ?>
    <div class = "w-75 mx-auto my-auto">
        <table class="table table-Light">
        <tr>
            <th colspan="3"><H2 class = "text-danger">DATI INSERITI NEL FORM</H2></th>
            <th colspan="1"><H2 class = "text-danger">RISPOSTA DAL SERVER</H2></th>
        </tr>
        <tr>
            <th>Nome</th>
            <th>Età</th>
            <th>Pagamento</th>
            <th colspan="1">PREZZO SCONTATO:</th>
        </tr>
        <tr colspan="3">
            <?php   
                echo "<td> $nome </td>";
                echo "<td> $eta </td>";
                echo "<td> $prezzoIniziale </td>";
                echo "<td> $prezzoAbbonamento </td>"
            ?>
        </tr>
        </table>
        </div>
      
       

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>