<?php

namespace Onetoweb\Minox\Config;

enum Url: string
{
    case BASE = 'https://app.minox.nl/api/1';
    case AUTH = 'https://app.minox.nl/oauth/authorize';
    case TOKEN = 'https://app.minox.nl/oauth/token';
}
