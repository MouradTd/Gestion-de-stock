<?php
 include("Connect.php");

   $deT=$_POST['deT'];
   $idsaT=$_POST['idsaT'];
   $idpT=$_POST['idpT'];
   $qteT=$_POST['qteT'];
   $noteT=$_POST['noteT'];

//kin9es mn stock li 3ati
$sql1T="update stock SET Quantite = Quantite -'". $qteT."' WHERE Libellé ='".$deT."' and IDP='".$idpT."' ;";
 $resutT=mysqli_query($con, $sql1T);

 //kizide l stock li wakhed
 $sql2T="update stock SET Quantite = Quantite + '".$qteT ."' WHERE Libellé ='".$idsaT."' and IDP='".$idpT."' ;";
 $resultT=mysqli_query($con, $sql2T);


 $insT="insert into journal ( `Qantite`, `type`, `Date_Entrée`, `Note`) 
 values('$qteT','transfert','SELECT CURRENT_TIMESTAMP()','$noteT')";
 $resT=mysqli_query($con, $insT);
 
     echo 'Success';














?>