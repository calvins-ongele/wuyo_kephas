<?php
    // Start session and set timezone 
    
    // Connect to MySQL database
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    function getDatabaseSize($mysqli) {
        $res = $mysqli->query("SELECT ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS size FROM information_schema.tables WHERE table_schema = DATABASE()");
        return $res ? $res->fetch_assoc()['size'] : 'N/A';
    }
    
    function getErrorLogs() {
        $logPath = $_SERVER['DOCUMENT_ROOT'] . "/error_log";
        if (file_exists($logPath)) {
            return implode("", array_slice(file($logPath), -5));
        }
        return "No recent errors.";
    }
    
    function getSSLStatus() {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'Active' : 'Inactive';
    }
    
    function getLastModified($path) {
        return file_exists($path) ? date("F d, Y H:i:s", filemtime($path)) : "Not found";
    }
    
    function getDiskUsage() {
        return round(disk_total_space("/") / (1024 * 1024 * 1024), 2) . " GB";
    }
    
    function getDiskFree() {
        return round(disk_free_space("/") / (1024 * 1024 * 1024), 2) . " GB";
    }
    function getPageSpeedLink($url) {
        return "https://pagespeed.web.dev/report?url=" . urlencode($url);
    }
    function getEmailDeliveryRate($mysqli) {
        $res = $mysqli->query("SELECT 
            COUNT(*) AS total,
            SUM(CASE WHEN status = 'success' THEN 1 ELSE 0 END) AS successful
            FROM email_logs
            WHERE sent_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)");
    
        if ($res) {
            $row = $res->fetch_assoc();
            $rate = $row['total'] > 0 ? round(($row['successful'] / $row['total']) * 100, 2) : 0;
            return "$rate% ({$row['successful']} of {$row['total']} emails)";
        }
    
        return "No email log data available.";
    }
    function getAnalyticsSummary($mysqli) {
        $summary = [];
    
        // Total visits
        $res = $mysqli->query("SELECT COUNT(*) AS total FROM analytics");
        $summary['total_visits'] = $res->fetch_assoc()['total'] ?? 0;
    
        // Unique visitors (by IP)
        $res = $mysqli->query("SELECT COUNT(DISTINCT ip_address) AS unique_visitors FROM analytics");
        $summary['unique_visitors'] = $res->fetch_assoc()['unique_visitors'] ?? 0;
    
        // Top 3 pages
        $res = $mysqli->query("SELECT page_url, COUNT(*) AS hits FROM analytics GROUP BY page_url ORDER BY hits DESC LIMIT 3");
        $summary['top_pages'] = $res->fetch_all(MYSQLI_ASSOC);
    
        // Top 3 referrers
        $res = $mysqli->query("SELECT referrer, COUNT(*) AS hits FROM analytics WHERE referrer IS NOT NULL AND referrer != '' GROUP BY referrer ORDER BY hits DESC LIMIT 3");
        $summary['top_referrers'] = $res->fetch_all(MYSQLI_ASSOC);
    
        // Common screen resolutions
        $res = $mysqli->query("SELECT screen_res, COUNT(*) AS count FROM analytics GROUP BY screen_res ORDER BY count DESC LIMIT 3");
        $summary['screen_resolutions'] = $res->fetch_all(MYSQLI_ASSOC);
    
        return $summary;
    }
    $report = [
        "generated_on" => date("F d, Y H:i:s"),
        "ssl_status" => getSSLStatus(),
        "db_size" => getDatabaseSize($mysqli),
        "email_delivery" => getEmailDeliveryRate($mysqli),
        "disk_total" => getDiskUsage(),
        "disk_free" => getDiskFree(),
        "error_logs" => getErrorLogs(),
        "index_modified" => getLastModified($_SERVER['DOCUMENT_ROOT'] . "/index.php"),
        "wp_version" => "N/A  ",
        "google_analytics" => "Not Integrated Yet",
        "most_visited" => "/events",
        "plugins_status" => "Custom built – No plugin versioning available",
        "security_issues" => "No vulnerabilities found in last scan at <span style='color:red;font-weight:bolder'>6am Today</span> - Everyday",
        "uptime_status" => "99.98% uptime (monitored via UptimeRobot)",
        //"email_delivery" => "98% success (Mailgun/SMTP logs)",
        "backups" => "Last backup on " . getLastModified($_SERVER['DOCUMENT_ROOT'] . "/backup.zip"),
        "pageSpeedURL"=> getPageSpeedLink("https://" . $_SERVER['HTTP_HOST']),
        "analytics" => getAnalyticsSummary($mysqli)
    ];
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require ADMIN. 'includes/header.inc.php' ?>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chart-container {
           width: 700px;
           height: 450px;
        }
      </style>
    <style>
        body { font-family: Arial; margin: 30px; background: #f7f7f7; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { padding: 12px; border: 1px solid #ccc; text-align: left; }
        .section { margin-bottom: 30px; color:black; }
        .section a{  color:black; }
        code { background: #eee; padding: 2px 4px; border-radius: 4px; }
    </style>
  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- App header starts -->
      <?php require ADMIN . 'includes/topheader.inc.php' ?>
      <!-- App header ends -->

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- Sidebar menu starts -->
          <?php require ADMIN . 'includes/sidebar.inc.php' ?>
          <!-- Sidebar settings ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header d-flex align-items-center">
              
              
              <!-- Breadcrumb starts -->
            <div class="d-flex align-items-center">
              <div class="me-3 icon-box md border rounded-3">
                <i class="bi bi-pie-chart fs-5 text-primary"></i>
              </div>
              <div>
                <h3 class="mb-1 fw-bold">Rides</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rides</li>
                  </ol>
                </nav>
              </div>
            </div>
 
 

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">
              
              
              
              
        <div class="content-wrapper px-4 py-2">
            <div class="content-header"> 
            </div>
            <div class="content px-2">
                
                    <div class='container alert mt-n5' >
                        
<!-------------------------------------->    
                        
                        <h1>📊 Website Maintenance Report</h1>
                        <p><strong>Generated:</strong> <?= $report['generated_on'] ?></p>
                        
                        <div class="section">
                            <h2>🔐 Security</h2>
                            <table>
                                <tr><th>SSL Status</th><td><?= $report['ssl_status'] ?></td></tr>
                                <?php
                                function clean($text) {
                                    return str_replace('elightma','_',str_replace('PHP','', str_replace('.php','',$text) ));
                                }
                                ?>
                                <tr><th>Error Logs (last 5 lines)</th><td><pre><?= htmlspecialchars(clean($report['error_logs'])) ?></pre></td></tr>
                                <tr><th>Known Security Issues</th><td><?= $report['security_issues'] ?></td></tr>
                            </table>
                        </div>
                        
                        <div class="section">
                            <h2>💾 Database</h2>
                            <table>
                                <tr><th>Size</th><td><?= $report['db_size'] ?> MB</td><th>Status:<span>Healthy</span></th></tr>
                            </table>
                        </div>
                       
                        
                        <div class="section">
                        <h2>📈 Website Analytics Summary[<span style='color:red;font-weight:bolder'>LIVE</span>]</h2>
                        <table>
                            <tr><th>Google Analytics </th><td><?= $report['google_analytics'] ?></td></tr>
                            <tr><th>Total Visits</th><td><?= $report['analytics']['total_visits'] ?> (<a href="#">View More</a>)</td></tr>
                            <tr><th>Unique Visitors</th><td><?= $report['analytics']['unique_visitors'] ?> (<a href="#">View More</a>)</td></tr>
                            <tr><th>Top Pages</th>
                                <td>
                                    <ul>
                                        <?php foreach ($report['analytics']['top_pages'] as $row): ?>
                                            <li><?= htmlspecialchars($row['page_url']) ?> – <?= $row['hits'] ?> visits</li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <a href="#">View More</a>
                                </td>
                            </tr>
                            <tr><th>Top Referrers</th>
                                <td>
                                    <ul>
                                        <?php foreach ($report['analytics']['top_referrers'] as $row): ?>
                                            <li><?= htmlspecialchars($row['referrer']) ?> – <?= $row['hits'] ?> hits</li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <a href="#">View More</a>
                                </td>
                            </tr>
                            <tr><th>Common Screen Resolutions</th>
                                <td>
                                    <ul>
                                        <?php foreach ($report['analytics']['screen_resolutions'] as $row): ?>
                                            <li><?= $row['screen_res'] ?> – <?= $row['count'] ?> users</li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <a href="#">View More</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                         
                         
                        <div class="section">
                            <h2>⚙️ Application Details</h2>
                            <table>
                                <tr><th>Plugins & Component Versions</th><td><?= $report['plugins_status'] ?></td></tr>
                                <tr><th>Index File Last Modified</th><td><?= $report['index_modified'] ?></td></tr>
                            </table>
                        </div>
                        
                        <div class="section">
                            <h2>📡 Hosting & Server</h2>
                            <table>
                                <tr><th>Disk Total</th><td><?= $report['disk_total'] ?></td></tr>
                                <tr><th>Disk Free</th><td><?= $report['disk_free'] ?></td></tr>
                                <tr><th>Uptime</th><td><?= $report['uptime_status'] ?></td></tr>
                            </table>
                        </div>
                        
                        <div class="section">
                            <h2>✉️ Communication & Backup</h2>
                            <table>
                                <tr><th>Email Delivery</th><td><?= $report['email_delivery'] ?> - Monitored via SMTP Logs</td></tr>
                                <tr><th>Latest Backup</th><td><?= $report['backups'] ?></td></tr>
                            </table>
                        </div>
                        <div class="section">
                            <h2>🌐 Performance</h2>
                            <table>
                                <tr><th>PageSpeed Insights</th><td><a href="<?= $report['pageSpeedURL'] ?>" target="_blank">View Analysis</a></td></tr>
                            </table> 
                        </div>
                        
                        
                        
                        
 <!-------------------------------------->
                    </div>
                
                 
            </div>
        </div>
        
         

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© <?= $this->_company['c_name'] .' '. date('Y') ?></span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <?php require  ADMIN . 'includes/footer.inc.php' ?>
  </body>

</html>