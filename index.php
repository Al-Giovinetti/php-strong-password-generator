<?php 
    $passwordLength = null;
    if(!empty($_GET["passwordLength"])){
        $passwordLength = $_GET["passwordLength"];
    };

    $myNewPassword = "Inserisci dati per ricevere una password";

    function generateRandomPassword($length){
        $allLetters = ["a","b","c","d","e","f","g","h","i","l","m","n","o","p","q","r","s","t","u","v","z"];
        $allNumbers = [1,2,3,4,5,6,7,8,9];
        $allSymbols = ["!","£","$","%","&","/","@"];

        $newPasword = "";
        $totalCaracters = array_merge($allLetters,$allNumbers,$allSymbols);

        for($i=0; $i < $length ; $i++){
            $keyElement = array_rand($totalCaracters,1);                     
            $newPasword = $newPasword . $totalCaracters[$keyElement];
        }
        return $newPasword;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Password Generator 2.0</h1>
    <div class="row">
        <div class="col-8">
            <form action="./index.php" methods="get">
                <div class="mb-3">
                    <label for="passwordLenght" class="form-label">Email address</label>
                    <input type="number" class="form-control w-25" id="passwordLenght" name="passwordLength">
                </div>
                <button type="submit">
                    Generates
                </button>
            </form>
            <div class="output">
                <h2>La tua nuova password</h2>
                <?php echo generateRandomPassword($passwordLength)?>
            </div>

        </div>
    </div>    
</body>
</html>