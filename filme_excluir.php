
<?php
include( "includes/conexao.php" );

$filme_id = $_GET['id']; //Criar um GET e colocar a referencia e do ID.

$deletafilme = mysqli_query ($conectaBanco, "DELETE FROM filmes WHERE filme_id = '".$filme_id."' ");	//Criar uma variavel para deletar...

header ('Location: index.php?status=excluido&name='.$filme_nome.''); //para a voltar pra pagina de cadastro.

?>
                   