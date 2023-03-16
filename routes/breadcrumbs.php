<?php

//home

use function Symfony\Component\String\b;

Breadcrumbs::for('/', function ($trail) {
    $trail->push('Tarefas', route('home'));
});
