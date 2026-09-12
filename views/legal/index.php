<!DOCTYPE html>
<html lang="en">
<head> 
    <?php require 'public/includes/header.inc.php' ?> 
</head>

<body> 
    <?php require 'public/includes/navbar.inc.php' ?>
    
    
    
    
     <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(/public/assets/uploads/taxi.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title"><?php echo $this->_content[$this->pid]['title'] ?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active"><?php echo $this->_content[$this->pid]['title'] ?></li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->
        <?php
            function replace($b = '', $c = []) {
                $d = [ 'c_address', 'c_tel', 'c_email', 'c_name'  ];
                $body = $b;
                foreach($d as $r) {
                    $body = str_replace("[$r]",  "<b>".$c["$r"]. "</b>", $body );
                }
                
                return $body;
            }
        ?>


        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">  
               <?=  replace($this->_content[$this->pid]['body'], $this->_company ) ?>
            </div>
        </div>
        <!-- about area end -->

 

 

 

    </main>
    
   


 

    <?php require 'public/includes/footer.inc.php' ?>

    

</body>

</html>