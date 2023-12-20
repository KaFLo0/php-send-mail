<!DOCTYPE html>
<html>

<head>
  <!-- Essential metadatas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/logo.png">
  <!-- Style -->
  <link rel="stylesheet" href="./style/bootstrap4/css/bootstrap.min.css">

  <title>Send Mail</title>
</head>

<body>

  <div class="container">
    <div class="py-3 text-center">
      <img src="./assets/logo.png" alt="Logo">
      <h2>Send Mail</h2>
      <p class="lead">Seu app de envio de e-mail particular!</p>
    </div>

    <div class="row">
      <div class="row-md-12">
        <div class="card-body font-weight-bold">
          <form action="">
            <div class="form-group">
              <label for="para">Para</label>
              <input type="text" class="form-control" id="para" placeholder="placeholder@email.com.br">
            </div>

            <div class="form-group">
              <label for="assunto">Assunto</label>
              <input type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
            </div>

            <div class="form-group">
              <label for="mensagem">Mensagem</label>
              <textarea id="mensagem" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>