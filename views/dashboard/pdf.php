<?php 

$data = json_decode(file_get_contents("public/includes/default.pdf.data.json"),1);


    // Helper for safely displaying values
    function old($data, $key, $default = '')
    { 

        return htmlspecialchars(
            $data[$key] ?? $default,
            ENT_QUOTES,
            'UTF-8'
        );
    }

    function oldArray($key, $index, $default = '')
    {
        //global $data;

        return htmlspecialchars(
            $_POST[$key][$index] ?? $data[$key][$index] ?? $default,
            ENT_QUOTES,
            'UTF-8'
        );
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require 'includes/header.inc.php' ?> 
     <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
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
          <div class="app-headerx d-flex align-items-center">

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
           
            <!-- App header actions end -->

          </div>
          <!-- App header ends -->
 

          <!-- App body starts -->
          <div class="app-body">




          <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm">

                <div class="card-header bg-white">

                    <h4 class="mb-1">
                        Course Materials PDF
                    </h4>

                    <small class="text-muted">
                        Configure the information that will appear on the PDF.
                    </small>

                </div>


                <div class="card-body">

                    <form method="POST"
                          id="generate-pdf">


                        <!-- =====================================
                             BRANDING
                        ====================================== -->

                        <h6 class="text-uppercase text-muted mb-3">
                            Branding
                        </h6>

                        <div class="row">

                            <div class="col-md-8 mb-3">

                                <label class="form-label">
                                    University / Organization Name
                                </label>

                                <input
                                    type="text"
                                    name="university_name"
                                    class="form-control"
                                    value="<?= old($data, 'university_name') ?>"
                                    required
                                >

                            </div>


                            <div class="col-md-2 mb-3">

                                <label class="form-label">
                                    Primary Color
                                </label>

                                <input
                                    type="color"
                                    name="primary_color"
                                    class="form-control form-control-color w-100"
                                    value="<?= old($data,'primary_color', '#9B2C1F') ?>"
                                >

                            </div>


                            <div class="col-md-2 mb-3">

                                <label class="form-label">
                                    Accent Color
                                </label>

                                <input
                                    type="color"
                                    name="accent_color"
                                    class="form-control form-control-color w-100"
                                    value="<?= old($data,'accent_color', '#D24716') ?>"
                                >

                            </div>

                        </div>


                        <hr>


                        <!-- =====================================
                             TITLE
                        ====================================== -->

                        <h6 class="text-uppercase text-muted mb-3">
                            Document Header
                        </h6>


                        <div class="row">

                            <div class="col-md-7 mb-3">

                                <label class="form-label">
                                    Title
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    class="form-control"
                                    value="<?= old($data,'title') ?>"
                                    required
                                >

                            </div>


                            <div class="col-md-5 mb-3">

                                <label class="form-label">
                                    Subtitle
                                </label>

                                <input
                                    type="text"
                                    name="subtitle"
                                    class="form-control"
                                    value="<?= old($data,'subtitle') ?>"
                                >

                            </div>

                        </div>


                        <!-- =====================================
                             DESCRIPTION
                        ====================================== -->

                        <div class="mb-4">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                                required
                            ><?= old($data,'description') ?></textarea>

                        </div>


                        <hr>


                        <!-- =====================================
                             CONTENTS
                        ====================================== -->

                        <h6 class="text-uppercase text-muted mb-3">
                            Contents
                        </h6>


                        <div class="mb-3">

                            <label class="form-label">
                                Contents Heading
                            </label>

                            <input
                                type="text"
                                name="contents_title"
                                class="form-control"
                                value="<?= old($data,'contents_title') ?>"
                            >

                        </div>


                        <label class="form-label">
                            Materials / Items
                        </label>


                        <?php
                        $contents = $_POST['contents']
                            ?? $data['contents']
                            ?? [];

                        foreach ($contents as $index => $item):
                        ?>

                            <div class="input-group mb-2">

                                <span class="input-group-text">
                                    <?= $index + 1 ?>
                                </span>

                                <input
                                    type="text"
                                    name="contents[]"
                                    class="form-control"
                                    value="<?= htmlspecialchars(
                                        $item,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>"
                                >

                            </div>

                        <?php endforeach; ?>


                        <div class="mb-4">

                            <small class="text-muted">
                                Each item will appear as a bullet point in the PDF.
                            </small>

                        </div>


                        <hr>


                        <!-- =====================================
                             BUTTON
                        ====================================== -->

                        <h6 class="text-uppercase text-muted mb-3">
                            Access Button
                        </h6>


                        <div class="mb-4">

                            <label class="form-label">
                                Button Text
                            </label>

                            <input
                                type="text"
                                name="button_text"
                                class="form-control"
                                value="<?= old($data,'button_text') ?>"
                            >

                        </div>

                        
                        <div class="mb-4">

                            <label class="form-label">
                                Button Link
                            </label>

                            <input
                                type="text"
                                name="button_link"
                                class="form-control"
                                value="<?= old($data,'button_link', '') ?>"
                            >

                        </div>


                        <hr>


                        <!-- =====================================
                             FOOTER
                        ====================================== -->

                        <h6 class="text-uppercase text-muted mb-3">
                            Footer
                        </h6>


                        <div class="mb-3">

                            <label class="form-label">
                                Footer Note
                            </label>

                            <textarea
                                name="footer_note"
                                class="form-control"
                                rows="3"
                            ><?= old($data,'footer_note') ?></textarea>

                        </div>


                        <div class="row">

                            <div class="col-md-3 mb-3">

                                <label class="form-label">
                                    Date
                                </label>

                                <input
                                    type="text"
                                    name="date"
                                    class="form-control"
                                    value="<?= old($data,'date') ?>"
                                >

                            </div>


                            <div class="col-md-3 mb-3">

                                <label class="form-label">
                                    Time
                                </label>

                                <input
                                    type="text"
                                    name="time"
                                    class="form-control"
                                    value="<?= old($data,'time') ?>"
                                >

                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Footer Name
                                </label>

                                <input
                                    type="text"
                                    name="footer_name"
                                    class="form-control"
                                    value="<?= old($data,'footer_name') ?>"
                                >

                            </div>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">
                                Page Number
                            </label>

                            <input
                                type="text"
                                name="page_number"
                                class="form-control"
                                value="<?= old($data,'page_number') ?>"
                            >

                        </div>


                        <!-- =====================================
                             SUBMIT
                        ====================================== -->

                        <div class="d-flex justify-content-end gap-2">

                            <button
                                type="reset"
                                class="btn btn-light border"
                            >
                                Reset
                            </button>

                            <button
                                type="submit"
                                class="btn btn-primary px-4"
                            >
                                Generate PDF
                            </button>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
 

           

         
            <!-- Row end -->

          </div>
          <!-- App body ends -->
 
        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <script src="/public/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="/assets/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/assets/js/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/graphs/logistics/shipment.js"></script>
    <script src="assets/vendor/apex/custom/graphs/logistics/avg-delivery-time.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/current-date.js"></script>

    <script>
        const formEl = document.querySelector("#generate-pdf");

        formEl.addEventListener('submit', async (e) => {
            e.preventDefault();

            const form = new FormData(formEl);
            const response = await fetch('/myapp/downloadpdf', {method:"POST", body:form});
            const blob = await response.blob();

            
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'course-materials.pdf'; // File name for user
            document.body.appendChild(a);
            a.click();
            
            // Cleanup
            window.URL.revokeObjectURL(url);
            a.remove();

        })
    </script>
  </body>

</html>