<?php 
    
    // If someone tries to visit the file, it will close the connection
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        exit();
    } else {
        error_reporting(0);
        include_once 'resource.environment.php';
        define('DB_CONFIG', $config['website_db_info']);

        function filterData($value) {
            // Add the not allowed characters to the array
            $notAllowed = array("-", '"', "'", "`", "&", "*");

            // Remove blank space from beginning & end
            $value = trim($value);

            // Clear HTML special characters, value won't be interpreted as HTML code
            $value = htmlspecialchars($value);
            $value = htmlentities($value);

            // replace not allowed characters
            $value = str_replace($notAllowed, '', $value);

            return $value;
        };

        function exportError($error_code) {
            if($error_code == 1) echo "You have an error on your email syntax.";
            if($error_code == 2) echo "You have an error on your message syntax.";
            if($error_code == 3) echo "You have an error on your treatment syntax.";
        }

        function validationProcess($email, $message, $treatment) {
                $error_code = 0;
                if(!empty($email) && !empty($message) && !empty($treatment)) {
                    $email_validator = "/^[a-zA-Z0-9]+@[a-zA-Z]+\.(es|com|net)$/"; // add domain sufix on the last ()
                    if($validation_email = preg_match($email_validator, $email)) {
                    
                        $filtered_message = filterData($message);
                        $filtered_email = filterData($email);
                        $filtered_treatment = filterData($treatment);

                        $validation_message = is_string($message);
                        $validation_treatment = is_string($treatment);
                        // Here I'd create the query to insert all the data in the Database

                        if(DB_CONFIG != null) {
 
                            $conn = mysqli_connect(DB_CONFIG['ip'], DB_CONFIG['user'], DB_CONFIG['password'], DB_CONFIG['db_name']);
                            if($conn) {
                               //
                            } else {
                                echo "<p class='validation' style='color: black;'>We're having problems handing your request, please try again later</p>";
                            }

                        } else {
                            echo "Information is not set.";
                        }
                        if($validation_email && $validation_message && $validation_treatment) {
                            return true;
                        } else {
                            if(!$validation_email) $error_code = 1;
                            if(!$validation_message) $error_code = 2;
                            if(!$validation_treatment) $error_code = 3;
                            exportError($error_code);
                        }
                        
                    } 
                } 

                return false;
        };
    }
    
?>