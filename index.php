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
			<?php
			if(!empty($_GET['status'])) //Verifica se foi passado uma variavel por GET
				{
				$status = $_GET['status'];
				$name = $_GET['name'];
				
				if($status == "incluido")
				{
					echo "<div class='alert alert-success alert-dismissible' role='alert'>
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							  O filme ".$name.", foi incluído com sucesso!
							</div>";
				}
				else if($status == "alterado")
				{
					echo "<div class='alert alert-warning alert-dismissible' role='alert'>
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							  O filme ".$name.", foi incluído com sucesso!
							</div>";
				}
				else if($status == "excluido")
				{
					echo "<div class='alert alert-danger alert-dismissible' role='alert'>
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							  O filme ".$name.", foi incluído com sucesso!
							</div>";
				}
				
			
				}
			?>
		</div>
	</div>
	
	<br>
    <br>
    <br>
				
   <!-------------------------------------------FORMULARIO-CRIA TABELA------------------------------------------------------------>
    <div class="row">
        <form action="filme_incluir.php" method="post"> <!--Formulario para incluir dados -->  
            <div class="col-md-2 col-md-offset-1">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">Nome: </span>
                      <input type="text" name="filme_nome" class="form-control" aria-describedby="sizing-addon3"> <!--name, tem que ser igual ao nome da coluna do banco-->
                </div>

            </div>
            
            <div class="col-md-2 ">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">data: </span>
                      <input type="date" name="filme_data" class="form-control" aria-describedby="sizing-addon3">
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">valor: </span>
                      <input type="text" name="filme_valor" class="form-control" aria-describedby="sizing-addon3"> 
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="input-group input-group-sm">
                      <span class="input-group-addon" id="sizing-addon3">diretor: </span>
                      <input type="text" name="filme_diretor" class="form-control" aria-describedby="sizing-addon3"> 
                </div>
            </div>
            <div class="col-md-2 ">
                <button type="submit" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar
                </button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    
    <div class="row">
		<div class="col-md-10 col-md-offset-1">
            
            
            
                    <table class="table">
                        <tr> 
                            <th>Id</th>
                            <th>nome</th>
                            <th>data</th>
                            <th>valor</th>
                            <th>diretor</th>
							<th></th>
                        </tr>

                        <?php
                         include( "includes/conexao.php" );


                        $buscasql = mysqli_query($conectaBanco, "SELECT * FROM filmes"); //buscando a tabela, assim, todas inf, vão para a variavel $buscasql.


                            while($resultadosql = mysqli_fetch_array($buscasql)) // percorrer as variaveis com as info.  
                                {
                                    $filme_id = $resultadosql["filme_id"]; // pega as informações
                                    $filme_nome = $resultadosql["filme_nome"];
                                    $filme_data = $resultadosql["filme_data"];
                                    $filme_valor = $resultadosql["filme_valor"];
                                    $filme_diretor = $resultadosql["filme_diretor"];

                                // EXEMPLO: echo " ID: ".$filme_id."nome: ".$filme_nome." data: ".$filme_data."Valor: ".$filme_valor."Diretor: ".$filme_diretor."<br/>";
                                
                                $filme_valor = str_replace(".",",", $filme_valor);
								
                                $filme_data = new DateTime($filme_data);
                                

                                echo "<tr>";
                                    echo "<td> ".$filme_id."</td>";
                                    echo "<td> ".$filme_nome."</td>";
                                    echo "<td> ". date_format($filme_data, 'd/m/Y ')."</td>";
                                    echo "<td> ".$filme_valor."</td>";
                                    echo "<td> ".$filme_diretor."</td>";
									echo "<td>"; 
									echo "<a href='filme_excluir.php?id=".$filme_id."'>
											<button type='button' class='btn btn-default'>
												<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
											</button>
										  </a>";
									echo "<a href='filme_alterar.php?id=".$filme_id."'>
											<button type='button' class='btn btn-default'>
												<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
											</button>
										  </a>";
									echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
            
            
            
		</div>
	</div>
</div>
<script>
</script>	
</body>
</html>