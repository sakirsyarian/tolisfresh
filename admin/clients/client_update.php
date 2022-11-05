<!-- Connection database -->
<?php require "../config/db.php"; ?>

<!-- Config Env -->
<?php require "../config/env.php"; ?>

<!-- Update data from database -->
<?php
$client_id = $_GET["id"];

// Get article Data to display
$stmt = $conn->prepare("SELECT * FROM clients WHERE client_id = ?");
$stmt->execute([$client_id]);
$client_edit = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TolisFresh - Client Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--begin::stylesheet-->
    <?php include '../partials/stylesheet.php'; ?>
    <!--end::stylesheet-->
</head>

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!--begin::Theme mode setup on page load-->
    <script>
        if (document.documentElement) {
            const defaultThemeMode = "system";
            const name = document.body.getAttribute("data-kt-name");
            let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
            if (themeMode === null) {
                if (defaultThemeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">

        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--begin::Header-->
            <?php include '../partials/header.php'; ?>
            <!--end::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::sidebar-->
                <?php include '../partials/side.php'; ?>
                <!--end::sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">
                                            <a href="<?= $environment ?>/admin/clients/client_read" class="text-muted text-hover-primary">Dashboards</a>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">Update Client</li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                    <!--begin::Primary button-->
                                    <a href="<?= $environment ?>/admin/clients/client_read" class="btn btn-sm fw-bold btn-danger">Back</a>
                                    <!--end::Primary button-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xxl-12">
                                        <!--begin::Card widget 18-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Body-->
                                            <div class="card-body py-9">


                                                <!--begin::Modal content-->
                                                <div class="modal-content rounded">
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">

                                                        <!--begin:Form-->
                                                        <form id="kt_modal_new_target_form_edit" class="form" action="<?= $environment ?>/admin/config/update.php?type=clients&id=<?= $client_id ?>&img=<?= $client_edit["client_image"] ?>" method="POST" enctype="multipart/form-data">

                                                            <!--begin::Heading-->
                                                            <div class="mb-13 mt-13 text-center">
                                                                <!--begin::Title-->
                                                                <h1 class="mb-3">Edit Client Data</h1>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Heading-->

                                                            <!--begin::Input group-->
                                                            <div class="d-flex flex-column mb-8 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="required fs-6 fw-semibold mb-2">Client Name</label>
                                                                <!--end::Label-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Client Name" name="client_name" value="<?= $client_edit['client_name'] ?>" />
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="d-flex flex-column mb-8 fv-row">
                                                                <label class="required fs-6 fw-semibold mb-2">Address</label>
                                                                <textarea class="form-control form-control-solid" rows="3" name="client_address" placeholder="Type Address"><?= $client_edit['client_address'] ?></textarea>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="row g-9 mb-8">
                                                                <!--begin::Col-->
                                                                <div class="col-md-6">
                                                                    <label class="fs-6 fw-semibold mb-2">District</label>
                                                                    <input type="text" class="form-control form-control-solid" placeholder="Type District" name="client_district" value="<?= $client_edit['client_district'] ?>" />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-6 fv-row">
                                                                    <label class="required fs-6 fw-semibold mb-2">City</label>
                                                                    <input type="text" class="form-control form-control-solid" placeholder="Type City" name="client_city" value="<?= $client_edit['client_city'] ?>" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="row g-9 mb-8">
                                                                <!--begin::Col-->
                                                                <div class="col-md-6">
                                                                    <label class="required fs-6 fw-semibold mb-2">Province</label>
                                                                    <input type="text" class="form-control form-control-solid" placeholder="Type Province" name="client_province" value="<?= $client_edit['client_province'] ?>" />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-6 fv-row">
                                                                    <label class="required fs-6 fw-semibold mb-2">Zipcode</label>
                                                                    <input type="number" class="form-control form-control-solid" placeholder="Type Zipcode" name="client_zipcode" value="<?= $client_edit['client_zipcode'] ?>" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Input group-->

                                                             <!--begin::Input group-->
                                                            <div class="d-flex flex-column mb-8 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2">File Images</label>
                                                                <!--end::Label-->
                                                                <input type="file" class="form-control form-control-solid" name="client_image" />
                                                                <label class="mt-3 text-gray-400">Rekomendasi : Ukuran image 500 x 500 px</label>
                                                            </div>
                                                            <!--end::Input group-->
                                                            
                                                            <!--begin::Actions-->
                                                            <div class="text-left mt-16">
                                                                <button type="submit" name="update" class="btn btn-primary">
                                                                    Update
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end:Form-->

                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->


                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card widget 18-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->

                    <!--begin::Footer-->
                    <?php include '../partials/footer.php'; ?>
                    <!--end::Footer-->

                </div>
                <!--end:::Main-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->

    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <?php include '../partials/script.php'; ?>

    <!--begin::DataTables-->
    <script>
        $("#kt_datatable_dom_positioning").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
    <!--end::Datatables-->

    <!--end::Javascript-->


</body>

</html>