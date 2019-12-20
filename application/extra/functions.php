<?php
function filter_default($value)
{
    return htmlspecialchars($value, ENT_NOQUOTES);
}