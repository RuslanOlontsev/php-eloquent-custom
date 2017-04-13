<?php

namespace Saritasa\Database\Eloquent\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Model, that can have media models attached
 * @package App\Models
 */
interface IMediable
{
    function media(): MorphMany;
}
