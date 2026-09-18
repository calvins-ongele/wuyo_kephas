<!DOCTYPE html>
<html lang="en">

<head>
   <?php require 'includes/header.inc.php' ?>
   <style>
      .avatar-circle {
         width: 34px;
         height: 34px;
         border-radius: 50%;
         background: #1c7ea5;
         color: white;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 700;
         font-size: 18px;
      }
   </style>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap');

      .sm-table {
         width: 100%;
         border-collapse: collapse;
      }

      .sm-table th {
         text-align: left;
         font-size: 11px;
         font-weight: 600;
         color: var(--muted);
         text-transform: uppercase;
         letter-spacing: 0.06em;
         padding: 8px 12px;
         border-bottom: 1px solid var(--border);
         white-space: nowrap;
      }

      .sm-table td {
         padding: 10px 12px;
         border-bottom: 1px solid var(--border);
         font-size: 13px;
         color: var(--ink, #e2e8f0);
         vertical-align: middle;
      }

      .sm-table tr:last-child td {
         border-bottom: none;
      }

      .sm-table tbody tr:hover td {
         background: rgba(255, 255, 255, .02);
      }

      .sm-row-btn {
         background: none;
         border: 1px solid var(--border);
         border-radius: 6px;
         padding: 4px 10px;
         cursor: pointer;
         font-size: 11.5px;
         font-family: 'DM Sans', sans-serif;
         color: var(--muted);
         transition: all .15s;
         white-space: nowrap;
      }

      .sm-row-btn:hover {
         border-color: var(--accent);
         color: var(--accent);
      }

      .sm-row-btn.danger:hover {
         border-color: #ef4444;
         color: #ef4444;
      }

      .sm-filter-btn {
         background: none;
         border: 1px solid var(--border);
         border-radius: 99px;
         padding: 4px 14px;
         cursor: pointer;
         font-size: 12px;
         font-family: 'DM Sans', sans-serif;
         color: var(--muted);
         transition: all .15s;
         white-space: nowrap;
      }

      .sm-filter-btn.active {
         border-color: var(--accent);
         color: var(--accent);
         background: color-mix(in srgb, var(--accent) 10%, transparent);
      }

      .sm-btn-ghost {
         background: none;
         border: 1px solid var(--border);
         border-radius: 7px;
         padding: 8px 14px;
         cursor: pointer;
         font-size: 13px;
         font-family: 'DM Sans', sans-serif;
         color: var(--ink, #e2e8f0);
         display: inline-flex;
         align-items: center;
         gap: 6px;
         transition: border-color .15s, color .15s;
         box-sizing: border-box;
      }

      .sm-btn-ghost:hover {
         border-color: var(--accent);
         color: var(--accent);
      }

      @media (max-width: 640px) {
         .sm-hide-mobile {
            display: none !important;
         }

         .sm-table td,
         .sm-table th {
            padding: 8px 8px;
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

               <!-- App brand sm start -->
               <div class="app-brand-sm d-lg-none d-sm-block">
                  <a href="index.html">
                     <img src="assets/images/logo-sm.svg" class="logo"
                        alt="Admin Dashboard with real-time analytics and user management">
                  </a>
               </div>
               <!-- App brand sm end -->

               <!-- App header actions end -->

            </div>
            <!-- App header ends -->
            <!-- App Hero header ends -->

            <!-- App body starts -->
            <div class="app-body">

               <!-- Row start -->
               <main class="dash-main">
                  <div style="padding: 28px 24px; max-width: 1100px; margin: 0px auto; font-family: &quot;DM Sans&quot;, sans-serif;">
                     <div style="display: flex; align-items: flex-start; justify-content: space-between; flex-wrap: wrap; gap: 12px; margin-bottom: 22px;">
                        <div>
                           <h1 style="margin: 0px; font-size: 22px; font-weight: 700; color: var(--ink, #e2e8f0); letter-spacing: -0.02em;">Staged Mailboxes</h1>
                           <p style="margin: 4px 0px 0px; font-size: 13px; color: var(--muted);">Pre-connection pipeline · connection state tracker</p>
                        </div>
                        <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                           <button class="sm-btn-ghost" onclick="location.reload()">
                              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                 <polyline points="23 4 23 10 17 10"></polyline>
                                 <path d="M20.5 15a9 9 0 1 1-2.5-8.5L23 10"></path>
                              </svg>
                              Refresh
                           </button>
                           <!-- <button class="sm-btn-ghost">
               <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 2L11 13"></path>
                  <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
               </svg>
               Send Recovery
            </button>
            <button class="sm-btn-ghost">
               <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                  <line x1="3" y1="9" x2="21" y2="9"></line>
                  <line x1="9" y1="21" x2="9" y2="9"></line>
               </svg>
               Templates (0)
            </button> -->
                           <button style="padding: 8px 16px; border-radius: 7px; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; cursor: pointer; background: var(--accent); color: rgb(255, 255, 255); font-weight: 600; font-size: 13px; display: inline-flex; align-items: center; gap: 6px;">
                              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                 <line x1="12" y1="5" x2="12" y2="19"></line>
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                              </svg>
                              Register
                           </button>
                        </div>
                     </div>
                     <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 20px;">
                        <div style="background: var(--surface, #111318); border: 1px solid var(--border); border-radius: 10px; padding: 14px 18px; min-width: 110px; flex: 1 1 110px;">
                           <div style="font-size: 11px; color: var(--muted); font-weight: 500; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 6px;">Total</div>
                           <div style="font-size: 24px; font-weight: 700; color: var(--ink, #e2e8f0); font-family: &quot;JetBrains Mono&quot;, monospace;"><?= ($this->accounts['count']) ?></div>
                        </div>
                        <div style="background: var(--surface, #111318); border: 1px solid var(--border); border-radius: 10px; padding: 14px 18px; min-width: 110px; flex: 1 1 110px;">
                           <div style="font-size: 11px; color: var(--muted); font-weight: 500; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 6px;">Staged</div>
                           <div style="font-size: 24px; font-weight: 700; color: rgb(245, 158, 11); font-family: &quot;JetBrains Mono&quot;, monospace;"><?= count($this->accounts['data']) ?></div>
                        </div>
                        <div style="background: var(--surface, #111318); border: 1px solid var(--border); border-radius: 10px; padding: 14px 18px; min-width: 110px; flex: 1 1 110px;">
                           <div style="font-size: 11px; color: var(--muted); font-weight: 500; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 6px;">Connected</div>
                           <div style="font-size: 24px; font-weight: 700; color: rgb(34, 197, 94); font-family: &quot;JetBrains Mono&quot;, monospace;"><?= count($this->accounts['connected']) ?></div>
                        </div>
                        <div style="background: var(--surface, #111318); border: 1px solid var(--border); border-radius: 10px; padding: 14px 18px; min-width: 110px; flex: 1 1 110px;">
                           <div style="font-size: 11px; color: var(--muted); font-weight: 500; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 6px;">Disconnected</div>
                           <div style="font-size: 24px; font-weight: 700; color: rgb(239, 68, 68); font-family: &quot;JetBrains Mono&quot;, monospace;">0</div>
                        </div>
                     </div> 
                     <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center; margin-bottom: 16px;">
                        <a href="/dashboard/staged" class="sm-filter-btn active">ALL</a>
                        <a href="/dashboard/staged?filter=staged" class="sm-filter-btn">STAGED</a>
                        <a href="/dashboard/staged?filter=connected" class="sm-filter-btn">CONNECTED</a>
                        <a href="/dashboard/staged?filter=disconnected" class="sm-filter-btn">DISCONNECTED</a>
                        <input placeholder="Search email or owner…" value="" style="width: 220px; box-sizing: border-box; padding: 8px 10px; background: color-mix(in srgb, var(--border) 40%, transparent); border: 1px solid var(--border); border-radius: 7px; color: var(--ink, #e2e8f0); font-size: 13px; font-family: &quot;DM Sans&quot;, sans-serif; outline: none; margin-left: auto;"></div>
                     <div style="background: var(--surface, #111318); border: 1px solid var(--border); border-radius: 12px; overflow: hidden;">
                        <div style="overflow-x: auto;">
                           <table class="sm-table">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th class="sm-hide-mobile">Created</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($this->accounts['data'] as $row) { ?>
                                    <tr>
                                       <td style="font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 12px; color: var(--muted);">37</td>
                                       <td title="<?= $row['user_email'] ?>" style="font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 12px; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; cursor: pointer; color: var(--accent);"><?= $row['user_email'] ?></td>
                                       <td><span style="display: inline-flex; align-items: center; gap: 5px; padding: 2px 9px; border-radius: 99px; font-size: 11px; font-weight: 600; letter-spacing: 0.04em; background: rgba(245, 158, 11, 0.12); <?= $row['status'] == 'pending' ? 'background: rgb(245, 158, 11)' : 'background:rgb(34, 197, 94)' ?>; font-family: &quot;JetBrains Mono&quot;, monospace;">
                                             <span style="width: 5px; height: 5px; border-radius: 50%; 
                        <?= (($row['status'] == 'pending' )|| empty($row['tokens'])) ? 'background: rgb(245, 158, 11)' : 'background:rgb(34, 197, 94)' ?>; flex-shrink: 0;"></span>
                        <?= (($row['status'] == 'pending') || empty($row['tokens'])) ? 'STAGED' : 'CONNECTED' ?></span></td>

                                       <td class="sm-hide-mobile" style="font-size: 12px; white-space: nowrap;"><?= date('d M Y', strtotime($row['user_created_at'])) ?></td>
                                       <td>
                                          <div style="display: flex; gap: 5px; flex-wrap: nowrap;">
                                             <a href='/dashboard?email=<?= $row['user_email'] ?>' class="sm-row-btn">View</a>
                                             <!-- <button class="sm-row-btn">Access</button>
                                             <button class="sm-row-btn" style="border-color: rgba(var(--accent-rgb, 99,102,241),.4); color: var(--accent);">Recover</button> -->
                                             <a href="#" class="delete_data sm-row-btn danger">Del</a></div>
                                       </td>
                                    </tr>
                                 <?php } ?>

                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div style="margin-top: 10px; font-size: 11px; color: var(--muted); text-align: right;">31 of 31 mailboxes</div>
                  
                      <div class="col-12">
                        <nav>
                            <ul class="pagination">
                                <?php
                                $currentPage = $_GET['pg'] ?? 1;
                                $totalPerPage = $this->_company['user_loop_sequence'] ?? 24;
                                $totalCount = $this->accounts['count'] ?? 1;

                                $possiblePages = false;
                                $next = 0;
                                if (($totalPerPage * $currentPage) < $totalCount) {
                                    $possiblePages = true;
                                    $next = $currentPage + 1;
                                }

                                if ($currentPage > 1) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="<?= CustomFunctions::formatDynamicUrl('pg', ($currentPage - 1)) ?>">Previous</a></li>
                                <?php } ?>
                                <?php for ($i = 1; $i < ceil($totalCount / $totalPerPage) + 1; $i++) { ?>
                                    <li class="page-item <?= ($currentPage == $i) ? 'active' : '' ?>"><a class="page-link" href="<?= CustomFunctions::formatDynamicUrl('pg', $i) ?>"><?= $i ?></a></li>
                                <?php }
                                if ($possiblePages) { ?>
                                    <li class="page-item"><a class="page-link" href="<?= CustomFunctions::formatDynamicUrl('pg', $next) ?>">Next</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                     
                  </div>
               </main>
               <!-- Row end -->




               <!-- Row end -->

            </div>
            <!-- App body ends -->

           
            <!-- App footer end -->

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

   <script>
      $(document).ready(function() {
         $('.delete_data').click(function(e) {
            e.preventDefault();
            var email = $(this).closest('tr').find('td:nth-child(2)').text();
            if (confirm('Are you sure you want to delete ' + email + '?')) {
               $.ajax({
                  url: '/myapp/clear_entire_email',
                  type: 'POST',
                  data: { email: email },
                  success: function(response) {
                     alert(response.message);
                     location.reload();
                  },
                  error: function(xhr, status, error) {
                     alert('Error deleting account: ' + error);
                  }
               });
            }
         });
      });
   </script>
</body>

</html>