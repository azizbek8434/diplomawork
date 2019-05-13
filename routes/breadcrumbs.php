<?php
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Бош саҳифа', route('dashboard'));
});

// Dashboard > Users
Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Фойдаланувчилар', route('users.index'));
});

// Dashboard > Users > Create
Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push('Қўшиш', route('users.create'));
});

// Dashboard > Users > Show
Breadcrumbs::for('users.show', function ($trail, $user) {
    $trail->parent('users.index');
    $trail->push($user->id, route('users.show', $user->id));
});

// Dashboard > Users > Edit
Breadcrumbs::for('users.edit', function ($trail, $user){
    $trail->parent('users.index');
    $trail->push($user->id, route('users.edit',$user->id));
});


// Dashboard > Roles
Breadcrumbs::for('roles.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Роллар', route('roles.index'));
});

// Dashboard > Roles > Create
Breadcrumbs::for('roles.create', function ($trail) {
    $trail->parent('roles.index');
    $trail->push('Қўшиш', route('roles.create'));
});

// Dashboard > Roles > Show
Breadcrumbs::for('roles.show', function ($trail, $role) {
    $trail->parent('roles.index');
    $trail->push($role->id, route('roles.show', $role->id));
});

// Dashboard > Roles > Edit
Breadcrumbs::for('roles.edit', function ($trail, $role){
    $trail->parent('roles.index');
    $trail->push($role->id, route('roles.edit',$role->id));
});