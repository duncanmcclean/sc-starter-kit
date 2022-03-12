<?php

namespace App\Tags;

use DoubleThreeDigital\SimpleCommerce\Support\Regions;
use Statamic\Tags\Tags;

class JsonRegions extends Tags
{
    public function index()
    {
        return Regions::toJson();
    }
}
