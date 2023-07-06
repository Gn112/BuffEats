CLIENTE

<input type="submit" name="logoff" value="Deslogar">
<?php
if(isset($_POST['logoff'])){
    session_destroy();
    header('Location: ../../Login/index.php');
}
?>