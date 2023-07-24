<?php
//-----------------------------------------------------
/* get all subdirectories from : */
//-----------------------------------------------------

function getSubdirectories($path)
{
    $subdirectories = array_filter(glob($path . '/*'), 'is_dir');
    return $subdirectories;
}