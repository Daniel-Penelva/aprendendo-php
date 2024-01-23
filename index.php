Olá Mundo!!!
<?php
	echo 'Bem vindo php!!!';
	echo "<h1>Bem Vindo com título H1</h1>";
	
	print '<p>Imprimindo com print</p>';
	print "<small>Imprimindo com print com aspas duplas</small> <br />";
	
	// Comentário
	# Comentario
	/* Comentário */
	
	/* require:
	Se você utiliza require para incluir um arquivo, o PHP considera o arquivo incluído como vital para o funcionamento do script. Se o PHP não conseguir 
	encontrar ou incluir o arquivo, ele emitirá um erro fatal e interromperá a execução do script. A utilização de require é recomendada quando o arquivo a ser 
	incluído contém código vital, e a execução do script não pode continuar sem ele.
	*/
	echo "<br /> <h1>Utilizando require</h1>";
	require 'configuracao.php';
	echo 'Este código será executado somente se o configuracao.php for incluído com sucesso.';
	
	/* include:
	Por outro lado, include é menos restritivo. Se o PHP não conseguir encontrar ou incluir o arquivo usando include, ele emitirá um aviso, mas o script 
	continuará a ser executado. O uso de include é mais adequado quando o arquivo a ser incluído contém código que é útil, mas não é estritamente necessário 
	para a execução do script.
	*/
	echo "<h1>Utilizando include</h1>";
	include 'configuracao.php';
	echo 'Este código será executado independentemente de o configuracao.php ser incluído com sucesso ou não.';
