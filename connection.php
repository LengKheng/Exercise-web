<?php  
        $dsn="mysql:host=localhost;dbname=db;port=3306";
        $user="root";
        $password="";
       
        try {
            $connection=new PDO($dsn,$user,$password);
            echo "connection is connected.";
        }   catch (PDOException $ex){
            echo $ex->getMessage();
        }

        ///$sql1="INSERT INTO tbl_category VALUES(default,'c13','d10')";
         //echo $connection->exec($sql1);
        //$sql2="INSERT INTO tbl_category(category_name,description) VALUES('c22','d15')";
        //echo  $connection->exec($sql2);
        
    
    
    