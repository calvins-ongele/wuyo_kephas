<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require 'includes/header.inc.php' ?>
    <style>
        .avatar-circle {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #1c7ea5;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 15px;
}

.text-small {
    font-size:10px;
}
    </style>
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

         <?php require 'includes/sidebar.inc.php' ?>

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons start -->
            <div class="d-flex">
              <button type="button" class="btn btn-dark me-2 toggle-sidebar" id="toggle-sidebar">
                <i class="bi bi-chevron-left"></i>
              </button>
              <button type="button" class="btn btn-outline-dark me-2 pin-sidebar" id="pin-sidebar">
                <i class="bi bi-chevron-left"></i>
              </button>
            </div>
            <!-- Toggle buttons end -->

            <!-- App brand sm start -->
            <div class="app-brand-sm d-lg-nonec d-sm-block">
              <a href="/dashboard" style="text-decoration:none">
                <div class='d-flex justify-content-start'>
                    <div style="width: 30px; height: 30px; background: red; border-radius: 15px; display: flex; align-items: center; justify-content: center; 
               margin: 3px 3px 3px auto; box-shadow: rgba(0, 0, 0, 0.15) 0px 6px 16px;">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" 
                        stroke="white" stroke-width="1.5" stroke-linejoin="round"></path>
                        <path d="M22 6l-10 7L2 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
             <h3 style="font-size: 22px; color: var(--ink); margin-bottom: auto;">
                            <span style="color: red;">A</span>ccess/Accounts</h3>
                             
                </div>
              </a>
            </div>
            <!-- App brand sm end -->

            <!-- App header actions start -->
            <div class="header-actions">
            
             
              <!-- Header actions ends -->
              <div class="dropdown ms-3">
                <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
                  href="/dashboard/logout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-md-block me-2"><i class='bi bi-box-arrow-right'></i></span>
                   
                </a>
            
              </div>
            </div>
            <!-- App header actions end -->

          </div>
          <!-- App header ends -->

          <!-- App hero header starts -->
          <div class="app-hero-header">

        
            <!-- Page Title end -->

            <!-- Header graphs start -->
            <div class="ms-auto1">
              <div class="d-lg-flexd-nonegap-4">
               
              <h2>Gmail Accounts</h2>
              <p><?= $this->accounts['count'] ?? 0 ?> accounts connected. You can only open accounts you own.</p>
              
              </div>
            </div>
            <!-- Header graphs end -->

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row start -->
            <div class="row">
                 
                 <?php foreach($this->accounts['data'] as $row) { if (empty($row['tokens'])) continue;  ?>
                    <div class="col-xl-4 col-sm-6 mb-3" onclick="location.href='/dashboard?email=<?= $row['user_email'] ?>'" >
                        <div class="card shadow-sm border-0 rounded-4" stydle="width: 320px;">
                            <div class="card-body p-4"> 
                                <!-- Header -->
                                <div class="d-flex align-items-center mb-2 gap-1">
                                    <div class="avatar-circle me-3">
                                        <?= substr($row['user_email'], 0, 1) ?>
                                    </div> 
                                    <div>
                                        <div class="fw-semibold text-secondary small">
                                            <?= $row['user_email'] ?> 
                                            <a href="/dashboard?email=<?= $row['user_email'] ?>" style='color:blue'><i class='fa fa-external-link'></i></a>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Stats -->
                                <div class="row g-3 mb-2">
                                    <div class="col-6">
                                        <div class="bg-light rounded-3 p-3 h-100">
                                            <small class="text-uppercase text-muted d-block mb-2 textx-small">
                                                ✉ Unread
                                            </small>
                                            <div class="fs-4 fw-semibold">—</div>
                                        </div>
                                    </div> 
                                    <div class="col-6">
                                        <div class="bg-light rounded-3 p-3 h-100">
                                            <small class="text-uppercase text-muted d-block mb-2 text-xsmall">
                                                ↻ Messages
                                            </small>
                                            <div class="fs-4 fw-semibold">—</div>
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Details -->
                                <div class="small text-muted mb-1">
                                    <i class='bi bi-calendar'></i> Added:
                                    <span class="fw-semibold text-dark"> 
                                        <?= date('Y-m-d H:i a', strtotime($row['user_created_at'])) ?>
                                    </span>
                                </div>
                    
                                <div class="small text-muted mb-1">
                                    <i class='bi bi-time'></i> Synced:
                                    <span class="fw-semibold">
                                        never
                                    </span>
                                </div>
                    
                                <hr>
                    
                                <!-- Footer -->
                                <div class="small">
                                    <span class="text-muted"><i class='bi bi-person'></i> Owner:</span>
                                    <span class="text-danger fw-semibold">Main</span>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>


                        <div class="col-12">
                        <nav>
                            <ul class="pagination">
                                <?php
                                $currentPage = $_GET['pg'] ?? 1;
                                $totalPerPage = $this->_company['user_loop_sequence'] ?? 24;
                                $totalCount = $this->accounts['count'] ?? 1;

                                $possiblePages = false;
                                $next = 0;
                                if (($totalPerPage * $currentPage) < $totalCount) {
                                    $possiblePages = true;
                                    $next = $currentPage + 1;
                                }

                                if ($currentPage > 1) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="<?= CustomFunctions::formatDynamicUrl('pg', ($currentPage - 1)) ?>">Previous</a></li>
                                <?php } ?>
                                <?php for ($i = 1; $i < ceil($totalCount / $totalPerPage) + 1; $i++) { ?>
                                    <li class="page-item <?= ($currentPage == $i) ? 'active' : '' ?>"><a class="page-link" href="<?= CustomFunctions::formatDynamicUrl('pg', $i) ?>"><?= $i ?></a></li>
                                <?php }
                                if ($possiblePages) { ?>
                                    <li class="page-item"><a class="page-link" href="<?= CustomFunctions::formatDynamicUrl('pg', $next) ?>">Next</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                     
                 
    
            </div>
            <!-- Row end -->

           

         
            <!-- Row end -->

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
          <div class="app-footer">
            <span>© Bootstrap Gallery 2025</span>
          </div>
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <script src="/public/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="/assets/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/assets/js/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/graphs/logistics/shipment.js"></script>
    <script src="assets/vendor/apex/custom/graphs/logistics/avg-delivery-time.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/current-date.js"></script>
  </body>

</html>