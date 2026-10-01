












  
         
        <div id="assignmentsModal" class="hidden" style=" position: fixed; top: 0px; right: 0px; width: min(680px, 100vw); height: 100vh; background: white; border-left: 1px solid var(--border); box-shadow: rgba(0, 0, 0, 0.12) -8px 0px 32px; z-index: 101; overflow-y: auto; padding: 28px 28px 48px; transform: translateX(0px); transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;"><h2 style="font-size: 17px; color: var(--ink);">Add Course Work</h2><button onclick="removeAssignmentModal()" style="background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; font-size: 22px; cursor: pointer; color: var(--muted); line-height: 1;">×</button></div>
           


            <form id="addResoursesForm"  style="padding: 0px 4px;">
                 <input type="hidden" name="method" value="addAssignments" />
                 <input type="hidden" name="action" value="insert" />
            <input type="hidden" name="csrf_token" value="<?= CSRF::get() ?>" />
                <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Course *</label>
            <select required="" name="course" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><option value="" disabled >— Select a course —</option> 
            <?php foreach($this->courses as $row) { ?>
            <option value="<?= $row['id'] ?>"><?= $row['name'] ?> (<?= $row['academic_year'] ?>)</option>
             <?php } ?>
        </select>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0px 16px;">
            <div><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Title *</label>
        
        <input required="" name="title" placeholder="Course Work title" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"></div><div>
            
        <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Course Work Type</label>
        <select name="course_work_type" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><option>Individual</option><option>Group</option><option>Capstone</option><option>Lab</option><option>Exam</option><option>Project</option></select></div><div>
            
        <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Due Date *</label><input name="due_date" type="date" required="" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"></div><div>
            
        <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Points</label><input name="points" type="number" min="0" value="100" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"></div></div><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Description</label>
        
        <textarea  name="description" id="description" placeholder="Describe the assignment…" rows="4" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px; resize: vertical; min-height: 80px; line-height: 1.5;"></textarea>
        
        <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Objectives <span style="color: var(--muted); font-weight: 400;">(one per line)</span></label><textarea name="objectives" placeholder="Apply research methods…
Analyze data…" rows="3" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px; resize: vertical; min-height: 80px; line-height: 1.5;"></textarea>

<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Requirements <span style="color: var(--muted); font-weight: 400;">(one per line)</span></label>
<textarea name="requirements" placeholder="Minimum 8 interviews…" rows="3" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px; resize: vertical; min-height: 80px; line-height: 1.5;"></textarea>

<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Deliverables <span style="color: var(--muted); font-weight: 400;">(one per line)</span></label>

<textarea name="deliverables" placeholder="Research report (3500–5000 words)…" rows="3" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px; resize: vertical; min-height: 80px; line-height: 1.5;"></textarea>

<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Grading Criteria</label>

<div style="display: flex; gap: 8px; align-items: flex-start; margin-bottom: 8px;">
    
<input name="grading_criteria[]" placeholder="Criterion description" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 3 1 0%;">
<input type="number" min="0" max="100" name="weight[]" placeholder="Weight %" value="100" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 1 1 0%;"><button onclick="removeCriterion(this)" type="button" style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 9px 12px; font-size: 12px; cursor: pointer; font-family: inherit; margin-left: 0px;">×</button></div>

<button type="button" onclick="addCriterion()" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 4px 12px; font-size: 12px; cursor: pointer; font-family: inherit; margin-bottom: 14px;">+ Add criterion</button>

<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Resources</label><div style="display: flex; gap: 8px; align-items: flex-start; margin-bottom: 8px;">
    
<input name="resources[]" placeholder="Resource title" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 2 1 0%;">
<input name="resources_url[]" placeholder="https://…" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 3 1 0%;">
<button onclick="removeResources(this)" type="button" style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 9px 12px; font-size: 12px; cursor: pointer; font-family: inherit;">×</button></div>
<button type="button" onclick="addResources()" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 4px 12px; font-size: 12px; cursor: pointer; font-family: inherit; margin-bottom: 14px;">+ Add resource</button>

<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Tags <span style="color: var(--muted); font-weight: 400;">(comma-separated)</span></label><input name="tags" placeholder="Field Research, Community Health, …" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><div style="display: flex; gap: 10px; justify-content: flex-end; padding-top: 4px;"><button onclick="removeAssignmentModal()" type="button" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 9px 20px; font-size: 12px; cursor: pointer; font-family: inherit;">Cancel</button>
<button type="submit" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">Save assignment</button></div></form>
 
</div> 

<script>
    
    function removeAssignmentModal() { 
    const assignmentsModal = document.querySelector("#assignmentsModal");
        assignmentsModal.classList.add('hidden');
    }
    function openAssignmentsModal() {   
    const assignmentsModal = document.querySelector("#assignmentsModal");
        assignmentsModal.classList.remove('hidden');
    }

    document.querySelector("#addassignments").addEventListener('click', (e)=> {
        openAssignmentsModal();
    });


    // Function to add a new criterion row
    function addCriterion(val = '', weight = '100') {
    // 1. Create the container div with matching flex layout and styles
    const row = document.createElement('div');
    row.style.cssText = 'display: flex; gap: 8px; align-items: flex-start; margin-bottom: 8px;';

    // 2. Insert the HTML structure matching your template
    row.innerHTML = `
        <input 
        name="grading_criteria[]" 
        placeholder="Criterion description" 
        value="${val}" 
        style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 3 1 0%;"
        >
        <input 
        type="number" 
        min="0" 
        max="100" 
        name="weight[]" 
        placeholder="Weight %" 
        value="${weight}" 
        style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 1 1 0%;"
        >
        <button 
        type="button" 
        onclick="removeCriterion(this)" 
        style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 9px 12px; font-size: 12px; cursor: pointer; font-family: inherit; margin-left: 0px;"
        >×</button>
    `;

    // 3. Insert the new row directly before the "+ Add criterion" button
    const addButton = document.querySelector('button[onclick="addCriterion()"]');
    addButton.parentNode.insertBefore(row, addButton);
    }

    // Function to remove a specific criterion row
    function removeCriterion(buttonElement) {
    // Finds the parent row div and removes it from the DOM
    const row = buttonElement.closest('div');
    if (row) {
        row.remove();
    }
    }

    // Function to add a new criterion row
    function addResources(val = '', url = '') {
    // 1. Create the container div with matching flex layout and styles
    const row = document.createElement('div');
    row.style.cssText = 'display: flex; gap: 8px; align-items: flex-start; margin-bottom: 8px;';

    // 2. Insert the HTML structure matching your template
    row.innerHTML = `
        <input name="resources[]" placeholder="Resource title" value="${val}" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 2 1 0%;">

        <input name="resources_url[]" type="url" placeholder="https://…" value="${url}" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 0px; flex: 3 1 0%;">
        <button 
        type="button" 
        onclick="removeResources(this)" 
        style="background: none; border: 1px solid rgba(200, 75, 49, 0.35); color: var(--accent); border-radius: 7px; padding: 9px 12px; font-size: 12px; cursor: pointer; font-family: inherit; margin-left: 0px;"
        >×</button>
    `;

    // 3. Insert the new row directly before the "+ Add criterion" button
    const addButton = document.querySelector('button[onclick="addResources()"]');
    addButton.parentNode.insertBefore(row, addButton);
    }


    function removeResources(buttonElement) {
        // Finds the parent row div and removes it from the DOM
        const row = buttonElement.closest('div');
        if (row) {
            row.remove();
        }
    }

    const addResoursesForm = document.querySelector('#addResoursesForm');
    addResoursesForm.addEventListener('submit', async (e)=> {
        e.preventDefault();
        const form = new FormData(addResoursesForm);

        try {
            const response = await fetch('/myapp/requests', {method:"POST", body:form });
            const result = await response.json();
            alert(result.msg);
            if (!result.error) {
                
                removeAssignmentModal();

            }
        } catch(e) {}
    })
</script>