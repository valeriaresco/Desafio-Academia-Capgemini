<!-- chamando o cabeçalho do sistema-->
<?php include("cabecalho.php");?> 

	<!-- titulos da pagina -->
    <h2> Divulga Tudo</h2>
    <h3> Cadastre aqui o anuncio!</h3>

	
<div>
	<!--Aqui começa o formulairo de cadastro de anuncio -->
    <form method="post" action="listaCadastro.php">
		<table>
		<tr>	
			<td>Nome do Anunico</td>
			<td><input type="text" name="nome"></td>
		<tr>

		<tr>
			<td>Cliente</td>
		 	<td><input type="text" name="cliente"></td>
		</tr>

		<tr>
			<td>Data do inicio</td>
		 	<td><input type="date" name="data_i" pattern="dd/MM"></td>
		</tr>

		<tr>
			<td>Data do do termino</td>
		 	<td><input type="date" name="data_t"></td>
		</tr>

		<tr>
			<td>Investimento por dia</td>
		 	<td><input type="text" name="investimento"></td>
		</tr>

		<tr>
		<td><button type="submit" >Cadastrar</button></td>
		</tr>
		</table>

	</form>
	<!-- Aqui termina o formulario-->

</div>

	
	<!-- chamando o rodape do sistema-->
    <?php include("rodape.php");?>
