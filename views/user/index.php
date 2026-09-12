<!DOCTYPE html>
<html lang="en">

<head> 
    <?php require 'includes/header.inc.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chart-container {
           width: 700px;
           height: 450px;
        }
      </style>
      <style>
                #chat-box {
                background-color: #f8f9fa;
            }
            
            .text-start {
                background-color: #e9ecef;
                border-radius: 10px;
                padding: 10px;
                max-width: 70%;
            }
            
            .text-end {
                background-color: #0d6efd;
                color: white;
                border-radius: 10px;
                padding: 10px;
                max-width: 70%;
                margin-left: auto;
            }
            .hidden {
                display:none!important;
            }
            .mod {
                max-width:300px;
                border:1px solid var(--blend);
            }
            .text-end a {
                color:white;
            }
    </style>
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <main class="wrapper">
         
        <?php 
        $pageid = 'home';
        
        require 'includes/sidebar.inc.php' ?>
        
        
        
        <div class="content-wrapper px-4 py-2">
            <div class="content-header"> 
            </div>
            <div class="content px-2">
                
                        
                <div class='container'>
                    <div class='table-outer table-responsive' style="overflow:auto">
                        <table class='table'>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            
                            <tbody id='tbody'>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
         

          

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
        </div>
        
        
        <?php require 'includes/footer.inc.php' ?>
        
          
    </main> 
 
</body>

</html>