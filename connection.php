<?php 

/**
 * 
 * XAMPP CONTROL PANEL: 
 * http://localhost/works/portfolio-website-1/ 
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
    
    /*
    $server = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "portfoliodb";
    
    $link = new mysqli($server, $dbusername, $dbpassword, $dbname);
    */

    require_once "config.php";
    
    $filename= 'C:\xampp\htdocs\works\portfolio-website-1\config.php';

    if(file_exists($filename)){   
        $select = "SELECT email FROM connection_portfolio WHERE email = '$email' LIMIT 1 ";
        
        $result = $link -> query($select);
        
        if(mysqli_num_rows($result) > 0){
            //echo "Email address already registered!";
            echo '<script>alert("Ez az e-mail cím már regisztrált!")</script>';
        }
        else{
            $insert = "INSERT INTO connection_portfolio(name, email, subject, textarea) VALUES('$name','$email','$subject','$textarea')";
            
            $results = $link -> query($insert);
            
            if($results > 0){
                //echo "Thank you for contacting us!";
                echo '<script>alert("Köszönöm, hogy felkeresett!")</script>';
                

            }
            else{
                //echo "Something went wrong!";
                echo '<script>alert("Valami rosszul ment!")</script>';
            }
        }
    }
}

// Connects back to the Connection Page
$page = 'http://localhost/works/portfolio-website-1/?section=contact'; //The page where you want to connect back
$sec = "1"; //Connection time in second's
header("Refresh: $sec; url=$page");

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