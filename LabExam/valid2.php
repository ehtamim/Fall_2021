<?php 
 include 'Db.php';
 $university="";
 $degree="";
 $major="";
 $result="";
 $passing="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_REQUEST["university"])){
                $university=$_REQUEST["university"];
            }
            else
             {
                 echo "please input here";
             }
             if(!empty($_REQUEST["degree"])){
                 $degree=$_REQUEST["degree"];
             }
             else {
                 echo  "input <br>";
             }
              if(!empty($_REQUEST["major"]))
              {
                  $major=$_REQUEST["major"];
              }
              else{
                   echo  "fill it <br>";
              }
              if(!empty($_REQUEST["result"])){
                      $result=$_REQUEST["result"];
              }
              else 
              {
                  echo "Type here <br>";
              }
              if(!empty($_REQUEST["passing"])){
                   $passing=$_REQUEST["passing"];
              }
              else 
              {
                  echo  "type here<br>";
              }
 }

?>