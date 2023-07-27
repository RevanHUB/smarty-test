<?php 
    
    // If someone tries to visit the file, it will close the connection
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        exit();
    } else {
        // Uncoment if you want to test it creating the database, remember to change db values on config file
        // error_reporting(0);
        function smarty_function_validation($params, Smarty_Internal_Template $template) {

                require 'smarty/configs/resource.environment.php'; // <--- This is the config file

                define('DB_CONFIG', $config['website_db_info']);

                $email = $params['email'];;
                $message = $params['message'];
                $treatment = $params['treatment'];  
                $submit = $_POST['submit'];

                if(!empty($email) && !empty($message) && !empty($treatment) && isset($submit)) {
                    $email_validator = "/^[a-zA-Z0-9]+@[a-zA-Z]+\.(es|com|net)$/"; // add domain sufix on the last ()
                    if(preg_match($email_validator, $email)) {
                        
                        // Here I'd create the query to insert all the data in the Database

                        if(DB_CONFIG != null) {
                            try {
                                $conn = mysqli_connect(DB_CONFIG['ip'], DB_CONFIG['user'], DB_CONFIG['password'], DB_CONFIG['db_name']);
                            } catch(Exception $error) {
                                die("Connection failed: ". mysqli_connect_error());
                            }

                            if($conn) {
                                // Here will be the query to insert the data
                                $query = $conn->query("INSERT INTO `assestment_contact`.`contact` VALUES (null, '".$email."','".$message."','".$treatment."', NOW())");
                                if($query) {
                                    echo '<p id="validation" style="color: green">You entered correctly the data information, we will contact you soon!</p>';
                                } else {
                                    echo "<p class='validation' style='color: red;'>An error happened, please, check your data information</p>";
                                }

                                $conn->close();
                            } else {
                                echo "<p class='validation' style='color: black;'>We're having problems handing your request, please try again later</p>";
                            }

                        } else {
                            echo "<p class='validation' style='color: red;'>We had an error , please try again later.</p>";
                        }
                    } 
                } else {
                    echo "<p class='validation' style='color:red;'> Please enter the information. </p>";
                }

        };
    }
    
?>