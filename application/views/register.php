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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    </link>
    <style>
    .password-strength-bar div {
        background-color: #ddd;
    }

    .password-strength-bar .weak {
        background-color: #ff4d4f;
    }

    .password-strength-bar .fair {
        background-color: #ffad33;
    }

    .password-strength-bar .strong {
        background-color: #52c41a;
    }
    </style>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="<?= site_url('asset') ?>/logo.png">
                    <span class="text-white text-lg ml-3"> EasyPickTrash </span>
                </a>
                <div class="my-auto">
                    <!-- <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?= site_url('asset') ?>/admin/dist/images/illustration.svg"> -->
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Beberapa langkah lagi
                        <br>
                        untuk masuk ke akun Anda.
                    </div>
                    <!-- <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Kelola semua akun e-commerce Anda di satu tempat</div> -->
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Daftar
                    </h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">Beberapa langkah
                        lagi untuk masuk ke akun Anda.</div>
                    <form action="<?= site_url('register') ?>" method="post">
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Nama Lengkap" name="nama_user" autocomplete="off">
                            <?= form_error('nama_user', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                            <input type="email" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Email" name="email" autocomplete="off">
                            <?= form_error('email', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>

                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Sandi" name="password_1" autocomplete="off">
                            <?= form_error('password_1', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                            <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3 password-strength-bar">
                                <div class="col-span-4 h-full rounded"></div>
                                <div class="col-span-4 h-full rounded"></div>
                                <div class="col-span-4 h-full rounded"></div>
                            </div>
                            <div class="text-theme-9 mt-2 password-strength-label"></div>
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Konfirmasi Sandi" name="password_2" autocomplete="off">
                        </div>
                        <div
                            class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">Saya setuju dengan</label>
                            <a class="text-primary dark:text-slate-200 ml-1" href="">Kebijakan Privasi</a>.
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit"
                                class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Daftar</button>
                            <a href="<?= site_url('welcome') ?>"
                                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Masuk</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>


    <!-- BEGIN: JS Assets-->
    <script src="<?= site_url('asset') ?>/admin/dist/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <?php if (@$_SESSION['sukses']) { ?>
    <script>
    swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']);
    } ?>
    <!-- END: JS Assets-->
    <script>
    $(document).ready(function() {
        var passwordInput = $('input[name="password_1"]');
        var strengthBar = $('.password-strength-bar');
        var strengthLabel = $('.password-strength-label');

        passwordInput.on('input', function() {
            var password = $(this).val();
            var strength = calculatePasswordStrength(password);

            updateStrengthBar(strength);
            updateStrengthLabel(strength);
        });

        function calculatePasswordStrength(password) {
            var strength = 0;

            if (password.length >= 8) {
                strength++;
            }

            if (/[a-z]/.test(password)) {
                strength++;
            }

            if (/[A-Z]/.test(password)) {
                strength++;
            }

            if (/[0-9]/.test(password)) {
                strength++;
            }

            return strength;
        }

        function updateStrengthBar(strength) {
            strengthBar.find('div').removeClass('weak fair strong');
            for (var i = 0; i < strength; i++) {
                strengthBar.find('div').eq(i).addClass('strong');
            }
            for (var j = strength; j < 4; j++) {
                strengthBar.find('div').eq(j).addClass('weak');
            }
        }

        function updateStrengthLabel(strength) {
            var label = '';
            switch (strength) {
                case 0:
                case 1:
                    label = 'Password Lemah';
                    break;
                case 2:
                    label = 'Password Sedang';
                    break;
                case 3:
                case 4:
                    label = 'Password Kuat';
                    break;
            }
            strengthLabel.text(label);
        }
    });
    </script>
</body>

</html>