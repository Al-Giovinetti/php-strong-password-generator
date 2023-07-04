<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-success bg-opacity-50">
    <h1 class="text-center">Password Generator 2.0</h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <form action="./server.php" methods="get" class="card d-md-block p-2 mb-2 bg-info">
                <div class="mb-3">
                    <label for="passwordLenght" class="form-label">Choose the length of your password</label>
                    <input type="number" class="form-control w-25" id="passwordLenght" name="passwordLength">
                </div>
                <button type="submit" class="btn btn-primary">
                    Generates
                </button>
            </form>
        </div>
    </div>    
</body>
</html>