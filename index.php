<?php
session_start();

if(isset($_POST["op"])&&isset($_POST["op1"])&&isset($_POST["op2"])){
    $result=0;
    if($_POST["op"]=="*") $result=$_POST["op1"]*$_POST["op2"];
    if($_POST["op"]=="+") $result=$_POST["op1"]+$_POST["op2"];

    $_SESSION["result"] = $result;
    $_SESSION["op1"] = $_POST["op1"];
    $_SESSION["op2"] = $_POST["op2"];
    $_SESSION["op"] = $_POST["op"];

    header("Location:afficher.php");
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exemple session</title>
</head>

<body>
    <div class="col-3 offset-4 my-5">
        <h1>Demo session</h1>
        <h2>Calculatrice</h2>

        <form action="" method="post">
            <div>
                <label for="">Operande 1</label>
                <input type="number" name="op1" id="">
            </div>
            <div>
                <label for="">Opérateur</label>
                <select name="op" id="">
                    <option value="*">*</option>
                    <option value="+">+</option>
                </select>
            </div>
            <div>
                <label for="">Operande 2</label>
                <input type="number" name="op2" id="">
            </div>
            <div>
                <button type="submit">Calculer</button>
            </div>

        </form>

    </div>
</body>

</html>