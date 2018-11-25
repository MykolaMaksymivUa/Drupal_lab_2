<?php
require_once "connectToDB.php";

$title = $body = '';
$error = false;

if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $error = true;
    } else{
        $title = $input_title;
        $error = false;
    }

    $input_body = trim($_POST["body"]);
    if(empty($input_body)){
        $error = true;
    } else{
        $body = $input_body;
        $error = false;
    }

    if(!$error){
        $sql = "UPDATE posts SET title=:title, body=:body WHERE id=:id";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":title", $param_title);
            $stmt->bindParam(":body", $param_body);
            $stmt->bindParam(":id", $param_id);

            $param_title = $title;
            $param_body = $body;
            $param_id = $id;

            if($stmt->execute()){
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        unset($stmt);
    }
    unset($pdo);
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);

        $sql = "SELECT * FROM posts WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":id", $param_id);

            $param_id = $id;

            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    $title = $row["title"];
                    $body = $row["body"];
                } else{
                    echo "Error: " .$mysqli->error;
                    exit();
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        unset($stmt);

        unset($pdo);
    }  else{
        echo "Error: " .$mysqli->error;
        exit();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Edit the input values</h1>
    <div class="content">
        <div class="contentEditPage">
            <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                <label>Tittle</label>
                <input type="text" name="title" value="<?php echo $title; ?>">
                <label>Body</label>
                <input type="text" name="body" value="<?php echo $body; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="buttons">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>