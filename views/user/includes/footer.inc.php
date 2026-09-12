<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
 
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="/"> <?php echo $this->_company['c_name'] ?></a>.</strong> All rights reserved.
</footer>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.overlayScrollbars.min.js"></script>
<script src="/assets/js/adminlte.min.js"></script>
<script src='/assets/js/dashb.js?v=<?php echo rand() ?>'></script>
<?php  if ($this->_company['c_sessions_last'] == 'True') { ?>
<script>
    setInterval(function() {
       _data(new FormData(), 'session_last_longer');  
    }, 1000*60*20 );
    
</script>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php  if ($this->_company['c_sessions_last'] == 'True') { ?>
<script>

$(function() {
    $('.clearEmail').click(function(e) {
        e.preventDefault();
        const email = $(this).attr('rel') ;
        let form = new FormData();
        form.set('email', email);
        
        alert(email)
        
        Swal.fire({
          title: "Are you sure?",
          text: "This will clear the entire email. The user will need to be setup afresh.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed)  {
            
              const data = _data(form, 'clear_entire_email');
             Swal.fire({
                title: "Deleted!",
                text: "Email access has been deleted.",
                icon: "success"
              }).then(()=> {
                  location.reload();
              })
               
          }
        });  


    });
    
    
    $('.deleteSingEmail').click(function(e) {
        
        e.preventDefault();
        let form = new FormData();
        form.set('email', $(this).attr('email') );
        form.set('id', $(this).attr('emailid') );
        
        Swal.fire({
          title: "Are you sure?",
          text: "This will delete this highlighted email.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed)  {
            
              const data = _data(form, 'delete_an_email');
              Swal.fire({
                title: "Deleted!",
                text: "Email has been deleted.",
                icon: "success"
              });
          }
        });
    })
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
})

    setInterval(function() {
       _data(new FormData(), 'session_last_longer');  
    }, 1000*60*20 );
    
   const audio = new Audio('/public/assets/uploads/idoberg-relaxing-guitar-loop-v5-245859.mp3');
   fetchdata();
   
   setInterval(()=> { 
       fetchdata();
        
    }, 1000 * 60 * 0.5);
    
   function fetchdata() {
        const data = _data(new FormData(), 'alert'); 
        alerts(data['msg']);
   }

  function alerts(data) {
       
    let validCount = 0;
    let outputhtml = '';
    
   for (let i=0; i < data.length; i++) {
       const j = i + 1;
       
       if (data[i]['alerted'] == 'false') 
       validCount++;
       
       const txt = (data[i]['alerted'] == 'false') ? `<span class='btn btn-sm btn-primary markAsCopied' email='${data[i]['user_email']}'>Added?</span>`:'';
       
       
        outputhtml += `
            <tr>
                <td>${j}</td>
                <td>${data[i]['user_email']} <span class='copyEmail' email='${data[i]['user_email']}'><i class='bi bi-copy'></i></span></td>
                <td>${data[i]['user_created_at']}</td>
                <td>${txt}
                
                <a href='#' rel='${data[i]['user_email']} ' class='btn btn-sm btn-danger ml-2  deleteemail' >Delete</a>
                
                </td>
            <tr>
        `;
    }
    
    $("#tbody").html(outputhtml);
    $("#alert").text(validCount)
    
    
    if (validCount > 0) {
        
        $("#alert").addClass('badge text-bg-danger');
       
        audio.currentTime = 0; // Rewind to the start if it was already playing
        audio.volume = parseFloat(`<?= $this->_company['audio'] ?>`);
        audio.play()
            .then(() => console.log('Audio playing successfully'))
            .catch(error => console.error('Audio playback failed:', error));
  
    }
  }
  
  $('.deleteemail').click(function(e) {
      e.preventDefault();
      
      let form = new FormData();
      form.set('email',  $(this).attr('rel') );
      
      if (confirm('Are you sure you want to delete this?')) {
          const data = _data(form, 'deleteemails');
          
          alert('Success');
          location.reload();
      }
  })
  
  $('.markAsCopied').click(function(e) {
      e.preventDefault();
      const email = $(this).attr('email'); 
      let form = new FormData();
        form.set('email', email);
        _data(form, 'alerted'); 
  });
  
  $('.copyEmail').click(async function(e) {
      e.preventDefault();
      const email = $(this).attr('email');
      
     try {
        await navigator.clipboard.writeText(email);
        alert('Email copied to clipboard');
       
        
      } catch (err) {
        console.error('Failed to copy email: ', err);
      }
  });
  
  
  document.getElementById('playButton').addEventListener('click', function() {
    audio.currentTime = 0; // Rewind to the start if it was already playing
    audio.play()
        .then(() => console.log('Audio playing successfully'))
        .catch(error => console.error('Audio playback failed:', error));
});
    
</script>
<?php } ?>