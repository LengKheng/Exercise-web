<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link href="Libs/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .th{
            border-radius: getmygid;
        }
    </style>
</head>
<body ng-controller="checkboxCtrl">
    
    <!-----<//?php include_once("navbar.php") ?>------>
    <?php 
        require_once "config.php"; 
       
    ?>
    <div class="container" style="margin-top: 20px;padding-bottom: 20px;">
    <a href=index.php">Create New</a>
    <table class="table table-border">
        <thead style="background-color: #26a2af">
            <tr>
                <th >author_id</th>
                <th >author_name</th>
                <th >phone</th>
                <th >email</th>
                <th >website</th>
                <th >address</th>
                <th >Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php  
            $sql="SELECT * FROM tbl_authors;";
            if($data=$connection->query($sql,PDO::FETCH_NUM)){
                if($rows=$data->fetchAll()){
                    foreach($rows as $row){
                        echo "<tr> 
                                <td>{$row[0]}</td>
                                <td>{$row[1]}</td>
                                <td>{$row[2]}</td>
                                <td>{$row[3]}</td>
                                <td>{$row[4]}</td>
                                <td>{$row[5]}</td>
                                <td>
                                 <a href='edit.php?id={$row[0]}'>Edit</a>
                                 <a href='delete.php?id={$row[0]}'>Delete</i></a>
                                 <a href='#'>Show</a>
                                </td>
                      
                                
                            </tr>";
                    }
                }
            }
        ?>    
        </tbody>
    </table>

    </div>
    <script src="libs/fontawesome/js/all.js"></script>
    
</body>
</html>
