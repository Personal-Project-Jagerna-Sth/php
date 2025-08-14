<?php
require 'db.php';
require 'function.php';

if($_SERVER['REQUEST_METHOD']=="post")
{
    if(verifyCSRFTokken($_POST['cerf_token'])){
        $username = trim($_Post["csrf_token"]);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT));
    };

    $stmt = $pdo -> prepare("INSERT INTO users(username, password)VALUES (:username, :password)");


    try
    {
        $stmt -> execute[':username' => $username, ':password' => $password]);
        echo "Registration successful! <a href = 'login.php'> Login here </a>";
    }catch(PDOException $e){
        echo "Error": escapeOutput($e->getMessage());
    }
}else{
    echo "CSRF token mismatch"; 
}

?>


<form metho="POST">
    <input type ="text" name = "username" placeholder = "Username" required>
    <input type =  "password" name = "password" placeholder = "password" required>
    <input type = "hidden" name ="csrf_token" value = "<?php echo generateCSRF Token();?>">
    <button type = "Submit">Register</button>
</form>

