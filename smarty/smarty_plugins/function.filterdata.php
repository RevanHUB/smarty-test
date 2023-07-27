<?php 
    function smarty_function_filterData($params) {
        $value = $params['value'];
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
?>