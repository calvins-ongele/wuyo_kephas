
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require ADMIN. 'includes/header.inc.php' ?>
    <style>
        .hidden {
            display:none;
        }
        .dispboth {
            display:flex;
            justify-content:space-between;
        }
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
                <h3 class="mb-1 fw-bold">Profile Settings</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
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
                <h1>Change or provide personal details</h1>
            </div>
            <div class="content px-2">
                
                <div class='container'><hr></div>
                
                
                <div class='container'>
                    <h4>Please provide honest details</h4>
            
                    <form id='walletdeposit'>
                                    <input type='hidden' class='form-control udataid' rel=''  value='self_edit'>
                        <div class='form-group'>
                            <div class='row'>
                                <!--------------------------------->
                                <?php $me = $this->_me; ?>
                                <div class='col-md-6 mb-3'>
                                    <label>First Name</label>
                                    <input class='form-control udata' rel='user_full_name'  value='<?php echo $me['user_full_name'] ?>'>
                                    <span class='user_full_name'></span>
                                </div>
                                
                                <div class='col-md-6 mb-3'>
                                    <label class='dispboth'><span>Email</span> </label>
                                   
                                    <input class='form-control udata' rel='user_email'  value='<?php echo $me['user_email'] ?>'>
                                    <span class='user_email'></span>
                                </div>
                                <!--------------------------------->
                                <div class='col-md-6 mb-3'> 
                                    <label class='dispboth'><span>Tel</span>  </label>
                                   
                                    <input  class='form-control udata' rel='user_phone'  value='<?php echo $me['user_phone'] ?>'>
                                    <span class='user_phone'></span>
                                </div> 
                                 
                                <div class='col-md-6 mb-3'>
                                    <label>Your Role</label>
                                    <input  class='form-control ' value='<?php echo $me['user_role'] ?>' readonly >
                                   
                                </div>
                                <!--------------------------------->
                              
                            
                                
                                 
                                
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