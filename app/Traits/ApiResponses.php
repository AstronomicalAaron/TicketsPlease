<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\HttpMethod;

trait ApiResponses
{
    protected function ok(string $message)
    {
        return $this->success($message);
    }

    protected function success(string $message, HttpMethod $statusCode = HttpMethod::Success)
    {
        return response()->json([
            'message' => $message,
            'status' => $statusCode->value,
        ], $statusCode->value);
    }
}
