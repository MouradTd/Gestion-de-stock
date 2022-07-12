<?php
include("Connect.php");
 
 $IDF=$_POST['IDF'];

 $idsa=$_POST['idsa'];
 
 $qte=$_POST['qte'];

 $note=$_POST['note'];
 






 $sql1T="update stock SET Quantite = Quantite +'". $qte."' WHERE Libellé ='".$idsa."'  ;";
 $resutT=mysqli_query($con, $sql1T);

 


     $ins="insert into journal ( `Qantite`, `type`, `IDF`, `Date_Entrée`, `Note`) 
     values('$qte','input','$IDF','SELECT CURRENT_TIMESTAMP()','$note')";
     $res=mysqli_query($con, $ins);
     
         echo 'Success';
         
    
 







?>