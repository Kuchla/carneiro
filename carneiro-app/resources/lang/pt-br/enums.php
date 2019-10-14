<?php

use App\Enums\Category;
use App\Enums\CollaboratorCategory;


return [
    Category::class => [
        Category::ELECTOMECHANICAL => 'Eletromecânica',
        Category::IT => 'Técnico em Informática',
        Category::ADMINISTRATION => 'Administração',
        Category::SECRETARIAT => 'Secretariado',
        Category::ELECTRONICS => 'Eletrônica',
        Category::ENVIRONMENT => 'Meio Ambiente',
        Category::CHEMISTRY => 'Química',
        Category::EVENT => 'Evento',
        Category::INFORMATION => 'Informação',
        Category::SCHOOL => 'Colégio',
    ],
    CollaboratorCategory::class => [
        CollaboratorCategory::DIRECTION => 'Direção',
        CollaboratorCategory::TEACHER => 'Professor',
        CollaboratorCategory::ADMINISTRATIVE => 'Administração',
    ],
];


