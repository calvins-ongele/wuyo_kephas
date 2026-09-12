<?php 

 $emails = CustomFunctions::fetchEmails('INBOX', 5  ); 
  

?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <?php require ADMIN . 'includes/header.inc.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <main class="wrapper">
         
        <?php 
        $pageid = 'communicate';
        
        require ADMIN . 'includes/sidebar.inc.php' ?>
        
        
        
        <div class="content-wrapper px-4 py-2">
            <div class="content-header"> <h3>New Email</h3>
            </div>
            <div class="content px-2">
                
                    <div class='container alert'>
                       
                       <div class="mt-2"> 
                        
                        <form action="" id="sendNewEmail">
                             <div class="row"> 
        						<div class="col-md-12">  
                                    <div class="form-group">  
        								
                                        <label>Pick email to reply to </label>
        								<select name='subjectID' class='form-control'   >
        								    <option hidden>Select Email to Reply to</option>
        								    <?php $i=0; foreach($emails as $email) { ?>
        								        <option value="<?= $i ?>" index='<?= $i ?>' ><?= $email['subject'] ?></option>
        								    <?php $i++; } ?>
        								</select><br>
        								
        								
                                        <label>Pick email to send from</label>
        								<input name='send_from' type='email' class='form-control' list="from"  autocomplete="new-password"  >
        								<datalist id='from'>
        								    <option value='info@equitybank.co.ke'>info@equitybank.co.ke</option>
        								    <option value='customercare@equitybank.co.ke'>customercare@equitybank.co.ke</option>
        								</datalist> 
        								 <br> 
        								<label class="control-label">Email Body</label>
        								<textarea name='msg'  class="form-control " id="terms"  ></textarea><br>
        								 
        								<?php foreach($emails as $email) { ?>
        								    <input type='hidden' value="<?= $email['email_id'] ?>"  name='email_id[]' > <!----emai id-----> 
        								    <input type='hidden' value="<?= $email['date'] ?>"  name='date[]' > <!----date id----->
        								    <input type='hidden' value="<?= $email['from'] ?>"  name='from[]' > <!----email-----> 
        								    <input type='hidden' value="<?= $email['subject'] ?>"  name='email_subject[]' > <!----subject-----> 
        								    <input type='hidden' value="<?= $email['body'] ?>"  name='body[]' > <!----body-----> 
        								<?php  } ?>
        								 
        								
        								
                                 
        							</div> 
        							  
        							<!------------------------------------------> 
        							<hr>
        					    
        							<div class="form-group"> 
        								<button type='submit' class="submittexrms btn btn_blend btn-block">Submit Now</button>
        							</div>
                                    <div class="alert mt-2 fdback"></div>
        							<!------------------------------------------> 
        						</div>
 
					        </div>
                     
                        </form>
                    </div>
                        
                        
 
                    </div>
                
                 
            </div>
        </div>
        
        
        <?php require ADMIN.'includes/footer.inc.php' ?>
        
        <?php $json = json_encode($emails); ?>
     
        <script> 
        
        const data1 = `<?php echo $json ?>`;
       // console.log(JSON.parse(data))
        
            $(function() {
                
                let email_id;
                let email_title;
                let email_body;
                 
                  
                $("select[name='subjectID']").change(function() {
                   
                });
                
                
                
                $('#sendNewEmail').submit(function(e) {
                    e.preventDefault();
                    let form = new FormData(this);  
                    
                    const data = _data(form, 'new_email_send');
                     if (data['error'] == 'true') alert(data['msg']);
                        else if (data['error'] == 'false') {
                            alert(data['msg']);
                           // location.reload(); //href='/admin/events';
                        }
                });
            })
        </script>
                
    
    </main> 
 
</body>

</html>