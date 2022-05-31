








<script>
  // Initialize the agent at application startup.

  const fpPromise = import('https://fpcdn.io/v3/Xhk2W83F3F8jStNRz99k')

    .then(FingerprintJS => FingerprintJS.load());
    var resultado;
  // Get all browser information.
  fpPromise
    .then(fp => fp.get({ extendedResult: true }))
      .then(result => console.log(resultado=result));
    




</script>

   

	







<?php


include("ClassVisitas.php");

$MAC = exec('getmac');
$MAC = strtok($MAC, ' ');
$Visitas= new ClassVisitas();
$Visitas->VerificaUsuario();

echo "MAC address of client is: $MAC";


?>

	<script>
var p1 = "success";
</script>

<?php
echo "<script>document.writeln(p1);</script>";
?>



