<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ES26PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
  <div class="card w-75 mx-auto my-auto text-center mt-2">
  <div class="card-body">
    <h1>FORM PALESTRA</h1>
  </div>
</div>

<div class="w-50 mx-auto my-auto  mt-2">

<form action="./action.php">
    <div class="mb-3">
        <label for="nome" class="form-label"><span>Nome</span></label>
        <input type="text" class="form-control" name="nome" >
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Età</label>
        <input type="number" name="eta" min="1" max="150">
      </div>

    <div class="w-50 my-auto my-auto">
      <input type="radio"  name="pagamento" value="mensile">
      <label for="mensile">MENSILE</label><br>
      <input type="radio"  name="pagamento" value="bimestrale">
      <label for="bimestarle">BIMESTRALE</label><br>
      <input type="radio"  name="pagamento" value="trimestrale">
      <label for="trimestrale">TRIMESTRALE</label><br>
      <input type="radio" name="pagamento" value="annuale">
      <label for="annuale">ANNUALE</label>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Invia</button>
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>