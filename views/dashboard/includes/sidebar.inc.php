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
              <li class="<?= $this->pid=='automations' ? 'active current-page':'' ?>">
                <a href="/dashboard/automations">
                  <i class="bi bi-lightning"></i>
                  <span class="menu-text">Automations</span>
                </a>
              </li>
              <li class="<?= $this->pid=='settings' ? 'active current-page':'' ?>">
                <a href="/dashboard/settings">
                  <i class="bi bi-gear"></i>
                  <span class="menu-text">Settings</span>
                </a>
              </li>
             
           
              
            </ul>
          </div>
          <!-- Sidebar menu ends -->