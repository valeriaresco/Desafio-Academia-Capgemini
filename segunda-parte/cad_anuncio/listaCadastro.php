<!-- incluindo o cabeçalho da pagina-->
<?php include("cabecalho.php");?>

<!-- incluindo paginas de logica-->
<?php include("adicionaCadastro.php");?>
<?php include("logicaCalculo.php");?>

	<!-- titulo da pagina -->
    <h3>Anúncio Cadastrado</h3>

	<!-- tabela mostrando o resultado do calculo-->
	<table class="tab-lista">
	<tr >
		<td>Valor total investido:</td>
		<td><?php echo $val_tot_investido?></td>
	</tr>
	 
	<tr>
		<td>Quantidade máxima de visualizações:</td>
		<td><?php echo $tot_visualizacao?></td>
	</tr>
	 <tr>
		 <td>Quantidade máxima de cliques:</td>
		 <td> <?php echo $tot_cliq?></td>
	 </tr>

	 <tr>
		 <td>Quantidade máxima de compartilhamentos:</td>
		 <td><?php echo $tot_comp?></td>
	 </tr>

	</table>

	<!-- Final da tabela -->

	<!-- botao de voltar para a pagina de cadastro-->
	<a href="index.php">Voltar</a>


    <!-- incluindo o rodape da pagina-->
    <?php include("rodape.php");?>