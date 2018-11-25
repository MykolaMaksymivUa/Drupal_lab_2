<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "connectToDB.php";

    $sql = "DELETE FROM posts WHERE id = :id";

    if($stmt = $pdo->prepare($sql)){
        $stmt->bindParam(":id", $param_id);

        $param_id = trim($_POST["id"]);

        if($stmt->execute()){
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    unset($stmt);

    unset($pdo);
} else{
    if(empty(trim($_GET["id"]))){
        echo "Error: " .$mysqli->error;
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <div class="content">
        <div class="contentDeletePage">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                <h1>Delete this post?</h1>
                <div class="buttons">
                    <input type="submit" value="Yes" class="btn btn-primary">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>