
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require ADMIN. 'includes/header.inc.php' ?>
    <style>
			.cursor {cursor: pointer;} 
			.no_style {
				list-style-type: none!important;
			}

			.inline .no_style li  {
				display: inline-block;
			}
			.border_blend {
			    border-color: #c38c1d;
			}
			.border_blend a {
			   color: #c38c1d; 
			}
			.btn_blend{background:#c38c1d;color:white;}
			.btn_blend:hover{border-color:grey;color:black;}
			.hidden {
			    display:none!important;
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
                <h3 class="mb-1 fw-bold">Rider Support</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rider Support</li>
                  </ol>
                </nav>
              </div>
            </div>
 
 

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">
              
              
               <div class="content-wrapper px-4 py-2">
            <div class="content-header"> <h3>New Email</h3>
            </div>
            <div class="content px-2">
                
                    <div class='container alert'>
                        
                        
                        <div class="card mb-4">
		<div class="card-header">
			Support Chats 
		</div> 
		<div class="card-body">
			<div class="table-responsive"> 
                <ul class="list-group">
                    <!--<pre>-->
                    <?php
                      //print_r($this->chatheads);
                    ?><!--</pre>-->
                    
                    <?php foreach($this->chatheads as $row) { ?>
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                        <a href="/dashboard/communicate/rider-support?id=<?= $row['rider_id'] ?>&name=<?= $row['rider_name'] 
                        ?>&email=<?= $row['rider_email']  ?>&phone=<?= $row['rider_phone'] ?>" class="list-group-itemx d-flex justify-content-start align-items-center" >
                            <span style='color:grey'>Chat with  -</span>  [<span class='text-danger' ><?= !empty($row['rider_name']) ?$row['rider_name']: substr($row['rider_id'],0,10).'...' ?></span>]
                        </a> 
                    </li>
                    <?php } ?>
                    
                </ul>
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
  </body>

</html>