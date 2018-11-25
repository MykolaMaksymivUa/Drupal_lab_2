<?php
require_once "connectToDB.php";

$title = $body = '';
$error = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
    if($error === false) {
        $sql = "INSERT INTO posts (title, body) VALUES (:title, :body)";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":title", $param_title);
            $stmt->bindParam(":body", $param_body);
            $param_title = $title;
            $param_body = $body;

            if ($stmt->execute()) {
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        unset($stmt);


        unset($pdo);
    } else {
        echo '<p style="color: red; text-align: center; font-size: 2em;">Please fill all filds</p>';
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
    <title>Add Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="content">
        <div class="contentAddPage">
            <h1>Add page</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label>Tittle</label>
                <input type="text" name="title" value="<?php echo $title; ?>">
                <label>Body</label>
                <input type="text" name="body" value="<?php echo $body; ?>">
                <div class="buttons">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>