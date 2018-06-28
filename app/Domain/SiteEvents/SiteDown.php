<?php

namespace App\Domain\SiteEvents;

class SiteDown implements \JsonSerializable
{
    private $level = '1';

    private $message = 'YO de shit is down';

    private $additionalData = ' De website www.rotterdampas.nl is plat :(';


    private $id = 0;


    public function __construct()
    {
        $this->id = random_int(1, 12456);
    }

    public function jsonSerialize()
    {
        return [
            'level' => $this->level,
            'id' => $this->level,
            'message' => $this->level,
            'additionalData' => $this->additionalData,
        ];
    }
}