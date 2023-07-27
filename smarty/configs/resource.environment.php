<?php 

    // If someone tries to visit the script file, It'll close the connection
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        exit();
    } else {
        $config = array(
            // Meta charset information
            "website_title" => "Website Title | PHP, Bootstrap, Smarty", // Changes title website on navigation Tab
            "website_logo_title" => "Website", // Changes business website name
            "website_resources" => array(
                "website_logo_url" => "img/generic/logos/logo_white.png", // Changes logo URL on the header
                "website_favicon_url" => null, // Changes URL of favicon on navigation
            ),
            // Database information
            "website_db_info" => array( // Changes db information
                "ip" => 'localhost', 
                "user" => "root", 
                "password" => "", 
                "db_name" => "assestment_contact"
            ),
            // contact
            "website_contact_email" => "example@example.com", // Changes contact form email 
            "website_contact_phone" => "34600699910", // Changes contact form phone number
            "website_sections" => array('', 'contact', 'about'), // Changes header sections
            // jsons
            "website_banners_json_path" => "smarty/json/banners.json.php", // Changes the JSON banner path
            "website_employees_json_path" => "smarty/json/employees.json.php", // Changes the JSON employees path
            // more paths
            "website_paths" => array(
                "website_cookies_path" => null,
                "website_legal_path" => null
            )
        );
    }

?>