<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fale Conosco - COALA</title>
	<link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="reset.css">
	
	<script>
		function validaform(form){
			if (form.nome.value == ""){
			alert("Preencha o campo nome corretamente.");
			form.nome.focus();
			return false;
			}
			if(form.sobrenome.value == ""){
				alert("Preencha o campo sobrenome");
				form.sobrenome.focus();
				return false;
			}
			  var filtro_mail=/^.+@.+\..{2,3}$/
		 if(!filtro_mail.test(form.email.value) || form.email.value == "")
		 {
		 alert("Preencha com um e-mail valido.");
		 form.email.focus();
		 return false;
		 }	
		if (form.comentario.value == ""){
			alert("Preencha o campo de mensagem.");
			form.comentario.focus();
			return false;
		}
			
	</script>
</head>
<body>
  <header>
	<?php
		include "cabecalho.php";	
	?>
  
  </header>

  <article>
    <div class="conteudo">
	<img alt="img-fale-conosco" src="_img/fale-conosco.png" id="imagem-falecon"/>
    <form onsubmit="return validaform(this);">
    	<table id="frmContato">
       	<tr>
        <td>Nome: <input type="text" name="nome" size="21" maxlength="150"/ placeholder="João"></td>
        </tr>
        <tr>
        <td>Sobrenome: <input type="text" name="sobrenome" size="15" maxlength="150" placeholder="Silva"/></td>
        </tr>
        <tr>
        <td>Email: <input type="text" name="email" placeholder="email@exemplo.com" size="15" maxlength="150" /></td>
        </tr>
        <tr>
        <td><textarea type="text" cols="50" rows="15" name="comentario" placeholder="Digite aqui sua mensagem..."></textarea></td>
        </tr>
        <tr>
        <td><input type="submit" value="Enviar" class="button"> &nbsp; <input type="reset" value="Limpar" class="button"></td>
        </tr>
       </table>
    </form>
        </div>
  </article>

  <footer>
	<?php
		include "rodape.php";
	?>
  </footer>
</body>
</html>