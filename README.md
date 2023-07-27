# A Smarty PHP Boilerplate Code
```
##Overview
This is a boilerplate code for Smarty PHP Template Framework

You can find more about the Smarty and download it at http://www.smarty.net/

Included is [jQuery](http://jquery.com/) and [Twitter Bootstrap 3](http://getbootstrap.com/) in this sample

##Pre-requisite

- An apache Web Server
- - PHP Enabled with read/write ability

## Essential Folders

    |--Smarty-lib/ -- Library folder downloaded from smarty.php
    |--css
    |	... Bootstrap CSS files
    |--fonts

| ... Bootstrap Font files
|--img/
| ... Image files
|--js
| ... Bootstrap JavaScript files
|--
|--smarty/
| |--cache (should be created and writable by PHP)
| |--configs
| |--smarty_plugins
| |--templates
| | ... Template folders and files
| |--templates_c (should be created and writable by PHP)
```
 
## Instructions to use ✨

Change on index.php:
```
    $local_path_default= false;  // change it to true
```
You can change website information on smarty/configs/resource.environment.php:

```
"website_title" => "Website Title | PHP, Bootstrap, Smarty", // Changes title website on navigation Tab
"website_logo_title" => "Website", // Changes business website name
"website_resources" => array(
    "website_logo_url" => "img/generic/logos/logo_white.png", // Changes logo URL on the header
    "website_favicon_url" => null, // Changes URL of favicon on navigation
),
// Database information
"website_db_info" => array( // Changes db information
    "ip" => 'localhost', 
    "user" => "your user", 
    "password" => "your password", 
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
```
