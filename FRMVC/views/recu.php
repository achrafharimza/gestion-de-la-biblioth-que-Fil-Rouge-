<?php 
 
        $data = new UsersController();
		$inscription = $data->oneinscription();
        foreach( $inscription as $row )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">

    
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>


    <title>Document</title>
</head>
<body id="element" >


 <div style="background-color: black;"> <h2><span><img src="image/logo.png"></h2></div>
   
 <div>
    <span>
        num: 053535363728 <br>
        email: bibliotheque@gmail.com <br>
        addresse: 14 Av. Zerktouni, Safi <br>
    </span>
    <br>
</div>
	       <table  class="table table-bordered border-dark text-center">
		<tr>
             <th class="text-center" colspan="4">recu d'inscription</th>
    
    
    </tr>
    	<tr >
             <th  class="text-center" colspan="1">code_inscription</th>
              <th class="text-center" colspan="1">cni</th>
               <th class="text-center" colspan="1">à partir de</th>
                <th class="text-center" colspan="1">jusqu'à</th>
    
    
    </tr>
        
		<tr>
		  <td> <?php  echo  $row['code_inscription'];?></td>
          <td><?php  echo  $row['cni'];?></td>
		  <td><?php  echo  $row['debut'];?></td>
		
        <td><?php  echo  $row['fin'];?></td>
		
		
	 </table>
   

     
     <div style="padding: 10px; background: black; text-align: center; color: white;"> <span >www.bibliotheque.com</span> </div>
   







     <script >

var element = document.getElementById('element');
// html2pdf(element);

html2pdf(element, {
  margin:       10,
  filename:     'recu.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
  jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
  
});




 setTimeout(window.close, 200);






//          function imprimer(divName) {
// //       var printContents = document.getElementById(divName).innerHTML;    
// //    var originalContents = document.body.innerHTML;      
// //    document.body.innerHTML = printContents;     
//    window.print();    
   
// //    document.body.innerHTML = originalContents;



//    }

// function imp(){
//     const doc = new jsPDF();
// // var HTMLelement = $(".messi").html();

// // doc.fromHTML(HTMLelement);


// doc.text("Hello world!", 10, 10);
// doc.save("a4.pdf");

// }


     </script>
   


</body>
</html>