<html>
<head>
	<?php	include ("includes/head.html");	?>
</head>
<body>
<div class="container-fluid">
    <br>
    <br>
    <br>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3>Alteração</h3>
		</div>
	</div>
	<?php
	$filme_id = $_GET["id"];
	
	include( "includes/conexao.php" );
	
	$buscasql = mysqli_query($conectaBanco, "SELECT * FROM filmes WHERE filme_id = ".$filme_id." "); //buscando a tabela, assim, todas inf, vão para a variavel $buscasql.

	$resultadosql = mysqli_fetch_array($buscasql); // percorrer as variaveis com as info.  
	$filme_nome = $resultadosql["filme_nome"];
	$filme_data = $resultadosql["filme_data"];
	$filme_valor = $resultadosql["filme_valor"];
	$filme_diretor = $resultadosql["filme_diretor"];
	
	$filme_valor = str_replace(".",",", $filme_valor);
	?>
			
   <!-------------------------------------------FORMULARIO-CRIA TABELA------------------------------------------------------------>
    <div class="row">
        <form action="filme_alterar_salvar.php" method="post"> <!--Formulario para incluir dados -->  
            <div class="col-md-2 col-md-offset-1">
				<input type="hidden" name="filme_id" value="<?php echo $filme_id; ?>">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">Nome: </span>
                      <input type="text" name="filme_nome" class="form-control" aria-describedby="sizing-addon3" value="<?php echo $filme_nome; ?>"> <!--name, tem que ser igual ao nome da coluna do banco-->
                </div>

            </div>
            
            <div class="col-md-2 ">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">data: </span>
                      <input type="date" name="filme_data" class="form-control" aria-describedby="sizing-addon3" value="<?php echo $filme_data; ?>">
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">valor: </span>
                      <input type="text" name="filme_valor" class="form-control" aria-describedby="sizing-addon3" value="<?php echo $filme_valor; ?>"> 
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">diretor: </span>
                      <input type="text" name="filme_diretor" class="form-control" aria-describedby="sizing-addon3" value="<?php echo $filme_diretor; ?>"> 
                </div>
            </div>
            <div class="col-md-2 ">
                <button type="submit" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar
                </button>
            </div>
        </form>
		
    </div>
</div>
<script>
</script>	
</body>
</html>