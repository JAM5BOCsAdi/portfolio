<?php 
session_start();
/**
 * 
 * PHP Form Required:
 * https://www.w3schools.com/php/php_form_required.asp
 * 
 * */
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$textarea = $_POST['textarea']; // Nem baj, ha üres

if(!empty($name) && !empty($email) && !empty($subject)){
    

    require_once "config.php";
    
    $filename= $_SERVER['DOCUMENT_ROOT']."/portfolio-website-1/config.php";
    //var_dump($_SERVER['DOCUMENT_ROOT']."/portfolio-website-1/config.php");
    if(file_exists($filename)){   
        $select = "SELECT email FROM connection_portfolio WHERE email = '$email' LIMIT 1 ";
        
        $result = $link -> query($select);
        
        if(mysqli_num_rows($result) > 0){
            //echo "Email address already registered!";
            $response =  'Ez az e-mail cím már regisztrált!';
            $_SESSION['response'] = $response;
        }
        else{
            $insert = "INSERT INTO connection_portfolio(name, email, subject, textarea) VALUES('$name','$email','$subject','$textarea')";
            
            $results = $link -> query($insert);
            
            if($results > 0){
                //echo "Thank you for contacting us!";
                $response = 'Köszönöm, hogy felkeresett!';
                $_SESSION['response'] = $response;

            }
            else{
                //echo "Something went wrong!";
                $response = 'Valami rosszul ment!';
                $_SESSION['response'] = $response;
            }
        }
    }
}

/* Connects back to the Connection Page
$page = 'https://oradam.web.elte.hu/portfolio-website-1/?section=contact'; //The page where you want to connect back
$sec = "1"; //Connection time in second's
header("Refresh: $sec; url=$page");
*/
header("Location: https://oradam.web.elte.hu/portfolio-website-1/?section=contact");
exit();
/*
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$textarea = $_POST['textarea'];

// Portfolio Database Connection
$link = new mysqli('localhost','root','portfoliodb');
if($link -> connect_error){
    die('Connection Failed: '.$link -> connect_error);
}
else{
    $stmt = $link->prepare("INSERT INTO connection(name, email, subject, textarea) VALUES(?,?,?,?)");
    $stmt -> bind_param("ssss", $name, $email, $subject, $textarea);
    $stmt -> execute();
    echo "Thank you for contacting us!";
    $stmt -> close();
    $link -> close();
}
*/
?>