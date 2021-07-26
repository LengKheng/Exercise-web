
<?php

require_once("connection.php");

?>

<div class="container">
<table class="table table-border">
    <thead>
        <tr>
            <th>ID</th>
            <th>A</th>
            <th>b</th>
            <th>c</th>
        </tr>
    </thead>
    <tbody>
<?php
    $sql=" SELECT * FROM tbl_authors;";
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
                        <a href='#'>Show</a>
                        <a href='#'>Delete</a>
                    </td>
                    </tr>";
            }
        }
    }
?>

    </tbody>
</table>
</div>
</body>
</html>
