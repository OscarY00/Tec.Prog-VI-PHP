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
            <li><a href="cliente.php">Clientes</a></li>
            <li><a href="reserva.php">Reservas</a></li>
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

