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

                </div>
                <!-- App header ends -->
                <!-- App Hero header ends -->

                <!-- App body starts -->
                <div class="app-body">

                    <!-- Row start -->
                    <main class="dash-main">
                        <div style="padding: 28px 24px; max-width: 1100px; margin: 0px auto; font-family: 'DM Sans', sans-serif;">
                            <div style=" flex-wrap: wrap; gap: 12px; margin-bottom: 22px;">

                                <div style="width: 100%; display:flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                                    <a href="#" class="btn btn-outline-primary" onclick="showForm(false)">View Staged Emails</a>
                                    <a href="#" class="btn btn-primary" onclick="showForm()">Add new Email(s)</a>
                                </div>

                                <section>
                                    <div style="margin-top: 24px; padding: 16px; border: 1px solid #e0e0e0; border-radius: 8px; background-color: #f9f9f9;" class="table-container">
                                        <!----------table-------->
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Manual</th>
                                                    <th scope="col">Auto</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($this->emails['data'])) : ?>
                                                    <?php foreach ($this->emails['data'] as $index => $email) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $index + 1 ?></th>
                                                            <td><?= htmlspecialchars($email['email']) ?></td>
                                                            <td><a href="/dashboard/send-email?email=<?= urlencode($email['email']) ?>" class="btn btn-sm btn-outline-primary">Send Manually</a></td>
                                                            <td><a href="#" onclick="autoSendEmail('<?= urlencode($email['email']) ?>')" class="btn btn-sm btn-outline-success">Send Automatically</a></td>
                                                            <td><a href="#" onclick="deleteEmail('<?= urlencode($email['email']) ?>')" class="btn btn-sm btn-outline-danger">Delete</a></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="2" class="text-center">No staged emails found.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="margin-top: 24px; padding: 16px; border: 1px solid #e0e0e0; border-radius: 8px; background-color: #f9f9f9;" class="hidden form-container">
                                        <!------------form------------>
                                        <form id="send-email">
                                            <div class="form-group">
                                                <label for="email">Write as many comma separated email addresses as you want</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email address"
                                                    style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>

                                            <div class="form-group mt-3" style="display: flex; justify-content: flex-end;">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </section>

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


    <script src="/public/js/content-editor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        const form = document.getElementById('send-email');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(form);
            formData.set('method', 'new_email_save');
            formData.set('csrf_token', '<?= CSRF::get() ?>');

            const response = await fetch('/myapp/requests', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            if (!result.error) {
                alert('Email saved successfully!');
                form.reset();
            } else {
                alert('Failed to save email. Please try again.');
            }
        });



        function showForm(show = true) {
            const formContainer = document.querySelector('.form-container');
            const tableContainer = document.querySelector('.table-container');

            if (show) {
                formContainer.classList.remove('hidden');
                tableContainer.classList.add('hidden');
            } else {
                formContainer.classList.add('hidden');
                tableContainer.classList.remove('hidden');
            }
        }

        function autoSendEmail(email) {  
            try {
                const req = fetch('/cron-emails?email=' + (email), {method:'GET' }); 
                alert("Action Started Successfully");                  
            } catch (error) { } 
        }
        function deleteEmail(email) {
            try {
                const form = new FormData();
                form.set('method', 'delete_staged_email');
                form.set('email', email); 
                form.set('csrf_token', '<?= CSRF::get() ?>');
                if (confirm("Are you sure you want to delete this email permanently?")) {
                    const req = fetch('/myapp/requests', { method: 'POST', body: form });
                    alert("Email deleted successfully");
                    location.reload();
                }
            } catch(e){}
        }
    </script>

</body>

</html>