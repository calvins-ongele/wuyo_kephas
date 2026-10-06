 <!-- App brand starts -->
          <div class="app-brand px-3 py-3 d-flex align-items-centerx">
              <div class="d-flex justify-content-start">
                   <div style="width: 40px; height: 40px; background: var(--ink); border-radius: 18px; display: flex; align-items: center; justify-content: center; 
               margin: 0 5px auto; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 10px;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="white" stroke-width="1.5" stroke-linejoin="round"></path>
                        <path d="M22 6l-10 7L2 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                       
                        </div>
             <h1 style="font-size: 32px; color: var(--ink); margin-bottom: auto;">
                            <span style="color: red;">A</span>ccess</h1>
              </div>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar profile ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="<?= $this->pid=='home' ? 'active current-page':'' ?>">
                <a href="/dashboard">
                  <i class="bi bi-mailbox"></i>
                  <span class="menu-text">Mail</span>
                </a>
              </li>
              <li class="<?= $this->pid=='accounts' ? 'active current-page':'' ?>">
                <a href="/dashboard/accounts?filter=active">
                  <i class="bi bi-people"></i>
                  <span class="menu-text">Accounts</span>
                </a>
              </li>
              <li class="<?= $this->pid=='staged' ? 'active current-page':'' ?>">
                <a href="/dashboard/staged">
                  <i class="bi bi-mailbox"></i>
                  <span class="menu-text">Staged</span>
                </a>
              </li>
              <?php if (!isTutor) { ?>
              <li class="<?= $this->pid=='sendemail' ? 'active current-page':'' ?>">
                <a href="/dashboard/sendemail">
                  <i class="bi bi-envelope"></i>
                  <span class="menu-text">Send Email</span>
                </a>
                </li>
                <?php } else { ?>
              <li class="<?= $this->pid=='automations' ? 'active current-page':'' ?>">
                <a href="/dashboard/automations">
                  <i class="bi bi-lightning"></i>
                  <span class="menu-text">Automations</span>
                </a>
              </li>
              <?php } ?>
              <li class="<?= $this->pid=='settings' ? 'active current-page':'' ?>">
                <a href="/dashboard/settings">
                  <i class="bi bi-gear"></i>
                  <span class="menu-text">Settings</span>
                </a>
              </li>
              
             
             
           
              
            </ul>

            
          </div>
          <div style="height: 300px; overflow:auto; margin-top:-30px; margin-left:10% ">
             <div class=" hidden mailboxtab  ">
                <a href="#"> 
                  <span class="menu-text">Mailbox <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="transform: rotate(90deg); transition: transform 0.2s; flex-shrink: 0;"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
                </a>
             
 
                  
                      
                      <div style=" "> 
                      <button class=" activeTab folders_tabs" folder='inbox' style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: white; font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Inbox</span></button>
                      
                      <button class=" folders_tabs" folder='starred'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: color-mix(in srgb, var(--accent) 12%, transparent); border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--accent); font-size: 13px; font-weight: 600; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 1;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span><span style=" ">Starred</span></button>
                      
                      <button class=" folders_tabs" folder='important'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Important</span></button>
                      <button class=" folders_tabs" folder='sent'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Sent</span></button>
                      <button class=" folders_tabs" folder='draft'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Draft</span></button>
                      <button class=" folders_tabs" folder='spam'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Spam</span></button>
                      
                      <button class=" folders_tabs" folder='trash'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"></path></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Trash</span></button>
                      
                      <button class=" folders_tabs" folder='chat'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Chat</span></button>
                        
                        <button class=" folders_tabs" folder='unread'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Unread</span>
                        
                        </button>
                        
                        <button class=" folders_tabs" folder='yellow_star'  style="display: flex; align-items: center; gap: 9px; width: 100%; padding: 7px 10px; background: none; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 6px; cursor: pointer; color: var(--muted); font-size: 13px; font-weight: 400; font-family: 'DM Sans', sans-serif; text-align: left; transition: background 0.12s, color 0.12s;"><span style="display: flex; opacity: 0.6;"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle></svg></span><span style="flex: 1 1 0%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Yellow_star</span></button></div><div style="height: 1px; background: var(--border); margin: 8px 10px;"></div> 
                        </div>

              
          </div>
          <!-- Sidebar menu ends -->