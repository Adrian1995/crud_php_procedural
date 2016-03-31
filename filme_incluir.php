
<?php
    include( "includes/conexao.php" );

    $filme_nome = $_POST["filme_nome"];
    $filme_data = $_POST["filme_data"];
    $filme_valor = $_POST["filme_valor"];
    $filme_diretor = $_POST["filme_diretor"];

	$filme_valor = str_replace(",",".", $filme_valor);
   
    $inclui_filme = mysqli_query ($conectaBanco, "INSERT INTO filmes ( 
																		filme_nome,
																		filme_data,
																		filme_valor,
                                                                        filme_diretor)
															VALUES	( '$filme_nome', 
																	  '$filme_data',
																	  '$filme_valor',
																	  '$filme_diretor')") or die (mysql_error());		

header ('Location: index.php?status=incluido&name='.$filme_nome.''); //para a voltar pra pagina de cadastro.

?>
                   