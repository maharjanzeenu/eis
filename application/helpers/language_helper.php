<?php
if (!function_exists('lang')) {
    function lang($line, $data = array())
    {
        $ci = get_instance();
        $line = $ci->lang->line($line);
        if (!empty($data)) {
            foreach ($data as $placeholder => $value) {
                $line = str_replace('{' . $placeholder . '}', $value, $line);
            }
        }
        return $line;
    }
}