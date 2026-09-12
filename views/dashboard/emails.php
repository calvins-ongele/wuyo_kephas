
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require 'includes/header.inc.php' ?>

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
          <?php require 'includes/sidebar.inc.php' ?>
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
                <h3 class="mb-1 fw-bold">Read Emails Dashboard</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Emails Dashboard   </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="d-flex align-items-end">
                
            </div>
            
            <div class="ms-auto d-lg-flex d-none flex-row">
                <a href='#' onclick="location.reload()" class='btn btn-outline-primary'><img title='Refresh' style="height:20px" src='/public/assets/uploads/refresh.png'></a>
            </div> 
          </div>
          <!-- App Hero header ends --> 
          <!-- App body starts -->
          <div class="app-body">
              <?php
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
    <?php require 'includes/footer.inc.php' ?>
     
    </script>
  </body>

</html>