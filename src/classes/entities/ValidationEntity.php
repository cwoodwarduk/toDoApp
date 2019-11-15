<?php

namespace ToDo\entities;

class ValidationEntity
{
    public static function sanitiseString($validateData)
    {
        $clean = filter_var($validateData, FILTER_SANITIZE_STRING);
        $clean = trim($clean);
        return $clean;
    }
}