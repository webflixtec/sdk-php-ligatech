<?php

namespace Ligatech\Core;

class LigatechController extends LigatechHttp{
    protected $clientId;

    public function __construct(array $config = []) {        
        parent::__construct($config);
    }
    
    public function getClientId(){
        return $this->clientId;
    }

    public function setClientId($clientId) {
        $this->clientId = $clientId;
        return $this;
    }
}
