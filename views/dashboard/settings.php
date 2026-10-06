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
               <p style="color: var(--muted); font-size: 13px;">Logged in as <strong><?= $this->_me['user_email'] ?></strong></p>
            </div>
            <button onclick="location.href='/dashboard/logout'" style="margin-left: auto; padding: 9px 20px; background: var(--accent); color: red; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">Sign out</button>
         </div>
         <div style="display: flex; gap: 4px; margin-bottom: 24px; border-bottom: 1px solid var(--border); overflow-x: auto;">
          <button class="change_tabs tab_active" rel="mycredentails"  style=" padding: 8px 16px; background: none; border-top-width: medium; border-right-width: medium; border-bottom: 2px solid var(--ink); border-left-width: medium; border-top-style: none; border-right-style: none; border-left-style: none; border-top-color: currentcolor; border-right-color: currentcolor; border-left-color: currentcolor; border-image: initial; color: var(--ink); font-family: inherit; font-size: 14px; font-weight: 600; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px; border:none;">My Credentials</button>
          <button  class="change_tabs" rel="appusers"  style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">App Users</button>
          <button class="change_tabs" rel="gmailaccounts" style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Gmail Accounts</button>
          <button  class="change_tabs" rel="browserhook" style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Browser Hook</button>
          
          <!--
          <button  class="change_tabs" rel="courses" style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor: pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Courses</button>
          
          <button class="change_tabs" rel="assignments"  style="padding: 8px 16px; background: none; border-width: medium medium 2px; border-style: none none solid; 
          border-color: currentcolor currentcolor transparent; border-image: initial; color: var(--muted); font-family: inherit; font-size: 14px; font-weight: 400; cursor:
          pointer; margin-bottom: -1px; white-space: nowrap; display: flex; align-items: center; gap: 6px;">Assignments</button>
          -->
          
          </div> 
          <!---------------------my credentials----------------------------->
          <div class="mycredentails_panel all " style="background: white; border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
            <h2 style="font-size: 16px; color: var(--ink); margin-bottom: 20px;">Change Username / Password</h2>
            <?php require 'includes/change-username-password.php' ?>
         </div>

         <!-----------------------app users-------------------------------------->
         
          <div class="appusers_panel all  hidden" style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
             <?php require 'includes/appusers.php' ?>

         </div>
         <!-------------------gmail accounts ---------------------->
         <div class="gmailaccounts_panel all  hidden" style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;"><div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">Gmail Accounts</h2>
          
          <a href="/dashboard" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add account</a>
        </div>
          
          <?php foreach($this->accounts as $row) { ?>
          <div style="display: flex; align-items: center; gap: 12px; padding: 12px 0px; border-bottom: 1px solid var(--border);">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--ink); color: white; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 600;"><?= substr($row['user_email'],0,1) ?></div><div style="flex: 1 1 0%;">
              <div style="font-size: 14px; color: var(--ink); font-weight: 500;"><?= $row['user_email'] ?></div>
              <div style="font-size: 12px; color: var(--muted);"><?= $row['user_email'] ?></div></div><div style="font-size: 11px; color: var(--muted); text-align: right; margin-right: 12px;">Added <?= date('d/m/Y', strtotime($row['user_created_at'])) ?></div></div>
              <?php } ?>
          
          </div>
         </div>

         <!------------------------browser hook--------------------->

         <div class="browserhook_panel all  hidden" style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;"><div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 24px;"><div><h2 style="font-size: 16px; color: var(--ink); margin-bottom: 4px;">Browser Hook</h2><p style="font-size: 13px; color: var(--muted);">Monitors the system-auto process. Polls every 3 s.</p></div><button disabled="" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: not-allowed; opacity: 0.5;">Running</button></div><div style="display: flex; gap: 16px; flex-wrap: wrap;"><div style="flex: 1 1 180px; background: var(--paper); border: 1px solid var(--border); border-radius: 12px; padding: 20px 24px; display: flex; flex-direction: column; gap: 8px;"><span style="font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.08em;">Status</span><div style="display: flex; align-items: center; gap: 10px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: rgb(52, 168, 83); box-shadow: rgba(52, 168, 83, 0.2) 0px 0px 0px 3px; flex-shrink: 0;"></span><span style="font-size: 18px; font-weight: 600; color: rgb(45, 125, 70);">Running</span></div></div><div style="flex: 1 1 140px; background: var(--paper); border: 1px solid var(--border); border-radius: 12px; padding: 20px 24px;"><span style="font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 8px;">Starting</span><span style="font-size: 16px; font-weight: 600; color: var(--muted);">No</span></div><div style="flex: 1 1 140px; background: var(--paper); border: 1px solid var(--border); border-radius: 12px; padding: 20px 24px;"><span style="font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 8px;">Running</span><span style="font-size: 16px; font-weight: 600; color: rgb(45, 125, 70);">Yes</span></div></div><p style="font-size: 12px; color: var(--muted); margin-top: 16px;">Last polled: 14:27:14</p></div>
         </div>


         <!--------------------------courses------------------------------------------> 

        <div class="courses_panel all  hidden" style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">Courses <span style="color: var(--muted); font-weight: 400;">(<?= count($this->courses) ?>)</span></h2><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="addCourse" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add course</button></div>
 

          <?php foreach($this->courses as $row) { ?>
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 10px;"><div style="display: flex; gap: 12px; align-items: flex-start;"><div style="flex: 1 1 0%; min-width: 0px;"><div style="display: flex; flex-wrap: wrap; align-items: baseline; gap: 4px 10px; margin-bottom: 4px;"><span style="font-size: 15px; font-weight: 600; color: var(--ink);"><?= $row['name'] ?></span><span style="font-size: 11px; padding: 2px 8px; background: var(--border); color: var(--muted); border-radius: 20px; font-weight: 500;"><?= $row['code'] ?></span></div><div style="font-size: 12px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 14px;"><span>👤 <?= $row['instructor'] ?></span><span>🗓 <?= $row['academic_year'] ?></span><span style="color: var(--muted);">0 assignments</span></div></div><div style="display: flex; gap: 6px; flex-shrink: 0;">
            <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data='<?= json_encode($row) ?>'  id="editCourse"  rel="<?= $row['id'] ?>" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Edit</button>
          <button rel="<?= $row['id'] ?>" id="deleteCourse" style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Delete</button></div></div></div>
          <?php } ?>

        </div>

        <!-------------------------Assignments----------------------------------->
        <div class="assignments_panel all hidden" style=" border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;"><h2 style="font-size: 16px; color: var(--ink);">Assignments <span style="color: var(--muted); font-weight: 400;">(<?= count($this->assignments) ?>)</span></h2>
          <button   id="addassignments" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">+ Add assignment</button></div>
          
          <?php 
          
          foreach($this->assignments as $assignment) {
              $row = json_decode($assignment['data'], 1); 
            ?>
          <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 14px; padding: 24px; margin-bottom: 12px;"><div style="display: flex; gap: 12px; align-items: flex-start;"><div style="flex: 1 1 0%; min-width: 0px;"><div style="display: flex; flex-wrap: wrap; align-items: baseline; gap: 4px 12px; margin-bottom: 6px;"><span style="font-size: 15px; font-weight: 600; color: var(--ink);"><?= $row['title'] ?></span><span style="font-size: 11px; padding: 2px 8px; background: var(--border); color: var(--muted); border-radius: 20px; font-weight: 500;"><?= $row['course_work_type'] ?></span></div><div style="font-size: 12px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 16px;"><span><?= $assignment['code'] ?> · <?= $assignment['name'] ?></span><span><?= $assignment['instructor'] ?></span><span>Due <?= $row['due_date'] ?></span><span><?= $row['points'] ?> pts</span></div><div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 8px;"> 
            <?php foreach(explode(',', $row['tags']) as $tag) { ?>
          <span style="font-size: 11px; padding: 2px 8px; background: rgba(var(--ink-rgb, 0,0,0), 0.06); color: var(--muted); border-radius: 20px;"><?= $tag ?></span> 
          <?php } ?>
        </div></div>
          
          <div style="display: flex; flex-shrink: 0; gap: 6px; flex-wrap: wrap; justify-content: flex-end;">
            <a href="/dashboard/assignments-pdf/<?= $assignment['id'] ?>" oxnclick='downloadPdf(<?= $assignment["id"] ?>)' title="Download PDF" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit; display: flex; align-items: center; gap: 5px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>PDF</a>
          <button onclick='editAssignment(<?= json_encode($assignment) ?>)' style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Edit</button>
          <button onclick="deleteAssignments(<?= $assignment['id'] ?> )" style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 5px 10px; font-size: 12px; cursor: pointer; font-family: inherit;">Delete</button></div></div></div>
          <?php } ?>

          <?php require 'includes/assignments.php' ?>
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
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Manage Course</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="coursesform">
          <input name="action" value="insert" type="hidden" />
          <div class="mb-3">
            <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Course Name *</label>
            <input required="" name="name" placeholder="e.g. Urban Studies &amp; Community Health" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
             
          </div>

          
          <div class="mb-3">
            <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Course Code</label>
            <input placeholder="e.g. URBP 285" name="code" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
             
          </div>
          <div class="mb-3">
            <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Academic Year</label>
            <input name="year" placeholder="<?= date('Y')-1 ?>-<?= date('Y') ?>" value="<?= date('Y')-1 ?>-<?= date('Y') ?>" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
             
          </div>
          <div class="mb-3">
            <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Instructor</label>
            <input name="instructor" placeholder="Dr. Jane Smith" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
             
          </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Course</button>
      </div> 
        </form>
      </div>
    </div>
  </div>
</div>

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
 
  </body>


  <script>
    const change_tabs = document.querySelectorAll('.change_tabs');

    const editCourse = document.querySelector("#editCourse");

    editCourse?.addEventListener('click', (e)=> {  
      const data = JSON.parse(editCourse.getAttribute('data'));
      console.log(data);

      document.querySelector("input[name='name']").value = data.name;
      document.querySelector("input[name='code']").value = data.code;
      document.querySelector("input[name='year']").value = data.academic_year;
      document.querySelector("input[name='instructor']").value = data.instructor;
      document.querySelector("input[name='action']").value = 'update';
    });

    
    const deleteCourse = document.querySelector("#deleteCourse");

    deleteCourse?.addEventListener('click', async (e)=> {  
      const id = deleteCourse.getAttribute('rel');
      const form = new FormData();
      form.set('id', id);
      form.set('action', 'delete');

      if (confirm("Are you sure?")) { 

        try {
          
          form.set('method', 'managecourses'); 
          form.set('csrf_token', '<?= CSRF::get() ?>');

          const response = await fetch('/myapp/requests', {method:"POST", body:form });
          const result = await response.json();
          if (!result.error) {
            alert(result.msg);
            location.reload();
          }
        } catch(e) {}

      }
 
    });

    const coursesform = document.querySelector("#coursesform");
    coursesform.addEventListener("submit", async (e)=> {
      e.preventDefault();

      try {
        const form = new FormData(coursesform);
        form.set('method', 'managecourses'); 
        form.set('csrf_token', '<?= CSRF::get() ?>');

        const response = await fetch('/myapp/requests', {method:"POST", body:form });
        const result = await response.json();
        if (!result.error) {
          alert(result.msg);
          location.reload();
        }
      } catch(e) {}
    });


    change_tabs.forEach( (element) => {
      element.addEventListener('click', (ev)=> {
        const rel = element.getAttribute('rel');
        hideAll();
        document.querySelector(`.${rel}_panel`).classList.remove('hidden'); 
        element.classList.add('tab_active'); 
      })
    });

    function hideAll() {
      document.querySelectorAll('.all').forEach((el)=> {
        el.classList.add('hidden');
      });
      document.querySelectorAll('.change_tabs').forEach((el)=> {
        el.classList.remove('tab_active');
      });
    }

    async function deleteAssignments(id) {

    if (confirm("Are you sure?")) {
      
      try {
        const form = new FormData();
        form.set('method', 'addAssignments'); 
        form.set('action', 'delete');
        form.set('csrf_token', '<?= CSRF::get() ?>');

        const response = await fetch('/myapp/requests', {method:"POST", body:form });
        const result = await response.json();
        if (!result.error) {
          alert(result.msg);
          location.reload();
        }
      } catch(e) {}
    }
     
    }
    function editAssignment(data) { 
       openAssignmentsModal();
       const row = JSON.parse(data.data); 

       document.querySelector('[name="action"]').value = 'update';
       document.querySelector('[name="course"]').value = row.course;
       document.querySelector('[name="title"]').value = row.title;
       document.querySelector('[name="course_work_type"]').value = row.course_work_type;
       document.querySelector('[name="due_date"]').value = row.due_date;
       document.querySelector('[name="points"]').value = row.points;
       document.querySelector('#description').value = row.description;
       document.querySelector('[name="objectives"]').value = row.objectives;
       document.querySelector('[name="requirements"]').value = row.requirements;
       document.querySelector('[name="deliverables"]').value = row.deliverables;
       document.querySelector('[name="tags"]').value = row.tags;
       
       for(let i = 0; i < row.grading_criteria.length; i++) {
        addCriterion(row.grading_criteria[i], row.weight[i] );
       };

       console.log(row.resources);
       for(let i = 0; i < row.resources.length; i++) {
        addResources(row.resources[i], `${row.resources_url[i]}` );
       };
    }
    async function downloadPdf(id) { 
      
      try {
        const form = new FormData();
        form.set('method', 'downloadPdf'); 
        form.set('action', 'delete');
        form.set('csrf_token', '<?= CSRF::get() ?>');

        const response = await fetch('/myapp/requests', {method:"POST", body:form });
        const result = await response.json();
        if (!result.error) {
          alert(result.msg);
          location.reload();
        }
      } catch(e) {}
    
    }
  </script>

</html>