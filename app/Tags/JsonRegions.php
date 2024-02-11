<?php

namespace App\Tags;

use DuncanMcClean\SimpleCommerce\Regions;
use Statamic\Tags\Tags;

class JsonRegions extends Tags
{
    public function index()
    {
        return Regions::toJson();
    }
}
