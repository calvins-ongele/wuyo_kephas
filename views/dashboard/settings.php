<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require 'includes/header.inc.php' ?> 
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

         <?php require 'includes/sidebar.inc.php' ?>

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-headerx d-flex align-items-center">

            <!-- Toggle buttons start -->
            <div class="d-flex">
              <button type="button" class="btn btn-dark me-2 toggle-sidebar" id="toggle-sidebar">
                <i class="bi bi-chevron-left"></i>
              </button>
              <button type="button" class="btn btn-outline-dark me-2 pin-sidebar" id="pin-sidebar">
                <i class="bi bi-chevron-left"></i>
              </button>
            </div>
            <!-- Toggle buttons end --> 
           
            <!-- App header actions end -->

          </div>
          <!-- App header ends -->
 

          <!-- App body starts -->
          <div class="app-body">
 

            <main class="dash-main">
   <div style="min-height: 100vh; background: var(--paper); padding: 40px 24px;">
      <div style="max-width: 720px; margin: 0px auto;">
         <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 32px;">
            <button style="background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; cursor: pointer; color: var(--muted); font-size: 22px; line-height: 1;">←</button>
            <div>
               <h1 style="font-size: 24px; color: var(--ink); margin-bottom: 2px;">Settings</h1>
               <p style="color: var(--muted); font-size: 13px;">Logged in as <strong>Wamathugi</strong></p>
            </div>
            <button style="margin-left: auto; padding: 9px 20px; background: var(--accent); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">Sign out</button>
         </div>
         <div style="display: flex; gap: 4px; margin-bottom: 24px; border-bottom: 1px solid var(--border); overflow-x: auto;">
          <button style="padding: 8px 16px; background: none; border-top-width: medium; border-right-width: medium; border-bottom: 2px solid var(--ink); border-left-width: medium; border-top-style: none; border-right-style: none; border-left-style: none; border-top-color: currentcolor; border-right-color: currentcolor; border-left-color: currentcolor; border-image: initial; color: var(--ink); font-family: inherit; font-size: 14px; font-weight: 600; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">My Credentials</button><button style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">App Users</button><button style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Gmail Accounts</button><button style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Browser Hook</button><button style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Courses</button><button style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Assignments</button></div>
        
          <!---------------------my credentials----------------------------->
          <div style="background: white; border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
            <h2 style="font-size: 16px; color: var(--ink); margin-bottom: 20px;">Change Username / Password</h2>
            <form><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">New username (leave blank to keep current)</label><input type="text" placeholder="Wamathugi" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Current password *</label>
            <input type="password" placeholder="••••••••" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">New password (leave blank to keep current)</label><input type="password" placeholder="••••••••" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Confirm new password</label><input type="password" placeholder="••••••••" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 20px;"><button type="submit" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">Save changes</button></form>
         </div>

         <!-----------------------app users-------------------------------------->
         
          <div style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
             <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">App Users <span style="color: var(--muted); font-weight: 400;">(3)</span></h2><button style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add user</button></div>

             <div style="background: var(--surface); border-top-color: ; border-top-style: ; border-top-width: ; border-right-color: ; border-right-style: ; border-right-width: ; border-bottom-color: ; border-bottom-style: ; border-bottom-width: ; border-left: 3px solid transparent; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; border-radius: 14px; padding: 24px; margin-bottom: 10px; opacity: 1;"><div style="display: flex; gap: 12px; align-items: flex-start;"><div style="flex: 1 1 0%; min-width: 0px;"><div style="display: flex; align-items: center; flex-wrap: wrap; gap: 4px 10px; margin-bottom: 5px;"><span style="font-size: 14px; font-weight: 600; color: var(--ink);">Wamathugi</span><span style="font-size: 10px; padding: 2px 7px; background: var(--border); border-radius: 20px; color: var(--muted); font-weight: 500;">you</span></div><div style="display: flex; flex-wrap: wrap; gap: 4px; margin-bottom: 5px;"><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: rgba(52, 168, 83, 0.12); color: rgb(45, 125, 70); letter-spacing: 0.02em;">add</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: rgba(66, 133, 244, 0.12); color: rgb(26, 92, 200); letter-spacing: 0.02em;">modify</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: rgba(200, 75, 49, 0.12); color: rgb(184, 50, 50); letter-spacing: 0.02em;">delete</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: rgba(251, 188, 4, 0.15); color: rgb(138, 98, 0); letter-spacing: 0.02em;">disable</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">access-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">list-pending-mailboxes</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">list-mailboxes</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">list-child-mailboxes</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">delete-staged-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">stage-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">delete-any-staged-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">modify-staged-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">modify-any-staged-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">recover-any-staged-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">recover-staged-mailbox</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">access-any-mailbox</span></div><div style="font-size: 11px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 14px;"><span>↳ parent: <strong>admin</strong></span><span>since 19/06/2026</span></div></div></div></div>

             <div style="background: var(--surface); border-top-color: ; border-top-style: ; border-top-width: ; border-right-color: ; border-right-style: ; border-right-width: ; border-bottom-color: ; border-bottom-style: ; border-bottom-width: ; border-left: 3px solid transparent; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; border-radius: 14px; padding: 24px; margin-bottom: 10px; opacity: 1;"><div style="display: flex; gap: 12px; align-items: flex-start;"><div style="flex: 1 1 0%; min-width: 0px;"><div style="display: flex; align-items: center; flex-wrap: wrap; gap: 4px 10px; margin-bottom: 5px;"><span style="font-size: 14px; font-weight: 600; color: var(--ink);">Pinchez</span></div><div style="display: flex; flex-wrap: wrap; gap: 4px; margin-bottom: 5px;"><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">list-all-mailboxes</span><span style="font-size: 10px; padding: 2px 7px; border-radius: 20px; font-weight: 600; background: var(--border); color: var(--muted); letter-spacing: 0.02em;">list-mailboxes</span></div><div style="font-size: 11px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 14px;"><span>↳ parent: <strong>Wamathugi</strong></span><span>since 19/06/2026</span></div></div><div style="display: flex; gap: 6px; flex-shrink: 0; flex-wrap: wrap; justify-content: flex-end;"><button style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Edit</button><button style="background: none; border-top-style: ; border-top-width: ; border-right-style: ; border-right-width: ; border-bottom-style: ; border-bottom-width: ; border-left-style: ; border-left-width: ; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Disable</button><button style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Delete</button></div></div></div>

         </div>
         <!-------------------gmail accounts ---------------------->
         <div style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;"><div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">Gmail Accounts</h2><button style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add account</button></div><div style="display: flex; align-items: center; gap: 12px; padding: 12px 0px; border-bottom: 1px solid var(--border);"><div style="width: 36px; height: 36px; border-radius: 50%; background: var(--ink); color: white; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 600;">L</div><div style="flex: 1 1 0%;"><div style="font-size: 14px; color: var(--ink); font-weight: 500;">lawiza456khokhar@gmail.com</div><div style="font-size: 12px; color: var(--muted);">lawiza456khokhar@gmail.com</div></div><div style="font-size: 11px; color: var(--muted); text-align: right; margin-right: 12px;">Added 04/07/2026</div></div></div>
         </div>

         <!------------------------browser hook--------------------->

         <div style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;"><div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 24px;"><div><h2 style="font-size: 16px; color: var(--ink); margin-bottom: 4px;">Browser Hook</h2><p style="font-size: 13px; color: var(--muted);">Monitors the system-auto process. Polls every 3 s.</p></div><button disabled="" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: not-allowed; opacity: 0.5;">Running</button></div><div style="display: flex; gap: 16px; flex-wrap: wrap;"><div style="flex: 1 1 180px; background: var(--paper); border: 1px solid var(--border); border-radius: 12px; padding: 20px 24px; display: flex; flex-direction: column; gap: 8px;"><span style="font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.08em;">Status</span><div style="display: flex; align-items: center; gap: 10px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: rgb(52, 168, 83); box-shadow: rgba(52, 168, 83, 0.2) 0px 0px 0px 3px; flex-shrink: 0;"></span><span style="font-size: 18px; font-weight: 600; color: rgb(45, 125, 70);">Running</span></div></div><div style="flex: 1 1 140px; background: var(--paper); border: 1px solid var(--border); border-radius: 12px; padding: 20px 24px;"><span style="font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 8px;">Starting</span><span style="font-size: 16px; font-weight: 600; color: var(--muted);">No</span></div><div style="flex: 1 1 140px; background: var(--paper); border: 1px solid var(--border); border-radius: 12px; padding: 20px 24px;"><span style="font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 8px;">Running</span><span style="font-size: 16px; font-weight: 600; color: rgb(45, 125, 70);">Yes</span></div></div><p style="font-size: 12px; color: var(--muted); margin-top: 16px;">Last polled: 14:27:14</p></div>
         </div>


         <!--------------------------courses------------------------------------------> 

        <div style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">Courses <span style="color: var(--muted); font-weight: 400;">(9)</span></h2><button style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add course</button></div>

          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 10px;"><div style="display: flex; gap: 12px; align-items: flex-start;"><div style="flex: 1 1 0%; min-width: 0px;"><div style="display: flex; flex-wrap: wrap; align-items: baseline; gap: 4px 10px; margin-bottom: 4px;"><span style="font-size: 15px; font-weight: 600; color: var(--ink);">Advanced Academic English</span><span style="font-size: 11px; padding: 2px 8px; background: var(--border); color: var(--muted); border-radius: 20px; font-weight: 500;">ENG 320</span></div><div style="font-size: 12px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 14px;"><span>👤 Prof. Daniel Reyes</span><span>🗓 2025-2026</span><span style="color: var(--muted);">0 assignments</span></div></div><div style="display: flex; gap: 6px; flex-shrink: 0;"><button style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Edit</button><button style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Delete</button></div></div></div>

        </div>

        <!-------------------------Assignments----------------------------------->
        <div style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">Assignments <span style="color: var(--muted); font-weight: 400;">(15)</span></h2><button style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add assignment</button></div>
          
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 12px;"><div style="display: flex; gap: 12px; align-items: flex-start;"><div style="flex: 1 1 0%; min-width: 0px;"><div style="display: flex; flex-wrap: wrap; align-items: baseline; gap: 4px 12px; margin-bottom: 6px;"><span style="font-size: 15px; font-weight: 600; color: var(--ink);">Real-World Conversation: Navigating Everyday Situations</span><span style="font-size: 11px; padding: 2px 8px; background: var(--border); color: var(--muted); border-radius: 20px; font-weight: 500;">Individual</span></div><div style="font-size: 12px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 16px;"><span>ENG 101 · Practical English Communication</span><span>Sarah Mitchell</span><span>Due 10/05/2026</span><span>80 pts</span></div><div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 8px;"><span style="font-size: 11px; padding: 2px 8px; background: rgba(var(--ink-rgb, 0,0,0), 0.06); color: var(--muted); border-radius: 20px;">Speaking</span><span style="font-size: 11px; padding: 2px 8px; background: rgba(var(--ink-rgb, 0,0,0), 0.06); color: var(--muted); border-radius: 20px;">Beginner</span><span style="font-size: 11px; padding: 2px 8px; background: rgba(var(--ink-rgb, 0,0,0), 0.06); color: var(--muted); border-radius: 20px;">Role-play</span><span style="font-size: 11px; padding: 2px 8px; background: rgba(var(--ink-rgb, 0,0,0), 0.06); color: var(--muted); border-radius: 20px;">Pronunciation</span><span style="font-size: 11px; padding: 2px 8px; background: rgba(var(--ink-rgb, 0,0,0), 0.06); color: var(--muted); border-radius: 20px;">Vocabulary</span></div></div><div style="display: flex; flex-shrink: 0; gap: 6px; flex-wrap: wrap; justify-content: flex-end;"><button title="Download PDF" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit; display: flex; align-items: center; gap: 5px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>PDF</button><button style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Edit</button><button style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Delete</button></div></div></div>
        </div>



      </div>
   </div>
</main>
           

         
            <!-- Row end -->

          </div>
          <!-- App body ends -->
 
        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <script src="/public/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="/assets/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/assets/js/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/graphs/logistics/shipment.js"></script>
    <script src="assets/vendor/apex/custom/graphs/logistics/avg-delivery-time.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/current-date.js"></script>
  </body>

</html>