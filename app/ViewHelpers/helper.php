<?php

use App\Enums\Category;


function translate_category($status)
{
    return Category::getDescription($status);
}
