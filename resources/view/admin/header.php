<?php
if (!$_SESSION['account']['isAdmin']) {
    header("Location: index.php?view=admin&action=login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= $helper->base_url('public/admin/images/favicon.ico') ?>">

    <!-- third party css -->
    <link href="<?= $helper->base_url('public/admin/css/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="<?= $helper->base_url('public/admin/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= $helper->base_url('public/admin/css/app-modern.min.css') ?>" rel="stylesheet" type="text/css" id="light-style" />
    <link href="<?= $helper->base_url('public/admin/css/app-modern-dark.min.css') ?>" rel="stylesheet" type="text/css" id="dark-style" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <!-- Topbar Start -->
    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
        <div class="container-fluid">

            <!-- LOGO -->
            <a href="index.html" class="topnav-logo">
                <span class="topnav-logo-lg">
                    <img src="<?= $helper->base_url('public/admin/images/logo-light.png') ?>" alt="" height="16">
                </span>
                <span class="topnav-logo-sm">
                    <img src="<?= $helper->base_url('public/admin/images/logo_sm.png') ?>" alt="" height="16">
                </span>
            </a>

            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                <li class="dropdown notification-list d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= $helper->base_url('public/admin/images/flags/us.jpg') ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?= $helper->base_url('public/admin/images/flags/germany.jpg') ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?= $helper->base_url('public/admin/images/flags/italy.jpg') ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?= $helper->base_url('public/admin/images/flags/spain.jpg') ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?= $helper->base_url('public/admin/images/flags/russia.jpg') ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-right">
                                    <a href="javascript: void(0);" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div style="max-height: 230px;" data-simplebar>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="<?= $helper->base_url('public/admin/images/users/avatar-2.jpg') ?>" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="<?= $helper->base_url('public/admin/images/users/avatar-4.jpg') ?>" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list d-none d-sm-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-view-apps noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">

                        <div class="p-2">
                            <div class="row no-gutters">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="<?= $helper->base_url('public/admin/images/brands/slack.png') ?>" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="<?= $helper->base_url('public/admin/images/brands/github.png') ?>" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="<?= $helper->base_url('public/admin/images/brands/dribbble.png') ?>" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="<?= $helper->base_url('public/admin/images/brands/bitbucket.png') ?>" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="<?= $helper->base_url('public/admin/images/brands/dropbox.png') ?>" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="<?= $helper->base_url('public/admin/images/brands/g-suite.png') ?>" alt="G Suite">
                                        <span>G Suite</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </li>

                <li class="notification-list">
                    <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                        <i class="dripicons-gear noti-icon"></i>
                    </a>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="<?= $helper->base_url('public/admin/images/users/avatar-1.jpg') ?>" alt="user-image" class="rounded-circle">
                        </span>
                        <span>
                            <span class="account-user-name">Dominic Keller</span>
                            <span class="account-position">Founder</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                        <!-- item-->
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle mr-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-edit mr-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lifebuoy mr-1"></i>
                            <span>Support</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline mr-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout mr-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>
            <a class="button-menu-mobile disable-btn">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <div class="app-search dropdown">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                        <span class="mdi mdi-magnify search-icon"></span>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="uil-notes font-16 mr-1"></i>
                        <span>Analytics Report</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="uil-life-ring font-16 mr-1"></i>
                        <span>How can I help you?</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="uil-cog font-16 mr-1"></i>
                        <span>User profile settings</span>
                    </a>

                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                    </div>

                    <div class="notification-list">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="media">
                                <img class="d-flex mr-2 rounded-circle" src="<?= $helper->base_url('public/admin/images/users/avatar-2.jpg') ?>" alt="Generic placeholder image" height="32">
                                <div class="media-body">
                                    <h5 class="m-0 font-14">Erwin Brown</h5>
                                    <span class="font-12 mb-0">UI Designer</span>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="media">
                                <img class="d-flex mr-2 rounded-circle" src="<?= $helper->base_url('public/admin/images/users/avatar-5.jpg') ?>" alt="Generic placeholder image" height="32">
                                <div class="media-body">
                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                    <span class="font-12 mb-0">Developer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu left-side-menu-detached">

                <div class="leftbar-user">
                    <a href="javascript: void(0);">
                        <img src="<?= $helper->base_url('public/admin/images/users/avatar-1.jpg') ?>" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name"><?php echo $username ?? '' ?></span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="metismenu side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge badge-info badge-pill float-right">4</span>
                            <span>Dashboards</span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="dashboard-analytics.html">Analytics</a>
                            </li>
                            <li>
                                <a href="dashboard-crm.html">CRM</a>
                            </li>
                            <li>
                                <a href="index.html">Ecommerce</a>
                            </li>
                            <li>
                                <a href="dashboard-projects.html">Projects</a>
                            </li>
                        </ul>
                    </li>

                    <li class="side-nav-title side-nav-item">Apps</li>

                    <li class="side-nav-item">
                        <a href="post" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span>Post</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-chat.html" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Bài viết nổi bật </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="apps-ecommerce-products.html">Products</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-products-details.html">Products Details</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-orders-details.html">Order Details</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-customers.html">Customers</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-sellers.html">Sellers</a>
                            </li>
                        </ul>
                    </li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="apps-email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="apps-email-read.html">Read Email</a>
                            </li>
                        </ul>
                    </li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-briefcase"></i>
                            <span> Projects </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="apps-projects-list.html">List</a>
                            </li>
                            <li>
                                <a href="apps-projects-details.html">Details</a>
                            </li>
                            <li>
                                <a href="apps-projects-gantt.html">Gantt <span class="badge badge-pill badge-dark-lighten font-10 float-right">New</span></a>
                            </li>
                            <li>
                                <a href="apps-projects-add.html">Create Project <span class="badge badge-pill badge-success-lighten font-10 float-right">New</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-social-feed.html" class="side-nav-link">
                            <i class="uil-rss"></i>
                            <span> Social Feed </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="apps-tasks.html">List</a>
                            </li>
                            <li>
                                <a href="apps-tasks-details.html">Details</a>
                            </li>
                            <li>
                                <a href="apps-kanban.html">Kanban Board</a>
                            </li>
                        </ul>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-file-manager.html" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> File Manager </span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Custom</li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="pages-profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages-profile-2.html">Profile 2</a>
                            </li>
                            <li>
                                <a href="pages-invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages-faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="pages-pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages-maintenance.html">Maintenance</a>
                            </li>
                            <li class="side-nav-item">
                                <a href="javascript: void(0);" aria-expanded="false">Authentication
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="side-nav-third-level" aria-expanded="false">
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-login-2.html">Login 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-register-2.html">Register 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-logout.html">Logout</a>
                                    </li>
                                    <li>
                                        <a href="pages-logout-2.html">Logout 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail.html">Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="side-nav-item">
                                <a href="javascript: void(0);" aria-expanded="false">Error
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="side-nav-third-level" aria-expanded="false">
                                    <li>
                                        <a href="pages-404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="pages-404-alt.html">Error 404-alt</a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">Error 500</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages-starter.html">Starter Page</a>
                            </li>
                            <li>
                                <a href="pages-preloader.html">With Preloader</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </li>

                    <li class="side-nav-item">
                        <a href="landing.html" target="_blank" class="side-nav-link">
                            <i class="uil-globe"></i>
                            <span class="badge badge-light float-right">New</span>
                            <span> Landing </span>
                        </a>
                    </li>



                </ul>

                <!-- End Sidebar -->

                <div class="clearfix"></div>
                <!-- Sidebar -left -->

            </div>
            <!-- Right Sidebar -->
            <div class="right-bar">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="dripicons-cross noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <div class="rightbar-content h-100" data-simplebar>

                    <div class="p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <!-- Settings -->
                        <h5 class="mt-3">Color Scheme</h5>
                        <hr class="mt-1" />

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                            <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                            <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                        </div>

                        <!-- Left Sidebar-->
                        <h5 class="mt-4">Left Sidebar</h5>
                        <hr class="mt-1" />

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check" checked />
                            <label class="custom-control-label" for="fixed-check">Scrollable</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="compact" value="condensed" id="condensed-check" />
                            <label class="custom-control-label" for="condensed-check">Condensed</label>
                        </div>

                        <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase
                            Now</a>
                    </div> <!-- end padding-->

                </div>
            </div>
            <div class="rightbar-overlay"></div>