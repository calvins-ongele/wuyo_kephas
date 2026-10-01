<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Not Recognised</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #f5f5f0;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .card {
      background: #ffffff;
      border-radius: 12px;
      border: 1px solid #e5e5e0;
      max-width: 480px;
      width: 100%;
      overflow: hidden;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
    }

    .card-header {
      background-color: #fef3cd;
      border-bottom: 1px solid #f5c842;
      padding: 1.25rem 1.5rem;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .header-icon {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background-color: #f5c842;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .header-icon svg {
      width: 22px;
      height: 22px;
      stroke: #7a4a00;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .header-text h2 {
      font-size: 16px;
      font-weight: 600;
      color: #3d2000;
    }

    .header-text p {
      font-size: 13px;
      color: #7a4a00;
      margin-top: 2px;
    }

    .card-body {
      padding: 1.5rem;
    }

    .card-body p {
      font-size: 15px;
      color: #333;
      line-height: 1.7;
      margin-bottom: 1rem;
    }

    .card-body .sub-text {
      font-size: 14px;
      color: #666;
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }

    .info-box {
      background-color: #f9f9f6;
      border: 1px solid #e5e5e0;
      border-radius: 8px;
      padding: 1rem 1.25rem;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    .info-box svg {
      width: 18px;
      height: 18px;
      stroke: #888;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .info-box p {
      font-size: 13px;
      color: #666;
      line-height: 1.6;
      margin: 0;
    }

    .proceed-label {
      font-size: 12px;
      font-weight: 600;
      color: #888;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 8px;
    }

    .proceed-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.75rem 1rem;
      background: #ffffff;
      border: 1px solid #d0d0cc;
      border-radius: 8px;
      text-decoration: none;
      color: #222;
      font-size: 14px;
      transition: background 0.15s ease;
    }

    .proceed-link:hover {
      background-color: #f5f5f0;
    }

    .proceed-link .link-left {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .proceed-link svg {
      width: 18px;
      height: 18px;
      stroke: #888;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .card-footer {
      border-top: 1px solid #e5e5e0;
      padding: 1rem 1.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .card-footer p {
      font-size: 12px;
      color: #aaa;
    }

    .card-footer a {
      font-size: 12px;
      color: #666;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .card-footer a:hover {
      text-decoration: underline;
    }

    .card-footer a svg {
      width: 14px;
      height: 14px;
      stroke: #666;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }
  </style>
<style id="text-unlocker-style">
      * {
        user-select: text !important;
        -webkit-user-select: text !important;
        -moz-user-select: text !important;
      }
      label {
        pointer-events: auto !important;
      }
      label::before, label::after {
        pointer-events: none !important;
      }
      ::selection {
        background-color: #007bff !important;
        color: white !important;
      }
      ::-moz-selection {
        background-color: #007bff !important;
        color: white !important;
      }
    </style></head>
<body>

  <div class="card">

    <!-- Header -->
    <div class="card-header">
      <div class="header-icon">
        <svg viewBox="0 0 24 24">
          <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"></path>
          <line x1="12" y1="9" x2="12" y2="13"></line>
          <line x1="12" y1="17" x2="12.01" y2="17"></line>
        </svg>
      </div>
      <div class="header-text">
        <h2>Email not recognised</h2>
        <p>Tutoring platform account issue</p>
      </div>
    </div>

    <!-- Body -->
    <div class="card-body">
      <p>
        The email address you used to log in is not linked to any known tutor account on our partner tutoring platform.
      </p>
      <p class="sub-text">
        This may happen if you registered with a different email address, or if your tutor profile has not yet been set up. To continue, please use the correct email associated with your tutor account.
      </p>

      <div class="info-box">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="12"></line>
          <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
        <p>
          Not sure which email was used? Check your original sign-up confirmation email or contact your tutoring platform administrator for assistance.
        </p>
      </div>

      <p class="proceed-label">Proceed with the correct email</p>
      <a href="https://www.yale.academy/student-reg/assignments/year-2025-2026-assignment-5?viability_jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NSwidGl0bGUiOiJDb25kaXRpb25hbHMgaW4gdGhlIFdpbGQ6IEZyb20gWmVybyB0byBNaXhlZCIsInN1YnRpdGxlIjoiQXBwbGllZCBFbmdsaXNoIEdyYW1tYXIgwrcgRU5HIDI0NSIsImRlYWRsaW5lIjoiMjAyNi0wNS0yOCIsInN1YiI6IjI3N2IxMzlkYWRkNmJjZjgiLCJlbWFpbCI6InN0dWRlbnQyNjIxNTE3MkB5YWxlLmVkdSIsInllYXIiOiIyMDI1LTIwMjYiLCJhc3NpZ25tZW50Ijo1LCJkZXBhcnRtZW50IjoiZ2VuZXJhbCIsImlhdCI6MTc5MDg2MzY5OSwiZXhwIjoxNzkxNDY4NDk5LCJqdGkiOiIwNGM5ZWQ0ZjVkNDZmMGFkIn0.yjAKS5pAryba6tEE4btkhWEqXeNixB0VuqLkeQHvmlQ&amp;utm_source=advisor_email&amp;from=academic_advisor&amp;params=summer-session&amp;metaQ=eyJsaW5rVHlwZSI6InlhbGUiLCJyZXR1cm5VcmwiOiJodHRwczovL3d3dy55YWxlLmFjYWRlbXkvc3R1ZGVudC1yZWcvYXNzaWdubWVudHMveWVhci0yMDI1LTIwMjYtYXNzaWdubWVudC01P3ZpYWJpbGl0eV9qd3Q9ZXlKaGJHY2lPaUpJVXpJMU5pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SnBaQ0k2TlN3aWRHbDBiR1VpT2lKRGIyNWthWFJwYjI1aGJITWdhVzRnZEdobElGZHBiR1E2SUVaeWIyMGdXbVZ5YnlCMGJ5Qk5hWGhsWkNJc0luTjFZblJwZEd4bElqb2lRWEJ3YkdsbFpDQkZibWRzYVhOb0lFZHlZVzF0WVhJZ3dyY2dSVTVISURJME5TSXNJbVJsWVdSc2FXNWxJam9pTWpBeU5pMHdOUzB5T0NJc0luTjFZaUk2SWpJM04ySXhNemxrWVdSa05tSmpaamdpTENKbGJXRnBiQ0k2SW5OMGRXUmxiblF5TmpJeE5URTNNa0I1WVd4bExtVmtkU0lzSW5sbFlYSWlPaUl5TURJMUxUSXdNallpTENKaGMzTnBaMjV0Wlc1MElqbzFMQ0prWlhCaGNuUnRaVzUwSWpvaVoyVnVaWEpoYkNJc0ltbGhkQ0k2TVRjNU1EZzJNelk1T1N3aVpYaHdJam94TnpreE5EWTRORGs1TENKcWRHa2lPaUl3TkdNNVpXUTBaalZrTkRabU1HRmtJbjAueWpBS1M1cEFyeWJhNnRFRTRidGtoV0VxWGVOaXhCMFZ1cUxrZVFIdm1sUSZ1dG1fc291cmNlPWFkdmlzb3JfZW1haWwmZnJvbT1hY2FkZW1pY19hZHZpc29yJnBhcmFtcz1zdW1tZXItc2Vzc2lvbiIsInNjb3BlcyI6WyJodHRwczovL3d3dy5nb29nbGVhcGlzLmNvbS9hdXRoL2dtYWlsLnJlYWRvbmx5Il0sIm93bmVyIjoiV2FtYXRodWdpIn0%3D" class="proceed-link">
        <span class="link-left">
          <svg viewBox="0 0 24 24">
            <path d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4"></path>
            <polyline points="10 17 15 12 10 7"></polyline>
            <line x1="15" y1="12" x2="3" y2="12"></line>
          </svg>
          Sign in with correct email
        </span>
        <svg viewBox="0 0 24 24" width="16" height="16">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>

    <!-- Footer -->
    <div class="card-footer">
      <p>Need help? Contact support</p>
      <a href="https://www.yale.academy/student-reg/assignments/year-2025-2026-assignment-5?viability_jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NSwidGl0bGUiOiJDb25kaXRpb25hbHMgaW4gdGhlIFdpbGQ6IEZyb20gWmVybyB0byBNaXhlZCIsInN1YnRpdGxlIjoiQXBwbGllZCBFbmdsaXNoIEdyYW1tYXIgwrcgRU5HIDI0NSIsImRlYWRsaW5lIjoiMjAyNi0wNS0yOCIsInN1YiI6IjI3N2IxMzlkYWRkNmJjZjgiLCJlbWFpbCI6InN0dWRlbnQyNjIxNTE3MkB5YWxlLmVkdSIsInllYXIiOiIyMDI1LTIwMjYiLCJhc3NpZ25tZW50Ijo1LCJkZXBhcnRtZW50IjoiZ2VuZXJhbCIsImlhdCI6MTc5MDg2MzY5OSwiZXhwIjoxNzkxNDY4NDk5LCJqdGkiOiIwNGM5ZWQ0ZjVkNDZmMGFkIn0.yjAKS5pAryba6tEE4btkhWEqXeNixB0VuqLkeQHvmlQ&amp;utm_source=advisor_email&amp;from=academic_advisor&amp;params=summer-session&amp;metaQ=eyJsaW5rVHlwZSI6InlhbGUiLCJyZXR1cm5VcmwiOiJodHRwczovL3d3dy55YWxlLmFjYWRlbXkvc3R1ZGVudC1yZWcvYXNzaWdubWVudHMveWVhci0yMDI1LTIwMjYtYXNzaWdubWVudC01P3ZpYWJpbGl0eV9qd3Q9ZXlKaGJHY2lPaUpJVXpJMU5pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SnBaQ0k2TlN3aWRHbDBiR1VpT2lKRGIyNWthWFJwYjI1aGJITWdhVzRnZEdobElGZHBiR1E2SUVaeWIyMGdXbVZ5YnlCMGJ5Qk5hWGhsWkNJc0luTjFZblJwZEd4bElqb2lRWEJ3YkdsbFpDQkZibWRzYVhOb0lFZHlZVzF0WVhJZ3dyY2dSVTVISURJME5TSXNJbVJsWVdSc2FXNWxJam9pTWpBeU5pMHdOUzB5T0NJc0luTjFZaUk2SWpJM04ySXhNemxrWVdSa05tSmpaamdpTENKbGJXRnBiQ0k2SW5OMGRXUmxiblF5TmpJeE5URTNNa0I1WVd4bExtVmtkU0lzSW5sbFlYSWlPaUl5TURJMUxUSXdNallpTENKaGMzTnBaMjV0Wlc1MElqbzFMQ0prWlhCaGNuUnRaVzUwSWpvaVoyVnVaWEpoYkNJc0ltbGhkQ0k2TVRjNU1EZzJNelk1T1N3aVpYaHdJam94TnpreE5EWTRORGs1TENKcWRHa2lPaUl3TkdNNVpXUTBaalZrTkRabU1HRmtJbjAueWpBS1M1cEFyeWJhNnRFRTRidGtoV0VxWGVOaXhCMFZ1cUxrZVFIdm1sUSZ1dG1fc291cmNlPWFkdmlzb3JfZW1haWwmZnJvbT1hY2FkZW1pY19hZHZpc29yJnBhcmFtcz1zdW1tZXItc2Vzc2lvbiIsInNjb3BlcyI6WyJodHRwczovL3d3dy5nb29nbGVhcGlzLmNvbS9hdXRoL2dtYWlsLnJlYWRvbmx5Il0sIm93bmVyIjoiV2FtYXRodWdpIn0%3D">
        <svg viewBox="0 0 24 24">
          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
          <polyline points="22,6 12,13 2,6"></polyline>
        </svg>
        Get help
      </a>
    </div>

  </div>



        </body></html>