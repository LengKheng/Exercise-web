<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
require_once "config.php"
?>
<body>
    <div class="container">
        <div class="title">
            <strong>Edit</strong>
        </div>
        <div class="content">
            <?php
                $id=$_GET["id"];
                $sql="SELECT * FROM tbl_authors WHERE author_id='$id';";
                $query=$connection->query($sql);
                $row=$query->fetch();
            ?>
            <div class="alert alert-danger">
            <strong>Confirm?</strong>
            <p>Do you want to Update this record?</p>
            <form method="POST" action="update.php">
            <input type="hidden" name="author_id" value="<?= $row["author_id"]  ?>" />
            <div class="user-details">
                <div class="input-box">
                    <label for="author_name" class="details">author_name</label>
                    <input type="text" name="author_name" id="author_name" 
                           value="<?= $row["author_name"]  ?>"
                           class="form-control" />
                </div>
                <div class="input-box">
                    <label for="phone" class="details">phone</label>
                    <input type="text" name="phone" id="phone" 
                           value="<?= $row["phone"]  ?>"
                           class="form-control" />
                </div>
                <div class="input-box">
                    <label for="email" class="details">email</label>
                    <input type="text" name="email" id="email" 
                           value="<?= $row["email"]  ?>"
                           class="form-control" />
                </div>
                <div class="input-box">
                    <label for="website" class="details">website</label>
                    <input type="text" name="website" id="website" 
                           value="<?= $row["website"]  ?>"
                           class="form-control" />
                </div>
                <div class="input-box">
                    <label for="address" class="details">address</label>
                    <input type="text" name="address" id="address" 
                           value="<?= $row["address"]  ?>"
                           class="form-control" />
                </div>
               
            </div>
                <div class="button">
                    <button type="submit" class="btn">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>