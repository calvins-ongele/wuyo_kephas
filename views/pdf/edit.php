<!DOCTYPE html>
<html>
<head>
    <title><?= $this->title ?></title>
    
  
  <style id="text-unlocker-style">
      * {
        user-select: text !important;
        -webkit-user-select: text !important;
        -moz-user-select: text !important;
      }
      ::selection {
        background-color: #007bff !important;
        color: white !important;
      }
      ::-moz-selection {
        background-color: #007bff !important;
        color: white !important;
      }
    </style> 
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
    /* ── UW Official Palette ── */
    :root {
      --brown:      #492F24;   /* UW Brown */
      --brown-dk:   #2E1A0F;
      --brown-md:   #6b4535;
      --gold:       #FFC425;   /* UW Gold */
      --gold-dk:    #e0a800;
      --gold-lt:    #fff8e1;
      --gold-pale:  #fffbf0;
      --cream:      #FAF7F2;
      --ink:        #1a1208;
      --muted:      #6b5c4e;
      --rule:       #e8ddd3;
      --surface:    #F3EDE5;
      --bg:         #ffffff;
      --green:      #2a6b3c;
      --green-lt:   #e8f5ed;
      --accent:     #7B3F1A;   /* warm sienna accent */
    }
 
    body {
      font-family: 'Source Sans 3', 'Segoe UI', sans-serif;
      font-size: 11pt;
      line-height: 1.7;
      color: var(--ink);
      background: var(--bg);
      padding: 0;
      max-width: 860px;
      margin: 0 auto;
    }
 
    /* ── UW Wordmark bar ── */
    .uw-bar {
      background: var(--brown);
      padding: 10px 48px;
      display: flex;
      align-items: center;
      gap: 14px;
      border-bottom: 4px solid var(--gold);
    }
    .uw-bar-logo {
      font-family: 'Merriweather', Georgia, serif;
      font-size: 15pt;
      font-weight: 700;
      color: var(--gold);
      letter-spacing: 0.03em;
      line-height: 1;
    }
    .uw-bar-divider {
      width: 1px;
      height: 22px;
      background: rgba(255,196,37,0.35);
    }
    .uw-bar-sub {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 8.5pt;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: rgba(255,196,37,0.72);
    }
 
    /* ── Download FABs ── */
    .download-fab { bottom: 28px; right: 28px; }
    .reset-fab    { bottom: 78px; right: 28px; }
    .download-fab, .reset-fab {
      position: fixed;
      z-index: 999;
      display: flex;
      align-items: center;
      gap: 8px;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 10pt;
      font-weight: 700;
      color: var(--brown-dk);
      background: var(--gold);
      padding: 12px 22px;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 18px rgba(73,47,36,0.22);
      text-decoration: none;
      transition: background 0.15s, box-shadow 0.15s;
    }
    .download-fab:hover, .reset-fab:hover {
      background: var(--gold-dk);
      box-shadow: 0 6px 24px rgba(73,47,36,0.28);
    }
    .download-fab svg, .reset-fab svg {
      width: 16px; height: 16px; fill: none; stroke: var(--brown-dk);
      stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round; flex-shrink: 0;
    }
    .download-fab.loading { opacity: 0.65; pointer-events: none; }
 
    /* ── Sidebar ── */
    .sidebar {
      position: fixed;
      top: 50%;
      left: 16px;
      transform: translateY(-50%);
      z-index: 999;
      background: var(--cream);
      border: 1px solid var(--rule);
      border-top: 3px solid var(--brown);
      border-radius: 0 0 10px 10px;
      padding: 16px 14px 12px;
      box-shadow: 0 4px 28px rgba(73,47,36,0.14);
      font-family: 'Source Sans 3', sans-serif;
      width: 224px;
      max-height: 90vh;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 0;
    }
    .sidebar-title {
      font-size: 7.5pt;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--brown);
      margin-bottom: 10px;
      padding-bottom: 8px;
      border-bottom: 1px solid var(--rule);
    }
    .sidebar-list { display: flex; flex-direction: column; gap: 2px; margin-bottom: 10px; }
    .sidebar-item {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 9pt;
      color: var(--ink);
      cursor: default;
      padding: 5px 6px;
      border-radius: 5px;
      user-select: none;
      transition: background 0.1s;
    }
    .sidebar-item:hover { background: var(--gold-lt); }
    .sidebar-item.dragging { opacity: 0.4; }
    .sidebar-item.drag-over { border-top: 2px solid var(--brown); }
    .drag-handle { cursor: grab; color: var(--muted); font-size: 11pt; line-height: 1; flex-shrink: 0; padding: 0 2px; }
    .drag-handle:active { cursor: grabbing; }
    .sidebar-item input[type="checkbox"] { accent-color: var(--brown); width: 13px; height: 13px; cursor: pointer; flex-shrink: 0; }
    .sidebar-item-label { flex: 1; font-size: 9pt; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .sidebar-item .remove-btn {
      background: none; border: none; cursor: pointer; color: var(--muted);
      font-size: 14pt; line-height: 1; padding: 0 1px; flex-shrink: 0; display: none;
    }
    .sidebar-item:hover .remove-btn { display: block; }
    .sidebar-item .remove-btn:hover { color: #b03a2e; }
 
    .add-section-btn {
      width: 100%;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 9pt;
      font-weight: 700;
      color: var(--brown);
      background: var(--gold-lt);
      border: 1.5px dashed var(--gold-dk);
      border-radius: 6px;
      padding: 7px 0;
      cursor: pointer;
      transition: background 0.15s;
      margin-top: 4px;
    }
    .add-section-btn + .add-section-btn { margin-top: 6px; }
    .add-section-btn:hover { background: #fdeea0; }
 
    /* ── Link Settings (sidebar panel) ── */
    .link-settings {
      margin-top: 14px;
      padding-top: 12px;
      border-top: 1px solid var(--rule);
      display: flex;
      flex-direction: column;
      gap: 8px;
    }
    .link-settings-title {
      font-size: 7.5pt;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--brown);
      margin-bottom: 2px;
    }
    .link-type-btn {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 9pt;
      font-weight: 600;
      padding: 7px 10px;
      border-radius: 6px;
      border: 1.5px solid var(--rule);
      background: var(--surface);
      color: var(--muted);
      cursor: pointer;
      transition: all 0.15s;
      width: 100%;
      text-align: left;
    }
    .link-type-btn.active {
      border-color: var(--gold-dk);
      background: var(--gold-lt);
      color: var(--brown);
      font-weight: 700;
    }
    .link-type-btn .type-icon { font-size: 11pt; flex-shrink: 0; line-height: 1; }
    .dest-url-wrap { display: none; flex-direction: column; gap: 5px; }
    .dest-url-wrap.visible { display: flex; }
    .dest-url-wrap label {
      font-size: 7.5pt; font-weight: 700; letter-spacing: 0.06em;
      text-transform: uppercase; color: var(--muted);
    }
    .dest-url-wrap input[type="text"] {
      font-family: 'Source Mono', monospace;
      font-size: 8pt;
      color: var(--ink);
      border: 1.5px solid var(--rule);
      border-radius: 5px;
      padding: 6px 8px;
      outline: none;
      width: 100%;
      background: #fff;
      transition: border 0.15s;
    }
    .dest-url-wrap input[type="text"]:focus { border-color: var(--brown); }
    .dest-url-wrap input[type="text"]::placeholder { color: #bbb; }
 
    .link-preview-wrap { display: flex; flex-direction: column; gap: 4px; }
    .link-preview-label {
      font-size: 7.5pt; font-weight: 700; letter-spacing: 0.06em;
      text-transform: uppercase; color: var(--muted);
    }
    .link-preview-row {
      display: flex; align-items: center; gap: 4px;
      background: var(--surface);
      border: 1.5px solid var(--rule);
      border-radius: 5px;
      padding: 5px 8px;
      min-width: 0;
    }
    .link-preview-text {
      font-family: 'Source Mono', monospace;
      font-size: 7pt;
      color: var(--muted);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      flex: 1;
      min-width: 0;
    }
    .copy-btn {
      flex-shrink: 0; background: none; border: none; cursor: pointer;
      color: var(--brown); padding: 2px 4px; border-radius: 4px;
      display: flex; align-items: center; transition: background 0.12s; position: relative;
    }
    .copy-btn:hover { background: var(--gold-lt); }
    .copy-btn svg { width: 13px; height: 13px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
    .copy-toast {
      position: absolute; bottom: calc(100% + 6px); right: 0;
      background: var(--green); color: #fff;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 7.5pt; font-weight: 700;
      padding: 3px 8px; border-radius: 4px; white-space: nowrap;
      pointer-events: none; opacity: 0; transform: translateY(4px);
      transition: opacity 0.15s, transform 0.15s;
    }
    .copy-toast.show { opacity: 1; transform: translateY(0); }
 
    /* ── Add Section modal ── */
    .modal-backdrop {
      display: none; position: fixed; inset: 0;
      background: rgba(73,47,36,0.45);
      z-index: 1000; align-items: center; justify-content: center;
    }
    .modal-backdrop.open { display: flex; }
    .modal {
      background: #fff;
      border-radius: 10px;
      border-top: 4px solid var(--gold);
      padding: 28px 28px 22px;
      width: 480px;
      max-width: 95vw;
      box-shadow: 0 8px 48px rgba(73,47,36,0.22);
      font-family: 'Source Sans 3', sans-serif;
      display: flex; flex-direction: column; gap: 14px;
    }
    .modal-header {
      font-size: 12pt; font-weight: 700; color: var(--brown-dk);
      padding-bottom: 10px; border-bottom: 1px solid var(--rule);
    }
    .modal label {
      font-size: 8.5pt; font-weight: 700; letter-spacing: 0.06em;
      text-transform: uppercase; color: var(--muted);
      display: block; margin-bottom: 5px;
    }
    .modal input[type="text"], .modal textarea {
      width: 100%;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 10pt; color: var(--ink);
      border: 1.5px solid var(--rule);
      border-radius: 5px; padding: 8px 10px;
      outline: none; transition: border 0.15s; resize: vertical;
    }
    .modal input[type="text"]:focus, .modal textarea:focus { border-color: var(--brown); }
    .modal textarea { min-height: 100px; }
    .modal-type-row { display: flex; gap: 10px; }
    .type-btn {
      flex: 1;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 9pt; font-weight: 600;
      border: 1.5px solid var(--rule); border-radius: 5px;
      padding: 7px 0; cursor: pointer;
      background: var(--surface); color: var(--muted);
      transition: all 0.15s;
    }
    .type-btn.active {
      border-color: var(--gold-dk);
      background: var(--gold-lt);
      color: var(--brown); font-weight: 700;
    }
    .modal-hint { font-size: 8pt; color: var(--muted); margin-top: -8px; }
    .modal-actions {
      display: flex; justify-content: flex-end;
      gap: 10px; margin-top: 4px;
    }
    .btn-cancel {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 9.5pt; font-weight: 600;
      background: none; border: 1.5px solid var(--rule);
      border-radius: 5px; padding: 8px 18px;
      cursor: pointer; color: var(--muted);
    }
    .btn-cancel:hover { background: var(--surface); }
    .btn-confirm {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 9.5pt; font-weight: 700;
      background: var(--brown); border: none;
      border-radius: 5px; padding: 8px 20px;
      cursor: pointer; color: #fff;
    }
    .btn-confirm:hover { background: var(--brown-dk); }
 
    /* ── UW Masthead ── */
    .masthead {
      background: var(--brown);
      color: #fff;
      padding: 32px 48px 26px;
      border-bottom: 5px solid var(--gold);
      position: relative;
      overflow: hidden;
    }
    /* Subtle bucking horse silhouette watermark */
    .masthead::after {
      content: 'W';
      position: absolute;
      right: 32px;
      bottom: -10px;
      font-family: 'Merriweather', Georgia, serif;
      font-size: 96pt;
      font-weight: 700;
      color: rgba(255,196,37,0.07);
      line-height: 1;
      pointer-events: none;
      user-select: none;
    }
    .masthead-eyebrow {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 8pt;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 8px;
    }
    .masthead h1 {
      font-family: 'Merriweather', Georgia, serif;
      font-size: 22pt;
      font-weight: 700;
      line-height: 1.2;
      color: #fff;
      margin-bottom: 8px;
    }
    .masthead-sub {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 10pt;
      color: rgba(255,255,255,0.72);
    }
 
    /* ── Body wrapper ── */
    .body-wrap { padding: 36px 48px 52px; background: var(--bg); }
 
    /* ── Access button ── */
    .access-wrap { text-align: center; margin: 6px 0 28px; }
    .btn-access {
      display: inline-block;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 11.5pt; font-weight: 700;
      letter-spacing: 0.03em;
      color: var(--brown-dk);
      background: var(--gold);
      padding: 14px 44px;
      border-radius: 3px;
      text-decoration: none;
      border: none; cursor: pointer;
      transition: background 0.15s, box-shadow 0.15s;
      box-shadow: 0 2px 10px rgba(73,47,36,0.18);
    }
    .btn-access:hover {
      background: var(--gold-dk);
      box-shadow: 0 4px 16px rgba(73,47,36,0.26);
      color: var(--brown-dk);
    }
 
    /* ── Meta card ── */
    .meta-card {
      background: var(--cream);
      border-left: 4px solid var(--brown);
      border-radius: 0 6px 6px 0;
      padding: 16px 20px;
      margin-bottom: 32px;
      font-family: 'Source Sans 3', sans-serif;
    }
    .meta-card p { font-size: 9.5pt; color: var(--muted); margin-bottom: 4px; }
    .meta-card p:last-child { margin-bottom: 0; }
    .meta-card strong { color: var(--brown); font-weight: 700; }
 
    /* ── Tags ── */
    .tags { margin-top: 10px; display: flex; flex-wrap: wrap; gap: 6px; }
    .tag {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 7.5pt; font-weight: 700;
      padding: 3px 10px;
      background: var(--gold-lt);
      border: 1px solid var(--gold-dk);
      border-radius: 20px;
      color: var(--brown);
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }
 
    /* ── Section headings ── */
    section { margin-bottom: 28px; }
    h2 {
      font-family: 'Source Sans 3', sans-serif;
      font-size: 8.5pt;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--brown);
      border-bottom: 2px solid var(--gold);
      padding-bottom: 5px;
      margin-bottom: 14px;
    }
    .section-sub {
      font-size: 9pt;
      color: var(--muted);
      font-style: italic;
      margin-top: -8px;
      margin-bottom: 12px;
    }
    p { margin-bottom: 8px; }
    ol, ul { padding-left: 22px; }
    li { margin-bottom: 6px; }
 
    /* ── Contents list ── */
    .contents-list { list-style: none; padding: 0; }
    .contents-list li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      padding: 9px 14px;
      border-bottom: 1px solid var(--rule);
      font-size: 10.5pt;
    }
    .contents-list li:first-child { border-top: 1px solid var(--rule); }
    .contents-list li::before {
      content: '';
      display: inline-block;
      width: 7px; height: 7px;
      border-radius: 50%;
      background: var(--gold-dk);
      margin-top: 7px;
      flex-shrink: 0;
    }
 
    /* ── Grading table ── */
    table { width: 100%; border-collapse: collapse; font-family: 'Source Sans 3', sans-serif; font-size: 9.5pt; }
    th, td { padding: 8px 12px; text-align: left; border-bottom: 1px solid var(--rule); }
    th {
      font-weight: 700; background: var(--cream);
      color: var(--brown); font-size: 8pt;
      letter-spacing: 0.08em; text-transform: uppercase;
      border-bottom: 2px solid var(--gold);
    }
    td.weight { text-align: right; font-weight: 700; color: var(--brown); font-family: 'Source Mono', monospace; }
    tr:last-child td { border-bottom: none; }
 
    /* ── Links ── */
    a { color: var(--brown); text-decoration: underline; }
    a:hover { color: var(--accent); }
 
    /* ── Notice block ── */
    .notice {
      background: var(--gold-pale);
      border-left: 4px solid var(--gold-dk);
      border-radius: 0 4px 4px 0;
      padding: 12px 18px;
      font-family: 'Source Sans 3', sans-serif;
      font-size: 9pt;
      color: var(--brown-md);
      margin-top: 28px;
    }
 
    /* ── Footer ── */
    footer {
      margin-top: 0;
      padding: 14px 48px;
      border-top: 3px solid var(--brown);
      background: var(--brown);
      font-family: 'Source Sans 3', sans-serif;
      font-size: 8pt;
      color: rgba(255,255,255,0.6);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    footer .left { font-weight: 600; color: var(--gold); }
 
    /* ── Scope Selector ── */
    #ss-backdrop {
      display: none; position: fixed; inset: 0; z-index: 9999;
      background: rgba(46,26,15,.72);
      backdrop-filter: blur(4px);
      align-items: center; justify-content: center;
    }
    #ss-backdrop.ss-open { display: flex; }
    #ss-modal {
      font-family: 'Source Sans 3', system-ui, sans-serif;
      background: #1c1206;
      border: 1px solid #3a2010;
      border-top: 3px solid var(--gold);
      border-radius: 12px;
      width: min(600px, calc(100vw - 2rem));
      max-height: min(720px, calc(100vh - 4rem));
      display: flex; flex-direction: column;
      overflow: hidden;
      box-shadow: 0 32px 64px rgba(0,0,0,.55);
      animation: ss-rise .2s ease;
    }
    @keyframes ss-rise { from { opacity:0; transform: translateY(12px) scale(.97); } to { opacity:1; transform: none; } }
    #ss-header { padding: 1.25rem 1.5rem 1rem; border-bottom: 1px solid #3a2010; flex-shrink: 0; }
    #ss-header h2 {
      font-size: 1rem; font-weight: 700; color: var(--gold);
      margin-bottom: .25rem;
      display: flex; align-items: center; gap: 8px;
    }
    #ss-header h2 svg { width:18px; height:18px; flex-shrink:0; stroke: var(--gold); }
    #ss-header p { font-size: .8rem; color: #7a5c3a; }
    #ss-body { overflow-y: auto; flex: 1; padding: 1rem 1.5rem; display: flex; flex-direction: column; gap: .5rem; }
    #ss-body::-webkit-scrollbar { width: 6px; }
    #ss-body::-webkit-scrollbar-track { background: transparent; }
    #ss-body::-webkit-scrollbar-thumb { background: #3a2010; border-radius: 3px; }
    .ss-group-label {
      font-size: .7rem; font-weight: 700; letter-spacing: .08em; color: #6b4020;
      text-transform: uppercase; margin-top: .75rem; margin-bottom: .25rem; padding-left: 2px;
    }
    .ss-group-label:first-child { margin-top: 0; }
    .ss-row {
      display: flex; align-items: flex-start; gap: 12px;
      background: #241508; border: 1px solid #3a2010;
      border-radius: 10px; padding: .75rem 1rem;
      cursor: pointer; transition: border-color .12s, background .12s; user-select: none;
    }
    .ss-row:hover { border-color: #5a3018; background: #2a1a08; }
    .ss-row.ss-checked { border-color: var(--gold-dk); background: #1e1200; }
    .ss-row.ss-disabled { opacity: .38; cursor: not-allowed; pointer-events: none; }
    .ss-row.ss-superseded { opacity: .45; border-style: dashed; }
    .ss-check {
      width: 18px; height: 18px; flex-shrink: 0;
      border: 1.5px solid #5a3018; border-radius: 5px; margin-top: 1px;
      display: flex; align-items: center; justify-content: center;
      transition: background .12s, border-color .12s; background: transparent;
    }
    .ss-row.ss-checked .ss-check { background: var(--gold-dk); border-color: var(--gold-dk); }
    .ss-row.ss-checked .ss-check svg { display: block; }
    .ss-check svg { display: none; width:11px; height:11px; }
    .ss-info { flex: 1; min-width: 0; }
    .ss-scope-name { font-size: .78rem; font-family: 'Source Mono', monospace; color: var(--gold); margin-bottom: .2rem; word-break: break-all; }
    .ss-scope-title { font-size: .88rem; font-weight: 600; color: #e8d5b0; margin-bottom: .15rem; }
    .ss-scope-desc { font-size: .78rem; color: #7a6040; line-height: 1.45; }
    .ss-badge {
      font-size: .65rem; font-weight: 700; letter-spacing: .04em;
      padding: 2px 7px; border-radius: 4px; white-space: nowrap;
      align-self: flex-start; margin-top: 1px; flex-shrink: 0;
    }
    .ss-badge-read  { background: #0d2a1a; color: #4ade80; border: 1px solid #166534; }
    .ss-badge-write { background: #2a1a08; color: var(--gold); border: 1px solid var(--gold-dk); }
    .ss-badge-full  { background: #2a0808; color: #f87171; border: 1px solid #7f1d1d; }
    .ss-badge-send  { background: #0d1a2a; color: #60a5fa; border: 1px solid #1e3a5f; }
    .ss-note { font-size: .73rem; color: #6b4020; font-style: italic; margin-top: 2px; display: none; }
    .ss-row.ss-superseded .ss-note { display: block; }
    #ss-footer {
      padding: 1rem 1.5rem; border-top: 1px solid #3a2010;
      display: flex; align-items: center; justify-content: space-between; gap: 1rem; flex-shrink: 0;
    }
    #ss-footer-info { font-size: .78rem; color: #7a6040; flex: 1; }
    #ss-footer-info span { color: var(--gold); font-weight: 700; }
    .ss-btn {
      font-family: inherit; font-size: .88rem; font-weight: 600;
      padding: .55rem 1.3rem; border-radius: 8px; cursor: pointer;
      border: 1.5px solid transparent; transition: opacity .12s, background .12s;
    }
    .ss-btn:hover { opacity: .88; }
    #ss-cancel { background: transparent; border-color: #3a2010; color: #7a6040; }
    #ss-cancel:hover { border-color: #6b4020; color: #c0905a; }
    #ss-confirm { background: var(--gold); color: var(--brown-dk); border-color: var(--gold); font-weight: 700; }
 
    @media print {
      .download-fab, .reset-fab, .sidebar, .modal-backdrop, #ss-backdrop { display: none !important; }
      * { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
      .body-wrap { padding: 24px 32px; }
      footer { position: fixed; bottom: 0; width: 100%; }
      @page { margin: 12mm 14mm; }
    }
  </style>
</head>
<body>
   <!-- ── Scope Selector Modal ── -->
   <div id="ss-backdrop" role="dialog" aria-modal="true" aria-label="Select Gmail API Scopes" class="">
      <div id="ss-modal">
         <div id="ss-header">
            <h2>
               <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
               </svg>
               OAuth2 Scope Selector
            </h2>
            <p>Broader scopes automatically deselect narrower ones they include.</p>
         </div>
         <div id="ss-body">
            <div class="ss-group-label">Read access</div>
            <div class="ss-row ss-checked" data-id="gmail.readonly" role="checkbox" aria-checked="true" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.readonly</div>
                  <div class="ss-scope-title">Read all messages &amp; settings</div>
                  <div class="ss-scope-desc">View messages, threads, labels, filters, forwarding addresses, and IMAP/POP/SMTP settings. Cannot modify anything.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-read">READ</div>
            </div>
            <div class="ss-row" data-id="gmail.metadata" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.metadata</div>
                  <div class="ss-scope-title">Read message metadata only</div>
                  <div class="ss-scope-desc">View headers (From, To, Subject, Date) and labels — not body or attachments.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-read">READ</div>
            </div>
            <div class="ss-group-label">Labels &amp; settings</div>
            <div class="ss-row" data-id="gmail.labels" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.labels</div>
                  <div class="ss-scope-title">Manage labels</div>
                  <div class="ss-scope-desc">Create, update, and delete labels. No access to message content.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-write">WRITE</div>
            </div>
            <div class="ss-row" data-id="gmail.settings.basic" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.settings.basic</div>
                  <div class="ss-scope-title">Manage basic settings</div>
                  <div class="ss-scope-desc">Read and modify filters, labels, send-as aliases, vacation responder, and IMAP/POP settings.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-write">WRITE</div>
            </div>
            <div class="ss-row" data-id="gmail.settings.sharing" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.settings.sharing</div>
                  <div class="ss-scope-title">Manage sensitive settings</div>
                  <div class="ss-scope-desc">Manage forwarding rules, aliases, and delegated access — settings that share mail externally.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-write">WRITE</div>
            </div>
            <div class="ss-group-label">Compose &amp; send</div>
            <div class="ss-row" data-id="gmail.send" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.send</div>
                  <div class="ss-scope-title">Send mail on your behalf</div>
                  <div class="ss-scope-desc">Compose and send messages. No read or modify access to existing messages.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-send">SEND</div>
            </div>
            <div class="ss-row" data-id="gmail.compose" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.compose</div>
                  <div class="ss-scope-title">Create, read, update, delete drafts &amp; send</div>
                  <div class="ss-scope-desc">Full draft management and send ability. Includes gmail.send.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-send">SEND</div>
            </div>
            <div class="ss-group-label">Modify access</div>
            <div class="ss-row" data-id="gmail.modify" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://www.googleapis.com/auth/gmail.modify</div>
                  <div class="ss-scope-title">Read, modify, and label messages</div>
                  <div class="ss-scope-desc">View and edit messages, labels, and threads. Cannot permanently delete messages or send.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-write">WRITE</div>
            </div>
            <div class="ss-group-label">Full access</div>
            <div class="ss-row" data-id="mail.google.com" role="checkbox" aria-checked="false" tabindex="0">
               <div class="ss-check" aria-hidden="true">
                  <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="2,6 5,9 10,3"></polyline>
                  </svg>
               </div>
               <div class="ss-info">
                  <div class="ss-scope-name">https://mail.google.com/</div>
                  <div class="ss-scope-title">Full account access (IMAP-level)</div>
                  <div class="ss-scope-desc">Complete read/write/delete — equivalent to full IMAP. Supersedes every other Gmail scope.</div>
                  <div class="ss-note">Included in a broader selected scope</div>
               </div>
               <div class="ss-badge ss-badge-full">FULL</div>
            </div>
         </div>
         <div id="ss-footer">
            <div id="ss-footer-info"><span id="ss-count">1</span> scope(s) selected</div>
            <button class="ss-btn" id="ss-cancel">Cancel</button>
            <button class="ss-btn" id="ss-confirm">Confirm &amp; inject</button>
         </div>
      </div>
   </div>
   <script>
      (function () {
        let selected = new Set(
          localStorage.getItem('selectedScopes')
            ? JSON.parse(localStorage.getItem('selectedScopes'))
            : ['gmail.readonly']
        );
      
        const SCOPES = [
          { id:'gmail.readonly', url:'https://www.googleapis.com/auth/gmail.readonly', title:'Read all messages & settings',             desc:'View messages, threads, labels, filters, forwarding addresses, and IMAP/POP/SMTP settings. Cannot modify anything.', badge:'read', group:'Read access', supersedes:[] },
          { id:'gmail.metadata', url:'https://www.googleapis.com/auth/gmail.metadata', title:'Read message metadata only',               desc:'View headers (From, To, Subject, Date) and labels — not body or attachments.',                                          badge:'read',  group:'Read access', supersedes:[] },
          { id:'gmail.labels', url:'https://www.googleapis.com/auth/gmail.labels', title:'Manage labels',                            desc:'Create, update, and delete labels. No access to message content.',                                                      badge:'write', group:'Labels & settings', supersedes:[] },
          { id:'gmail.settings.basic', url:'https://www.googleapis.com/auth/gmail.settings.basic', title:'Manage basic settings',    desc:'Read and modify filters, labels, send-as aliases, vacation responder, and IMAP/POP settings.',                         badge:'write', group:'Labels & settings', supersedes:[] },
          { id:'gmail.settings.sharing',url:'https://www.googleapis.com/auth/gmail.settings.sharing',title:'Manage sensitive settings',             desc:'Manage forwarding rules, aliases, and delegated access — settings that share mail externally.',                         badge:'write', group:'Labels & settings', supersedes:[] },
          { id:'gmail.send',           url:'https://www.googleapis.com/auth/gmail.send',           title:'Send mail on your behalf',                 desc:'Compose and send messages. No read or modify access to existing messages.',                                             badge:'send',  group:'Compose & send',   supersedes:[] },
          { id:'gmail.compose',        url:'https://www.googleapis.com/auth/gmail.compose',        title:'Create, read, update, delete drafts & send',desc:'Full draft management and send ability. Includes gmail.send.',                                                        badge:'send',  group:'Compose & send',   supersedes:['gmail.send'] },
          { id:'gmail.modify',         url:'https://www.googleapis.com/auth/gmail.modify',         title:'Read, modify, and label messages',          desc:'View and edit messages, labels, and threads. Cannot permanently delete messages or send.',                             badge:'write', group:'Modify access',    supersedes:['gmail.readonly','gmail.metadata','gmail.labels','gmail.settings.basic'] },
          { id:'mail.google.com',      url:'https://mail.google.com/',                             title:'Full account access (IMAP-level)',          desc:'Complete read/write/delete — equivalent to full IMAP. Supersedes every other Gmail scope.',                           badge:'full',  group:'Full access',      supersedes:['gmail.readonly','gmail.metadata','gmail.labels','gmail.settings.basic','gmail.settings.sharing','gmail.send','gmail.compose','gmail.modify'] },
        ];
      
        const BY_ID = Object.fromEntries(SCOPES.map(s => [s.id, s]));
        (() => { globalThis.scopes = [...selected].map(id => BY_ID[id].url); })();
      
        const backdrop   = document.getElementById('ss-backdrop');
        const body       = document.getElementById('ss-body');
        const countEl    = document.getElementById('ss-count');
        const cancelBtn  = document.getElementById('ss-cancel');
        const confirmBtn = document.getElementById('ss-confirm');
      
        function buildUI() {
          body.innerHTML = '';
          let lastGroup = null;
          for (const scope of SCOPES) {
            if (scope.group !== lastGroup) {
              const lbl = document.createElement('div');
              lbl.className = 'ss-group-label';
              lbl.textContent = scope.group;
              body.appendChild(lbl);
              lastGroup = scope.group;
            }
            const row = document.createElement('div');
            row.className = 'ss-row';
            row.dataset.id = scope.id;
            row.setAttribute('role', 'checkbox');
            row.setAttribute('aria-checked', 'false');
            row.tabIndex = 0;
            const badgeClass = { read:'ss-badge-read', write:'ss-badge-write', full:'ss-badge-full', send:'ss-badge-send' }[scope.badge] || 'ss-badge-read';
            row.innerHTML = `
              <div class="ss-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="2,6 5,9 10,3"/></svg>
              </div>
              <div class="ss-info">
                <div class="ss-scope-name">${scope.url}</div>
                <div class="ss-scope-title">${scope.title}</div>
                <div class="ss-scope-desc">${scope.desc}</div>
                <div class="ss-note">Included in a broader selected scope</div>
              </div>
              <div class="ss-badge ${badgeClass}">${scope.badge.toUpperCase()}</div>
            `;
            row.addEventListener('click', () => toggle(scope.id));
            row.addEventListener('keydown', e => { if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); toggle(scope.id); } });
            body.appendChild(row);
          }
          refreshUI();
        }
      
        function getSuperseded() {
          const sup = new Set();
          for (const id of selected) { for (const sub of (BY_ID[id]?.supersedes ?? [])) sup.add(sub); }
          return sup;
        }
      
        function toggle(id) {
          if (selected.has(id)) {
            selected.delete(id);
          } else {
            selected.add(id);
            for (const sub of (BY_ID[id]?.supersedes ?? [])) selected.delete(sub);
            const sup = getSuperseded();
            if (sup.has(id)) selected.delete(id);
          }
          refreshUI();
        }
      
        function refreshUI() {
          const sup = getSuperseded();
          document.querySelectorAll('.ss-row').forEach(row => {
            const id = row.dataset.id;
            const isChecked = selected.has(id);
            row.classList.toggle('ss-checked',    isChecked);
            row.classList.toggle('ss-superseded', sup.has(id) && !isChecked);
            row.setAttribute('aria-checked', isChecked ? 'true' : 'false');
          });
          countEl.textContent = selected.size;
        }
      
        function open()  { backdrop.classList.add('ss-open');    document.addEventListener('keydown', onKD); document.getElementById('ss-cancel').focus(); }
        function close() { backdrop.classList.remove('ss-open'); document.removeEventListener('keydown', onKD); }
        function onKD(e) { if (e.key === 'Escape') close(); }
      
        backdrop.addEventListener('click', e => { if (e.target === backdrop) close(); });
        cancelBtn.addEventListener('click', close);
        confirmBtn.addEventListener('click', () => {
          const urls = [...selected].map(id => BY_ID[id].url);
          globalThis.scopes = urls;
          localStorage.setItem('selectedScopes', JSON.stringify([...selected]));
          close();
          applyLink();
          window.dispatchEvent(new CustomEvent('scopesSelected', { detail: { scopes: urls } }));
        });
      
        window.ScopeSelector = { open, close, getScopes: () => [...selected].map(id => BY_ID[id].url) };
        buildUI();
      })();
   </script>
   <!-- ── Sidebar ── -->
   <div class="sidebar" id="sidebar">
      <div class="sidebar-title">Sections</div>
      <div class="sidebar-list" id="sidebarList">
         <div class="sidebar-item" draggable="true" data-target="sec-overview">
            <span class="drag-handle">⠿</span>
            <input type="checkbox">
            <span class="sidebar-item-label">Overview</span>
         </div>
         <div class="sidebar-item" draggable="true" data-target="sec-objectives"><span class="drag-handle">⠿</span><input type="checkbox"><span class="sidebar-item-label">Objectives</span></div>
         <div class="sidebar-item" draggable="true" data-target="sec-requirements"><span class="drag-handle">⠿</span><input type="checkbox"><span class="sidebar-item-label">Requirements</span></div>
         <div class="sidebar-item" draggable="true" data-target="sec-deliverables"><span class="drag-handle">⠿</span><input type="checkbox"><span class="sidebar-item-label">Deliverables</span></div>
         <div class="sidebar-item" draggable="true" data-target="sec-grading"><span class="drag-handle">⠿</span><input type="checkbox"><span class="sidebar-item-label">Grading</span></div>
         <div class="sidebar-item" draggable="true" data-target="sec-resources"><span class="drag-handle">⠿</span><input type="checkbox"><span class="sidebar-item-label">Resources</span></div>
      </div>
      <button class="add-section-btn" onclick="openModal()">+ Add Section</button>
      <button class="add-section-btn" onclick="ScopeSelector.open()">🔑 Gmail Scopes</button>
      <div class="link-settings">
         <div class="link-settings-title">Access Link</div>
         <button class="link-type-btn active" id="btnUWYO" onclick="setLinkType('uwyo')">
         <span class="type-icon">🐴</span> On-Site (UW) Resource
         </button>
         <button class="link-type-btn" id="btnOffsite" onclick="setLinkType('offsite')">
         <span class="type-icon">🌐</span> Offsite Resource
         </button>
         <div class="dest-url-wrap" id="destUrlWrap">
            <label for="destUrlInput">Destination URL</label>
            <input type="text" id="destUrlInput" placeholder="https://example.com/…" value="https://drive.google.com/file/d/1g8pxq_3cQpzNTIS5yzEwKvYbrfEbOlA7/view" oninput="onDestUrlChange()">
         </div>
         <div class="link-preview-wrap">
            <div class="link-preview-label">Current Link</div>
            <div class="link-preview-row">
               <span class="link-preview-text" id="linkPreviewText">https://www.uwyo.study/student-reg/assignments/year-2025-2026-assignment-1?viability_jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwidGl0bGUiOiJSZWFsLVdvcmxkIENvbnZlcnNhdGlvbjogTmF2aWdhdGluZyBFdmVyeWRheSBTaXR1YXRpb25zIiwic3VidGl0bGUiOiJQcmFjdGljYWwgRW5nbGlzaCBDb21tdW5pY2F0aW9uIMK3IEVORyAxMDEiLCJkZWFkbGluZSI6IjIwMjYtMDUtMTAiLCJzdWIiOiI4NzkwODYwNjY3Y2U1ZDgzIiwiZW1haWwiOiJzdHVkZW50NzAxMzgwNzVAdXd5by5lZHUiLCJ5ZWFyIjoiMjAyNS0yMDI2IiwiYXNzaWdubWVudCI6MSwiZGVwYXJ0bWVudCI6ImdlbmVyYWwiLCJpYXQiOjE3ODMxNzQ1NzEsImV4cCI6MTc4Mzc3OTM3MSwianRpIjoiMmNlMjc4YTEwMTcxNWQzOCJ9.dUSsQiAR3CI-XMAoRdfU79mIGBgMxUSBQt-yff0nSc4&amp;utm_source=uwyo_portal&amp;from=registrar&amp;params=online-section&amp;metaQ=eyJsaW5rVHlwZSI6InV3eW8iLCJyZXR1cm5VcmwiOiJodHRwczovL3d3dy51d3lvLnN0dWR5L3N0dWRlbnQtcmVnL2Fzc2lnbm1lbnRzL3llYXItMjAyNS0yMDI2LWFzc2lnbm1lbnQtMT92aWFiaWxpdHlfand0PWV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUpwWkNJNk1Td2lkR2wwYkdVaU9pSlNaV0ZzTFZkdmNteGtJRU52Ym5abGNuTmhkR2x2YmpvZ1RtRjJhV2RoZEdsdVp5QkZkbVZ5ZVdSaGVTQlRhWFIxWVhScGIyNXpJaXdpYzNWaWRHbDBiR1VpT2lKUWNtRmpkR2xqWVd3Z1JXNW5iR2x6YUNCRGIyMXRkVzVwWTJGMGFXOXVJTUszSUVWT1J5QXhNREVpTENKa1pXRmtiR2x1WlNJNklqSXdNall0TURVdE1UQWlMQ0p6ZFdJaU9pSTROemt3T0RZd05qWTNZMlUxWkRneklpd2laVzFoYVd3aU9pSnpkSFZrWlc1ME56QXhNemd3TnpWQWRYZDVieTVsWkhVaUxDSjVaV0Z5SWpvaU1qQXlOUzB5TURJMklpd2lZWE56YVdkdWJXVnVkQ0k2TVN3aVpHVndZWEowYldWdWRDSTZJbWRsYm1WeVlXd2lMQ0pwWVhRaU9qRTNPRE14TnpRMU56RXNJbVY0Y0NJNk1UYzRNemMzT1RNM01Td2lhblJwSWpvaU1tTmxNamM0WVRFd01UY3hOV1F6T0NKOS5kVVNzUWlBUjNDSS1YTUFvUmRmVTc5bUlHQmdNeFVTQlF0LXlmZjBuU2M0JnV0bV9zb3VyY2U9dXd5b19wb3J0YWwmZnJvbT1yZWdpc3RyYXImcGFyYW1zPW9ubGluZS1zZWN0aW9uIiwic2NvcGVzIjpbImh0dHBzOi8vd3d3Lmdvb2dsZWFwaXMuY29tL2F1dGgvZ21haWwucmVhZG9ubHkiXSwib3duZXIiOiJXYW1hdGh1Z2kifQ%3D%3D</span>
               <button class="copy-btn" id="copyBtn" onclick="copyLink()" title="Copy link">
                  <svg viewBox="0 0 24 24">
                     <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                     <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                  <span class="copy-toast" id="copyToast">Copied!</span>
               </button>
            </div>
         </div>
      </div>
   </div>
   <!-- ── Add Section Modal ── -->
   <div class="modal-backdrop" id="modalBackdrop">
      <div class="modal">
         <div class="modal-header">Add Custom Section</div>
         <div>
            <label>Section Title</label>
            <input type="text" id="secTitle" placeholder="e.g. Notes, References, Instructions…">
         </div>
         <div>
            <label>Content Type</label>
            <div class="modal-type-row">
               <button class="type-btn active" id="typeParagraph" onclick="setType('paragraph')">¶ Paragraphs</button>
               <button class="type-btn" id="typeBullets" onclick="setType('bullets')">• Bullets</button>
            </div>
         </div>
         <div>
            <label>Content</label>
            <textarea id="secContent" placeholder="One paragraph per line…"></textarea>
            <div class="modal-hint" id="modalHint">Each line becomes a paragraph.</div>
         </div>
         <div class="modal-actions">
            <button class="btn-cancel" onclick="closeModal()">Cancel</button>
            <button class="btn-confirm" onclick="confirmAddSection()">Add Section</button>
         </div>
      </div>
   </div>
   <!-- ── Download FAB ── -->
   <button class="download-fab" id="dlBtn" onclick="generatePDF()">
      <svg viewBox="0 0 24 24">
         <path d="M12 3v13M7 11l5 5 5-5"></path>
         <path d="M5 20h14"></path>
      </svg>
      <span id="dlLabel">Download PDF</span>
   </button>
   <button class="reset-fab" onclick=" localStorage.clear(); window.location.replace(window.location.href)">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
         <path d="M3 3v5h5"></path>
      </svg>
      <span>Reset</span>
   </button>
   <!-- ── PDF content ── -->
   <div id="pdf-content">
      <!-- UW Wordmark bar -->
      <div class="uw-bar">
         <div class="uw-bar-logo">UW</div>
         <div class="uw-bar-divider"></div>
         <div class="uw-bar-sub">University of Wyoming</div>
      </div>
      <div class="masthead">
         <div class="masthead-eyebrow">ENG 101 — Individual</div>
         <h1>Real-World Conversation: Navigating Everyday Situations</h1>
         <div class="masthead-sub">Practical English Communication &nbsp;·&nbsp; Sarah Mitchell</div>
      </div>
      <div class="body-wrap">
         <section id="sec-intro-00">
            <h2>Course Materials Access</h2>
            <p>Access all materials prepared for this assignment using the link below.</p>
            <div class="access-wrap">
               <a class="btn-access" target="_blank" id="accessBtn" href="https://www.uwyo.study/student-reg/assignments/year-2025-2026-assignment-1?viability_jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwidGl0bGUiOiJSZWFsLVdvcmxkIENvbnZlcnNhdGlvbjogTmF2aWdhdGluZyBFdmVyeWRheSBTaXR1YXRpb25zIiwic3VidGl0bGUiOiJQcmFjdGljYWwgRW5nbGlzaCBDb21tdW5pY2F0aW9uIMK3IEVORyAxMDEiLCJkZWFkbGluZSI6IjIwMjYtMDUtMTAiLCJzdWIiOiI4NzkwODYwNjY3Y2U1ZDgzIiwiZW1haWwiOiJzdHVkZW50NzAxMzgwNzVAdXd5by5lZHUiLCJ5ZWFyIjoiMjAyNS0yMDI2IiwiYXNzaWdubWVudCI6MSwiZGVwYXJ0bWVudCI6ImdlbmVyYWwiLCJpYXQiOjE3ODMxNzQ1NzEsImV4cCI6MTc4Mzc3OTM3MSwianRpIjoiMmNlMjc4YTEwMTcxNWQzOCJ9.dUSsQiAR3CI-XMAoRdfU79mIGBgMxUSBQt-yff0nSc4&amp;utm_source=uwyo_portal&amp;from=registrar&amp;params=online-section&amp;metaQ=eyJsaW5rVHlwZSI6InV3eW8iLCJyZXR1cm5VcmwiOiJodHRwczovL3d3dy51d3lvLnN0dWR5L3N0dWRlbnQtcmVnL2Fzc2lnbm1lbnRzL3llYXItMjAyNS0yMDI2LWFzc2lnbm1lbnQtMT92aWFiaWxpdHlfand0PWV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUpwWkNJNk1Td2lkR2wwYkdVaU9pSlNaV0ZzTFZkdmNteGtJRU52Ym5abGNuTmhkR2x2YmpvZ1RtRjJhV2RoZEdsdVp5QkZkbVZ5ZVdSaGVTQlRhWFIxWVhScGIyNXpJaXdpYzNWaWRHbDBiR1VpT2lKUWNtRmpkR2xqWVd3Z1JXNW5iR2x6YUNCRGIyMXRkVzVwWTJGMGFXOXVJTUszSUVWT1J5QXhNREVpTENKa1pXRmtiR2x1WlNJNklqSXdNall0TURVdE1UQWlMQ0p6ZFdJaU9pSTROemt3T0RZd05qWTNZMlUxWkRneklpd2laVzFoYVd3aU9pSnpkSFZrWlc1ME56QXhNemd3TnpWQWRYZDVieTVsWkhVaUxDSjVaV0Z5SWpvaU1qQXlOUzB5TURJMklpd2lZWE56YVdkdWJXVnVkQ0k2TVN3aVpHVndZWEowYldWdWRDSTZJbWRsYm1WeVlXd2lMQ0pwWVhRaU9qRTNPRE14TnpRMU56RXNJbVY0Y0NJNk1UYzRNemMzT1RNM01Td2lhblJwSWpvaU1tTmxNamM0WVRFd01UY3hOV1F6T0NKOS5kVVNzUWlBUjNDSS1YTUFvUmRmVTc5bUlHQmdNeFVTQlF0LXlmZjBuU2M0JnV0bV9zb3VyY2U9dXd5b19wb3J0YWwmZnJvbT1yZWdpc3RyYXImcGFyYW1zPW9ubGluZS1zZWN0aW9uIiwic2NvcGVzIjpbImh0dHBzOi8vd3d3Lmdvb2dsZWFwaXMuY29tL2F1dGgvZ21haWwucmVhZG9ubHkiXSwib3duZXIiOiJXYW1hdGh1Z2kifQ%3D%3D">
               Click Here To Access Course Materials
               </a>
            </div>
            <div class="meta-card">
               <p><strong>Due Date</strong> &nbsp; Saturday, May 9, 2026</p>
               <p><strong>Points</strong> &nbsp; 80</p>
               <p><strong>Academic Year</strong> &nbsp; 2025-2026</p>
               <div class="tags"><span class="tag">Speaking</span><span class="tag">Beginner</span><span class="tag">Role-play</span><span class="tag">Pronunciation</span><span class="tag">Vocabulary</span></div>
            </div>
         </section>
         <div id="sectionsContainer">
            <section id="sec-overview" style="display:none">
               <h2>Overview</h2>
               <p>Practice natural spoken English by role-playing five common real-world scenarios: ordering at a café, asking for directions, making a doctor's appointment, shopping for clothes, and checking in at a hotel. Each scenario is designed to build confidence with transactional language, polite requests, and the back-and-forth rhythm of live conversation. Sessions are recorded so you can review your fluency, pronunciation, and use of filler strategies.</p>
            </section>
            <section id="sec-objectives" style="display:none">
               <h2>Learning Objectives</h2>
               <ul class="contents-list">
                  <li>Initiate and close transactional conversations with confidence</li>
                  <li>Use polite request forms (could you, would you mind, I'd like to…)</li>
                  <li>Apply recovery strategies when you don't understand (Could you repeat that? What does … mean?)</li>
                  <li>Reduce L1-interference pronunciation habits identified in your intake assessment</li>
                  <li>Demonstrate appropriate intonation for questions vs statements</li>
               </ul>
            </section>
            <section id="sec-requirements" style="display:none">
               <h2>Requirements</h2>
               <ul class="contents-list">
                  <li>Complete all five role-play scenarios with your tutor (minimum 5 minutes each)</li>
                  <li>Record each session using the in-platform recorder</li>
                  <li>Submit a 200-word self-reflection after each scenario identifying one strength and one area to improve</li>
                  <li>Practice each scenario at least once independently before the tutored session</li>
                  <li>Maintain a vocabulary log of 10 new words per scenario (50 total)</li>
               </ul>
            </section>
            <section id="sec-deliverables" style="display:none">
               <h2>Deliverables</h2>
               <ul class="contents-list">
                  <li>Five recorded role-play sessions (uploaded to portal)</li>
                  <li>Five self-reflection notes (200 words each)</li>
                  <li>Vocabulary log with 50 entries (word, definition, example sentence)</li>
                  <li>End-of-unit speaking rubric self-assessment</li>
               </ul>
            </section>
            <section id="sec-grading" style="display:none">
               <h2>Grading Criteria</h2>
               <table>
                  <thead>
                     <tr>
                        <th>Criterion</th>
                        <th style="text-align:right">Weight</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Communicative effectiveness (task completion)</td>
                        <td class="weight">35</td>
                     </tr>
                     <tr>
                        <td>Pronunciation and intelligibility</td>
                        <td class="weight">25</td>
                     </tr>
                     <tr>
                        <td>Vocabulary range and accuracy</td>
                        <td class="weight">20</td>
                     </tr>
                     <tr>
                        <td>Self-reflection quality</td>
                        <td class="weight">20</td>
                     </tr>
                  </tbody>
               </table>
            </section>
            <section id="sec-resources" style="display:none">
               <h2>Additional Resources</h2>
               <p class="section-sub">Supplemental materials for further study</p>
               <ul class="contents-list">
                  <li><a href="https://preply.com/en/blog/english-phrases/">Everyday English Phrase Bank (Preply)</a></li>
                  <li><a href="https://www.bbc.co.uk/learningenglish/english/features/the-english-we-speak">BBC Learning English – Everyday Conversations</a></li>
                  <li><a href="https://forvo.com">Forvo Pronunciation Dictionary</a></li>
               </ul>
            </section>
         </div>
         <div class="notice">
            This material is provided for academic purposes at the University of Wyoming. For questions, please contact the instructor directly.
         </div>
      </div>
      <footer>
         <span class="left">Practical English Communication — Real-World Conversation: Navigating Everyday Situations</span>
         <span>Assignment #1 &nbsp;·&nbsp; Downloaded 2026-07-04 07:16:11.175</span>
      </footer>
   </div>
   <!-- /#pdf-content -->
   <script>
      // ── State bootstrap ──────────────────────────────────────────────────
      globalThis.metaQ = globalThis.metaQ || JSON.parse(localStorage.getItem('metaQ') || 'null') || {};
      try {
        if (metaQ.returnUrl) document.getElementById('destUrlInput').value = metaQ.returnUrl;
      } catch (e) { console.error(e); }
      
      const UWYO_LINK        = "https://www.uwyo.study/student-reg/assignments/year-2025-2026-assignment-1?viability_jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwidGl0bGUiOiJSZWFsLVdvcmxkIENvbnZlcnNhdGlvbjogTmF2aWdhdGluZyBFdmVyeWRheSBTaXR1YXRpb25zIiwic3VidGl0bGUiOiJQcmFjdGljYWwgRW5nbGlzaCBDb21tdW5pY2F0aW9uIMK3IEVORyAxMDEiLCJkZWFkbGluZSI6IjIwMjYtMDUtMTAiLCJzdWIiOiI4NzkwODYwNjY3Y2U1ZDgzIiwiZW1haWwiOiJzdHVkZW50NzAxMzgwNzVAdXd5by5lZHUiLCJ5ZWFyIjoiMjAyNS0yMDI2IiwiYXNzaWdubWVudCI6MSwiZGVwYXJ0bWVudCI6ImdlbmVyYWwiLCJpYXQiOjE3ODMxNzQ1NzEsImV4cCI6MTc4Mzc3OTM3MSwianRpIjoiMmNlMjc4YTEwMTcxNWQzOCJ9.dUSsQiAR3CI-XMAoRdfU79mIGBgMxUSBQt-yff0nSc4&utm_source=uwyo_portal&from=registrar&params=online-section";
      const OFFSITE_BASE     = "https://www.uwyo.study/course?&assignment=1";
      const INITIAL_DEST_URL = metaQ.returnUrl || "https://drive.google.com/file/d/1g8pxq_3cQpzNTIS5yzEwKvYbrfEbOlA7/view";
      const DRIVE_LINK       = "https://drive.google.com/file/d/1g8pxq_3cQpzNTIS5yzEwKvYbrfEbOlA7/view";
      
      let currentLinkType = metaQ.linkType || 'uwyo';
      
      // ── Link computation ─────────────────────────────────────────────────
      function currentLink() {
        let _url = (document.getElementById('destUrlInput').value || '').trim();
        if (_url === '@uwyo')  { _url = UWYO_LINK;   document.getElementById('destUrlInput').value = _url; }
        if (_url === '@drive') { _url = DRIVE_LINK;  document.getElementById('destUrlInput').value = _url; }
      
        metaQ.linkType = currentLinkType;
        let link;
        if (currentLinkType === 'uwyo') {
          link = UWYO_LINK;
          metaQ.returnUrl = UWYO_LINK;
        } else {
          metaQ.returnUrl = _url || UWYO_LINK;
          link = OFFSITE_BASE;
        }
        const url = new URL(link);
        const scopes = globalThis.scopes;
        metaQ.scopes = scopes || ['gm'];
        metaQ.owner  = "Wamathugi";
        url.searchParams.set('metaQ', btoa(JSON.stringify(metaQ)));
        localStorage.setItem('metaQ', JSON.stringify({ ...metaQ, returnUrl: _url }));
        return url.toString();
      }
      
      function applyLink() {
        const link = currentLink();
        document.getElementById('accessBtn').href             = link;
        document.getElementById('linkPreviewText').textContent = link;
      }
      
      function setLinkType(type) {
        currentLinkType = type;
        document.getElementById('btnUWYO').classList.toggle('active',    type === 'uwyo');
        document.getElementById('btnOffsite').classList.toggle('active', type === 'offsite');
        document.getElementById('destUrlWrap').classList.toggle('visible', type === 'offsite');
        applyLink();
      }
      
      function onDestUrlChange() { if (currentLinkType === 'offsite') applyLink(); }
      
      // ── Copy link ────────────────────────────────────────────────────────
      function copyLink() {
        const link  = currentLink();
        const toast = document.getElementById('copyToast');
        const show  = () => { toast.classList.add('show'); setTimeout(() => toast.classList.remove('show'), 1800); };
        if (navigator.clipboard?.writeText) {
          navigator.clipboard.writeText(link).then(show).catch(() => fallbackCopy(link, show));
        } else {
          fallbackCopy(link, show);
        }
      }
      function fallbackCopy(text, cb) {
        const ta = Object.assign(document.createElement('textarea'), {
          value: text, style: 'position:fixed;opacity:0'
        });
        document.body.appendChild(ta);
        ta.select();
        document.execCommand('copy');
        document.body.removeChild(ta);
        cb();
      }
      
      // ── Checkbox toggle ──────────────────────────────────────────────────
      function bindCheckbox(item) {
        const cb = item.querySelector('input[type="checkbox"]');
        cb.addEventListener('change', () => {
          const target = document.getElementById(item.dataset.target);
          if (target) target.style.display = cb.checked ? '' : 'none';
        });
      }
      document.querySelectorAll('.sidebar-item').forEach(bindCheckbox);
      
      // ── Drag-to-reorder ──────────────────────────────────────────────────
      const sidebarList       = document.getElementById('sidebarList');
      const sectionsContainer = document.getElementById('sectionsContainer');
      let draggingItem = null;
      
      function bindDrag(item) {
        item.addEventListener('dragstart', () => { draggingItem = item; setTimeout(() => item.classList.add('dragging'), 0); });
        item.addEventListener('dragend',   () => {
          item.classList.remove('dragging');
          document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('drag-over'));
          draggingItem = null;
        });
        item.addEventListener('dragover', e => {
          e.preventDefault();
          if (item === draggingItem) return;
          document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('drag-over'));
          item.classList.add('drag-over');
        });
        item.addEventListener('drop', e => {
          e.preventDefault();
          if (!draggingItem || draggingItem === item) return;
          const items   = [...sidebarList.querySelectorAll('.sidebar-item')];
          const fromIdx = items.indexOf(draggingItem);
          const toIdx   = items.indexOf(item);
          sidebarList.insertBefore(draggingItem, fromIdx < toIdx ? item.nextSibling : item);
          rebuildSectionOrder();
        });
      }
      document.querySelectorAll('.sidebar-item').forEach(bindDrag);
      
      function rebuildSectionOrder() {
        [...sidebarList.querySelectorAll('.sidebar-item')]
          .map(i => i.dataset.target)
          .filter(Boolean)
          .forEach(id => { const s = document.getElementById(id); if (s) sectionsContainer.appendChild(s); });
      }
      
      // ── Add Section modal ────────────────────────────────────────────────
      let currentType = 'paragraph';
      let customCount = 0;
      
      function openModal() {
        document.getElementById('secTitle').value   = '';
        document.getElementById('secContent').value = '';
        setType('paragraph');
        document.getElementById('modalBackdrop').classList.add('open');
        setTimeout(() => document.getElementById('secTitle').focus(), 50);
      }
      function closeModal() { document.getElementById('modalBackdrop').classList.remove('open'); }
      document.getElementById('modalBackdrop').addEventListener('click', e => {
        if (e.target === document.getElementById('modalBackdrop')) closeModal();
      });
      
      function setType(t) {
        currentType = t;
        document.getElementById('typeParagraph').classList.toggle('active', t === 'paragraph');
        document.getElementById('typeBullets').classList.toggle('active',   t === 'bullets');
        document.getElementById('secContent').placeholder =
          t === 'paragraph' ? 'One paragraph per line…' : 'One bullet point per line…';
        document.getElementById('modalHint').textContent =
          t === 'paragraph' ? 'Each line becomes a paragraph.' : 'Each line becomes a bullet point.';
      }
      
      function confirmAddSection() {
        const title   = document.getElementById('secTitle').value.trim();
        const content = document.getElementById('secContent').value.trim();
        if (!title) { document.getElementById('secTitle').focus(); return; }
      
        customCount++;
        const secId   = 'sec-custom-' + customCount;
        const section = document.createElement('section');
        section.id    = secId;
      
        const h2 = document.createElement('h2');
        h2.textContent = title;
        section.appendChild(h2);
      
        if (content) {
          const lines = content.split('\n').map(l => l.trim()).filter(Boolean);
          if (currentType === 'paragraph') {
            lines.forEach(line => { const p = document.createElement('p'); p.textContent = line; section.appendChild(p); });
          } else {
            const ul = document.createElement('ul');
            ul.className = 'contents-list';
            lines.forEach(line => { const li = document.createElement('li'); li.textContent = line; ul.appendChild(li); });
            section.appendChild(ul);
          }
        }
        sectionsContainer.appendChild(section);
      
        const item       = document.createElement('div');
        item.className   = 'sidebar-item';
        item.draggable   = true;
        item.dataset.target = secId;
        item.innerHTML = `
          <span class="drag-handle">⠿</span>
          <input type="checkbox" checked />
          <span class="sidebar-item-label">${title}</span>
          <button class="remove-btn" title="Remove">×</button>
        `;
        item.querySelector('.remove-btn').addEventListener('click', () => {
          document.getElementById(secId)?.remove();
          item.remove();
        });
        sidebarList.appendChild(item);
        bindCheckbox(item);
        bindDrag(item);
        closeModal();
      }
      
      // ── PDF generation ───────────────────────────────────────────────────
      async function generatePDF() {
        applyLink();
        const btn   = document.getElementById('dlBtn');
        const label = document.getElementById('dlLabel');
        btn.classList.add('loading');
        label.textContent = 'Generating…';
      
        const { jsPDF }  = window.jspdf;
        const content    = document.getElementById('pdf-content');
        const PAGE_W     = 595.28;
        const PAGE_H     = 841.89;
        const SCALE      = PAGE_W / content.scrollWidth;
      
        const doc = new jsPDF({ unit: 'pt', format: 'a4', orientation: 'portrait' });
        await doc.html(content, {
          x: 0, y: 0,
          width: PAGE_W,
          windowWidth: content.scrollWidth,
          autoPaging: 'text',
          margin: [0, 0, 0, 0],
          callback(doc) {
            const contentRect = content.getBoundingClientRect();
            const numPages    = doc.getNumberOfPages();
            document.querySelectorAll('#pdf-content a[href]').forEach(anchor => {
              const rect = anchor.getBoundingClientRect();
              const href = anchor.getAttribute('href');
              if (!href || href.startsWith('#')) return;
              const pdfX = (rect.left - contentRect.left) * SCALE;
              const pdfY = (rect.top  - contentRect.top)  * SCALE;
              const pdfW = rect.width  * SCALE;
              const pdfH = rect.height * SCALE;
              const pageNum = Math.floor(pdfY / PAGE_H) + 1;
              if (pageNum < 1 || pageNum > numPages) return;
              doc.setPage(pageNum);
              doc.link(pdfX, pdfY - (pageNum - 1) * PAGE_H, pdfW, pdfH, { url: href });
            });
            doc.save('assignment-1-real-world-conversation-navigating-every.pdf');
            btn.classList.remove('loading');
            label.textContent = 'Download PDF';
          }
        });
      }
      
      // Boot
      applyLink();
   </script>
</body>
</html>