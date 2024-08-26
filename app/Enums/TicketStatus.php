<?php

declare(strict_types=1);


namespace App\Enums;

enum TicketStatus: string
{
    case Active = 'active';
    case Rejected = 'rejected';
    case Hold = 'hold';
    case Completed = 'completed';
    case Canceled = 'canceled';
}
