<?php

Breadcrumbs::register('admin.adhocrequest.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.access.roles.management'), route('admin.adhocrequest.create'));
});

Breadcrumbs::register('admin.adhocrequest', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.access.roles.create'), route('admin.adhocrequest'));
});
