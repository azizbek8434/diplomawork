<?php
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Бош саҳифа', route('dashboard'));
});

// Home > Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Фойдаланувчилар', route('users.index'));
});

// Home > Users > Create
Breadcrumbs::for('users_create', function ($trail) {
    $trail->parent('users');
    $trail->push('Қўшиш', route('users.create'));
});

// Home > Users > Edit
Breadcrumbs::for('users_edit', function ($trail) {
    $trail->parent('users');
    $trail->push('Таҳрирлаш', route('users.edit',['id' => '']));
});

// Home > Users > Show
Breadcrumbs::for('users_show', function ($trail) {
    $trail->parent('users');
    $trail->push('Кўриш', route('users.show',['id' => '']));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});