<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $msg = $_POST['msg'];
  $texto ="Nome: $nome.\n";
  $texto .="Email: $email.\n";
  $texto .="Assunto: $assunto.\n";
  $texto .="Mensagem: $msg.\n";
  $para = 'luizc.mascarenhas@outlook.com';
  $titulo = "Contato do Site - $assunto";
  if(mail($para,$titulo,$texto)){
    echo "Feedback enviado com sucesso.";
  }
  else{
    echo "Erro ao enviar feedback";
  }
}
?>

