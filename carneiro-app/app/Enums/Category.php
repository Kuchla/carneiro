<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class Category extends Enum implements LocalizedEnum
{
    const ELECTOMECHANICAL = 'electromechanical';
    const ADMINISTRATION = 'administration';
    const IT = 'it';
    const SECRETARIAT = 'secretariat';
    const ELECTRONICS = 'electronics';
    const ENVIRONMENT = 'environment';
    const CHEMISTRY = 'chemistry';
    const EVENT = 'event';
    const INFORMATION = 'information';
    const SCHOOL = 'school';
}
