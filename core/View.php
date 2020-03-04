<?php

class View
{
    public function output($view_path, $data)
    {
        foreach ($data as $k => $v) {
            ${$k} = $v;
        }
        include 'application/views/' . $view_path . '.php';
    }
}