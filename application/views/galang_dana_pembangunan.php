<div class="content">
    <div class="intro-y box px-3 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-3 -mx-3">
            <div class="w-24 ml-5 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Poin Anda</div>
            <div class="flex flex-1 px-0 items-center justify-center lg:justify-end">
                <div class="mr-5">
                    <?php foreach ($profile as $row) : ?>
                    <?php $profile = $row->poin ?>
                    <?php if(!$profile){
                            echo'<div class="text-slate-500 text-lg"><b>0 poin</b></div>';
                        } else {
                            echo '<div class="text-slate-500 text-lg"><b>' . $profile . ' poin</b></div>';
                        
                        }?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box col-span-12 md:col-span-6 mt-3">
        <div
            class="image-fit h-[320px] before:absolute before:top-0 before:left-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black/90 before:to-black/10">
            <img class="rounded-t-md"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStUCjFYtO1PYwVHh8mGfizz5wXypx0Rdj2L--pPPcFxJoAHkc4K2seGqQLeJO-VgokwOI&usqp=CAU"
                alt="Midone Tailwind HTML Admin Template">
            <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                <span class="rounded bg-white/20 px-2 py-1">
                    Donasi
                </span>
                <a class="mt-3 block text-xl font-medium" href="">
                    Galang Dana Pembangunan
                </a>
            </div>
        </div>
        <div class="intro-y flex-1 px-5 py-5">
            <div class="mt-10 text-center text-xl font-medium">
                Galang Dana Pembangunan
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span>399 Juta++ Poin
                </div>
            </div>
            <div class="mx-auto mt-2 py-10 text-center text-xl text-slate-500 font-semibold">
                Donasi terkumpul untuk renovasi masjid & musholla di EasyPickTrash selama
                2 tahun terakhir
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                icon-name="activity" data-lucide="activity"
                class="lucide lucide-activity stroke-1.5 mx-auto block h-12 w-12 text-primary">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            </svg>
            <div class="mx-auto mt-5 px-10 text-center text-slate-500 font-medium">
                Galang Dana Pembangunan adalah cara untuk mengumpulkan dana yang akan digunakan dalam proyek-proyek
                pembangunan di berbagai daerah. Dengan
                begitu, kita dapat memberdayakan daerah yang kurang beruntung dan memberikan mereka peluang yang sama
                untuk tumbuh dan berkembang.
            </div>
            <div class="mx-auto px-5 py-5 text-center text-slate-500 text-2xl font-semibold">
                Insyaallah ikhtiar ini bisa jadi amalan jariyah untuk Kamu
            </div>
            <button type="button"
                class="transition duration-200 border shadow-sm items-center justify-center font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary rounded-full mx-auto mt-8 block px-4 py-3">Donasi
                Sekarang</button>
        </div>
    </div>


    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-8">
        <div class="intro-y flex h-10 items-center" style="display: flex; justify-content:space-between;">
            <h2 class="mr-5 truncate text-lg font-medium">Galang Dana Pembangunan</h2>
            <div class="sm:w-auto sm:mt-0">
                <a href="<?= site_url('tukar_poin') ?>" class="btn btn-danger shadow-md mr-2"> Kembali</a>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <div class="post__content tab-content">
                <form id="payment-form" action="<?= site_url('tukar_poin/donasi_galang_dana_pembangunan') ?>"
                    method="post">
                    <input type="hidden" name="id_user" id="id_user"
                        value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="platform" id="platform" value="galang dana pembangunan">
                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">


                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div
                                class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Donatur
                            </div>
                            <div class="mt-5">

                                <div class="mb-5">
                                    <label for="post-form-7" class="form-label"> Nama <small
                                            class="text-danger">*</small></label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off"
                                        readonly>
                                </div>
                                <div class="mb-5">
                                    <label for="post-form-7" class="form-label"> Email <small
                                            class="text-danger">*</small></label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="<?php echo $this->session->userdata('email') ?>" autocomplete="off"
                                        readonly>
                                </div>

                                <div class="mb-5">
                                    <label for="post-form-7" class="form-label">Nominal <small
                                            class="text-danger">(Minimal 100 poin)</small></label>
                                    <input type="number" id="nominal" name="nominal" class="form-control"
                                        autocomplete="off" required placeholder="Min 100 poin">
                                </div>
                                <div class="flex mt-5">
                                    <button type="submit" class="btn btn-primary w-40 shadow-md ml-auto">Donasi
                                        Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- BEGIN: riwayat Donasi -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">

        <div class="col-span-12 lg:col-span-12 2xl:col-span-8">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Riwayat Donasi</div>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <table class="table table-report table-striped mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Nama User</th>
                                <th class="whitespace-nowrap">Email</th>
                                <th class="whitespace-nowrap">Jenis Donasi</th>
                                <th class="whitespace-nowrap">Nominal Donasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (empty($riwayat)) {
                                    echo '
                                    <tr>
                                        <td colspan="12" class="text-center">
                                            <div> Data Kosong </div>
                                        </td>
                                    </tr>
                                    ';
                                }
                            ?>

                            <?php
                            $totalPoints = 0;
                            foreach ($riwayat as $row) : ?>
                            <?php $totalPoints += $row->poin;?>
                            <td>
                                <div class="font-medium whitespace-nowrap text-slate-500"><?= $row->name ?></div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap text-slate-500"><?= $row->email ?></div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap text-slate-500"><?= $row->platform ?></div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap text-slate-500 text-success">+
                                    <?= number_format($row->poin, 0, ',', '.') ?></div>
                            </td>
                            </tr>

                            <?php endforeach; ?>

                            <tr>
                                <td colspan="3"></td>
                                <td class="text-left"><strong><?= number_format($totalPoints, 0, ',', '.') ?>
                                        poin,-</strong></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END: riwayat Donasi -->

</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<?php if (@$_SESSION['sukses']) { ?>
<script>
swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);

} ?>
<?php if (@$_SESSION['error']) { ?>
<script>
swal("Ups!", "<?php echo $_SESSION['error']; ?>", "error");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['error']);
} ?>
<?php if (@$_SESSION['warning']) { ?>
<script>
swal("Ups!", "<?php echo $_SESSION['warning']; ?>", "warning");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['warning']);
} ?>