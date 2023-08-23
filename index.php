<?php
include __DIR__ .'/functions.php';
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
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <form class="row g-3" method="GET">
                            <!-- TEXT INPUT  -->
                            <input class="form-control form-control-lg" type="number" placeholder="Lunghezza della password" aria-label=".form-control-lg example" name="password-length">
                            <!-- RADIO BUTTON  -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="yes" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                   SI
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="no" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                   NO
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Numeri
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Simboli 
                                </label>
                            </div>
                            <!-- SUBMIT BUTTON  -->
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">INVIA </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer>

        </footer>
    </body>
</html>