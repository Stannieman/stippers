<?php

/**
 * This file is part of the Stippers project (available here: https://github.com/Stannieman/stippers/).
 * The license and all terms en conditions that apply to Stippers also apply to this file.
 * 
 * @author Stan Wijckmans
 * 
 * Interface for validators
 */

interface IValidator
{
    public static function validate(array $data);
    
    public static function initErrMsgs();
}
