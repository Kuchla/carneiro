<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class CollaboratorCategory extends Enum implements LocalizedEnum
{
    const DIRECTION = 'direction';
    const TEACHER= 'teacher';
    const ADMINISTRATIVE = 'administrative';
}
