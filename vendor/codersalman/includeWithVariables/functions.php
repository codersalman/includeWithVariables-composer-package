<?php


function includeWithVariables($filePath, $variables) {
    $variables =  $variables;
    ob_start();
include $filePath;
$content = ob_get_contents();
ob_end_clean();
return $content;

}

?>
