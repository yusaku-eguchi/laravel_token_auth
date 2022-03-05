<?php

namespace App\DataProvider;

use stdClass;

interface UserTokenProviderInterface
{
    /**
     * @param string $token
     * @return stdClass|null
     */
    public function retrieveUserByToken(string $token): ?stdClass;
}