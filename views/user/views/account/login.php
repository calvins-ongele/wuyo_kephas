<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<?php require 'public/includes/header.inc.php' ?>


<style>
  body {
    background:#000;
    font-family:'Inter', sans-serif;
    color:#fff;
  }
  .form-card {
    background:#222;
    border-radius:16px;
    padding:2rem;
    box-shadow:0 0 14px rgba(255,255,255,0.06);
  }
  .form-control {
    background:#444;
    border:none;
    border-radius:30px;
    padding:0.85rem 1.2rem;
    color:#fff;
    font-size:0.95rem;
  }
  .form-control::placeholder {
    color:rgba(255,255,255,0.6);
  }
  .form-control:focus {
    background:#555;
    color:#fff;
    box-shadow:0 0 6px rgba(255,0,0,0.4);
  }
  textarea.form-control {
    border-radius:16px;
    min-height:140px;
    resize:none;
  }
  .btn-send {
    background:#c00;
    color:#fff;
    font-weight:600;
    border:none;
    border-radius:30px;
    padding:0.7rem 2rem;
    transition:0.2s;
  }
  .btn-send:hover {
    background:#e00;
    transform:scale(1.04);
  }
  .contact-heading {
    font-size:3rem;
    font-weight:700;
    margin-bottom:0.5rem;
  }
  .sub-text {
    font-size:0.95rem;
    opacity:0.8;
  }
</style> 
<section class="container my-5">
 

  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">
      <div class="form-card">
        <form id="contactForm" class="d-flex flex-column gap-4 universal-form" data-feedback='fedback' data-url='login' >

         

          <div>
              <label>Email</label>
            <input type="text" name='username' class="form-control w-100" placeholder="Email" id="d">
          </div>
 

          <div>
              <label>Password</label>
            <input type="password" name='pass' class="form-control w-100"  id="phone">
          </div>

          <div class="text-start">
            <button type="submit" class="btn-send" id="sendBtn">Submit</button>
          </div>
          <div class="feedback-box fedback" ></div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php require 'public/includes/footer.inc.php' ?>

</body>
</html>
