<!DOCTYPE html>
	<html>
		<head>
        <!--Adicionando título à página-->
			<title> Divulga Tudo</title>
			<meta charset="utf-8">
		</head>
		
		<body >
			
			<h1> Divulga Tudo</h1><br>
			<h2> Calcule a projeção de visualizações</h2>

			<!--Aqui começa o formulário da calculadora de projeções-->
				<form method="post">
						
				Valor que deseja investir R$: <input type="text" name="valor">
				<button type="submit" >Calcular</button>

				</form>
			<!--Aqui termina o formulário da calculadora de projeções-->

			<!--Aqui inicia a logica para o calculo de projeção de visualizações-->	
		<?php
			//variáveis para o cálculo
			$visu_sem_comparilhar=30;
			$tot_visu_inicial=0;
			$cliq_inicial=0;
			$comparilhamento=40;
			$comp_inicial=0;
			$novas_visu=0;
			$novo_cliq=0;
			$novo_comp=0;
			$tot_cliq=0;
			$tot_comp=0;
			$tot_visu_comp=0;
			$tot_visualizacao=0;

			//verificando se a variavel "valor" foi definida
			if (isset( $_POST['valor']) === true){
				$valor = $_POST['valor'];
			} else {
				$valor = false;
			}

			//verifica se o campo "valor" foi preenchido
			if ( $valor == "") {
			?>

			<!-- mensagem de erro para valor vazio -->
			<p>Insira um valor a ser investido!</p>	
			
			<!-- aqui inicia o calculo de vizualização -->
			<?php	
			} else { 
				$tot_visu_inicial = $valor * $visu_sem_comparilhar; //calculando visualizações por dinheiro investido
				$cliq_inicial = $tot_visu_inicial * 0.12; //calculando quantidade de cliques por visualizações inicial
				$comp_inicial = round($cliq_inicial) * 0.15; //calculando quantidade de compartilhamento por visualizações inicial
				$novas_visu = round($comp_inicial) * $comparilhamento; //calculando qtde de novas visualizações por compartilhamento nas visualizações iniciais
				$novo_cliq = $novas_visu * 0.12; //calculando quantidade de cliques por visualizações após novas visualizações
				$tot_cliq = round($cliq_inicial+$novo_cliq); //total de cliques nas visualizações iniciais mais novas visualizações
				$novo_comp = round($novo_cliq * 0.15); //calculando quantidade de compartilhamento por visualizações após novos cliques
				$tot_comp = round($comp_inicial+$novo_comp); //total de compartilhamneto inicial mais novos compartilhamentos

				//verificando se o anuncio foi compartilahdo mais de 4 vezes 
				if($tot_comp >= 4){ 
					$tot_comp=4;
					$tot_visu_comp = round($tot_comp)*$comparilhamento; //total de visualizações por total de compartilhamento
					$tot_visualizacao = $tot_visu_inicial + $tot_visu_comp; //total de visualizações no anúncio
				//final do cálculo
				}else{
				$tot_visu_comp = round($tot_comp)*$comparilhamento; //total de visualizações por total de compartilhamento
				$tot_visualizacao = $tot_visu_inicial + $tot_visu_comp; //total de visualizações no anúncio
				//final do cálculo
				}
			?>

			<!-- mostrando o resultado do calculo-->
			<p> 
			Projeção aproximada de visualizações: <?php echo round($tot_visualizacao)?><br>
			</p>

			<?php
			} //fechando o else
			?>

		</body>
</html>