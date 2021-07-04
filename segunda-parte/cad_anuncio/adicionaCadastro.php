<?php

	//transforma a data em formato brasileiro
	date_default_timezone_set('America/Sao_Paulo');
	//inicializando variaveis de data com 0
	$data_i=0;
	$data_t=0;

	//definindo variavel para calculo da diferença entre as datas cadastradas
	$diferenca_data="";

	//definindo variavel para calculo de valor total investido
    $val_tot_investido="";

	//verificando se a variavel "nome" foi definida
	if (isset( $_POST['nome']) === true){
	$nome = $_POST['nome'];
	} else {
	$nome = false;
	};

	//verificando se a variavel "cliente" foi definida
	if (isset( $_POST['cliente']) === true){
		$cliente = $_POST['cliente'];
		} else {
		$cliente = false;
		};
	
	//verificando se a variavel "data_i" foi definida
	if (isset( $_POST['data_i']) === true){
		$data_i = $_POST['data_i'];
	} else {
		$data_i = false;
	};

	//verificando se a variavel "data_f" foi definida
	if (isset( $_POST['data_t']) === true){
		$data_t = $_POST['data_t'];
	} else {
		$data_t = false;
	};

	//verificando se a variavel "investimento" foi definida
	if (isset( $_POST['investimento']) === true){
		$investimento = $_POST['investimento'];
	} else {
		$investimento = false;
	};
	
	//adicionando as variaveis em cookies
	setcookie('cookie[nome]',$nome, time()+43800);
	setcookie('cookie[cliente]',$cliente, time()+43800);
	setcookie('cookie[data_i]',$data_i, time()+43800);
	setcookie('cookie[data_t]',$data_t, time()+43800);
	setcookie('cookie[investimento]',$investimento, time()+43800);

//converte as datas para segundos
$di = strtotime($data_i); 
$dt = strtotime($data_t);

//verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
$diferenca_data = ($dt - $di) /86400;

// caso a data 2 seja menor que a data 1, multiplica o resultado por -1 para o resuldado não ser negativo
if($diferenca_data < 0){
  $diferenca_data *= -1;
};

?>