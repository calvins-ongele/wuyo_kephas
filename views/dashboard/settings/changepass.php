
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require ADMIN. 'includes/header.inc.php' ?>

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
                <h3 class="mb-1 fw-bold">Change Password</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                  </ol>
                </nav>
              </div>
            </div>
 
 

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">
              
              
              <div class="content-wrapper px-2 py-2">
            <div class="content-header">
                <h1>Change Password</h1>
            </div>
            <div class="content px-2">
                
                <div class='container'><hr></div>
                
                
                <div class='container'> 
                    <?php $me = $this->_me; ?>
                    <form id='changepassword'>
                        <div class='form-group'>
                            <div class='row'>
                                <!--------------------------------->
                                <div class='col-md-12 mb-3'>
                                    <label>Current password</label>
                                    <input class='form-control  ' type='password' name='oldpass'   > 
                                    <input type='hidden' class='form-control  ' name='userid' value='<?php echo $me['user_ID'] ?>'   > 
                                </div>
                                <div class='col-md-6 mb-3'>
                                    <label>New password</label>
                                    <input class='form-control  ' type='password' name='pass'   > 
                                </div>
                                <!--------------------------------->
                                <div class='col-md-6 mb-3'>
                                    <label>Repeat new password</label>
                                    <input  class='form-control  ' type='password' name='pass1'   > 
                                </div> 
                                <div class='col-md-6 mb-3'>  </div> 
                                <!--------------------------------->
                                
                                <div class='col-md-12 mb-3'> 
                                    <input type='submit'  class='form-control btn btn-primary ' value='Change Now'   /> 
                                </div> 
                                
                                <div class='feedback m-3'></div>
                                 
                                
                            </div>
                        </div>
                    </form>
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