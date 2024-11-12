<?php

namespace Onetoweb\Minox;

use Ramsey\Uuid\Uuid;

final class Utils
{
    /**
     * @param string $filename
     * @param string array $data
     * 
     * @return bool
     */
    public static function saveFile(string $filename, array $data): bool
    {
        return file_put_contents($filename, base64_decode($data['data'])) !== false;
    }
    
    /**
     * @return string
     */
    public static function uuid4(): string
    {
        return (string) Uuid::uuid4();
    }
}
