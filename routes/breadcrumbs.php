<?php
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Бош саҳифа', route('dashboard'));
});

Breadcrumbs::for('content.region', function ($trail, $region) {
    $trail->push('Бош саҳифа', route('dashboard'));
    $trail->push($region->name, route('content.region',$region));
});

// Breadcrumbs::for('content.type', function ($trail,$region) {
//     $trail->parent('content.type',$);
//     $trail->push('as', route('content.type'));
// });

Breadcrumbs::for('', function ($trail, $region) {
    $trail->push('Бош саҳифа', route('dashboard'));
    $trail->push($region->slug, route('content',$region));
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

// Dashboard > Profile
Breadcrumbs::for('users.profile', function ($trail, $user){
    $trail->parent('dashboard');
    $trail->push('Менинг профилим', route('users.profile',$user->id));
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



// Dashboard > Permissions
Breadcrumbs::for('permissions.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Рухсатномалар', route('permissions.index'));
});

// Dashboard > Permissions > Create
Breadcrumbs::for('permissions.create', function ($trail) {
    $trail->parent('permissions.index');
    $trail->push('Қўшиш', route('permissions.create'));
});

// Dashboard > Permissions > Show
Breadcrumbs::for('permissions.show', function ($trail, $perm) {
    $trail->parent('permissions.index');
    $trail->push($perm->id, route('permissions.show', $perm->id));
});

// Dashboard > Permissions > Edit
Breadcrumbs::for('permissions.edit', function ($trail, $perm){
    $trail->parent('permissions.index');
    $trail->push($perm->id, route('permissions.edit',$perm->id));
});