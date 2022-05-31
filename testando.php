<script>
var p1 = "success";


const fpPromise = import('https://fpcdn.io/v3/Xhk2W83F3F8jStNRz99k')
    .then(FingerprintJS => FingerprintJS.load())
    
  // Get the visitor identifier when you need it.
  fpPromise
    .then(fp => fp.get())
    .then( Result  => {
     

      // This is the visitor identifier:
      const visitorId =  Result.visitorId;
    
      

 
      console.log(visitorId)
    })



<?php
echo "<script>document.writeln(visitorId);</script>";
?>