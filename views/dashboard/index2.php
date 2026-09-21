<?php
 CustomFunctions::relocate("/dashboard?email=".$_GET['email'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require 'includes/header.inc.php' ?>
    <style>
        .input-group-text,
        .form-control {
            height: 42px;
        }
        
        .btn {
            height: 42px;
        }
        
        .form-control::placeholder {
            color: #999;
        }
        .btn-outline-secondary.rounded-pill {
            font-size: 10px;
            padding: 4px 6px;
        }
        .empty-state {
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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

             
 
            <!-- App header actions end -->

          </div>
          <!-- App header ends -->
 
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row start -->
            <div class="container">
                
                
                <div class="container-fluid p-0">

                <!-- Search Toolbar -->
                <div class="border-bottom bg-white p-2">
                    
                    <div class="d-flex gap-2 align-items-center">
                    
                        <div class="flex-grow-1">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-search"></i>
                                </span>
                    
                                <input
                                    class="form-control border-start-0"
                                    placeholder='Search emails — try "from:boss@work.com"'>
                            </div>
                        </div>
                    
                        <a href="<?= CustomFunctions::formatDynamicUrl('refresh', 1) ?>" class="btn btn-light border" title="Refresh">
                            
                            <i class="bi bi-arrow-clockwise"></i>
                        </a>
                    
                        <button class="btn btn-light border">
                            <i class="bi bi-sliders"></i>
                            Filters
                        </button>
                    
                        <button class="btn btn-light border">
                            <i class="bi bi-question-circle"></i>
                        </button>
                    
                        <button class="btn btn-dark px-4">
                            Search
                        </button>
                    
                    </div>


                </div>
            
                <!-- Filters -->
                <div class="border-bottom bg-white px-2 py-2">
                    <div class="d-flex flex-wrap gap-2">

                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-envelope"></i>
                        Unread
                    </button>
                
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-star"></i>
                        Starred
                    </button>
                
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-paperclip"></i>
                        Attachment
                    </button>
                
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-send"></i>
                        Sent
                    </button>
                
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-exclamation-circle"></i>
                        Important
                    </button>
                
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-calendar-week"></i>
                        This week
                    </button>
                
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-calendar-month"></i>
                        This month
                    </button>
                
                </div>
                </div>

                  <div class="app-body">
              <?php
              //print_r($this->data ?? []);
                  if (isset($this->data['error'])) {
                      echo "<p class='alert alert-danger'>{$this->data['error']}. The user needs to re-login again. </p>";
                  } else {
                
                ?> 
              <section>
                  
                  <div class="accordion" id="accordionExample">
                      <?php foreach($this->data as $row) { 
                      
                      $email_id = $row['id'];
                      $email_subject = $row['subject'];
                      $email_from = $row['from'];
                      $email_date = $row['date'];
                      $email_snippet = $row['snippet']; 
                      
                      ?>
                      
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $email_id ?>" aria-expanded="true" aria-controls="collapse<?= $email_id ?>">
                            <?= $email_subject ?> from [<?= $email_from ?>] 
                          </button>
                        </h2>
                        <div id="collapse<?= $email_id ?>" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <small><?= $email_date ?></small>
                            <?= $email_snippet ?>
                            
                            <!--
                            <a href='#' class='btn btn-sm btn-danger deleteSingEmail ' 
                            emailid='<?= $email_id ?>' email='' ><i class='fa fa-trash'></i> Delete this email</a>
                            -->
                            <hr> 
                            
                         <?php
                         
                            $safe_content = htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8');
                            
                            echo '<iframe 
                            sandbox="allow-popups" 
                            style="width: 100%; border: none;" 
                            srcdoc="' . $safe_content . '">
                          </iframe>';
                          
                          ?>
      
                          </div>
                        </div>
                      </div>
                      <?php } ?>
 
 
                    </div>

              </section> 
              <?php } ?>

            <!-- Toast message for download data example starts -->
            <div class="toast-container position-fixed bottom-0 end-0 p-3 mt-5">
              <div id="downloadData" class="toast text-bg-primary border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header">
                  <strong class="me-auto">Downloading</strong>
                  <small>Just now</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  Data successfully downloading.
                </div>
              </div>
            </div>
            <!-- Toast message for download data example ends -->

          </div>
            
                <!-- Account Status -->
                <!-- <div class="border-bottom px-3 py-2 small text-muted">
                    <div class="small text-muted">
                        <i class="bi bi-circle-fill small"></i>
                        Read-only — this account hasn't granted modify access
                    </div>
      
                </div> -->
            
                <!-- Inbox -->
                <!-- <div class="p-3">
                    <div class="d-flex justify-content-between mb-4">
                    
                        <div class="fw-bold text-uppercase">
                            Inbox
                        </div>
                    
                        <div class="text-muted small">
                            0 shown
                        </div>
                    
                    </div>
                    
                    <div class="empty-state">

                        <i class="bi bi-envelope fs-1 text-muted"></i>
                    
                        <div class="mt-3 text-muted">
                            No emails here
                        </div>
                    
                    </div>

                </div> -->
            
            </div>
             
        
             
            </div>
            <!-- Row end -->

           
 

          </div>
          <!-- App body ends -->
 

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