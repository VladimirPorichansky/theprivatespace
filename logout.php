  <?php
    session_start();
    unset($_SESSION['login']);
    session_destroy();


    header("Location: http://localhost/homepage21/index.php");
exit;
                            ?>