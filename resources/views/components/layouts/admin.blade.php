<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Miracle Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/frontend/images/icon.png">

    <link href="/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/config.js"></script>
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/hfyu36puzcs9806n61g9dwzuk9ru0lq2o7j4jdrii3mhatrb/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">
        <x-header></x-header>
        <div class="px-3">
            {{ $slot }}
        </div>
        <x-footer></x-footer>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="/assets/libs/morris.js/morris.min.js"></script>

    <script src="/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="/assets/js/pages/dashboard.js"></script>

</body>

</html>