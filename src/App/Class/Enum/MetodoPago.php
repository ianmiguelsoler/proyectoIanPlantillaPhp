<?php

namespace App\Class\Enum;

enum MetodoPago
{
    case PAYPAL;
    case APPLE_PAY;
    case GOOGLE_PAY;
    case CARD;
    case BIZUM;

}
