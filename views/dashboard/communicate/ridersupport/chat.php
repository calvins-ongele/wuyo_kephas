
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
                
                    <div class='container alert'>
                        
                        
                        	<div class="card mb-4">
                    		<div class="card-header">
                    			Support Chats 
                    		</div> 
                    		<div class="card-body">
                    			<div class="table-responsive">
                    			 <div class="container mt-5 mb-5">
                                        <div class=''> 
                                        
                                    <?php 
                                        // echo "<pre>";
                                        // print_r($this->chats);
                                        // echo "</pre>";
                                            $out = '';
                                            foreach ($this->chats as $row) {
                                                $time = date('Y/m/d H:i:s',$row['timestamp']['_seconds']);
                                                $align = $row['sender'] != 'rider' ? 'text-end' : 'text-start';
                                                $out .= "<div class='$align mb-2' style='overflow:auto;color:darkgrey'><strong>{$row['text']}</strong>
                                                <div align='right'><small>$time</small></div>
                                                </div>";
                                            }
                                        
                                        ?>         
                                      <h4>Chat with <?= $_GET['name'] ?? '' ?>   </h4> 
                                      <small>Email: <span style='color:green;'><?= $_GET['email'] ?></span></small>
                                      <small>Phone: <span style='color:green;'><?= $_GET['phone'] ?></span></small>
                                      <small>ID: <span style='color:green;'><?= $_GET['id'] ?></span></small>
                                        <div id="chat-box" class="border p-3 mb-3" style="height: 300px; overflow-y: scroll;">
                                       
                                            <?= $out ?>
                                        </div>   
                                        
                                             
                                              <form id="chatform">
                                                  
                                                    <div class="input-group">
                                                        <input type='hidden' name='rider_id' value='<?= $_GET['id'] ?>'>
                                                        <input name='text'  type="text" id="message" class="form-control" placeholder="Type a message" required> 
                                                        <button class="btn btn-primary" type="submit">Send</button>
                                                    </div>
                                                    
                                                    
                                            
                                                </form>
                                         </div>
                                </div>
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
                $('#chatform').submit(function(e) {
                    e.preventDefault();
                    let form = new FormData(this); 
                    
                    const data = _data(form, 'new_reply_rider');
                     
                    const msg = $('#message').val();
                    
                    const out = `<div class='text-end mb-2' style='overflow:auto;color:darkgrey'><strong>${msg}</strong>
                                <div align='right'><small>now</small></div>
                                </div>`;
                                
                    $('#chat-box').append(out);
                    
                    
                });
            })
        </script>
  </body>

</html>