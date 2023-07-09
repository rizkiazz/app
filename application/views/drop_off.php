<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Drop Off Form
        </h2>
    </div>
    <div class=" pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <?php if(empty($keranjang = $this->cart->contents())) {?>
        <div class="col-span-12 lg:col-span-12">
            <div class="intro-y pr-1">
                <div class="alert alert-primary show mb-2 text-center" role="alert"> Anda Belum Memilih Produk </div>
            </div>
            <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                <div class="box p-2 mt-5 justify-content-center text-center">
                    <a href="<?= site_url('dashboard') ?>" class="btn btn-danger shadow-md mr-2"> Kembali Ke
                        Dashboard</a>
                </div>
            </div>
        </div>
        <?php }else { ?>

        <?php $grand_total = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $item) {
                    $kategori = $item['options']['kategori'];//kategori /kg
                    $poin = $item['poin'];
                    $qty = $item['qty']; //quantity
                    $total_poin = $poin * $qty;//poin yg didapat
                    $harga = $item['price']; //harga /kg

                    $grand_total = $harga * $qty; // total harga
                    
                }
            } ?>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="alert alert-primary show mb-2" role="alert">Informasi Pelanggan
            </div>
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <form id="payment-form" action="<?= site_url('dashboard/drop_off_proccess') ?>" method="post"
                        enctype="multipart/form-data">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div
                                    class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Pengirim
                                </div>
                                <div class="mt-5">
                                    <div class="mb-5">
                                        <input type="hidden" id="order_id" name="order_id"
                                            value="INV-<?= mt_rand(000000000, 111111111) ?>" maxlength="8"
                                            autocomplete="off" required>
                                        <input type="hidden" id="tracking_id" name="tracking_id"
                                            value="<?= mt_rand(0000000000000, 1111111111111) ?>" maxlength="12"
                                            autocomplete="off" required>
                                        <!-- <input type="hidden" name="payment_method" value="Antar Sendiri"> -->
                                        <input type="hidden" name="id_user" id="id_user"
                                            value="<?php echo $this->session->userdata('id_user') ?>">
                                        <input type="hidden" name="status" id="status" value="0">
                                        <input type="hidden" name="biaya" id="biaya" value="0 (Antar Sendiri)">
                                        <input type="hidden" name="layanan_pesanan" id="layanan_pesanan"
                                            value="Drop Off">
                                    </div>

                                    <div class="flex mb-5 mt-5">
                                        <div class="mr-auto">Nama Pengirim</div>
                                        <div class="font-medium"><?php echo $this->session->userdata('nama_user') ?>
                                        </div>
                                        <input type="hidden" id="name" name="name" value="<?= $user->nama_user ?>"
                                            class="form-control">
                                    </div>
                                    <div class="flex mb-5">
                                        <div class="mr-auto">Email</div>
                                        <div class="font-medium"><?php echo $this->session->userdata('email') ?></div>
                                        <input type="hidden" id="email" name="email" value="<?= $user->email ?>"
                                            class="form-control">
                                    </div>
                                    <div class="flex mb-5">
                                        <label for="post-form-7" class="form-label mr-auto">Nomor HP <small
                                                class="text-danger">*</small></label>
                                        <input type="text" id="mobile_phone" name="mobile_phone"
                                            value="<?= $user->nomor_hp ?>" class="form-control" autocomplete="off"
                                            style="text-align: right;border: none;outline: none;width: 50%;">
                                    </div>
                                    <div class="flex mb-5">
                                        <label for="post-form-7" class="form-label mr-auto">Alamat <small
                                                class="text-danger">*</small></label>
                                        <textarea id="alamat" name="alamat" class="form-control" autocomplete="off"
                                            style="text-align: right;border: none;outline:none; width: 50%;"><?= $user->alamat ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div
                                    class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Foto Sampah
                                </div>
                                <div class="mt-5">
                                    <div class="flex mb-3 mt-3">
                                        <div class="mr-auto">Upload Foto Sampah<small class="text-danger">*</small>
                                        </div>
                                        <div class="btn btn-secondary btn-sm"><?= $kategori ?>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="border-2 border-dashed dark:border-darkmode-600 rounded-md pt-4">
                                            <div class="flex flex-wrap px-4">
                                                <div
                                                    class="image-fit zoom-in relative mb-5 mr-5 h-24 w-3/5 cursor-pointer">
                                                    <img class="rounded-md" alt="" id="output">
                                                </div>
                                            </div>

                                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span
                                                    class="upload text-primary mr-1">Upload foto</span> atau tarik dan
                                                taruh disini
                                                <input name="file_gambar" id="file_gambar" type="file"
                                                    class="w-full h-full top-0 left-0 absolute opacity-0"
                                                    accept="image/png, image/jpeg, image/jpg"
                                                    onchange="loadFile(event)">
                                            </div>
                                            <?= form_error('file_gambar', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>

                                        </div>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="post-form-7" class="form-label mr-auto">Keterangan <small
                                                class="text-dark">(Optional)</small></label>
                                        <textarea id="keterangan" name="keterangan" class="form-control"
                                            placeholder="Tambahkan Pesan Anda" autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="alert alert-primary show mb-2" role="alert"> Informasi Kantor Center </div>
            </div>
            <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">

                <div class="box p-5 mt-5">
                    <div class="mb-5">
                        <label for="post-form-7" class="form-label"> Provinsi <small
                                class="text-danger">*</small></label>
                        <select name="provinsi" id="provinsi" class="form-control"></select>
                    </div>

                    <div class="mb-5">
                        <label for="post-form-7" class="form-label"> Kota <small class="text-danger">*</small></label>
                        <select name="kota" id="kota" class="form-control" required></select>
                    </div>
                    <div class="mb-5">
                        <label for="post-form-7" class="form-label"> Pilih Kantor Center EasyPickTrash Tujuan <small
                                class="text-danger">*</small></label>
                        <select name="ekspedisi" id="ekspedisi" class="form-control" required></select>
                    </div>
                    <div class="flex">
                        <div class="form-check form-switch">
                            <input id="checkbox-switch-7" class="form-check-input" type="checkbox" checked disabled />
                            <label class="form-check-label" for="checkbox-switch-7">Saya bawa sendiri ke kantor center
                                tujuan</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-6">

            <div class="col-span-12 lg:col-span-6">
                <div class="intro-y pr-1">
                    <div class="alert alert-primary show mb-2" role="alert"> Informasi Pembayaran </div>
                </div>
                <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                    <div class="box p-5 mt-5">
                        <div class="mb-5">
                            <label for="post-form-7" class="form-label"> Metode Pembayaran Ke Rekening/eWallet
                                Anda <small class="text-danger">*</small></label>
                            <select name="metode_bayar" data-placeholder="Pilih Metode Pembayaran"
                                class="tom-select w-full">
                                <option>Pilih Metode Pembayaran</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="eWallet">eWallet</option>
                            </select>
                        </div>
                        <div class="mb-5" id="bank_field" style="display: none;">
                            <label for="post-form-7" class="form-label"> Pilih Bank <small
                                    class="text-danger">*</small></label>
                            <select name="metode_bayar1" id="pilih_bank" data-placeholder="Pilih Bank"
                                class="tom-select w-full">
                                <option disabled selected hidden>Pilih Bank</option>
                                <option value="BRI">Bank BRI</option>
                                <option value="BCA">Bank BCA</option>
                                <option value="MANDIRI">Bank MANDIRI</option>
                                <option value="BNI">Bank BNI</option>
                                <option value="BTN ">Bank BTN</option>
                            </select>
                        </div>
                        <div class="mb-5" id="dompet_digital_field" style="display: none;">
                            <label for="post-form-7" class="form-label"> Pilih eWallet <small
                                    class="text-danger">*</small></label>
                            <select name="metode_bayar2" id="pilih_dompet_digital" data-placeholder="Pilih eWallet"
                                class="tom-select w-full">
                                <option disabled selected hidden>Pilih eWallet</option>
                                <option value="Dana">Dana</option>
                                <option value="Ovo">Ovo</option>
                                <option value="Gopay">Gopay</option>
                                <option value="Shopee Pay">Shopee Pay</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <div id="rekening_field" class="mb-5" style="display: none;">
                                <label for="post-form-7" class="form-label"> Rekening Anda <small
                                        class="text-danger">*</small></label>
                                <input type="number" class="form-control" id="metode_bayar2" name="metode_bayar3"
                                    placeholder="Nomor Rekening Anda" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-5">
                            <div id="nomor_field" class="mb-5" style="display: none;">
                                <label for="post-form-7" class="form-label"> Nomor HP Anda <small
                                        class="text-danger">*</small></label>
                                <input type="number" class="form-control" id="metode_bayar2" name="metode_bayar4"
                                    placeholder="Nomor HP Anda" autocomplete="off">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-5">
                <div class="alert alert-primary show mb-2 mt-5" role="alert"> Informasi Produk </div>
            </div>
            <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">

                <div class="box p-5 mt-5">
                    <div class="flex">
                        <div class="mr-auto">Nama Produk</div>
                        <div class="font-medium"><?= $item['name'] ?></div>
                    </div>
                    <div class="flex mt-4">
                        <div class="mr-auto">Poin <small class="text_primary">/kg</small></div>
                        <div class="font-medium"><?= number_format($poin, 0, ',', '.') ?></div>
                    </div>
                    <div class="flex mt-4">
                        <div class="mr-auto">Berat barang</div>
                        <div class="font-medium text-danger"><?= number_format($qty, 0, ',', '.') ?> kg</div>
                    </div>
                    <div class="flex mt-4">
                        <div class="mr-auto">Harga</div>
                        <div class="font-medium">Rp. <?= number_format($harga, 0, ',', '.') ?>,-/kg</div>
                    </div>
                    <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="mr-auto font-medium text-base">Poin yang didapat</div>
                        <div class="font-medium text-base"><strong><?= number_format($total_poin, 0, ',', '.') ?>
                                poin,-</strong></div>

                    </div>
                    <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="mr-auto font-medium text-base">Anda mendapat</div>
                        <div class="font-medium text-base"><strong>Rp.
                                <?= number_format($grand_total, 0, ',', '.') ?>,-</strong></div>
                    </div>
                    <p class="text-base text-info text-sm"><b>Note : </b><br>Akan dikirim ke nomor rekening/dompet
                        digital anda
                        <br>silahkan lengkapi form anda
                    </p>

                </div>
                <div class="flex mt-5">
                    <a href="<?= site_url('dashboard/detail_cart') ?>"
                        class="btn w-32 border bg-danger text-white">Keranjang Saya</a>
                    <button type="submit" class="btn btn-primary w-32 shadow-md ml-auto">Check Out</button>
                </div>
            </div>
        </div>
        </form>

        <!-- END: Post Info -->

        <?php }?>
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<?php if (@$_SESSION['warning']) { ?>
<script>
swal("Ups!", "<?php echo $_SESSION['warning']; ?>", "warning");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['warning']);
} ?>
<script>
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
document.querySelector('select[name="metode_bayar"]').addEventListener('change', function() {
    var selectedOption = this.value;
    var bankField = document.getElementById('bank_field');
    var rekeningField = document.getElementById('rekening_field');
    var dompetDigitalField = document.getElementById('dompet_digital_field');
    var nomorField = document.getElementById('nomor_field');

    if (selectedOption === 'Bank Transfer') {
        bankField.style.display = 'block';
        rekeningField.style.display = 'none';
        dompetDigitalField.style.display = 'none';
        nomorField.style.display = 'none';
    } else if (selectedOption === 'eWallet') {
        bankField.style.display = 'none';
        rekeningField.style.display = 'none';
        dompetDigitalField.style.display = 'block';
        nomorField.style.display = 'none';
    } else {
        bankField.style.display = 'none';
        rekeningField.style.display = 'none';
        dompetDigitalField.style.display = 'none';
        nomorField.style.display = 'none';
    }
});

document.querySelector('select[id="pilih_bank"]').addEventListener('change', function() {
    var selectedOption = this.value;
    var rekeningField = document.getElementById('rekening_field');

    if (selectedOption === '') {
        rekeningField.style.display = 'none';
    } else {
        rekeningField.style.display = 'block';
    }
});

document.querySelector('select[id="pilih_dompet_digital"]').addEventListener('change', function() {
    var selectedOption = this.value;
    var nomorField = document.getElementById('nomor_field');

    if (selectedOption === '') {
        nomorField.style.display = 'none';
    } else {
        nomorField.style.display = 'block';
    }
});
</script>