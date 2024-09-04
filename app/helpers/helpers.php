<?php

function view($view, $data = [], $print = true)
{
    $output = "View Not Found";
    $filepath = "pages/" . $view . ".php"; 
    if (file_exists($filepath))
    {
        ob_start();
        extract($data);
        include $filepath;
        $output = ob_get_clean();
    }
    if ($print)
    {
        print $output;
    }
}