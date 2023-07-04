<?php 
    include_once __DIR__ . "/utilities/function.php";

    $passwordLength = null;
    if(!empty($_GET["passwordLength"])){
        $passwordLength = $_GET["passwordLength"];
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-success bg-opacity-50">
    <div class="row">
        <div class="col-8 output card p-2 bg-info mx-auto">
            <h2>La tua nuova password</h2>
            <p> <strong> <?php echo generateRandomPassword($passwordLength)?> </strong> </p>
        </div>
    </div>
</body>
</html>