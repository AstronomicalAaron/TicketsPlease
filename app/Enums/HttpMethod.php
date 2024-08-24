<?php

declare(strict_types=1);


namespace App\Enums;

enum HttpMethod: int
{
    case Success = 200;
    case BadRequest = 400;
    case ServerError = 500;
}
