<?php 
	require 'functions.php';

	
	if (!empty($_POST['tipo']) && !empty($_POST['nome']) && !empty($_POST['qtd']) && !empty($_POST['preco']) && !empty($_POST['tipo_transac'])) {

		if (!is_numeric($_POST['qtd']) or !is_numeric($_POST['preco'])) {
			
			echo "<script>alert('Apenas números para quantidade e preco!');</script>";
			echo "<script>window.history.back();</script>";			
			
		} else {
			
			$merchant = [
			  'tipo'		  => "'{$_POST['tipo']}'",
			  'nome'		  => "'{$_POST['nome']}'",
			  'quantidade'    => $_POST['qtd'],
			  'preco'		  => $_POST['preco'],
			  'tipo_transac'  => "'{$_POST['tipo_transac']}'"
		    ];

		insertMerchant($merchant);			

		}
	} else {

		echo "<script>alert('Preencha todos os campos corretamente!');</script>";
		echo "<script>window.history.back();</script>";
		
	}

		
	

 ?>