<div class="content">
    <div class="intro-y box px-3 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-3 -mx-3">
            <div class="w-24 ml-5 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Poin Anda</div>
            <div class="flex flex-1 px-0 items-center justify-center lg:justify-end">
                <div class="mr-5">
                    <?php foreach ($point as $row) : ?>
                        <?php $point = $row->harga ?>
                        <?php if(!$point){
                            echo'<div class="text-slate-500 text-lg">poin dari checkout <b>0 poin</b></div>';
                        } else {
                            echo '<div class="text-slate-500 text-lg">poin dari checkout <b>' . $point . 'poin</b></div>';
                        
                        }?>                        
                    <?php endforeach; ?>    
                    <?php foreach ($nominal as $row) : ?>
                        <?php $nominal = $row->poin ?>
                        
                        <?php if(!$nominal){
                            echo'<div class="text-slate-500 text-lg">poin yang ditukar <b>0 poin</b></div>';
                        } else {
                            echo '<div class="text-slate-500 text-lg">poin yang ditukar <b>' . $nominal. 'poin</b></div>';
                        
                        }?>                         
                    <?php endforeach; ?>  
                    <?php $current_poin = $point - $nominal ?>
  
                    <div class="text-slate-500 text-lg">poin saat ini <b><?= $current_poin ?> poin</b></div>

                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-8">
        <div class="intro-y flex h-10 items-center">
            <h2 class="mr-5 truncate text-lg font-medium">QURBAN</h2>
        </div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <div class="post__content tab-content">
                <form id="payment-form" action="<?= site_url('tukar_poin/donasi_qurban') ?>" method="post">
                    <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="platform" id="platform" value="qurban">
                    <input type="hidden" name="poin" id="poin" value="<?= $current_poin ?>">


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
                                    <input type="number" id="nominal" name="nominal" class="form-control" autocomplete="off" required placeholder="Min 100 poin" min="100">
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




