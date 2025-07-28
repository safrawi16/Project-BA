<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="<?= base_url('/admin') ?>">Dashboard</a></li>
            <li><a href="<?= base_url('/admin/theme') ?>">Theme</a></li>
            <li><a href="<?= base_url('/admin/docs') ?>">Docs</a></li>
            <li><a href="<?= base_url('/admin/components') ?>">Components</a></li>
            <li><a href="<?= base_url('/admin/database') ?>">Database</a></li>
            <li><a href="<?= base_url('/admin/auth') ?>">Auth</a></li>
            <li><a href="<?= base_url('/admin/mailer') ?>">Mailer</a></li>
            <li><a href="<?= base_url('/admin/api') ?>">API</a></li>
            <li><a href="<?= base_url('/admin/security') ?>">Security</a></li>
            <li><a href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
