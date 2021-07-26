<?php
        require_once("connection.php");
        require_once("list1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mb-3">
        <h3>Table Authors</h3>
        <form action="" method="POST">
            <fieldset>
                <div class="container">
                    <input type="text" name="aname" value="" placeholder="Authors-name">
                </div>
</br>
                <div class="container">
                    <input type="number" name="nb" id="" placeholder="Phone">
                </div>
                </br>
                <div class="container">
                    <input type="email" name="em" id="" placeholder="Email">
                </div>
                </br>
                <div class="container">
                    <input type="text" name="wb" id="" placeholder="Website">
                </div>
                </br>
                <div class="container">
                    <textarea name="detail" id="" name="add" cols="20" rows="3" placeholder="Address"></textarea>
                </div>
                <div class="btn">
                    <input type="submit" name="btn" id="" value="Insert" placeholder="">
                </div>
                
            </fieldset>

        </form>
        <?php 
            if(isset($_POST['btn'])){
                $a=$_POST['aname'];
                $p=$_POST['nb'];
                $e=$_POST['em'];
                $w=$_POST['wb'];
                $ad=$_POST['add'];
                print_r($_POST);
                
            }
        
        
        ?>
        

    </div> 
</body>
</html>
