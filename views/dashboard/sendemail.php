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
                        <div style="padding: 28px 24px; max-width: 1100px; margin: 0px auto; font-family: 'DM Sans', sans-serif;">
                            <div style="display: flex; align-items: flex-start; justify-content: space-between; flex-wrap: wrap; gap: 12px; margin-bottom: 22px;">

                                <form id="send-email">
                                    <div class="form-group">
                                        <label for="email">Write as many comma separated email addresses as you want</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter email address">
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label for="message">Message</label>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" id="clear-editor"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">Pick a Template</button>
                                        </div>
                                        <div class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Remember the Template</label>
                                        <input type="checkbox" class="form-check-input" id="rememberTemplate" name="rememberTemplate">
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary">Send Email</button>
                                    </div>
                                </form>

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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pick a Template</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="list-group">
                        <?php foreach ($this->templates as $template): ?>
                            <button type="button" class="list-group-item list-group-item-action template-btn" data-subject="<?= htmlspecialchars($template['name']) ?>" data-message="<?= htmlspecialchars($template['content']) ?>">
                                <?= htmlspecialchars($template['name']) ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="/public/js/content-editor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        const editor = new ContentEditor({
            container: '#message',
        });
        const form = document.getElementById('send-email');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const message = editor.get();

            const formData = new FormData(form);
            formData.set('message', message);
            formData.set('method', 'new_email_send');
            formData.set('csrf_token', '<?= CSRF::get() ?>');

            const response = await fetch('/myapp/requests', {
                method: 'POST', 
                body: formData
            });

            const result = await response.json();
            if (!result.error) {
                alert('Email sent successfully!');
                form.reset();
                editor.set('');
            } else {
                alert('Failed to send email. Please try again.');
            }
        });

        const templateButtons = document.querySelectorAll('.template-btn');
        templateButtons.forEach(button => {
            button.addEventListener('click', () => {
                const subject = button.getAttribute('data-subject');
                const message = button.getAttribute('data-message');

                document.getElementById('subject').value = subject;
                editor.set(message);

                // Close the modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
                modal.hide();
            });
        });


    </script>

</body>

</html>