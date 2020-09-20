<!DOCTYPE html>

<html>
<head>
	<title>Pousada</title>
	<meta charset="utf-8"/>
	 <link rel="stylesheet" href="estilo.css" />
</head>

<body>
<div class="container">
    <nav id="menu">
        <ul>
            <li><a href="cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="cadastroQuartos.php">Cadastro de Quartos</a></li>
            <li><a href="quartos.php">Quartos</a></li>
            <li><a href="cadastroReserva.php">Formulário Reservas</a></li>
            <li><a href="reservas.php">Reservas</a></li>
        </ul>
    </nav>
</div>
<style>

.container{
	padding-bottom: 50px; 
}
#menu{

    display: flex;
    justify-content: center;
    width: 100%;
    background-color: white;
    font-family: 'Arial';
    

}
#menu ul{
    list-style: none;
    position: relative;

}

#menu ul li{
    width: 200px;
    float: left;
}

#menu a{
    padding: 15px;
    display: block;
    text-decoration: none;
    text-align: center;
    background-color: grey;
    color: black;
    font-size: large;
}
#menu a:hover{
    background-color: lightgrey;
    color: black;
}



    
}

</style>	
 
</html>

