<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HM6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h1>CRUD app on PHP</h1>
    </header>
    <div class="addNewItem">
        <a href="addPage.php" class="btn btn-primary">Add New Employee</a>
    </div>
    <main>
        <?php
        require_once "connectToDB.php";

        if($data = $pdo->query("SELECT * FROM posts")){
            if($data->rowCount() > 0){
                echo "<table class='table'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>№</th>";
                echo "<th>Tittle</th>";
                echo "<th>Body</th>";

                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = $data->fetch()){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['body'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=". $row['id'] ."' title='Edit'>Edit</a>";
                    echo "<a href='delete.php?id=". $row['id'] ."' title='Delete'> Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                unset($data);
            } else{
                echo "<p style='color:red;'>Database are empty :C</p>";
            }
        } else{
            echo "ERROR: Could not able to execute this query! because: " . $mysqli->error;
        }
        unset($pdo);
        ?>
    </main>
</body>
</html>