<form id="changeusernamepassword">
    <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">New username (leave blank to keep current)</label>
 
    <input name="username" placeholder="<?= $this->_me['user_email'] ?>" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
    
    <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Current password *</label>
    
    <input type="password" name="pass" placeholder="••••••••" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;">
    
    <label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">New password (leave blank to keep current)</label>
    
    <input type="password" name="pass1" placeholder="••••••••" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 14px;"><label style="display: block; font-size: 13px; font-weight: 500; color: var(--ink); margin-bottom: 6px;">Confirm new password</label>
    
    <input type="password" name="pass2" placeholder="••••••••" value="" style="width: 100%; box-sizing: border-box; padding: 9px 12px; border: 1px solid var(--border); border-radius: 9px; font-size: 14px; background: var(--paper); color: var(--ink); outline: none; font-family: inherit; margin-bottom: 20px;">
    
    <button type="submit" style="padding: 9px 20px; background: var(--ink); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 9px; font-size: 14px; font-family: inherit; font-weight: 500; cursor: pointer;">Save changes</button>
</form>

<script>
    const changeusernamepassword = document.querySelector("#changeusernamepassword");
    const saveBtn = changeusernamepassword.querySelector('button');

    changeusernamepassword.addEventListener("submit", async (e)=> {
        e.preventDefault();
        const form = new FormData(changeusernamepassword);

        try {
            saveBtn.innerHTML = `<?= CustomFunctions::Loading() ?>`;
            const response = await fetch('/myapp/save-username-password', {
                method:"POST", body:form
            });
            const result = await response.json();

            alert(result.msg);
        } catch(e) {}
        finally {
            saveBtn.textContent = 'Save Changes';
        }
    })
</script>