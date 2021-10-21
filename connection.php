<?php
       $connect=mysqli_connect("localhost","username","password","login");
        if (mysqli_connect_errno()){
          print "Error".$connect->error;
          exit();
        }
          //selecting the database
            $db = $connect->select_db("login");
              if ($db){
              	//print"connected";
              } 
 <?