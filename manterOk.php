<?php
	$acao=$_POST['acao'];

	if ($acao == "Cancelar")
	{
		//break;
	}
	else
	{
		include 'conexao.php'; 

		$id=$_GET['id'];
		$nome=$_POST['nome'];
 
		switch ($acao) {
			case "Alterar":
				$sql = "UPDATE login SET 
						nome='$nome' 
						WHERE id='$id'";
				break;
			
			case "Excluir":
				$sql = "DELETE FROM login 
						WHERE id='$id'";
				break;	
		}
		$tabela = mysqli_query($conn,$sql) or die (mysqli_error());            
		
		mysqli_close($conn);
	}
	header("Location: usuarios.php");
?>
