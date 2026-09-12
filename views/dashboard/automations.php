<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require 'includes/header.inc.php' ?>
  
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
            <div class="app-brand-sm d-lg-nonex d-sm-block">
              <h2 style="margin-bottom:-5px;">Automations</h2>
              <small style='color:grey;'>Visual flow-based rules that process email and account events</small>
            </div>
            <!-- App brand sm end -->

            <!-- App header actions start -->
            <div class="header-actions">
              <div class="d-lg-block d-none">

              
                <!-- Search container end -->

              </div>
              <!-- Header actions starts -->
       
              <!-- Header actions ends -->
              <div class="dropdown ms-3">
                <a id="userSettings" class="openrulemodalc btn btn-sm btn-secondary dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
                  href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-md-block me-2"><i>+</i> New Rule</span>
                  
                </a>
            
              </div>
            </div>
            <!-- App header actions end -->

          </div>
          <!-- App header ends -->

          <!-- App hero header starts -->
          <div class="app-hero-headerx">

        
            <!-- Page Title end -->

           
            <!-- Header graphs end -->

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row start -->
            <div class="rowx container-sm">
                 
                 <div class='container'>
                     
                    <div class="alert alert-danger" role="alert">
                      Enable-mailbox-automation role is required
                    </div>
                    
                    <div class="card alertx p-5 " style="border:1px dashed grey">
                        <div style="right:0; left:0; margin-top:20px ">
                            <h5 class='text-center'>No automation rules yet</h5>
                            <p class='text-center'>Build visual flows to automate email handling and account events</p>
                            <center>
                                <a href="#" class='btn btn-sm btn-secondary openrulemodalc' ><i class="bi bi-plus"></i> Build your first rule</a>
                            </center>
                        </div>
                    </div>
                
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
    
    
    <div class="vmodal" id="openrulemodal"> 
    <div class="vmodal-backdrop"></div> 
    <div class="vmodal-dialog"> 
        <div class="vmodal-header">
            <h2 class="vmodal-title">New Automation Rule</h2> 
            <button class="vmodal-close">&times;</button>
        </div> 
        <div class="vmodal-body">
            <section id="displayDocData"> 
            
                <div class="form-group mb-3">
                    <label>RULE NAME*</label>
                    <input type="text" class="form-control" name='name' placeholder="e.g. Auto-tag support emails">
                </div>
                
                <div class="form-group mb-3">
                    <label>DESCRIPTION</label>
                    <input type="text" class="form-control" name='description' placeholder="What does this rule do?">
                </div>
                
                <div class="form-group mb-3">
                    <label>TARGET ACCOUNTS</label>
                    <select name='target' class="form-control" >
                        <option value="my_accounts">My accounts (owned by me)</option>
                    </select>
                </div>
                
            </section>
        </div> 
        <div class="vmodal-footer"> 
            <button class="vbtn btn-success" id="approve">Create & Design Flow </button>
            <button class="vbtn vbtn-secondary" data-modal-close>
                CANCEL
            </button> 
        </div> 
    </div>
</div>

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
    <?php require 'public/includes/modal.inc.php' ?>
 
    <script>
        $(function() {
            
        const openrulemodal = document.querySelector("#openrulemodal");
            
       
        
        $(".openrulemodalc").click(function(e) {
            e.preventDefault();
            openrulemodal.classList.add('show');
        })
         
            
            
            
        })
    </script>
  </body>

</html>