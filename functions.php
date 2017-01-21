<?php

//conexão com o banco de dados
function connection() {

	try {

		 $con = new PDO('mysql:host=127.0.0.1;dbname=valemobi', 'root', '');

	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}

	return $con;
}

//simulação de arranjo de mercadorias recebido da view de formulário
$merchant = [
			  'tipo'		  => "'Fisico'",
			  'nome'		  => "'Tenis Nike Shox'",
			  'quantidade'    => 10,
			  'preco'		  => 25,
			  'tipo_transac'  => "'Compra'"
		    ];

//funcao que ira executar insercao de mercadorias no banco de dados
function insertMerchant($receiverMerchant) {

	$con = connection();

	$columns = implode(',',array_keys($receiverMerchant));
	$values  = implode(',',array_values($receiverMerchant));
	
    $query = "INSERT INTO mercadorias ({$columns}) VALUES ({$values})";
    $exec  = $con->query($query);	

    if ($exec) {

    	echo 'mercadoria inserida com sucesso';

    } else {

		print_r($con->errorInfo());
		die($query);

  	}

}

//lista mercadorias
function listTransactions() {
	
	$con = connection();	
	
	$query = "SELECT * FROM mercadorias ORDER BY cod DESC";
    $row   = $con->prepare($query);
    $row->execute();

    return $row->fetchAll();

}

?>