<?php
// GENERATORE RANDOM DI TRINGHE 
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomString(10);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN LINK -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
         <!-- CSS LINK  -->
         <link rel="stylesheet" href="CSS/style.css">

        <title>PASSWORD GENERATOR</title>
    </head>
    <body>
        <header>
            <h1>
                Strong password generator 
            </h1>
            <h2>
                Genera una password sicura 
            </h2>
        </header>

        <main>
            
        </main>

        <footer>

        </footer>
    </body>
</html>