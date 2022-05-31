<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	
	
	
	<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>ID</th>
            <th>IP</th>
            <th>Data</th>
            <th>Hora</th>
           
        </tr>
    </thead>

    <tbody>
        <?php
            $con = new mysqli("localhost","root", "", "sistema");

            $execItems = $con->query("SELECT Id, IP, Data, Hora,  FROM `visitas` WHERE Id BETWEEN 1 AND 20 ");

            while($infoItems = $execItems->fetch_array()){
                echo    "
                            <tr>
                                <td>".$infoItems['Id']."</td>
                                <td>".$infoItems['IP']."</td>
                                <td>".$infoItems['Data']."</td>
                                <td>".$infoItems['Hora']."</td>
                              
                            </tr>
                        ";

            } return false;
        ?>
    </tbody>
</table>
	
</body>
</html>