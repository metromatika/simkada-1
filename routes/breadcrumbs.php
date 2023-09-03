<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('bc-provinsi', function (BreadcrumbTrail $trail) {
    $trail->push('Data Provinsi', route('tbl-provinsi'));
});

Breadcrumbs::for('bc-kab-kota', function (BreadcrumbTrail $trail) {
    $trail->parent('bc-provinsi');
    $trail->push('Data Kota', route('tbl-kab-kota'));
});

Breadcrumbs::for('bc-kecamatan', function (BreadcrumbTrail $trail) {
    $trail->parent('bc-kab-kota');
    $trail->push('Data Kecamatan', route('tbl-kecamatan'));
});
