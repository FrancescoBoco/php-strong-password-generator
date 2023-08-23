<?php
// GENERATORE RANDOM DI TRINGHE 
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
if(isset($_GET['password-length'])){
echo generateRandomString($_GET['password-length']);
}



if( isset($_GET['password-length']) ){
    $input = $_GET['password-length'];
// var_dump($_GET['password-length']);

}
// if(isset($_GET['password-length']) != )

?>
