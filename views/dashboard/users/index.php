
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
 
 

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">
              
              
               <div>
                    <form method='get'>
                        <input name='q' type='search' class='' style="width:80%" placeholder='Search user by email or id'>
                        <button type='submit'>Search</button>
                    </form>
                </div>
                
                    <div class='container alert'>
                        <div class='table-responsive table-outer'>
                            <table class='table table-striped table-hover' style='font-size:12px'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th> 
                                        <th>Created at</th> 
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    $v = "<span class='text-success' >V</span>";
                                    $nv = "<span class='text-danger' >NV</span>"; 
                                    
                                    $i = 0; foreach($this->users as $row) { $i++; ?>
                                    <tr>
                                        <td title="<?= $row['uid'] ?>"><?php echo $i ?></td>
                                        <td><a href='/dashboard/rides?user_id=<?= $row['uid'] ?>'><?php echo $row['name'] ?></a>   <?= $row['status']=='active' ? $v : $nv ?>
                                            
                                        </td>
                                        <td><?php echo $row['email'] ?>  </td> 
                                        <td><?php echo $row['phone'] ?>   </td>
                                       
                                        <td><?php echo date('d-m-Y', $row['created_at']['_seconds']) ?> </td> 
                                         
                                        
                                        <td>
                                            <a class="btn btn-sm btn-danger" class='dropUsers' href='#' rel='<?php echo $row['uid'] ?>'   ><i class='fa fa-trash'></i> Delete</a>
                                            <?php if ($row['status'] == 'active') { ?>  
                                            <a class="btn btn-sm btn-warning mt-1" class='suspend' name='<?php echo $row['name'] ?>' rel='<?= $row['uid'] ?>' href='#' rel='<?php echo $row['uid'] ?>' >Suspend</a>
                                            <?php } if($row['status'] != 'active') { ?><br>
                                            <a class="btn btn-sm btn-success mt-1" class='reactivate' name='<?php echo $row['name'] ?>' rel='<?= $row['uid'] ?>' href='#' rel='<?php echo $row['uid'] ?>'>Activate</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
    $(document).ready(function () {
        
        $(".suspend").click(function(e) {
            e.preventDefault();
            const uuid = $(this).attr('rel');
            const name = $(this).attr('name');
            const action = 'suspended';
            send_action(action, uuid, name);
        });
        $(".reactivate").click(function(e) {
            e.preventDefault();
            const uuid = $(this).attr('rel');
            const name = $(this).attr('name');
            const action = 'active';
            send_action(action, uuid, name);
        });
        
        function send_action(action, uuid, name = '') {
           let form = new FormData();
           form.set('rider_id', uuid);
           form.set('status', action);
           const input = prompt(`Confirm with reason for ${action=='suspended'?'suspending':'activating'} ${name}`);
           
           form.set('reason', input);
           
           if (input) {
               const data = _data(form, "change_rider_status");
               alert(data.msg);
               location.reload();
           }
        }
         
        
        
             $('.dropUsers').click(function(e) {
                e.preventDefault();
                var form = new FormData();
                form.append('id', $(this).attr('rel') );  
                if (confirm("Are you sure?")) {
                    const data = _data(form, 'delete_users');
                    if (data['error'] == 'true') alert(data['msg']);
                    else {
                        alert(data['msg']);
                        location.reload();
                    }
                }
             
            });
       
    });
  </script>
  </body>

</html>