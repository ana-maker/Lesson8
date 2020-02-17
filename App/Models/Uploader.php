<?php

namespace App\Models;
class Uploader
{
    protected $fieldname;

    public function __construct($fieldname)
    {
        $this->fieldname = $fieldname;
    }

    public function isUploaded()
    {
        if (isset ($_FILES[$this->fieldname]) && 0 == $_FILES[$this->fieldname]['error'] && is_uploaded_file($_FILES[$this->fieldname]['tmp_name'])) {
            return true;
        }
        return false;
    }

    public function upload()
    {
        if (true === $this->isUploaded()) {
            copy($_FILES['img']['tmp_name'],
                __DIR__ . '/../../images/' . $_FILES[$this->fieldname]['name'] . ''
            );
        }
        return false;
    }

}
