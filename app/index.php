<?php
    $decimal = "";
    if(isset($_POST['submit'])){
        $binary = $_POST['binary']; 
        $decimal = bindec($binary);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary to Decimal</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main>
        <div class="form">
            <h1>Binary2Decimal</h1>
            <form action="" method="POST">
                <div>
                    <label for="">Binário</label><br>
                    <input type="text" name="binary" pattern="^[0-1]{0,8}$" maxlength="8" required="required" placeholder="Apenas 0 ou 1"><br>
                </div>
                <div>
                    <label for="">Decimal</label><br>
                    <input type="number" readonly="readonly" value="<?php echo $decimal ?>"><br>
                </div>
                <div>
                    <input type="submit" value="Converter" name="submit">
                </div>
            </form>
        </div>
    </main>
</body>
</html>