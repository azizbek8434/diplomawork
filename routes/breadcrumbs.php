<?php
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Бош саҳифа', route('dashboard'));
});

// Home > Users
Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Фойдаланувчилар', route('users.index'));
});

// Home > Users > Create
Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push('Қўшиш', route('users.create'));
});

// Home > Users > Show
Breadcrumbs::for('users.show', function ($trail, $user) {
    $trail->parent('users.index');
    $trail->push($user->id, route('users.show', $user->id));
});

// Home > Users > Edit
Breadcrumbs::for('users.edit', function ($trail, $user){
    $trail->parent('users.index');
    $trail->push($user->id, route('users.edit',$user->id));
});