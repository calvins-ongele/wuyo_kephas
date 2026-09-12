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
                
                <div class="accordion" id="accordionExample">
                    
                 <?php foreach($this->data as $row) { 
                  
                  $email_id = $row['id'];
                  $email_subject = $row['subject'];
                  $email_from = $row['from'];
                  $email_date = $row['date'];
                  $email_snippet = $row['snippet']; 
                  
                  ?>
                    
                    
                  <div class="card">
                    <div class="card-header" id="heading<?= $email_id ?>">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?= $email_id ?>" 
                            aria-expanded="false" aria-controls="collapse<?= $email_id ?>">
                          <?= $email_subject ?> from [<?= $email_from ?>] 
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapse<?= $email_id ?>" class="collapse " aria-labelledby="heading<?= $email_id ?>" data-parent="#accordionExample">
                      <div class="card-body">  
                      
                          <small><?= $email_date ?></small>
                            <?= $email_snippet ?>
                  
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
                
                   
                      <section>
                  
             

              </section>
                    
                    
                    
                
                 
            </div>
        </div>
        
        
        <?php require 'includes/footer.inc.php' ?>
        
          
    </main> 
 
</body>

</html>