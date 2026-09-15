<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | MarketMate POS</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= base_url('/') ?>">MarketMate <span>POS</span></a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span aria-hidden="true">☰</span>
            </button>
            <nav id="primary-navigation" aria-label="Primary navigation">
                <a class="<?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                <a class="<?= ($activePage ?? '') === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
                <a class="<?= ($activePage ?? '') === 'customers' ? 'active' : '' ?>" href="<?= base_url('customers') ?>">Customers</a>
                <a class="<?= ($activePage ?? '') === 'users' ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>
    <main>
