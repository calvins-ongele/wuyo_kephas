<div class="hidden filtersSearchArea" style="position: absolute; top: 30px; left: 50%; width: min(100%, 600px); background: var(--surface); border: 1px solid var(--border); border-radius: 12px; box-shadow: rgba(0, 0, 0, 0.14) 0px 8px 32px; z-index: 200; overflow: hidden;">
<form id="filterseaea">    
<div style="padding: 12px 14px 10px; border-bottom: 1px solid var(--border);">
        <p style="margin: 0px; font-size: 10.5px; color: var(--muted); font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;">Search filters</p>
    </div>
    <div style="padding: 14px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; max-height: none; overflow-y: visible;">
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg></span>From</label>
                    <input type="text" name="from" placeholder="Sender email or name" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-at-sign">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path>
                    </svg></span>To</label>
                    
                    <input name="to" type="text" placeholder="Recipient email or name" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg></span>Subject contains</label>
                    
                    <input name="subject" type="text" placeholder="e.g. invoice, meeting" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg></span>Has these words</label>
                    
                    <input name="has_words" type="text" placeholder="e.g. contract deadline" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg></span>Doesn't have</label>
                    <input name="doesnt_have" type="text" placeholder="e.g. newsletter promo" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag">
                        <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path>
                        <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle>
                    </svg></span>Label</label>
                    
                    <input name="label" type="text" placeholder="e.g. work, receipts" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg></span>Received after</label>
                    
                    <input name="received_after" type="date" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
        <div><label style="font-size: 11px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 4px; margin-bottom: 4px;"><span style="color: var(--muted);"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg></span>Received before</label>
                    
                    <input name='received_before' type="date" value="" style="width: 100%; padding: 6px 9px; border: 1px solid var(--border); border-radius: 7px; font-size: 12px; font-family: inherit; background: var(--paper); color: var(--ink); outline: none; box-sizing: border-box; transition: border-color 0.12s;"></div>
    </div>
    <div style="padding: 0px 14px 14px; display: flex; gap: 8px; flex-wrap: wrap;">
        
    <button class="hasmore " folder='attachment' type="button" style="padding: 5px 11px; border: 1px solid var(--border); border-radius: 7px; background: transparent; color: var(--muted); font-size: 11.5px; font-family: inherit; cursor: pointer; display: flex; align-items: center; gap: 5px; transition: 0.12s; font-weight: 400;"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-paperclip">
                <path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
            </svg> Has attachment</button>
            
            <button class="hasmore " folder='unreadonly' type="button" style="padding: 5px 11px; border: 1px solid var(--border); border-radius: 7px; background: transparent; color: var(--muted); font-size: 11.5px; font-family: inherit; cursor: pointer; display: flex; align-items: center; gap: 5px; transition: 0.12s; font-weight: 400;"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-open">
                <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path>
                <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
            </svg> Unread only</button><button class="hasmore " folder='starred' type="button" style="padding: 5px 11px; border: 1px solid var(--border); border-radius: 7px; background: transparent; color: var(--muted); font-size: 11.5px; font-family: inherit; cursor: pointer; display: flex; align-items: center; gap: 5px; transition: 0.12s; font-weight: 400;"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg> Starred only</button><button class="hasmore " folder='important' type="button" style="padding: 5px 11px; border: 1px solid var(--border); border-radius: 7px; background: transparent; color: var(--muted); font-size: 11.5px; font-family: inherit; cursor: pointer; display: flex; align-items: center; gap: 5px; transition: 0.12s; font-weight: 400;"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" x2="12" y1="8" y2="12"></line>
                <line x1="12" x2="12.01" y1="16" y2="16"></line>
            </svg> Important</button></div>
    <div style="margin: 0px 14px 14px; padding: 7px 10px; background: var(--paper); border: 1px solid var(--border); border-radius: 7px;">
        <!-- <span style="font-size: 10px; color: var(--muted); font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;">Preview</span> -->
        <!-- <p style="margin: 3px 0px 0px; font-size: 11.5px; color: var(--ink); font-family: monospace; word-break: break-all;">has:</p> -->
    </div>
    <div style="padding: 10px 14px; border-top: 1px solid var(--border); display: flex; justify-content: flex-end; gap: 7px;"><button type="reset" style="padding: 6px 14px; border: 1px solid var(--border); border-radius: 7px; background: transparent; color: var(--muted); font-size: 12px; font-family: inherit; cursor: pointer;">Reset</button>
    
    <button type="button" id="applySearch" style="padding: 6px 18px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; border-radius: 7px; background: var(--ink); color: white; font-size: 12px; font-family: inherit; cursor: pointer; font-weight: 600;">Apply &amp; Search</button>

</div>
</form>
</div>