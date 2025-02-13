<?php


namespace Picqer\BolRetailer\Exception;

class UnauthorizedException extends RequestException
{
    public function accessTokenExpired(): bool
    {
        return stripos($this->getMessage(), 'JWT expired') !== false;
    }
}
