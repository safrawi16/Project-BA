<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SmartAdmin Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="profile">
        <img src="assets/images/unnamed.png" alt="Profile">
        <h3>Dr. Codex Lantern</h3>
        <p>Toronto, Canada</p>
      </div>
      <nav>
        <ul>
          <li>Application Intel</li>
          <li>Theme Settings</li>
          <li>Documentation</li>
          <li>Components</li>
          <li>Database</li>
          <li>Authentication</li>
          <li>Mailer</li>
          <li>REST API</li>
          <li>Security</li>
        </ul>
      </nav>
    </aside>

    <main class="content">
      <header>
        <h1>Analytics Dashboard</h1>
        <span>Tuesday, July 22, 2025</span>
      </header>

      <section class="stats">
        <div class="stat-box purple">Expenses: $47,000</div>
        <div class="stat-box pink">My Profits: $38,500</div>
      </section>

      <section class="live-feed">
        <h2>Live Feeds</h2>
        <div class="chart">[Live Update Chart]</div>
        <div class="server-boxes">
          <div class="box">Server Load: 75%</div>
          <div class="box">Disk Space: 79%</div>
          <div class="box">Data TTF: 23ms</div>
        </div>
      </section>

      <section class="chat">
        <h2>Smart Chat</h2>
        <div class="message">
          <strong>Lisa Hatchensen:</strong>
          <p>Hey did you meet the new board of directors...</p>
        </div>
        <div class="message">
          <strong>Dr. Codex Lantern:</strong>
          <p>Thanks for the file!</p>
        </div>
      </section>

      <section class="map">
        <h2>Bird's Eye</h2>
        <div class="world-map">[Map Placeholder]</div>
      </section>
    </main>
  </div>

  <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>
