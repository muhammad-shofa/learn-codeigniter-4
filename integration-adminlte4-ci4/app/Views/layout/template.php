<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Inegration AdminLTE 4 & CI 4" ?></title>
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
        crossorigin="anonymous" />
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!-- header -->
        <header>
            <nav class="app-header navbar navbar-expand bg-body">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Start Navbar Links-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                                <i class="bi bi-list"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                    <!--end::Start Navbar Links-->
                    <!--begin::End Navbar Links-->
                    <ul class="navbar-nav ms-auto">
                        <!--begin::Navbar Search-->
                        <li class="nav-item">
                            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                <i class="bi bi-search"></i>
                            </a>
                        </li>
                        <!--end::Navbar Search-->
                        <!--begin::Messages Dropdown Menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-bs-toggle="dropdown" href="#">
                                <i class="bi bi-chat-text"></i>
                                <span class="navbar-badge badge text-bg-danger">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <!--begin::Message-->
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img
                                                src="dist/assets/img/user1-128x128.jpg"
                                                alt="User Avatar"
                                                class="img-size-50 rounded-circle me-3" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="dropdown-item-title">
                                                Brad Diesel
                                                <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                            </h3>
                                            <p class="fs-7">Call me whenever you can...</p>
                                            <p class="fs-7 text-secondary">
                                                <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                            </p>
                                        </div>
                                    </div>
                                    <!--end::Message-->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <!--begin::Message-->
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img
                                                src="../../dist/assets/img/user8-128x128.jpg"
                                                alt="User Avatar"
                                                class="img-size-50 rounded-circle me-3" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="dropdown-item-title">
                                                John Pierce
                                                <span class="float-end fs-7 text-secondary">
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                            </h3>
                                            <p class="fs-7">I got your message bro</p>
                                            <p class="fs-7 text-secondary">
                                                <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                            </p>
                                        </div>
                                    </div>
                                    <!--end::Message-->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <!--begin::Message-->
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img
                                                src="../../dist/assets/img/user3-128x128.jpg"
                                                alt="User Avatar"
                                                class="img-size-50 rounded-circle me-3" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="dropdown-item-title">
                                                Nora Silvester
                                                <span class="float-end fs-7 text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                            </h3>
                                            <p class="fs-7">The subject goes here</p>
                                            <p class="fs-7 text-secondary">
                                                <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                            </p>
                                        </div>
                                    </div>
                                    <!--end::Message-->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                            </div>
                        </li>
                        <!--end::Messages Dropdown Menu-->
                        <!--begin::Notifications Dropdown Menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-bs-toggle="dropdown" href="#">
                                <i class="bi bi-bell-fill"></i>
                                <span class="navbar-badge badge text-bg-warning">15</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="bi bi-envelope me-2"></i> 4 new messages
                                    <span class="float-end text-secondary fs-7">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                    <span class="float-end text-secondary fs-7">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                    <span class="float-end text-secondary fs-7">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                            </div>
                        </li>
                        <!--end::Notifications Dropdown Menu-->
                        <!--begin::Fullscreen Toggle-->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                            </a>
                        </li>
                        <!--end::Fullscreen Toggle-->
                        <!--begin::User Menu Dropdown-->
                        <li class="nav-item dropdown user-menu">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img
                                    src="../../dist/assets/img/user2-160x160.jpg"
                                    class="user-image rounded-circle shadow"
                                    alt="User Image" />
                                <span class="d-none d-md-inline">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <!--begin::User Image-->
                                <li class="user-header text-bg-primary">
                                    <img
                                        src="../../dist/assets/img/user2-160x160.jpg"
                                        class="rounded-circle shadow"
                                        alt="User Image" />
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2023</small>
                                    </p>
                                </li>
                                <!--end::User Image-->
                                <!--begin::Menu Body-->
                                <li class="user-body">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-4 text-center"><a href="#">Followers</a></div>
                                        <div class="col-4 text-center"><a href="#">Sales</a></div>
                                        <div class="col-4 text-center"><a href="#">Friends</a></div>
                                    </div>
                                    <!--end::Row-->
                                </li>
                                <!--end::Menu Body-->
                                <!--begin::Menu Footer-->
                                <li class="user-footer">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                                </li>
                                <!--end::Menu Footer-->
                            </ul>
                        </li>
                        <!--end::User Menu Dropdown-->
                    </ul>
                    <!--end::End Navbar Links-->
                </div>
                <!--end::Container-->
            </nav>
        </header>

        <!-- navbar / sidebar -->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
             <?= view("layout/sidebar") ?>
        </aside>

        <!-- content -->
        <main class="app-main">
            <?= $this->renderSection("content") ?>
        </main>

        <!-- footer -->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
                Copyright &copy; 2014-2024&nbsp;
                <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer>
    </div>

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- apexcharts -->
    <script
        src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
        crossorigin="anonymous"></script>
</body>

</html>