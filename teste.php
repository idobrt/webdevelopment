<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Catálogo de peças oficina</title>

</head>
<body>
	<h1>Catálogo de peças</h1>
	
	<?php
	echo '<p>Ordem processada em';
	echo date('H:i,jS F');
	echo '</p>';
	?>
	<h2>Resultado</h2>
	<?php
	define('PNEU_VALUE', 300);
	define('OLEO_VALUE', 20);
	define('VELAS_VALUE', 15);
	define('FAROL_VALUE', 150);
	define('IMPOSTO', 0.10);$
   /*Variável que executa um comando shell
	 o operador ´ ´ é chamado operador de execução
   */
	$shell=`ls -la`;
	if($_POST['oilqtd']!=0){
		echo '<font color = red>';
	}
	/*crio uma variável que recebe o valor do formulário*/
	$farol= $_POST['farolqtd']+$_POST['oilqtd'];
	echo '<p>';
	echo $farol.' farol + óleo </p>';/*aqui é um mero teste para ver a impressão*/
	/*Código de enoque isso é para validar se os campos foram preenchidos. */
		if( isset($_POST['tireqty']) && isset($_POST['oilqtd']) && isset($_POST['velasqtd']) ) {
			printf("<br />Total de pneus: %s", $_POST['tireqty']);
			printf("<br />Total de óleo: %s", $_POST['oilqtd']);
			printf("<br />Total de velas: %s", $_POST['velasqtd']);
			printf("<br/> Total de faróis: %s",$_POST['farolqtd']);
			/*Tranquilamente podemos fazer as operações confrome abaixo*/
			echo "<br/>Total: ",$total=$_POST['oilqtd']*OLEO_VALUE+ $_POST['tireqty']*PNEU_VALUE+ $_POST['velasqtd']*VELAS_VALUE+$_POST['farolqtd']*FAROL_VALUE;
			echo "<br/>Imposto: ",$com_taxa=IMPOSTO*($_POST['oilqtd']*OLEO_VALUE+ $_POST['tireqty']*PNEU_VALUE+ $_POST['velasqtd']*VELAS_VALUE+$_POST['farolqtd']*FAROL_VALUE);
			echo "<br/>Valor+taxa=",$com_taxa+$total;
			echo "<br/>Tipo da variável total: ",gettype($total);
			echo "<br/>Mudando o tipo de total: ",settype($total, string);
			echo "<br/>Tipo da variável total: ",gettype($total);
			echo "<br/> Função empty: ", empty($total);
			echo "<br/> Função isset(var)", isset($total);
			switch ($_POST['find']) {
				case 'a':
					echo "<br/>O cliente nos achou pela internet";
					break;
				case 'b':
					echo "<br/>O cliente é regular";
					break;
				case 'c':
				    echo "<br/>O cliente recebeu indicação de terceiros.";
					break;
				
				default:
					echo "<br/>O cliente não informou como nos achou.";
					break;
			}
		

		} else {
			echo "Todos os campos devem ser preenchidos!";
		}
		
	?>
</body>
</html>