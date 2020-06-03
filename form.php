<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "digital");

//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
  
        
        //set all the post variables
        $name = $mysqli->real_escape_string($_POST['name']);
        $email = $mysqli->real_escape_string($_POST['email']);
      
        
        
        //make sure the file type is image
        
            
            //copy image to images/ folder 
           
                
                //set session variables
                $_SESSION['name'] = $name;
               

                //insert user data into database
                $sql = "INSERT INTO users (name, email) "
                        . "VALUES ('$name', '$email')";
                
                //if the query is successsful, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration succesful! Added $name to the database!";
                    header("location: welcome.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
            }
            
        
    
    
    

?>
 
 <link rel="stylesheet" href="menu.css">



<?php include('menu.php');
?>


