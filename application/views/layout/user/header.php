<!DOCTYPE html>
<html lang="en" class="theme-1">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= site_url('asset') ?>/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?= $title ?> | EasyPickTrash</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= site_url('asset') ?>/admin/dist/css/app.css" />
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-kmbmTlxtNRFjaL3L"></script>
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
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="<?= base_url('dashboard') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard_categories/plastik') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="hexagon"></i> </div>
                        <div class="menu__title"> Plastik </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard_categories/kertas') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="hexagon"></i> </div>
                        <div class="menu__title"> Kertas </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard_categories/kaca') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="hexagon"></i> </div>
                        <div class="menu__title"> Kaca </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard_categories/elektronik') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="hexagon"></i> </div>
                        <div class="menu__title"> Barang Elektronik </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard_categories/tekstil') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="hexagon"></i> </div>
                        <div class="menu__title"> Tekstil </div>
                    </a>
                </li>
                <li class="side-nav__devider my-6"></li>

                <li>
                    <a href="<?= base_url('tukar_poin') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="dollar-sign"></i> </div>
                        <div class="menu__title"> Tukar Koin </div>
                    </a>
                </li>
                <li class="side-nav__devider my-6"></li>

                <li>
                    <a href="<?= base_url('order') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="menu__title"> Riwayat Order </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('bill') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="menu__title"> Belum Bayar </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pay') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="check-circle"></i> </div>
                        <div class="menu__title"> Invoice </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('profile  ') ?>" class="menu">
                        <div class="menu__icon"> <i data-lucide="settings"></i> </div>
                        <div class="menu__title"> Profile </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div
        class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="">Dashboard</a></li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->

            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                    aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="shopping-cart"
                        class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">
                            <?php $keranjang = 'Keranjang Anda : ' . $this->cart->total_items() . ' items ' ?>&nbsp;
                            <?php echo $keranjang ?></div>

                        <?php if(!$this->cart->contents()) { ?>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a class="font-medium truncate mr-5 btn btn-sm btn-outline-dark">Keranjang
                                        Kosong!!</small><i data-lucide="frown" class="text-pending"></i><i
                                            data-lucide="frown" class="text-pending"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>

                        <?php foreach ($this->cart->contents() as $items) : ?>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="<?= base_url() . '/uploads/produk/' . $items['options']['gambar']; ?>">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">
                                        <?php echo $items['name']; ?> &nbsp; <small>x
                                            <?php echo $items['qty']; ?></small></a>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">
                                    <?php echo $items['options']['keterangan']; ?> </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <?php }?>
                        <br>
                        <hr>
                        <button class="btn btn-sm btn-rounded-primary mt-4"><span class="text-uppercase"><a
                                    href="<?= site_url('dashboard/detail_cart') ?>">Liat Keranjang</a></span></button>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="<?= site_url('asset') ?>/user.png">
                </div>
                <div class="dropdown-menu w-56">
                    <ul
                        class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium"> <?php echo $this->session->userdata('nama_user') ?></div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">
                                <?php echo $this->session->userdata('email') ?></div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="<?= site_url('profile') ?>" class="dropdown-item hover:bg-white/5"> <i
                                    data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <!-- <li>
                            <a href="<?= site_url('change_password') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li> -->
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="<?= site_url('welcome/logout') ?>" class="dropdown-item hover:bg-white/5"> <i
                                    data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
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
                        <a href="<?= base_url('dashboard') ?>" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180"> </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('dashboard_categories/plastik') ?>" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hexagon"></i> </div>
                            <div class="side-menu__title"> Plastik </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('dashboard_categories/kertas') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hexagon"></i> </div>
                            <div class="side-menu__title"> Kertas </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('dashboard_categories/kaca') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hexagon"></i> </div>
                            <div class="side-menu__title"> Kaca </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('dashboard_categories/elektronik') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hexagon"></i> </div>
                            <div class="side-menu__title"> Barang Elektronik </div>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('dashboard_categories/tekstil') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hexagon"></i> </div>
                            <div class="side-menu__title"> Tekstil </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>

                    <li>
                        <a href="<?= base_url('tukar_poin') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="dollar-sign"></i> </div>
                            <div class="side-menu__title">
                                Tukar Koin
                                <div class="side-menu__sub-icon "></div>
                            </div>
                        </a>
                    </li>

                    <li class="side-nav__devider my-6"></li>

                    <li>
                        <a href="<?= base_url('order') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                            <div class="side-menu__title">
                                Riwayat Order
                                <div class="side-menu__sub-icon "></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('bill') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Belum Bayar </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pay') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="check-circle"></i> </div>
                            <div class="side-menu__title"> Invoice </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('profile') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                            <div class="side-menu__title"> Profile </div>
                        </a>
                    </li>
                    <!-- <li>
                        <div class="side-menu active border">
                            <div class="side-menu__icon"> <i data-lucide="moon"></i> </div>
                            <button onclick="myFunction()" class="side-menu__title"> Mode Gelap </button>
                        </div>
                    </li> -->
                </ul>
            </nav>
            <!-- END: Side Menu -->

            <script>
            function myFunction() {
                var element = document.body;
                element.classList.toggle("dark text-white");
            }
            </script>