<!Doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Error handler</title>

</head>
<body>
    <h2>Signup</h2>

    <?php
    
    if(isset($_GET['first'])){
        $first = $_GET['first'];
        echo '<input type ="text" name="first" placeholder="Firstname" value = "'.$first.'">';

    }
    else{

        echo '<input type ="text" name="first" placeholder="Firstname">';  
    }
    if(isset($_GET['last'])){
        $last = $_GET['last'];
        echo '<input type ="text" name="last" placeholder="lastname" value = "'.$last.'">';

    }
    else{

        echo '<input type ="text" name="last" placeholder="lastname">';  
    }
    ?>
    <form action="includes/signup.inc.php" method="POST">
        <!-- <input type ="text" name="first" placeholder="Firstname">
        <input type ="text" name="Last" placeholder="lasttname"> -->
        <input type ="text" name="email" placeholder="Email">
        <input type ="text" name="uid" placeholder="Username">
        <input type ="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
    // $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //     if(strpos($fullurl, "signup=empty") == true ){
    //         echo "you did not fill in all fields";
    //         exit();
    //     }
    // elseif(strpos($fullurl, "signup=char") == true ){
    //         echo "you used invalid characters";
    //         exit();
    //     }
    //   elseif(strpos($fullurl, "signup=invalidemail") == true ){
    //         echo "you used invalid email";
    //         exit();
    //     }
    //    elseif(strpos($fullurl, "signup=success") == true ){
    //         echo "you have been signed up";
    //         exit();
    //     }

    if(!isset($_GET['signup'])){
        exit();
    }
    else{

        $signupCheck = $_GET['signup'];

        if($signupCheck == "empty"){
            echo "you did not fill in all fields!";
            exit();
        }
        elseif($signupCheck == "char"){
            echo "you used invlid characters!";
            exit();
        }
        elseif($signupCheck == "invalidemail"){
            echo "you used invlid email!";
            exit();
        }
        elseif($signupCheck == "success"){
            echo "you have been signedup!";
            exit();
        }
    }
    ?>
</body>
</html>