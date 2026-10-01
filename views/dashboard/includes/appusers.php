<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px">
    <h2 style="font-size: 16px; color: var(--ink)">
        App Users <span style="color: var(--muted); font-weight: 400">(<?= count($this->users) ?>)</span>
    </h2>
    <button id="addusersbtn"
        style="
            padding: 9px 20px;
            background: var(--ink);
            color: white;
            border-width: medium;
            border-style: none;
            border-color: currentcolor;
            border-image: initial;
            border-radius: 9px;
            font-size: 14px;
            font-family: inherit;
            font-weight: 500;
            cursor: pointer;
        "
    >
        + Add user
    </button>
</div>

<?php foreach($this->users as $row) { ?>
<div
    style="
        background: var(--surface); 
        border-left: 3px solid transparent; 
        border-radius: 14px;
        padding: 24px;
        margin-bottom: 10px;
        opacity: 1;
    "
>
    <div style="display: flex; gap: 12px; align-items: flex-start">
        <div style="flex: 1 1 0%; min-width: 0px">
            <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 4px 10px; margin-bottom: 5px">
                <span style="font-size: 14px; font-weight: 600; color: var(--ink)"><?= $row['user_email'] ?></span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        background: var(--border);
                        border-radius: 20px;
                        color: var(--muted);
                        font-weight: 500;
                    "
                    >you</span
                >
            </div>
            <div style="display: flex; flex-wrap: wrap; gap: 4px; margin-bottom: 5px">
                <span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: rgba(52, 168, 83, 0.12);
                        color: rgb(45, 125, 70);
                        letter-spacing: 0.02em;
                    "
                    >add</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: rgba(66, 133, 244, 0.12);
                        color: rgb(26, 92, 200);
                        letter-spacing: 0.02em;
                    "
                    >modify</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: rgba(200, 75, 49, 0.12);
                        color: rgb(184, 50, 50);
                        letter-spacing: 0.02em;
                    "
                    >delete</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: rgba(251, 188, 4, 0.15);
                        color: rgb(138, 98, 0);
                        letter-spacing: 0.02em;
                    "
                    >disable</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >access-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >list-pending-mailboxes</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >list-mailboxes</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >list-child-mailboxes</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >delete-staged-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >stage-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >delete-any-staged-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >modify-staged-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >modify-any-staged-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >recover-any-staged-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >recover-staged-mailbox</span
                ><span
                    style="
                        font-size: 10px;
                        padding: 2px 7px;
                        border-radius: 20px;
                        font-weight: 600;
                        background: var(--border);
                        color: var(--muted);
                        letter-spacing: 0.02em;
                    "
                    >access-any-mailbox</span
                >
            </div>
            <div style="font-size: 11px; color: var(--muted); display: flex; flex-wrap: wrap; gap: 2px 14px">
                <span>↳ parent: <strong>admin</strong></span
                ><span>since 19/06/2026</span>
            </div>
        </div>
    </div>
</div>
<?php } ?>
 

<style>
    .hide {
        display: none !important;
    }
    .show {
        display: flex;
    }
</style>
<div id="mastModal" class="hide" style="position: fixed; top: 0px; right: 0px; width: min(440px, 100vw); height: 100vh; background: white; border-left: 1px solid var(--border); box-shadow: rgba(0, 0, 0, 0.12) -8px 0px 32px; z-index: 201; flex-direction: column; overflow-y: auto;">
   
<div style="padding: 24px 28px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;">
    <h2 style="font-size: 16px; color: var(--ink);">Add User</h2>
    <button  class="removeModal" style="background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; font-size: 22px; cursor: pointer; color: var(--muted);">×</button>
</div>

<form id="addusers" style="padding: 24px 28px; display: flex; flex-direction: column; gap: 0px; flex: 1 1 0%;"><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Username *</label>
<input pattern="^\w+$" name="username" title="Letters, numbers and underscores only" required="" placeholder="e.g. alice" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: white; color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Password *</label>
<input type="password" name="pass" required="" placeholder="••••••••" minlength="4" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: white; color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Parent account</label>
<select style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
    <?php foreach($this->users as $row) { ?>
    <option value="<?= $row['user_ID'] ?>"><?= $row['user_email'] ?></option>
    <?php } ?>
</select>
<label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 10px;">Roles</label>
<div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px;">
    
<?php foreach($this->roles as $role) { ?>
<label style="display: flex; align-items: center; gap: 10px; cursor: pointer; opacity: 1; font-size: 13px;">
    <input type="checkbox" name="role[]" value="<?= $role['role_id'] ?>" style="width: 15px; height: 15px; accent-color: var(--ink); cursor: pointer;">
    <span><strong style="color: var(--ink);"><?= $role['role_id'] ?></strong><span style="color: var(--muted); margin-left: 6px;">— <?= $role['name'] ?></span></span>
</label>
<?php } ?>
 
    
                 
                    
                    </div><div style="display: flex; gap: 10px; justify-content: flex-end; margin-top: auto;">
                        <button type="button"class="removeModal" style="background: none; border: 1px solid var(--border); color: var(--ink); border-radius: 7px; padding: 9px 20px; font-size: 12px; cursor: pointer; font-family: inherit;">Cancel</button>
                        <button  type="submit" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">Create user</button>
                    </div></form></div>

<script>
    const removeModal = document.querySelectorAll(".removeModal");
    const mastModal = document.querySelector("#mastModal");
    const addusersbtn = document.querySelector("#addusersbtn");

    removeModal.forEach( (element) => {
        element.addEventListener('click',(e)=> {  
            mastModal.classList.remove('show');
            mastModal.classList.add('hide');
        });
    });
    
    addusersbtn.addEventListener('click', (e)=> {
        mastModal.classList.add('show');
        mastModal.classList.remove('hide'); 
    });
    const addusers = document.querySelector('#addusers');
    addusers.addEventListener('submit', async (e)=> {
        e.preventDefault();
        const form = new FormData(addusers);

        try {
            const response = await fetch('/myapp/addusers', {method:"POST", body:form});
            const result = await response.json();

            alert(result.msg);

            if (!result.error) {
                removeModal.click();
            }
        } catch(e){}
    })
</script>