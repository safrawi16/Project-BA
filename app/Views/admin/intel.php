<?= view('layouts/sidebar') ?>
<link rel="stylesheet" href="<?= base_url('assest/css/style.css') ?>">
<div style="margin-left: 750px; padding: 20px;">
    <h1>Intel System</h1>
    <p>Halo, <strong><?= esc(session()->get('username')) ?></strong>! Ini adalah halaman Intel.</p>
    <div style="background: #f5f5f5; padding: 20px; border-radius: 20px;">
        <h3>Informasi Sistem</h3>
        <nav>
        <ul>
            <li>Versi PHP: <?= phpversion() ?></li>
            <li>Versi CodeIgniter: <?= \CodeIgniter\CodeIgniter::CI_VERSION ?></li>
            <li>Server Name: <?= $_SERVER['SERVER_NAME'] ?></li>
            <li>Waktu Server: <?= date('Y-m-d H:i:s') ?></li>
        </ul>
        </nav>
    </div>
</div>
