<?php
   require 'assets/vendor/autoload.php';
   //connect to MongoDB Database
   $databaseConnection = new MongoDB\Client;
   //connecting to specific database in mongoDB
   $myDatabase = $databaseConnection->myDB;
   //connecting to our mongoDB Collections
   $userCollection = $myDatabase->users;
   $userEmail = $_SESSION['email'];
   $data = array(
       "email" => $userEmail,
   );
   users->insert($document);
   echo "successfully";
   $insert=$userCollection->insertOne(['id'=>'1','name'=>'andrews']);
   printf("inserted %d docs", $insert->getInsertedCount());
   var_dump($insert->getInsertedId());
   ?>