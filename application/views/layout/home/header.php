<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= site_url('asset') ?>/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?= $title ?> | EasyPickTrash</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= site_url('asset') ?>/admin/dist/css/app.css" />
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-kmbmTlxtNRFjaL3L"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Midone - HTML Admin Template" class="w-6" src="<?= site_url('asset') ?>/logo.png">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="<?= base_url('home') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('home') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Plastik </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('home') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Kertas </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('home') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Kaca </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('home') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Barang Elektronik </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('home') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Tekstil </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Midone - HTML Admin Template" class="w-6" src="<?= site_url('asset') ?>/logo.png">
                <span class="text-white text-lg ml-3"> EasyPickTrash </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href=""><?= $title ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->

            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
               
                <a href="<?= site_url('welcome')?>" class="dropdown-toggle notification notification--bullet cursor-pointer"><i data-lucide="lock" class="notification__icon dark:text-slate-500"></i></a>
            
            </div>
            <!-- END: Notifications -->
        </div>
    </div>
    <!-- END: Top Bar -->

    <!-- Sidebar Aplikasi -->

    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <ul>
                    <li>
                        <a href="<?= base_url('home') ?>" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title"> Home </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('categories/plastik') ?>" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title"> Plastik </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('categories/kertas') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="side-menu__title"> Kertas </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('categories/kaca') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Kaca </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('categories/elektronik') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Barang Elektronik </div>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('categories/tekstil') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Tekstil </div>
                        </a>
                    </li>

                    <li class="side-nav__devider my-6"></li>
                </ul>
            </nav>
            <!-- END: Side Menu -->