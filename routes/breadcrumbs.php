<?php
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Бош саҳифа', route('dashboard'));
});

Breadcrumbs::for('content.suptype', function ($trail, $region) {
    $trail->parent('dashboard');
    $trail->push($region->name, url('dashboard/'. $region->slug));
});

Breadcrumbs::for('content.subtype', function ($trail, $region, $suptype) {
    $trail->parent('content.suptype',$region);
    $trail->push($suptype->name, url('dashboard/'. $region->slug .'/'.$suptype->slug));
});

Breadcrumbs::for('complaint.list', function ($trail, $region, $suptype, $subtype) {
    $trail->parent('content.subtype',$region, $suptype);
    $trail->push($subtype->name, url('dashboard/'. $region->slug .'/'.$suptype->slug.'/'.$subtype->slug));
});

Breadcrumbs::for('complaint.list.all', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Барча муаммолар ройҳати', url('dashboard/complaints'));
});

Breadcrumbs::for('complaint.create', function ($trail) {
    $trail->parent('dashboard');
    $trail->push("Янги муаммо қўшиш", url('dashboard/add-complaint'));
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