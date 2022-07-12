<?php
include("Connect.php");
 
 $IDF=$_POST['IDF'];

 $idsa=$_POST['idsa'];
 $libelle=$_POST['libelle'];
 $location=$_POST['location'];
 $qte=$_POST['qte'];
 $ts=$_POST['ts'];
 $nomp=$_POST['nomp'];
 $categorie=$_POST['categorie'];
 $note=$_POST['note'];
 



 $sql1="insert into produit (Nomp,Categorie,IDS)
 values ('$nomp','$categorie','$idsa')";
 $resut=mysqli_query($con, $sql1);


 $sql0="SELECT IDP FROM `produit` ORDER BY IDP DESC LIMIT 1;";
 $resut=mysqli_query($con, $sql0);
 if($resut){
    while($row=mysqli_fetch_assoc($resut)){
        $idp=$row['IDP'];
    }
 }

 
 $sql="insert into stock (IDS,Libellé,Location,TypeStock,IDP,Quantite,IDF)
 values ('$idsa','$libelle','$location','$ts','$idp','$qte','$IDF')";
 $result=mysqli_query($con, $sql);


     $ins="insert into journal ( `Qantite`, `type`, `IDF`, `Date_Entrée`, `Note`) 
     values('$qte','input','$IDF','SELECT CURRENT_TIMESTAMP()','$note')";
     $res=mysqli_query($con, $ins);
     
         echo 'Success';
         
    
 







?>