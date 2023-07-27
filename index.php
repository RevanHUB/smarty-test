<?php

// Allows the user to dynamically change website values, changing one config file.
include_once './smarty/configs/resource.environment.php';

$local_path_default= false; // Change to TRUE to use your default Smarty Location 
    
if($local_path_default) {
    // CONFIG: Smarty Location of the Original Fork 
    require("Smarty-lib/libs/Smarty.class.php");
} else {
    // CONFIG: Smarty Location on this fork, currently using composer version of smarty
    require './../vendor/autoload.php';
}

## I've changed the current time zone too.
date_default_timezone_set('Europe/London');
define("MY_PHP_ROOT", ".");

$smarty = new Smarty();

// CONFIG: Smarty Paths
//'templates' is where you store the files.
$smarty->setTemplateDir(MY_PHP_ROOT . "/smarty/templates");
//Create this directory if this does not exist
// $smarty->setCompileDir(MY_PHP_ROOT . "/smarty/templates_c");
//Create this directory if this does not exist
$smarty->setCacheDir(MY_PHP_ROOT . "/smarty/cache");
//http://www.smarty.net/docs/en/config.files.tpl
$smarty->setConfigDir(MY_PHP_ROOT . "/smarty/configs");
//http://www.smarty.net/docs/en/plugins
$smarty->setPluginsDir(MY_PHP_ROOT . "/smarty/smarty_plugins");

$template = null;
$action = null;
$params = array();
$params["baseurl"] = "./";

// Gets the action value passed via GET
$action = safeGetString("action");

$params = array();
$params["baseurl"] = "./";

// Set Environment Variables to be accessible globally 
$params['env'] = $config;
$env = $params['env'];


// Routes System
switch ($action) {
    case "":
        // Load production data
        $banners_path = $env['website_banners_json_path'];
        require($banners_path);
        $banners = json_decode($banners_json, TRUE);
        $params["banners"] = processData($banners);
        $template = "pages/index.tpl";
        break; 
    case "contact":  
        // require('smarty/plugins/function.validation.php');
        $template = "pages/contact.tpl";
        break;
    case "about":
        $employees_path = $env['website_employees_json_path'];
        require($employees_path);
        $employees = json_decode($employees_json, TRUE);
        $params["employees"] = processData($employees);
        $template = "pages/about.tpl";
        break;       
    default:
        if ($template == null) $template = $action . ".tpl";

        $templatePath = $smarty->getTemplateDir();
        if (!file_exists($templatePath[0] . $template)) {
            
            $template = "index.tpl";
        }
        $num_of_slashes = substr_count($action, "/");
        if ($num_of_slashes > 0) {
            for ($i = 0; $i < $num_of_slashes; $i++) {
                $params["baseurl"] .= "../";
            }
        }
        break;
}


if (isset($_POST)) {
    $smarty->assign("postValues", $_POST);
}

foreach ($params as $key => $value) {
    $smarty->assign($key, $value);
}

$smarty->display($template);

//Utility Functions
function safeGetString($name, $default = NULL)
{
    $result = $default;
    if (isset($_SERVER["REDIRECT_URL"]) == 1) {
        $result = strval(substr($_SERVER["REDIRECT_URL"], 1));
    } else if (isset($_GET[$name])) {
        $result = strval($_GET[$name]);
    } else if (isset($_POST[$name])) {
        $result = strval($_POST[$name]);
    }
    $result = str_replace(chr(13), '', $result);
    return $result;
}
function processData($data)
{
    foreach ($data as $key => $val) {
        if (gettype($val) === "array") {
            $data[$key] = processData($val);
        }
    }
    return $data;
}

$smarty->clearCompiledTemplate('contact.tpl');