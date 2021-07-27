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
        <div class="title">Registration</div>
        
        <div class="content">
            <form method="POST" action="store.php">
                <div class="user-details">
                    <div class="input-box">
                    <label for="athor_name">author_name</label>
                        <input type="text" name="author_name" id="author_name" 
                            class="form-control" />
                    </div>
                    
                    
                    <div class="input-box">
                        <label for="phone" class="details">phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="input-box">
                        <label for="email" class="details">email</label>
                        <input type="text"  name="email" id="email" class="form-control">
                    </div>
                    <div class="input-box">
                        <label for="website" class="details">website</label>
                        <input type="text" name="website" id="website" class="form-control">
                    </div>
                    <div class="input-box">
                        <label for="address" class="details">address</label>
                        <input type="text"  name="address" id="address" class="form-control">
                    </div>
                </div>
                    
                    <div class="button">
                        <button type="submit" class="btn">Create</button>
                    </div>
            </form>
        </div>
    </div>

</body>
</html>