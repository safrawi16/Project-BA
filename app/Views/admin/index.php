<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Bank Aceh</title>
  <link rel="shortcut icon" href="<?= base_url('assets/images/Logo-Bank-Aceh.jpg') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <!-- Tambahkan di bagian <head> -->
<link href="https://cdn.jsdelivr.net/npm/jvectormap-next@3.0.0/jquery-jvectormap.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jvectormap-next@3.0.0/jquery-jvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jvectormap-content/world-mill.js"></script>

</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="profile">
        <img src="<?= base_url('assets/images/erenjpg.jpg') ?>" alt="Profile">
        <h3>Dr. Eren S.Pd M.Pd</h3>
        <p>Jawa Barat, Indonesia</p>
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
          <li><a href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </nav>
    </aside>

    <main class="content">
      <header>
        <h1>Analytics Dashboard</h1>
        <span style="float: right;">
           <?php echo date('l, F j, Y'); ?>
        </span>
      </header>

      <section class="stats">
        <div class="stat-box purple">Expenses: $47,000</div>
        <div class="stat-box pink">My Profits: $38,500</div>
      </section>

      <section class="live-feed">
        <h2>Live Feeds</h2>
        <div class="chart"><canvas id="liveChart" height="150" width="1000"></canvas></div>
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
        <div class="world-map" id="worldMap" style="height: 250px;, width: 990px;"></div>
      </section>
    </main>
  </div>
  

  <script src="assets/js/script.js"></script>

  <!-- Tambahkan sebelum penutup </body> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('liveChart').getContext('2d');
  const liveChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [...Array(21).keys()],
      datasets: [{
        label: 'Live Update',
        data: [50, 60, 70, 65, 60, 75, 80, 78, 74, 90, 100, 95, 88, 92, 89, 87, 85, 83, 82, 80, 83],
        borderColor: 'rgba(0, 230, 255, 0.8)',
        backgroundColor: 'rgba(0, 230, 255, 0.1)',
        tension: 0.4,
        fill: true
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>
<script>
  $(function () {
    $('#worldMap').vectorMap({
      map: 'world_mill',
      backgroundColor: '#2d2d44',
      regionStyle: {
        initial: {
          fill: '#ccc'
        }
      },
      series: {
        regions: [{
          values: {
            US: '#00ff00',
            ID: '#00c3ff',
            RU: '#ffa500'
          },
          attribute: 'fill'
        }]
      }
    });
  });
</script>


</body>
</html>
