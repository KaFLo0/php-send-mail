<?php

class Mensagem {
  private $destinatario = null;
  private $assunto = null;
  private $mensagem_email = null;

  public function __get($name) {
    return $this->$name;
  }

  public function __set($name, $value) {
    $this->$name = $value;
  }

  // Valida se algum dos campos está vazio, e se o email do destinatario é válido
  public function mensagemValida(): bool {
    if(empty($this->destinatario) || empty($this->assunto) || empty($this->mensagem_email)) {
      return false;
    } else if(!filter_var($this->destinatario, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }
}

$mensagem = new Mensagem();

$mensagem->__set('destinatario', $_POST['destinatario']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem_email', $_POST['mensagem_email']);

if($mensagem->mensagemValida()) {
  echo 'Mensagem é válida';
} else {
  echo 'Mensagem é inválida';
}

?>