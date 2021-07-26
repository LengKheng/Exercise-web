<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php
require_once "config.php"
?>
<body>
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong>
        </div>
        <div class="card-body">
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
                <div class="mb-2">
                    <label for="author_name">author_name</label>
                    <input type="text" name="author_name" id="author_name" 
                           value="<?= $row["author_name"]  ?>"
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="phone">phone</label>
                    <input type="text" name="phone" id="phone" 
                           value="<?= $row["phone"]  ?>"
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" 
                           value="<?= $row["email"]  ?>"
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="website">website</label>
                    <input type="text" name="website" id="website" 
                           value="<?= $row["website"]  ?>"
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="address">address</label>
                    <input type="text" name="address" id="address" 
                           value="<?= $row["address"]  ?>"
                           class="form-control" />
                </div>
               
               
                <div class="mb-3">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>