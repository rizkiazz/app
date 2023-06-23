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
                <form id="payment-form" action="<?= site_url('tukar_poin/donasi_galang_dana_pembangunan') ?>" method="post">
                    <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="platform" id="platform" value="galang dana pembangunan">
                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">


                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Donatur </div>
                            <div class="mt-5">

                                <div class="mb-5">
                                    <label for="post-form-7" class="form-label"> Nama <small class="text-danger">*</small></label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                                </div>
                                <div class="mb-5">
                                    <label for="post-form-7" class="form-label"> Email <small class="text-danger">*</small></label>
                                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $this->session->userdata('email') ?>" autocomplete="off" readonly>
                                </div>

                                <div class="mb-5">
                                    <label for="post-form-7" class="form-label">Nominal <small class="text-danger">(Minimal 100 poin)</small></label>
                                    <input type="number" id="nominal" name="nominal" class="form-control" autocomplete="off" required placeholder="Min 100 poin">
                                </div>
                                <div class="flex mt-5">
                                    <button type="submit" class="btn btn-primary w-40 shadow-md ml-auto">Donasi Sekarang</button>
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
                                    <div class="font-medium whitespace-nowrap text-slate-500 text-success">+ <?= number_format($row->poin, 0, ',', '.') ?></div>
                                </td>
                            </tr>

                            <?php endforeach; ?>

                            <tr>
                                <td colspan="3"></td>
                                <td class="text-left"><strong><?= number_format($totalPoints, 0, ',', '.') ?> poin,-</strong></td>
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



