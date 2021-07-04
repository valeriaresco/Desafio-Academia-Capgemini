<!-- chamando a pagina de adicina cadastro para utilizar as variaveis-->
<?php include("adicionaCadastro.php");?> 


<?php

//definindo variáveis para o cálculo de visualizações, cliques e compartilhamentos
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

$val_tot_investido = $diferenca_data*$investimento; //calculando o total investido no anuncio pelo total de dias

//inicio do cálculo de visualizações

$tot_visu_inicial = $val_tot_investido * $visu_sem_comparilhar; //calculando visualizações por dinheiro investido
$cliq_inicial = $tot_visu_inicial * 0.12; //calculando quantidade de cliques por visualizações inicial
$comp_inicial = round($cliq_inicial) * 0.15; //calculando quantidade de compartilhamento por visualizações inicial
$novas_visu = round($comp_inicial) * $comparilhamento; //calculando qtde de novas visu por compartilhamento nas visu iniciais
$novo_cliq = $novas_visu * 0.12; //calculando quantidade de cliques por visualizações após novas visualizações
$tot_cliq = round($cliq_inicial+$novo_cliq); //total de cliques nas visualizações iniciais mais novas visualizações
$novo_comp = round($novo_cliq * 0.15); //calculando quantidade de compartilhamento por visualizações após novos cliques
$tot_comp = round($comp_inicial+$novo_comp); //total de compartilhamneto inicial mais novos compartilhamentos
$tot_visu_comp = round($comp_inicial+$novo_comp)*$comparilhamento; //total de visualizações por total de compartilhamento
$tot_visualizacao = $tot_visu_inicial + $tot_visu_comp; //total de visualizações no anúncio

//final do cálculo
?>

