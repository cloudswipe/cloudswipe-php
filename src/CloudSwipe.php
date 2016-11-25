<?php

namespace CloudSwipe;

class CloudSwipe
{
    public static function setSecretKey($secretKey)
    {
        Resource::auth($secretKey);
    }
}
