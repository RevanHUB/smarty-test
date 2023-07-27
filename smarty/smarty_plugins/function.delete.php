<?php 


    function smarty_function_delete($params, Smarty_Internal_Template $template) {
        $params['value'] = null;

        // Provitional, to clear the cache and avoid spamming values inserted in database

        header('Location: index.php?action=contact');
    }

?>