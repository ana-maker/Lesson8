<?php

namespace App\Models;
class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        foreach ($this->data as $name => $value) {
            $$name = $value;
        }
        require $template;
    }
}
