<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atv 02-05</title>
</head>
<body>
<form method="post" action="pagina2.php">
  <label for="nome">Nome</label>
  <input type="text" name="nome">
  <br> <label for="email">Email</label>
  <input type="text" name="email">
  <br>
  Assunto: <br>
  <select name="assunto">
    <option>Dúvidas</option>
    <option>Críticas</option>
    <option>Sugestões</option>
  </select>
  <br>
  Mensagem: <br>
  <textarea name="msg"></textarea>
  <br>
  <button type="submit">Enviar</button>
</form>
</body>
</html>
