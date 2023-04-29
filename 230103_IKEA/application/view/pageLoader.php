<?php
class Load
{
    function view($file_name, $data = null)
    {
        // check data format
        if (is_array($data)) {
            extract($data);
        }

        include $file_name . '.php';
    }
}
?>