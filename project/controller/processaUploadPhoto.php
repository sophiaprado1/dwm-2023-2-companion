<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
<?php
   require "../model/Data.php";
   $data = new data();
   $arquivo = $_FILES['picture__input']['name'];

   $_UP['pasta'] = '../view/img/';
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = true;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['picture__input']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}
			
			//Faz a verificação da extensao do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['picture__input']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PHP/dwm-2023-2-companion/project/view/Adm/view/cadUsers.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extensão inválida.\");
					</script>
				";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['picture__input']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PHP/dwm-2023-2-companion/project/view/Adm/view/cadUsers.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = "mural".'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['picture__input']['name'];
				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['picture__input']['tmp_name'], $_UP['pasta']. $nome_final)){
                    rename($_UP['pasta'].$nome_final, $_UP['pasta']."mural.jpg");
					//Upload efetuado com sucesso, exibe a mensagem
					$data->registerPhotos($nome_final);
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PHP/dwm-2023-2-companion/project/view/Adm/view/cadUsers.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem cadastrada com Sucesso.\");
						</script>
					";	
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PHP/dwm-2023-2-companion/project/view/Adm/view/cadUsers.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
				}
			}
			
			
		?>
		
	</body>
</html>