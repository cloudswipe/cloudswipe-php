<?php

namespace CloudSwipe;

class Resource extends \JsonApiClient\Resource
{
    public function __construct($url, $type)
    {
        parent::__construct("http://api.cloudswipe.dev/v1/", $url, $type);
    }
}
