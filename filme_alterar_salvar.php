
<?php
    include( "includes/conexao.php" );

	$filme_id = $_POST["filme_id"];
    $filme_nome = $_POST["filme_nome"];
    $filme_data = $_POST["filme_data"];
    $filme_valor = $_POST["filme_valor"];
    $filme_diretor = $_POST["filme_diretor"];

	$filme_valor = str_replace(",",".", $filme_valor);
	
	$alteraFilme = mysqli_query ($conectaBanco, "UPDATE filmes SET filme_nome = '".$filme_nome."',
																  filme_data = '".$filme_data."',
																  filme_valor  = '".$filme_valor."',
																  filme_diretor  = '".$filme_diretor."' 
															WHERE filme_id = '".$filme_id."' ") or die (mysql_error());	

header ('Location: index.php?status=alterado&name='.$filme_nome.''); //para a voltar pra pagina de cadastro.

?>
                   