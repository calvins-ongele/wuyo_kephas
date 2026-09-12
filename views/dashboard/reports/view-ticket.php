
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
             
            <div class="content px-2">
                
                 	 
            	<div class="card mb-4">
            		<div class="card-header">
            			<?php echo $this->msg['subject'] ?> 
            		</div> 
            		<div class="card-body"> 
            			    <p>
            			        <?php echo $this->msg['message'] ?>
            			    </p> 
            		</div>
            		<div class="card-footer">
            		    <p>
            		        Sender: <i style='color:blac;font-weight:bolder;'><?php echo $this->msg['name'] ?></i> &nbsp; 
            		        Phone: <i style='color:blac;font-weight:bolder;'><?php echo $this->msg['phone'] ?></i></i> &nbsp; 
            		        Status: <i style='color:blac;font-weight:bolder;'><?php echo $this->msg['status'] ?></i></i> &nbsp; 
            		        Date: <i style='color:blac;font-weight:bolder;'><?php echo date('d/m/Y', strtotime($this->msg['date'])) ?></i> &nbsp;
            		        Email: <a href='/<?= PROFILE_NAV  ?>/communicate/email?email=<?php echo $this->msg['email'] ?>'><i style='color:blac;font-weight:bolder;'
            		                ><?php echo $this->msg['email'] ?></i></i> 
            		        <i class='fa fa-external-link'></i></a>
            		            
            		        
            		    </p>
            		    <div class='row'>
            		        <div class='col-md-6'>
            		            <a href='#' class='deleteticket btn btn-danger' rel='<?php echo $this->msg['id'] ?>'>Delete this ticket </a>
            		        </div>
            		        <div class='col-md-6'>
            		            <?php if ( strtolower($this->msg['status']) != 'closed') { ?>
            		            <a href='#' class='closeticket btn btn-warning' rel='<?php echo $this->msg['id'] ?>'>Close this ticket </a>
            		            <?php } ?>
            		        </div>
            		    </div>
            		    
            		</div>
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
      <script>
            $(function() { 
                
                $('.deleteticket').click(function(e) {
                    e.preventDefault();
                    let form = new FormData();
                    form.append('id', $(this).attr('rel') );
                    
                    if (confirm("You want to permanently delete this?")) {
                        const data = _data(form, 'deleteticket');
                    }
                    
                    alert('Success');
                    location.href="/<?= PROFILE_NAV  ?>/reports/contacts"
                });
                $('.closeticket').click(function(e) {
                    e.preventDefault();
                    let form = new FormData();
                    form.append('id', $(this).attr('rel') );
                    
                    if (confirm("You want to permanently close this?")) {
                        const data = _data(form, 'closeticket');
                    }
                    alert('Success');
                    location.reload();
                });
                
                
                
            });
        </script>
  </body>

</html>