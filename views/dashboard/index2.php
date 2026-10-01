<?php
if (!empty($_GET['refresh']))
  CustomFunctions::relocate("/dashboard?email=" . $_GET['email'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require 'includes/header.inc.php' ?>
  <style>
    .input-group-text,
    .form-control {
      height: 42px;
    }

    .btn {
      height: 42px;
    }

    .form-control::placeholder {
      color: #999;
    }

    .btn-outline-secondary.rounded-pill {
      font-size: 10px;
      padding: 4px 6px;
    }

    .empty-state {
      height: 450px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    /* Top system status bar */


    /* Top banner styling matching design */
    .read-only-banner {
      font-size: 0.8125rem;
      color: #5f6368;
      background-color: #f8f9fa;
      border-bottom: 1px solid var(--border-color);
      padding: 6px 16px;
    }

    /* Avatar design */
    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: var(--avatar-bg);
      color: #ffffff;
      font-weight: 600;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .avatar-sm {
      width: 38px;
      height: 38px;
      background-color: #1e3a5f;
      font-size: 0.85rem;
    }

    /* Unread status dot */
    .unread-dot {
      width: 8px;
      height: 8px;
      background-color: #d93025;
      border-radius: 50%;
      display: inline-block;
      flex-shrink: 0;
    }

    /* Email item interactive states */
    .email-item {
      cursor: pointer;
      border-bottom: 1px solid var(--border-color);
      transition: background-color 0.15s ease;
      user-select: none;
    }

    .email-item:hover {
      background-color: var(--hover-bg);
    }

    .email-item.active {
      background-color: var(--selected-bg) !important;
    }

    /* Critical CSS rules for preventing text overflow in Flexbox containers */
    .truncate-single {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
      width: 100%;
    }

    .truncate-line-clamp {
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
      overflow: hidden;
      word-break: break-all;
    }

    /* Close button styling */
    .btn-close-custom {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background-color: #f1f3f5;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #495057;
      transition: background-color 0.2s ease;
    }

    .btn-close-custom:hover {
      background-color: #e2e6ea;
      color: #212529;
    }

    /* Reading pane card container */
    .sender-card {
      background-color: #f8f9fa;
      border-radius: 12px;
      border: 1px solid #f0f0f0;
    }

    .email-body {
      font-size: 0.95rem;
      line-height: 1.6;
      color: #2b2b2b;
    }

    /* Layout column smooth responsiveness */
    #emailListCol {
      transition: all 0.25s cubic-bezier(0.2, 0, 0, 1);
    }

    #emailDetailCol {
      border-left: 1px solid var(--border-color);
    }

    .skeleton-card {
      height: 150px;
      background-color: #e2e8f0;
      /* Base skeleton gray */
      position: relative;
      overflow: hidden;
      /* Hide the shimmer when it moves outside the boundary */
      border-radius: 8px;
    }

    /* The shimmer overlay */
    .skeleton-card::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      /* Subtle white glare gradient in the middle */
      background: linear-gradient(90deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.4) 50%,
          rgba(255, 255, 255, 0) 100%);
      /* Slide it completely to the left initially */
      transform: translateX(-100%);
      animation: shimmer 1.5s infinite linear;
    }

    @keyframes shimmer {
      100% {
        /* Slide it completely to the right */
        transform: translateX(100%);
      }
    }
  </style>
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
        <div class="app-header d-flex align-items-center">

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

          <!-- Row start -->
          <div class="container">


            <div class="container-fluid p-0">

              <!-- Search Toolbar -->
              <div class="border-bottom bg-white p-2">

                <div class="d-flex gap-2 align-items-center">

                  <div class="flex-grow-1">
                    <div class="input-group">
                      <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                      </span>

                      <input id="searchInput"
                        class="form-control border-start-0"
                        placeholder='Search emails — try "from:boss@work.com"'>
                    </div>
                  </div>

                  <a href="<?= CustomFunctions::formatDynamicUrl('refresh', 1) ?>" class="btn btn-light border" title="Refresh">

                    <i class="bi bi-arrow-clockwise"></i>
                  </a>

                  <button class="btn btn-light border filtersSearchBtn">
                    <i class="bi bi-sliders"></i>
                    Filters
                  </button>
                  <?php require 'includes/filters.php' ?>

                  <button class="btn btn-light border filterquestionmark">
                    <i class="bi bi-question-circle"></i>
                  </button>

                  <button class="btn btn-dark px-4 searchButton">
                    Search
                  </button>

                  <div class="hidden parentgmailinsert" style="position: absolute; top:  16px; right: 0px; width: 370px; background: var(--surface); border: 1px solid var(--border); border-radius: 12px; box-shadow: rgba(0, 0, 0, 0.12) 0px 8px 32px; z-index: 200; overflow: hidden;">
                    <div style="padding: 11px 14px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;"><span style="font-size: 12px; font-weight: 700; color: var(--ink);">Gmail search operators</span><span style="font-size: 11px; color: var(--muted);">Click to insert →</span></div>
                    <div id="gmailinsert" style="max-height: 320px; overflow-y: auto; padding: 8px;">
                      <button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">from:name@example.com</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails from someone</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button>
                      <button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-at-sign">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">to:name@example.com</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails sent to someone</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">subject:invoice</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Words in the subject line</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-paperclip">
                            <path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">has:attachment</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Has any file attached</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-paperclip">
                            <path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">filename:pdf</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Attachment with specific extension</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">after:2024/01/01</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails received after a date</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">before:2024/12/31</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails received before a date</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-open">
                            <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path>
                            <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">is:unread</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Only unread emails</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">is:starred</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Only starred emails</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" x2="12" y1="8" y2="12"></line>
                            <line x1="12" x2="12.01" y1="16" y2="16"></line>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">is:important</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Marked as important</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                            <path d="M22 2 11 13"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">in:sent</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails you sent</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">in:trash</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails in trash</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag">
                            <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path>
                            <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">label:work</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Emails with a specific label</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button><button type="button" style="width: 100%; display: flex; align-items: center; gap: 9px; padding: 6px 10px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; background: transparent; cursor: pointer; text-align: left; transition: background 0.1s;"><span style="color: var(--muted); flex-shrink: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                          </svg></span><code style="font-size: 11px; background: var(--paper); padding: 1px 5px; border-radius: 4px; border: 1px solid var(--border); color: var(--ink); flex-shrink: 0;">-unsubscribe</code><span style="font-size: 11px; color: var(--muted); flex: 1 1 0%;">Exclude emails with a word</span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" style="color: var(--muted); flex-shrink: 0;">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg></button>
                    </div>
                    <div style="padding: 9px 14px; border-top: 1px solid var(--border); background: var(--paper);">
                      <p style="margin: 0px; font-size: 11px; color: var(--muted); line-height: 1.5;"><strong style="color: var(--ink);">Pro tip:</strong> Combine operators — <code style="font-size: 10px;">from:alice is:unread has:attachment</code></p>
                    </div>
                  </div>

                </div>


              </div>

              <!-- Filters -->
              <div class="border-bottom bg-white px-2 py-2">
                <div class="d-flex flex-wrap gap-2">

                  <button folder="unread" class="folders_tabs btn btn-sm btn-outline-secondary rounded-pill">
                    <i class="bi bi-envelope"></i>
                    Unread
                  </button>

                  <button folder="starred" class="folders_tabs btn btn-sm btn-outline-secondary rounded-pill">
                    <i class="bi bi-star"></i>
                    Starred
                  </button>

                  <button folder="important" class="folders_tabs btn btn-sm btn-outline-secondary rounded-pill">
                    <i class="bi bi-paperclip"></i>
                    Attachment
                  </button>

                  <button folder="sent" class="folders_tabs btn btn-sm btn-outline-secondary rounded-pill">
                    <i class="bi bi-send"></i>
                    Sent
                  </button>

                  <button folder="important" x="location.href='<?= CustomFunctions::formatDynamicUrl('status', 'important') ?>'" class="folders_tabs btn btn-sm btn-outline-secondary rounded-pill">
                    <i class="bi bi-exclamation-circle"></i>
                    Important
                  </button>

                  <!---
                    <button onclick="location.href='<?= CustomFunctions::formatDynamicUrl('status', 'this week') ?>'" class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-calendar-week"></i>
                        This week
                    </button>
                
                    <button onclick="location.href='<?= CustomFunctions::formatDynamicUrl('status', 'this month') ?>'" class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="bi bi-calendar-month"></i>
                        This month
                    </button> -->

                </div>
              </div>

              <div class="app-body">
                <?php
                //print_r($this->data ?? []);
                if (isset($this->data['error'])) {
                  echo "<p class='alert alert-danger'>{$this->data['error']}. The user needs to re-login again. </p>";
                  echo "<br><br><a href='#' onclick='location.reload()' >Refresh</a>";
                } else {
                  $link = CustomFunctions::formatDynamicUrl('refresh', 1);


                ?>
                <!--
                  <a href='#' onclick='location.href="<?= $link ?>"' class="btn btn-sm btn-success">Refresh for New Emails</a>
                  <br>-->
                  <section>

                    <!-- Main Viewport Layout Container -->
                    <div class="container-fluid p-0">
                      <div class="row g-0 min-vh-100">

                        <div id="emailListCol" class="col-12 bg-white">

                          <!-- Header area -->
                          <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom bg-light">
                            <span class="fw-bold fs-6 text-uppercase text-dark tracking-wide folderTitle">INBOX</span>
                            <span class="text-muted small fs-7" id="emailCountLabel">0 shown</span>
                          </div>

                          <!-- List container -->
                          <div id="emailList" class="list-group list-group-flush">
                            <!-- Dynamically populated emails via JS -->
                            <div class="skeleton-card"></div>
                          </div>
                        </div>

                        <div id="emailDetailCol" class="col-md-7 col-lg-8 bg-white d-none">
                          <div class="p-4 p-md-5 min-vh-100" id="readingPaneContent">
                            <!-- Dynamically populated reading pane content -->
                          </div>
                        </div>

                      </div>
                    </div>



                    <div class="accordion" id="accordionExample">
                      <?php foreach ($this->data as $row) {

                        $email_id = $row['id'];
                        $email_subject = $row['subject'];
                        $email_from = $row['from'];
                        $email_date = $row['date'];
                        $email_snippet = $row['snippet'];

                      ?>

                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $email_id ?>" aria-expanded="true" aria-controls="collapse<?= $email_id ?>">
                              <?= $email_subject ?> from [<?= $email_from ?>]
                            </button>
                          </h2>
                          <div id="collapse<?= $email_id ?>" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <small><?= $email_date ?></small>
                              <?= $email_snippet ?>

                              <!--
                            <a href='#' class='btn btn-sm btn-danger deleteSingEmail ' 
                            emailid='<?= $email_id ?>' email='' ><i class='fa fa-trash'></i> Delete this email</a>
                            -->
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

                  </section>
                <?php } ?>

                <!-- Toast message for download data example starts -->
                <div class="toast-container position-fixed bottom-0 end-0 p-3 mt-5">
                  <div id="downloadData" class="toast text-bg-primary border-0" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="toast-header">
                      <strong class="me-auto">Downloading</strong>
                      <small>Just now</small>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                      Data successfully downloading.
                    </div>
                  </div>
                </div>
                <!-- Toast message for download data example ends -->

              </div>

              <!-- Account Status -->
              <!-- <div class="border-bottom px-3 py-2 small text-muted">
                    <div class="small text-muted">
                        <i class="bi bi-circle-fill small"></i>
                        Read-only — this account hasn't granted modify access
                    </div>
      
                </div> -->

              <!-- Inbox -->
              <!-- <div class="p-3">
                    <div class="d-flex justify-content-between mb-4">
                    
                        <div class="fw-bold text-uppercase">
                            Inbox
                        </div>
                    
                        <div class="text-muted small">
                            0 shown
                        </div>
                    
                    </div>
                    
                    <div class="empty-state">

                        <i class="bi bi-envelope fs-1 text-muted"></i>
                    
                        <div class="mt-3 text-muted">
                            No emails here
                        </div>
                    
                    </div>

                </div> -->

            </div>



          </div>
          <!-- Row end -->




        </div>
        <!-- App body ends -->


      </div>
      <!-- App container ends -->

    </div>
    <!-- Main container end -->

  </div>
  <!-- Page wrapper end -->
  <script>
    window.onload = function() {
      
      let emailsData = [];
      let pageToken = '';
      let folder = 'inbox';
      let q = '';
      let from = '';
      let to = '';
      let subject = '';
      let after = '';
      let before = '';
      let hasAttachment = '';
      let mailsContainer = document.querySelector("#emailList"); 
      const defaultMailBody = `<div style="flex: 1 1 0%; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 12px; color: var(--muted); margin-top:16%">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-open"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path></svg><p style="margin: 0px; font-size: 15px;">No emails here</p></div>`;
      mailsContainer.innerHTML = defaultMailBody;

      const email = `<?= $_GET['email'] ?? '' ?>`;
      if (email.length > 0) {
        emails();
        sideFilters(true);
      } else {

      }
 
      async function emails() {

        
        mailsContainer.innerHTML = `<div class="skeleton-card"></div>`;
        document.querySelector('.folderTitle').textContent = folder;

        try {
          const form = new FormData();
          form.set('email', email);
          form.set('maxResults', 25);
          if (pageToken.length > 0) {
            form.set('pageToken', pageToken);
          }
          form.set('folder', folder);
          //form.set('includeBody')
          //form.set('unreadOnly')
          //form.set('readOnly')
          if (hasAttachment.length > 0)
          form.set('hasAttachment');

          if (from.length > 0)
            form.set('from');
          if (to.length > 0)
            form.set('to');
          if (subject.length > 0)
            form.set('subject');
          if (subject.length > 0)
            form.set('after');
          if (subject.length > 0)
            form.set('before');
          
          if (q.length > 0)
            form.set('q', q);

          const response = await fetch('/acc-connect/email-lists', {
            method: "POST",
            body: JSON.stringify(Object.fromEntries(form.entries()))
          });
          const result = await response.json();


          if (result.success) {

            for (let i = 0; i < result.emails.length; i++) {
              const row = result.emails[i];

              emailsData.push({
                id: row.id,
                avatar: row.from.slice(0, 2),
                sender: row.from,
                time: row.date,
                unread: true,
                subject: row.subject,
                preview: row.snippet,
                fullSenderEmail: row.from,
                recipient: row.to,
                dateFormatted: row.internalDate, //"Oct 1, 2026 · 3:15 AM",
                bodyHTML: ``
              });
            }

            renderEmailList();


            if (result.nextPageToken.length > 0) {
              pageToken = result.nextPageToken;
            }



          } else {
            //alert(result.error);
            mailsContainer.innerHTML = defaultMailBody; 
          }
        } catch (e) {
          console.log(e);
          mailsContainer.innerHTML = defaultMailBody; 
        }
      }

      async function emailBody() {
        const form = new FormData();
        form.set('email');
        form.set('messageId')
        const response = await fetch('/acc-connect/readEmail', {
          method: "POST",
          body: JSON.stringify(Object.fromEntries(form.entries()))
        });
        const result = await response.json();

        if (result.success) {
          return result.body;
        }
        alert(result.error);
      }


      let activeEmailId = null;

      // Render list items dynamically
      function renderEmailList() {
        const emailListEl = document.getElementById('emailList');
        emailListEl.innerHTML = '';

        emailsData.forEach(email => {
          const isActive = email.id === activeEmailId;
          const itemEl = document.createElement('div');

          itemEl.className = `email-item list-group-item p-3 ${isActive ? 'active' : ''}`;
          itemEl.dataset.id = email.id;

          /* Note the critical use of min-w-0 on flex containers to enable truncation */
          itemEl.innerHTML = `
          <div class="d-flex align-items-start gap-3 w-100 min-w-0">
            <div class="avatar flex-shrink-0">${email.avatar}</div>
            
            <div class="flex-grow-1 min-w-0 overflow-hidden">
              <div class="d-flex justify-content-between align-items-center mb-1 gap-2">
                <span class="fw-bold text-dark truncate-single fs-7">${email.sender}</span>
                <div class="d-flex align-items-center gap-1 flex-shrink-0">
                  <span class="text-muted small fs-8">${email.time}</span>
                  ${email.unread ? '<span class="unread-dot ms-1"></span>' : ''}
                </div>
              </div>
              
              <div class="${email.unread ? 'fw-bold text-dark' : 'text-secondary fw-normal'} truncate-single small mb-1">
                ${email.subject}
              </div>
              
              <div class="text-muted small truncate-single">
                ${email.preview}
              </div>
            </div>
          </div>
        `;

          itemEl.addEventListener('click', () => openEmailDetail(email.id));
          emailListEl.appendChild(itemEl);
        });

        document.getElementById('emailCountLabel').innerText = `${emailsData.length} shown`;
      }

      // Open Reading Pane View
      async function openEmailDetail(emailId) {
        activeEmailId = emailId;
        const email = emailsData.find(e => e.id === emailId);
        if (!email) return;

        // Mark email as read upon opening
        email.unread = false;

        // Layout Switch: Contract sidebar, display detail pane
        const listCol = document.getElementById('emailListCol');
        const detailCol = document.getElementById('emailDetailCol');

        listCol.className = "col-md-5 col-lg-4 bg-white";
        detailCol.classList.remove('d-none');

        // Re-render list to reflect selected active state and updated unread status
        renderEmailList();
        const emailBodyHtml = await emailBody();

        // Populate reading pane
        const detailContent = document.getElementById('readingPaneContent');
        detailContent.innerHTML = `
        <!-- Close Button -->
        <button id="closeDetailBtn" class="btn-close-custom mb-4" aria-label="Close reading view" onclick="closeEmailDetail()">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
          </svg>
        </button>

        <!-- Email Heading Subject -->
        <h2 class="h4 fw-bold text-dark mb-4 lh-base">${email.subject}</h2>

        <!-- Sender Card Container -->
        <div class="sender-card p-3 mb-4">
          <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap flex-md-nowrap">
            <div class="d-flex gap-3 align-items-center min-w-0">
              <div class="avatar avatar-sm flex-shrink-0">${email.avatar}</div>
              <div class="min-w-0">
                <div class="fw-bold text-dark text-truncate mb-0">
                  ${email.sender} 
                  <span class="text-muted fw-normal small ms-1">${email.fullSenderEmail}</span>
                </div>
                <div class="text-muted small text-truncate">to ${email.recipient}</div>
              </div>
            </div>
            <div class="text-muted small flex-shrink-0 mt-2 mt-md-0">${email.dateFormatted}</div>
          </div>
        </div>

        <!-- Body Content -->
        <div class="email-body">
          ${emailBodyHtml}
        </div>
      `;
      }

      // Close Reading Pane & Return to Full-Width List View
      function closeEmailDetail() {
        activeEmailId = null;

        const listCol = document.getElementById('emailListCol');
        const detailCol = document.getElementById('emailDetailCol');

        // Layout Switch: Expand list to full 12 columns, hide detail panel
        detailCol.classList.add('d-none');
        listCol.className = "col-12 bg-white";

        // Re-render list state
        renderEmailList();
      }

      function sideFilters(show = false) {
        if (show) {
          document.querySelector('.mailboxtab').classList.remove('hidden');
          return;
        }
        document.querySelector('.mailboxtab').classList.add('hidden');
      }

      const tabs = document.querySelectorAll('.folders_tabs');
      tabs.forEach((element) => {
        element.classList.remove('activeTab');
        element.addEventListener('click', () => {
          folder = element.getAttribute('folder');
          element.classList.add('activeTab');
          emails();
        });


      });

      const parentgmailinsert = document.querySelector('.parentgmailinsert');
      const filterquestionmark = document.querySelector('.filterquestionmark');
      const gmailinsert = document.querySelectorAll('#gmailinsert button');

      const searchInput = document.querySelector('#searchInput');

      gmailinsert.forEach((element) => {
        element.addEventListener('click', (e) => {
          const text = element.textContent;
          searchInput.value = `${text.split(':')[0]}:`;
          searchInput.focus();
          parentgmailinsert.classList.add('hidden');
        })
      });

      document.querySelector('.searchButton').addEventListener('click', (e) => {
        q = searchInput.value;
        emails();
      })

      filterquestionmark.addEventListener('click', () => {
        parentgmailinsert.classList.remove('hidden');
      })


      const filtersSearchBtn = document.querySelector('.filtersSearchBtn');
      const filtersSearchArea = document.querySelector('.filtersSearchArea');

      filtersSearchBtn.addEventListener('click', (e)=> { 
        filtersSearchArea.classList.remove('hidden');
      });

      document.addEventListener('click', (event) => {
        // if (!parentgmailinsert.contains(event.target) || (!parentgmailinsert.contains('filterquestionmark')) ) 
        //   parentgmailinsert.classList.add('hidden');

        // if (!filtersSearchArea.contains(event.target) || (!filtersSearchArea.contains('filtersSearchBtn'))) 
        //   filtersSearchArea.classList.add('hidden');                    
      });
      const applySearch = document.querySelector('#applySearch');
      applySearch.addEventListener('click', ()=> {
        if (document.querySelector("[name='from']").value.length> 0) {
          from = document.querySelector("[name='from']").value;
        }
        if (document.querySelector("[name='to']").value.length> 0) {
          to = document.querySelector("[name='to']").value;
        }
        if (document.querySelector("[name='from']").value.length> 0) {
          from = document.querySelector("[name='from']").value;
        }
        if (document.querySelector("[name='subject']").value.length> 0) {
          subject = document.querySelector("[name='subject']").value;
        }
        if (document.querySelector("[name='from']").value.length> 0) {
          from = document.querySelector("[name='from']").value;
        }
        if (document.querySelector("[name='received_after']").value.length> 0) {
          after = document.querySelector("[name='received_after']").value;
        }
        if (document.querySelector("[name='received_before']").value.length> 0) {
          before = document.querySelector("[name='received_before']").value;
        }

        filtersSearchArea.classList.add('hidden');
        emails();

      });

      const hasmore = document.querySelectorAll('.hasmore');
      hasmore.forEach((element)=> {
        element.addEventListener('click',()=> {
          const fold = element.getAttribute('folder');
          if (element.classList.contains('activeTabFilter')) {
            element.classList.remove('activeTabFilter');
            if (fold == 'attachment') {
              hasAttachment = null;
            } else folder = 'inbox';
            return;
          }

          element.classList.add('activeTabFilter');
          if (fold == 'attachment') {
              hasAttachment = fold;
            } else folder = fold;
           

        });
      })


      // Initialize application on startup

      // renderEmailList();
    };
  </script>
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