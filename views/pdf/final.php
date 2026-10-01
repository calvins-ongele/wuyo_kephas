<?php 
    $row = json_decode($this->assignment[0]['data'],1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Assistance Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&amp;family=DM+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <script type="module" crossorigin="" src="/assets/index-CKG4P60D.js"></script>
    <link rel="stylesheet" crossorigin="" href="/assets/index-BriuLrwA.css">
    <style type="text/css">
        :root {
            --jer-select-border: #b6b6b6;
            --jer-select-focus: #777;
            --jer-select-arrow: #777;
            --jer-form-border: 1px solid #ededf0;
            --jer-form-border-focus: 1px solid #e2e2e2;
            --jer-highlight-color: #b3d8ff
        }

        .jer-visible {
            opacity: 1
        }

        .jer-hidden {
            opacity: 0
        }

        .jer-select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent;
            border: none;
            color: #000;
            cursor: inherit;
            font-family: inherit;
            font-size: .8em;
            line-height: inherit;
            margin: 0;
            outline: none;
            padding: 0 1em 0 0;
            z-index: 1
        }

        select::-ms-expand {
            display: none
        }

        .jer-select {
            align-items: center;
            background-color: #fff;
            background-image: linear-gradient(0deg, #f9f9f9, #fff 33%);
            border: 1px solid var(--jer-select-border);
            border-radius: .25em;
            cursor: pointer;
            display: grid;
            grid-template-areas: "select";
            line-height: 1.1;
            max-width: 15ch;
            min-width: 12ch;
            padding: .25em .5em;
            position: relative
        }

        .jer-select select,
        .jer-select:after {
            grid-area: select
        }

        .jer-select:not(.jer-select--multiple):after {
            background-color: var(--jer-select-arrow);
            clip-path: polygon(100% 0, 0 0, 50% 100%);
            content: "";
            height: .5em;
            justify-self: end;
            width: .8em
        }

        select:focus+.focus {
            border: 1px solid var(--jer-select-focus);
            border-radius: inherit;
            bottom: -1px;
            left: -1px;
            position: absolute;
            right: -1px;
            top: -1px
        }

        .jer-select-inner {
            text-overflow: ellipsis;
            width: 100%
        }

        .jer-editor-container {
            border-radius: .5em;
            font-size: 16px;
            line-height: 1;
            padding: 1em 1em 1em 2em;
            position: relative;
            text-align: left
        }

        .jer-editor-container textarea {
            border: var(--jer-form-border);
            border-radius: .3em;
            color: var(--jer-input-color);
            outline: none
        }

        .jer-editor-container textarea:focus {
            border: var(--jer-form-border-focus)
        }

        .jer-editor-container input {
            border: var(--jer-form-border);
            border-radius: .3em;
            font-family: inherit;
            outline: none
        }

        .jer-editor-container input:focus {
            border: var(--jer-form-border-focus)
        }

        .jer-editor-container ::selection {
            background-color: var(--jer-highlight-color)
        }

        .jer-collection-header-row,
        .jer-value-main-row {
            align-items: center;
            display: flex;
            gap: .3em;
            min-height: 1.7em
        }

        .jer-collection-header-row {
            display: flex;
            flex-wrap: wrap
        }

        .jer-bracket-outside {
            padding-left: 0
        }

        .jer-collapse-icon {
            left: -1.2em;
            position: absolute;
            top: .35em
        }

        .jer-collection-inner {
            position: relative
        }

        .jer-collection-text-edit {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: .3em;
            line-height: 1.1em
        }

        .jer-collection-text-area {
            font-family: inherit;
            font-size: .85em;
            max-height: 40em;
            overflow: hidden;
            padding: .2em .5em 0;
            resize: both
        }

        .jer-collection-input-button-row {
            display: flex;
            font-size: 150%;
            justify-content: flex-end;
            margin-top: .4em;
            width: 100%
        }

        .jer-collection-error-row {
            bottom: .5em;
            position: absolute
        }

        .jer-error-slug {
            margin-left: 1em
        }

        .jer-value-component {
            position: relative
        }

        .jer-value-main-row {
            display: flex;
            gap: 0
        }

        .jer-value-and-buttons {
            align-items: center;
            display: flex;
            justify-content: flex-start;
            padding-left: .5em
        }

        .jer-value-error-row {
            position: absolute
        }

        .jer-value-string {
            line-height: 1.3em;
            overflow-wrap: anywhere;
            white-space: pre-wrap;
            word-break: break-word
        }

        .jer-string-expansion {
            cursor: pointer;
            filter: saturate(50%);
            opacity: .6
        }

        .jer-show-less {
            font-size: 80%
        }

        .jer-hyperlink {
            text-decoration: underline
        }

        .jer-input-text {
            font-family: inherit;
            font-size: .9em;
            height: 1.4em;
            line-height: 1.2em;
            margin: 0;
            min-width: 6em;
            overflow: hidden;
            padding: .25em .5em .2em;
            resize: none
        }

        .jer-input-boolean {
            margin-left: .3em;
            margin-right: .3em;
            transform: scale(1.5)
        }

        .jer-key-text {
            line-height: 1.1em;
            white-space: pre-wrap;
            word-break: break-word
        }

        .jer-key-edit {
            font-size: inherit;
            font-size: .9em;
            padding: 0 .3em
        }

        .jer-value-invalid {
            font-style: italic;
            opacity: .5
        }

        .jer-input-number {
            font-size: 90%;
            min-width: 3em
        }

        .jer-confirm-buttons,
        .jer-edit-buttons {
            align-items: center;
            cursor: pointer;
            display: flex;
            height: 1em
        }

        .jer-input-buttons {
            gap: .4em
        }

        .jer-edit-buttons {
            gap: .4em;
            margin-left: .5em;
            opacity: 0
        }

        .jer-confirm-buttons {
            gap: .2em;
            margin-left: .4em
        }

        .jer-edit-buttons:hover {
            opacity: 1;
            position: relative
        }

        .jer-collection-header-row:hover>.jer-edit-buttons,
        .jer-value-and-buttons:hover>.jer-edit-buttons,
        .jer-value-main-row:hover>.jer-edit-buttons {
            opacity: 1
        }

        .jer-copy-pulse {
            position: relative;
            transition: .3s
        }

        .jer-copy-pulse:hover {
            opacity: .85;
            transform: scale(1.2);
            transition: .3s
        }

        .jer-copy-pulse:after {
            border-radius: 50%;
            box-shadow: 0 0 15px 5px var(--jer-icon-copy-color);
            content: "";
            display: block;
            height: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            transition: all .5s;
            width: 100%
        }

        .jer-copy-pulse:active:after {
            border-radius: 4em;
            box-shadow: 0 0 0 0 var(--jer-icon-copy-color);
            left: 0;
            opacity: 1;
            position: absolute;
            top: 0;
            transition: 0s
        }

        .jer-copy-pulse:active {
            top: .07em
        }

        .jer-rotate-90 {
            transform: rotate(-90deg)
        }

        .jer-icon:hover {
            opacity: .85;
            transform: scale(1.2);
            transition: .3s
        }

        .jer-empty-string {
            font-size: 90%;
            font-style: italic
        }

        .jer-drag-n-drop-padding {
            border: 1px dashed #e0e0e0;
            border-radius: .3em;
            height: .5em
        }

        .jer-clickzone {
            height: calc(100% - .8em);
            left: -1em;
            position: absolute;
            top: 1.2em
        }
    </style>
</head>

<body>
    <div id="root">
        <div style="font-family: 'Source Sans Pro', Arial, sans-serif; min-height: 100vh; background-color: rgb(242, 245, 249);">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap');

                @keyframes spin {
                    to {
                        transform: rotate(360deg);
                    }
                }

                * {
                    box-sizing: border-box;
                }

                body {
                    margin: 0;
                    background: #f2f5f9;
                }

                a:hover {
                    opacity: 0.85;
                }
            </style>
            <header style="width: 100%; font-family: 'Open Sans', Arial, sans-serif;">
                <div style="background-color: rgb(26, 26, 26); padding: 6px 0px;">
                    <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px; display: flex; justify-content: space-between; align-items: center;"><span style="color: rgb(204, 204, 204); font-size: 12px;">Yale University</span>
                        <nav style="display: flex; gap: 20px;"><a href="/academic-programs" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">Courses</a><a href="/library" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">Library</a><a href="https://yale.instructure.com" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">Canvas</a><a href="https://my.yale.edu" style="color: rgb(204, 204, 204); font-size: 12px; text-decoration: none;">MyYALE</a></nav>
                    </div>
                </div>
                <div style="background-color: rgb(255, 255, 255); padding: 16px 0px; border-bottom: 1px solid rgb(229, 229, 229);">
                    <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px; display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; align-items: center; gap: 14px;"><svg width="38" height="42" viewBox="0 0 38 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2H36V26Q19 40 19 40Q19 40 2 26Z" fill="#00356B"></path>
                                <path d="M12 9L19 21M26 9L19 21M19 21V33" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div style="display: flex; flex-direction: column;"><span style="color: rgb(26, 26, 26); font-size: 15px; font-weight: 700; letter-spacing: -0.2px; font-family: 'Open Sans', Arial, sans-serif;">Yale University</span><span style="color: rgb(0, 53, 107); font-size: 12px; letter-spacing: 0.5px; margin-top: 2px; font-weight: 600;">Student Assistance Portal</span></div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; background-color: rgb(245, 245, 245); border-radius: 30px; padding: 6px 14px 6px 8px;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background-color: rgb(0, 53, 107); color: rgb(255, 255, 255); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px;">C</div>
                            <div style="display: flex; flex-direction: column;"><span style="color: rgb(26, 26, 26); font-size: 13px; font-weight: 600;">Tutor</span><span style="color: rgb(102, 102, 102); font-size: 11px;">calvinnalexo@gmail.com</span></div>
                        </div>
                    </div>
                </div>
                <div style="background-color: rgb(0, 53, 107); border-top: 3px solid rgb(253, 191, 56);">
                    <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px; display: flex; gap: 0px;"><a href="/academic-programs" class="yale-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Academic Programs</a><a href="/current-students" class="yale-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Student Affairs</a><a href="/admissions" class="yale-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Admissions</a><a href="/financial-aid" class="yale-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">Financial Aid</a><a href="/about" class="yale-nav-link" style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 500; text-decoration: none; padding: 11px 18px; display: inline-block; border-right: 1px solid rgba(255, 255, 255, 0.1); transition: background 0.15s;">About YALE</a></div>
                </div>
            </header>

            <div style="background-color: rgb(0, 53, 107); border-bottom: 3px solid rgb(253, 191, 56);">
                <div style="max-width: 1200px; margin: 0px auto; padding: 20px 24px; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <p style="font-size: 12px; color: rgb(253, 191, 56); margin: 0px 0px 4px; text-transform: uppercase; letter-spacing: 0.6px; font-weight: 600;">Student Assistance Portal</p>
                        <h1 style="font-size: 24px; font-weight: 700; color: rgb(255, 255, 255); margin: 0px; font-family: Georgia, serif;"><?= $row['title'] ?></h1>
                    </div>
                    <div style="font-size: 12px; color: rgb(253, 191, 56); margin: 0px 0px 4px; text-transform: uppercase; letter-spacing: 0.6px; font-weight: 600;">Academic Year <?= $this->assignment[0]['academic_year'] ?></div>
                </div>
            </div>
            <main style="max-width: 1200px; margin: 0px auto;">
                <div style="display: flex; align-items: flex-start; min-height: 100vh; background-color: rgb(241, 245, 249);">
                    <aside style="position: sticky; top: 0px; height: 100vh; overflow-y: auto; background-color: rgb(255, 255, 255); border-right: 1px solid rgb(226, 232, 240); flex-shrink: 0; transition: width 0.2s, min-width 0.2s; z-index: 10; width: 300px; min-width: 300px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; padding: 16px 14px 12px; border-bottom: 1px solid rgb(241, 245, 249); position: sticky; top: 0px; background-color: rgb(255, 255, 255); z-index: 1;"><span style="font-size: 11px; font-weight: 800; letter-spacing: 0.8px; text-transform: uppercase; color: rgb(148, 163, 184);">My Courses</span><button title="Collapse sidebar" style="border-width: medium; border-style: none; border-color: currentcolor; border-image: none; background: rgb(241, 245, 249); color: rgb(100, 116, 139); border-radius: 6px; width: 26px; height: 26px; cursor: pointer; font-size: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-left: auto;">‹</button></div>
                        <div style="padding: 10px 0px 20px; display: flex; flex-direction: column; gap: 2px;">
                            <div style="border: 1px solid rgb(191, 219, 254); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(239, 246, 255);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(0, 53, 107);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Applied English Grammar</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ENG 245 · Dr. Priya Anand</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(90deg);">›</span>
                                </div>
                                <div style="border-top: 1px solid rgb(241, 245, 249); padding-bottom: 6px;">
                                    <div style="margin-bottom: 2px;">
                                        <div style="display: flex; align-items: center; padding: 7px 14px; cursor: pointer; user-select: none; background-color: rgb(250, 251, 253); border-bottom: 1px solid rgb(241, 245, 249);"><span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.6px; color: rgb(0, 53, 107);">Grammar</span><span style="font-size: 10px; color: rgb(148, 163, 184); margin-left: auto; margin-right: 6px;">2 tasks</span><span style="font-size: 12px; color: rgb(148, 163, 184);">▾</span></div>
                                        <div style="border-bottom: 1px solid rgb(248, 250, 252); background-color: rgb(240, 247, 255);">
                                            <div style="display: flex; align-items: flex-start; gap: 8px; padding: 9px 14px; cursor: pointer; user-select: none;"><span style="width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; margin-top: 5px; background-color: rgb(0, 53, 107);"></span>
                                                <div style="flex: 1 1 0%; min-width: 0px; display: flex; flex-direction: column; gap: 4px;"><span style="font-size: 12px; line-height: 1.4; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; color: rgb(0, 53, 107); font-weight: 700;"><?= $row['title'] ?></span>
                                                    <div style="display: flex; gap: 4px; flex-wrap: wrap;"><span style="font-size: 10px; padding: 2px 6px; border-radius: 4px; border: 1px solid rgb(254, 202, 202); font-weight: 600; background-color: rgb(254, 242, 242); color: rgb(220, 38, 38);">Due date · <?= date('M d, Y', strtotime($row['due_date'])) ?></span><span style="font-size: 10px; padding: 2px 6px; border-radius: 4px; background-color: rgb(241, 245, 249); color: rgb(100, 116, 139); font-weight: 600; border: 1px solid rgb(226, 232, 240);"><?= $row['points'] ?> pts</span></div>
                                                </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; line-height: 1; padding-top: 2px; transform: rotate(0deg); opacity: 1;">›</span>
                                            </div>
                                        </div>
                                        <!--
                                        <div style="border-bottom: 1px solid rgb(248, 250, 252);">
                                            <div style="display: flex; align-items: flex-start; gap: 8px; padding: 9px 14px; cursor: pointer; user-select: none;"><span style="width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; margin-top: 5px; background-color: rgb(239, 68, 68);"></span>
                                                <div style="flex: 1 1 0%; min-width: 0px; display: flex; flex-direction: column; gap: 4px;"><span style="font-size: 12px; line-height: 1.4; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; color: rgb(30, 41, 59); font-weight: 500;">Perfect Tenses Unpacked: Have Done vs Had Done vs Will Have Done</span>
                                                    <div style="display: flex; gap: 4px; flex-wrap: wrap;"><span style="font-size: 10px; padding: 2px 6px; border-radius: 4px; border: 1px solid rgb(254, 202, 202); font-weight: 600; background-color: rgb(254, 242, 242); color: rgb(220, 38, 38);">Overdue · Jul 20, 2026</span><span style="font-size: 10px; padding: 2px 6px; border-radius: 4px; background-color: rgb(241, 245, 249); color: rgb(100, 116, 139); font-weight: 600; border: 1px solid rgb(226, 232, 240);">90 pts</span></div>
                                                </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; line-height: 1; padding-top: 2px; transform: rotate(0deg); opacity: 1;">›</span>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Bachelor Of Arts</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">BA 201 · Dr. Jane Smith</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Bachelor of Arts in Music</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">BAM 201 · Dr Jane M</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Business English Writing</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ENG 210 · James Hartley</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">ELEMENTARY JAPANESE</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">JAP 101 · Dr Daisuke N</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">ELEMENTARY PASHTO</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">PASH 201 · Dr Nayab B</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Elementary Korean Language I</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">KOR 101 · Dr Smith</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Financial Accounting</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ACC 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">GREEK</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">GRK 200 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">General Biology</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">BIO 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">General Chemistry</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">CHEM 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">General Physics</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">PHY 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">INTRODUCTION TO BENGALi</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">BNG 207 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">INTRODUCTION TO CEBUANO</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">CBO 298 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">INTRODUCTION TO LITHUANIAN</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">LITH 101 · Dr Tomas C</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">ITALIAN</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ITA 255 · Dr Mayi</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Introduction To Indonesian</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">IND 101 · Dr. Tammie H</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Introduction to Amharic</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">AMH 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Introduction to Business Analytics</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">BAN 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Introduction to Visual Art</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ART 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Listening and Lexical Development</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ENG 230 · Karen Osei</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">MUSIC THEORY and PRACTICE</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">MUS 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Phonetics for Fluency</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ENG 155 · Yuki Tanaka</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Practical English Communication</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">ENG 101 · Sarah Mitchell</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Product Management</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">PM 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Public Speaking and Communication Skills</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">COM 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Punjabi Language (Beginner)</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">101 · Dr ARJUN</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">SIGN LANGUAGE</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">SIN 200 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">STATISTICS</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">MATH 201 · </div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                            <div style="border: 1px solid rgb(226, 232, 240); margin-left: 10px; margin-right: 10px; border-radius: 8px; overflow: hidden; margin-bottom: 8px;">
                                <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; cursor: pointer; user-select: none; background-color: rgb(248, 250, 252);">
                                    <div style="display: flex; align-items: flex-start; gap: 10px; flex: 1 1 0%; min-width: 0px;">
                                        <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; background-color: rgb(148, 163, 184);"></div>
                                        <div>
                                            <div style="font-size: 13px; font-weight: 700; color: rgb(30, 41, 59); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">TAGALOG LANGUAGE</div>
                                            <div style="font-size: 11px; color: rgb(148, 163, 184); margin-top: 2px;">TAG 200 · Dr Ryan N</div>
                                        </div>
                                    </div><span style="font-size: 16px; color: rgb(148, 163, 184); flex-shrink: 0; transition: transform 0.15s; margin-left: 8px; transform: rotate(0deg);">›</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div style="flex: 1 1 0%; min-width: 0px; padding: 0px 0px 64px; overflow-x: hidden;">
                        <div style="max-width: 860px; margin: 0px auto; padding: 32px 24px 64px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 20px;"><span style="font-size: 13px; color: rgb(0, 53, 107); cursor: pointer;">Student Portal</span><span style="font-size: 13px; color: rgb(170, 170, 170);">›</span><span style="font-size: 13px; color: rgb(0, 53, 107); cursor: pointer;">Assignments</span><span style="font-size: 13px; color: rgb(170, 170, 170);">›</span><span style="font-size: 13px; color: rgb(85, 85, 85); font-weight: 600;"><?= $this->assignment[0]['code'] ?></span></div>
                            <div style="background-color: rgb(0, 53, 107); border-radius: 10px; padding: 32px 36px; margin-bottom: 32px; color: rgb(255, 255, 255);">
                                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                         <?php foreach(explode(',',$row['tags']) as $tag) { ?>  
                                        <span style="background-color: rgba(255, 255, 255, 0.15); color: rgb(255, 255, 255); padding: 4px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; letter-spacing: 0.4px; text-transform: uppercase;"><?= $tag ?></span>
                                        <?php } ?>
                                       </div>
                                    <div style="background-color: rgb(253, 191, 56); border-radius: 8px; padding: 8px 16px; text-align: center; flex-shrink: 0;"><span style="display: block; font-size: 24px; font-weight: 800; color: rgb(26, 26, 26); line-height: 1;"><?= $row['points'] ?></span><span style="display: block; font-size: 10px; font-weight: 700; color: rgb(26, 26, 26); text-transform: uppercase; letter-spacing: 0.5px;">points</span></div>
                                </div>
                                <h1 style="font-size: 26px; font-weight: 700; color: rgb(255, 255, 255); margin: 0px 0px 24px; font-family: 'Open Sans', Arial, sans-serif; line-height: 1.3;"><?= $row['title'] ?></h1>
                                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px 32px; margin-bottom: 20px;">
                                    <div style="display: flex; flex-direction: column; gap: 2px;"><span style="font-size: 10px; color: rgb(253, 191, 56); text-transform: uppercase; letter-spacing: 0.8px; font-weight: 700;">Course</span><span style="font-size: 14px; color: rgb(255, 255, 255); font-weight: 500;"><?= $this->assignment[0]['name'] ?> (<?= $this->assignment[0]['code'] ?>)</span></div>
                                    <div style="display: flex; flex-direction: column; gap: 2px;"><span style="font-size: 10px; color: rgb(253, 191, 56); text-transform: uppercase; letter-spacing: 0.8px; font-weight: 700;">Instructor</span><span style="font-size: 14px; color: rgb(255, 255, 255); font-weight: 500;"><?= $this->assignment[0]['instructor'] ?></span></div>
                                    <div style="display: flex; flex-direction: column; gap: 2px;"><span style="font-size: 10px; color: rgb(253, 191, 56); text-transform: uppercase; letter-spacing: 0.8px; font-weight: 700;">Academic Year</span><span style="font-size: 14px; color: rgb(255, 255, 255); font-weight: 500;"><?= $this->assignment[0]['academic_year'] ?></span></div>
                                    <div style="display: flex; flex-direction: column; gap: 2px;"><span style="font-size: 10px; color: rgb(253, 191, 56); text-transform: uppercase; letter-spacing: 0.8px; font-weight: 700;">Due Date</span><span style="font-size: 14px; color: rgb(253, 191, 56); font-weight: 700;"><?= date('D, M d, Y', strtotime($row['due_date'])) ?></span></div>
                                </div>
                                <div style="font-size: 13px; color: rgb(253, 191, 56); display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">Submitted for: <strong><?= $_GET['email']??'' ?></strong><span style="background-color: rgba(255, 255, 255, 0.15); color: rgb(160, 255, 176); padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700;">✓ Integrity Agreement Signed</span><span style="background-color: rgba(255, 255, 255, 0.15); color: rgb(255, 224, 160); padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700;">✉ Notifications On</span></div>
                            </div>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Group Discussion</h2><span style="background-color: rgb(231, 76, 60); color: rgb(255, 255, 255); font-size: 10px; font-weight: 700; letter-spacing: 0.6px; padding: 2px 8px; border-radius: 20px; text-transform: uppercase; margin-left: 8px;">Live</span>
                                </div>
                                <div style="padding: 0px 0px 4px;">
                                    <div style="border: 1px solid rgb(127, 167, 208); border-radius: 8px; overflow: hidden; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 85, 162, 0.08) 0px 2px 12px; margin-top: 24px;">
                                        <div style="display: flex; justify-content: space-between; align-items: center; background-color: rgb(0, 53, 107); padding: 12px 18px; cursor: pointer; user-select: none;">
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <div style="width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; background-color: rgb(231, 76, 60);"></div><span style="font-size: 14px; font-weight: 700; color: rgb(255, 255, 255);">Group Discussion</span>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 8px;"><span style="color: rgba(255, 255, 255, 0.8); font-size: 12px;">▼</span></div>
                                        </div>Web based streaming disabled, extension missing!
                                    </div>
                                </div>
                            </section>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Course Work Overview</h2>
                                </div>
                                <div style="padding: 24px 28px;">
                                    <p style="font-size: 15px; color: rgb(51, 51, 51); line-height: 1.8; margin: 0px;">
                                        <?= $row['description'] ?>
                                    </p>
                                </div>
                            </section>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Learning Objectives</h2>
                                </div>
                                <div style="padding: 24px 28px;">
                                    <ol id="sec-objectives" style="list-style: none; margin: 0px; padding: 0px; display: flex; flex-direction: column; gap: 12px;">
                                        
                                         
                                    </ol>
                                </div>
                            </section>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Requirements</h2>
                                </div>
                                <div style="padding: 24px 28px;">
                                    <p style="font-size: 14px; color: rgb(85, 85, 85); line-height: 1.7; margin-bottom: 16px;">All of the following requirements must be fulfilled for full consideration:</p>
                                    <ul id="sec-requirements" style="list-style: none; margin: 0px; padding: 0px; display: flex; flex-direction: column; gap: 10px;">
                                         
                                         
                                        <li style="display: flex; align-items: flex-start; gap: 12px;"><span style="min-width: 8px; height: 8px; border-radius: 50%; background-color: rgb(253, 191, 56); margin-top: 7px; flex-shrink: 0;"></span><span style="font-size: 14px; color: rgb(51, 51, 51); line-height: 1.7; padding-top: 6px;">Record a 5-minute spoken monologue discussing a hypothetical career or life decision using all five types</span></li>
                                        
                                       
                                    </ul>
                                </div>
                            </section>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Deliverables</h2>
                                </div>
                                <div style="padding: 24px 28px;">
                                    <p style="font-size: 14px; color: rgb(85, 85, 85); line-height: 1.7; margin-bottom: 16px;">Submit all of the following items by the due date:</p>
                                    <div id="sec-deliverables" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                                        
                                         
                                         
                                    </div>
                                </div>
                            </section>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Grading Criteria</h2>
                                </div>
                                <div style="padding: 24px 28px;">
                                    <p style="font-size: 14px; color: rgb(85, 85, 85); line-height: 1.7; margin-bottom: 16px;">This assignment is graded out of <strong><?= $row['points'] ?> points</strong> across the following dimensions:</p>
                                    <div style="border: 1px solid rgb(229, 229, 229); border-radius: 8px; overflow: hidden;">
                                        <div style="display: grid; grid-template-columns: 1fr 180px 80px; background-color: rgb(0, 53, 107); padding: 12px 20px; font-size: 12px; font-weight: 700; color: rgb(255, 255, 255); text-transform: uppercase; letter-spacing: 0.6px;"><span>Criterion</span><span>Weight</span><span>Points</span></div>

                                        <?php for($i = 0; $i < count($row['grading_criteria']); $i++ ) { ?>

                                        <div style="display: grid; grid-template-columns: 1fr 180px 80px; padding: 14px 20px; align-items: center; border-top: 1px solid rgb(238, 238, 238); background-color: rgb(249, 250, 251);"><span style="font-size: 14px; color: rgb(34, 34, 34);"><?= $row['grading_criteria'][$i] ?></span>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <div style="flex: 1 1 0%; height: 6px; background-color: rgb(224, 232, 245); border-radius: 3px; overflow: hidden;">
                                                    <div style="height: 100%; background-color: rgb(0, 53, 107); border-radius: 3px; width: <?= floor($row['weight'][$i]*100/$row['points']) ?>%;"></div>
                                                </div><span style="font-size: 13px; font-weight: 700; color: rgb(0, 53, 107); min-width: 36px; text-align: right;"><?= floor($row['weight'][$i]*100/$row['points']) ?>%</span>
                                            </div><span style="font-size: 13px; font-weight: 600; color: rgb(51, 51, 51); text-align: right;"><?= $row['weight'][$i] ?> pts</span>
                                        </div>
                                        <?php } ?>
                                         
                                         
                                         
                                    </div>
                                </div>
                            </section>
                            <section style="background-color: rgb(255, 255, 255); border: 1px solid rgb(229, 229, 229); border-radius: 8px; margin-bottom: 20px; overflow: hidden;">
                                <div style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgb(238, 242, 248); padding: 18px 28px; background-color: rgb(250, 251, 253);">
                                    <div style="width: 4px; height: 22px; background-color: rgb(253, 191, 56); border-radius: 2px; flex-shrink: 0;"></div>
                                    <h2 style="font-size: 16px; font-weight: 700; color: rgb(26, 26, 26); margin: 0px; font-family: 'Open Sans', Arial, sans-serif;">Academic Resources</h2>
                                </div>
                                <div style="padding: 24px 28px;">
                                    <p style="font-size: 14px; color: rgb(85, 85, 85); line-height: 1.7; margin-bottom: 16px;">The following resources are recommended for this assignment:</p>
                                    <div style="display: flex; flex-direction: column; gap: 8px;">

                                    
                        <?php for($i = 0; $i < count($row['resources']); $i++ ) { ?> 
                       
                                        
                                    <a href="<?= $row['resources_url'][$i]??'' ?>" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 10px; color: rgb(0, 53, 107); text-decoration: none; font-size: 14px; font-weight: 500; padding: 10px 14px; background-color: rgb(235, 240, 249); border: 1px solid rgb(127, 167, 208); border-radius: 6px;"><span style="flex-shrink: 0;"><svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M1 7h12M8 2l5 5-5 5" stroke="#00356B" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg></span><?= $row['resources'][$i]??'' ?></a>

                                                 <?php } ?>
                                              
                                            
                                            </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </main>
            <footer style="background-color: rgb(26, 26, 26); color: rgb(170, 170, 170); margin-top: 80px; padding: 48px 0px 24px;">
                <div style="max-width: 1200px; margin: 0px auto; padding: 0px 24px;">
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px; margin-bottom: 40px;">
                        <div>
                            <p style="color: rgb(124, 178, 232); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Student Resources</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Canvas LMS</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">my.yale.edu (One.YALE)</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Sterling Memorial Library</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Career Center</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Financial Aid</p>
                        </div>
                        <div>
                            <p style="color: rgb(124, 178, 232); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Academic Affairs</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Academic Calendar</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Class Schedule</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Graduation Services</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Registrar's Office</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Advising</p>
                        </div>
                        <div>
                            <p style="color: rgb(124, 178, 232); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Campus Life</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Student Union</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Campus Recreation</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Health Services</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Housing</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">Yale Cares</p>
                        </div>
                        <div>
                            <p style="color: rgb(124, 178, 232); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px;">Contact</p>
                            <p style="font-size: 13px; line-height: 1.6; color: rgb(170, 170, 170); margin-bottom: 8px;">PO Box 208234<br>New Haven, CT 06520</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">(203) 432-4771</p>
                            <p style="font-size: 13px; margin-bottom: 6px; cursor: pointer; color: rgb(170, 170, 170);">studentaffairs@yale.edu</p>
                        </div>
                    </div>
                    <div style="border-top: 1px solid rgb(51, 51, 51); padding-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                        <p style="font-size: 12px; color: rgb(102, 102, 102);">© 2026 Yale University — New Haven, Connecticut</p>
                        <p style="font-size: 12px; color: rgb(102, 102, 102);"><span><span style="cursor: pointer;">Privacy Policy</span></span><span><span style="margin: 0px 8px; opacity: 0.4;">|</span><span style="cursor: pointer;">Accessibility</span></span><span><span style="margin: 0px 8px; opacity: 0.4;">|</span><span style="cursor: pointer;">Terms of Use</span></span><span><span style="margin: 0px 8px; opacity: 0.4;">|</span><span style="cursor: pointer;">Emergency Info</span></span></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script>
        
        const objectives = `<?php echo $row['objectives'] ?>`.split('\n');
        displayRowsObjectives('sec-objectives', objectives);
        displayRowsRequirements('sec-requirements', `<?php echo $row['requirements'] ?>`.split('\n'));
        displayRows('sec-deliverables', `<?php echo $row['deliverables'] ?>`.split('\n'));


        function displayRows(id, content) {
            let rows = '';
            content.forEach((element, index) => {
                let i = index + 1;
                rows += `
                <div style="display: flex; align-items: flex-start; gap: 12px; background-color: rgb(235, 240, 249); border: 1px solid rgb(127, 167, 208); border-radius: 6px; padding: 14px 16px;"><span style="min-width: 26px; height: 26px; border-radius: 50%; background-color: rgb(0, 53, 107); color: rgb(255, 255, 255); display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700; flex-shrink: 0;">${i}</span><span style="font-size: 13px; color: rgb(51, 51, 51); line-height: 1.6;">${element}</span></div> `;
            });
            document.querySelector(`#${id}`).innerHTML = rows;
        }
        
        function displayRowsRequirements(id, content) {
            let rows = '';
            content.forEach((element, index) => { 
                rows += ` 
                <li style="display: flex; align-items: flex-start; gap: 12px;"><span style="min-width: 8px; height: 8px; border-radius: 50%; background-color: rgb(253, 191, 56); margin-top: 7px; flex-shrink: 0;"></span><span style="font-size: 14px; color: rgb(51, 51, 51); line-height: 1.7; padding-top: 6px;">${element}</span></li>`;
            });
            document.querySelector(`#${id}`).innerHTML = rows;
        }
        function displayRowsObjectives(id, content) {
            let rows = '';
            content.forEach((element, index) => { 
                let i = index + 1;
                rows += ` 
                <li style="display: flex; align-items: flex-start; gap: 14px;"><span style="min-width: 32px; height: 32px; border-radius: 50%; background-color: rgb(235, 240, 249); color: rgb(0, 53, 107); display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700; flex-shrink: 0; font-family: 'Courier New', monospace;">0${i}</span><span style="font-size: 14px; color: rgb(51, 51, 51); line-height: 1.7; padding-top: 6px;">${element}</span></li>`;
            });
            document.querySelector(`#${id}`).innerHTML = rows;
        }
        
    </script>
</body>

</html>