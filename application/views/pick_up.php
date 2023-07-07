<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pick Up Form
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

        <?php
            $grand_total = 0;

            if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
                $kategori = $item['options']['kategori'];//kategori /kg
                $harga = $item['price']; //harga /kg
                $items_subtotal = $item['poin'] * $item['qty'];//poin yg didapat

                $qty = $item['qty']; //quantity

                $grand_total = $harga * $qty; // total harga
                $biaya_antar = $harga * $item['qty']; //biaya antar
                //jika $qty <= 5 kg
                if($qty <= '5'){
                    $potongan = $biaya_antar /2.5; //biaya antar / t kecil
                } else {
                    $potongan = $biaya_antar /5;
                }
                $potongan2 = $biaya_antar /2.5; //biaya antar / t besar
                $potongan3 = $biaya_antar /5; //biaya antar / t kecil
                $biaya_layanan_total = $biaya_antar - $potongan2;
                $biaya_layanan_total1 = $biaya_antar - $potongan3;

            }
        } ?>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="alert alert-primary show mb-2" role="alert">Informasi Pelanggan</div>
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <form id="payment-form" action="<?= site_url('dashboard/pick_up_proccess') ?>" method="post"
                        enctype="multipart/form-data">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div
                                    class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Pelanggan
                                </div>
                                <div class="mt-5">
                                    <div class="mb-5">
                                        <input type="hidden" id="order_id" name="order_id"
                                            value="INV-<?= mt_rand(000000000, 111111111) ?>" maxlength="8"
                                            autocomplete="off" required>
                                        <input type="hidden" id="tracking_id" name="tracking_id"
                                            value="<?= mt_rand(0000000000000, 1111111111111) ?>" maxlength="12"
                                            autocomplete="off" required>
                                        <input type="hidden" name="biaya"
                                            value="<?= number_format($potongan, 0, ',', '.') ?>">
                                        <input type="hidden" name="id_user" id="id_user"
                                            value="<?php echo $this->session->userdata('id_user') ?>">
                                        <input type="hidden" name="status" id="status" value="0">
                                        <input type="hidden" name="layanan_pesanan" id="layanan_pesanan"
                                            value="Pick Up">
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
                                                    <!-- <div class="tooltip cursor-pointer absolute top-0 right-0 -mt-2 -mr-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white absolute top-0 right-0 -mt-2 -mr-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="x" data-lucide="x" class="lucide lucide-x stroke-1.5 h-4 w-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div> -->
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
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div
                                    class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Alamat
                                </div>
                                <div class="mt-5">
                                    <div class="flex mb-5">
                                        <label for="post-form-7" class="form-label mr-auto">Alamat <small
                                                class="text-danger">*</small></label>
                                        <textarea id="alamat" name="alamat" class="form-control" autocomplete="off"
                                            style="text-align: right;border: none;outline:none; width: 50%;"><?= $user->alamat ?></textarea>
                                    </div>
                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label"> Provinsi <small
                                                class="text-danger">*</small></label>
                                        <select name="provinsi" id="provinsi" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label"> Kota <small
                                                class="text-danger">*</small></label>
                                        <select name="kota" id="kota" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label"> Kode Pos <small
                                                class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                                            placeholder="Your mobile phone" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y pr-1">
                <div class="alert alert-primary show mb-2" role="alert"> Informasi Pembayaran </div>
            </div>
            <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                <div class="box p-5 mt-5">
                    <div class="mb-5">
                        <label for="post-form-7" class="form-label"> Metode Pembayaran Ke Rekening/Dompet Digital
                            Anda<small class="text-danger">*</small></label>
                        <select name="metode_bayar" data-placeholder="Pilih Metode Pembayaran"
                            class="tom-select w-full">
                            <option>Pilih Metode Pembayaran</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="Dompet Digital">Dompet Digital</option>
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
                        <label for="post-form-7" class="form-label"> Pilih Dompet Digital <small
                                class="text-danger">*</small></label>
                        <select name="metode_bayar2" id="pilih_dompet_digital" data-placeholder="Pilih Dompet Digital"
                            class="tom-select w-full">
                            <option disabled selected hidden>Pilih Dompet Digital</option>
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
                <div class="box p-5 mt-5">

                    <!-- <div class="mb-5">
                        <label for="post-form-7" class="form-label"> Metode Pembayaran Ke Kami <small
                                class="text-danger">*</small></label>
                        <select name="payment_method" data-placeholder="Pilih Bank" class="tom-select w-full">
                            <option value="BRI - 6750527090">Bank BRI 6750527090</option>
                            <option value="BCA - 6750527080">Bank BCA 6750527080</option>
                            <option value="MANDIRI - 6750527070">Bank MANDIRI 6750527070</option>
                            <option value="BNI - 6750527060">Bank BNI 6750527060</option>
                            <option value="BTN - 6750527050">Bank BTN 6750527060</option>
                        </select>
                    </div> -->
                    <!-- <div class="mb-5">
                        <label for="post-form-7" class="form-label"> Metode Pembayaran Ke Kami <small
                                class="text-danger">*</small></label>
                        <select name="pay" data-placeholder="Pilih Metode" class="tom-select w-full">
                            <option disabled selected hidden>Pilih Metode</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="Dompet Digital">Dompet Digital</option>
                            <option value="COD (Bayar Ditempat)">COD (Bayar Ditempat)</option>
                        </select>
                    </div>
                    <div id="pay_bank" class="mb-5" style="display: none;">
                        <label for="post-form-7" class="form-label"> Pilih Bank <small
                                class="text-danger">*</small></label>
                        <select name="pay_bank" data-placeholder="Pilih Bank" class="tom-select w-full">
                            <option disabled selected hidden>Pilih Bank</option>
                            <option value="BRI - 6750527090">Bank BRI 6750527090</option>
                            <option value="BCA - 6750527080">Bank BCA 6750527080</option>
                            <option value="MANDIRI - 6750527070">Bank MANDIRI 6750527070</option>
                            <option value="BNI - 6750527060">Bank BNI 6750527060</option>
                            <option value="BTN - 6750527050">Bank BTN 6750527060</option>
                        </select>
                    </div>
                    <div id="pay_dompet" class="mb-5" style="display: none;">
                        <label for="post-form-7" class="form-label"> Pilih Dompet Digital <small
                                class="text-danger">*</small></label>
                        <select name="pay_dompet" data-placeholder="Pilih Metode" class="tom-select w-full">
                            <option disabled selected hidden>Pilih Dompet Digital</option>
                            <option value="Dana - 081234567891">Dana - 081234567891</option>
                            <option value="Ovo - 081234567891">Ovo - 081234567891</option>
                            <option value="Gopay - 081234567891">Gopay - 081234567891</option>
                            <option value="Shopee Pay - 081234567891">Shopee Pay - 081234567891</option>
                        </select>
                    </div> -->
                </div>
            </div>
            <div class="mt-5">
                <div class="alert alert-primary show mb-2 mt-5" role="alert"> Informasi Poin </div>
            </div>
            <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                <div class="box p-5 mt-5">
                    <div class="flex">
                        <div class="mr-auto">Poin yang didapat</div>
                        <div class="font-medium"><?= number_format($items_subtotal, 0, ',', '.') ?></div>
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
                        <div class="mr-auto">Total Harga</div>
                        <div class="font-medium text-primary">Rp. <?= number_format($grand_total, 0, ',', '.') ?></div>
                    </div>
                    <div class="flex mt-4">
                        <div class="mr-auto text-danger"><small>Biaya Estimasi layanan</small></div>
                        <div class="font-medium text-danger">Rp. <?= number_format($potongan3, 0, ',', '.') ?> sampai
                            Rp. <?= number_format($potongan2, 0, ',', '.') ?>
                        </div>
                    </div>
                    <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="mr-auto font-medium text-base">Anda mendapat</div>
                        <div class="font-medium text-base"><strong>Rp.
                                <?= number_format($biaya_layanan_total, 0, ',', '.') ?> sampai Rp.
                                <?= number_format($biaya_layanan_total1, 0, ',', '.') ?>,-</strong></div>
                    </div>
                    <p class="text-base text-info text-sm mt-1"><b>Note : </b><br>Akan dikirim ke nomor rekening/dompet
                        digital anda
                        <br>silahkan lengkapi form anda
                    </p>
                </div>
            </div>
            <div role="alert"
                class="mt-5 mb-5 alert relative border rounded-md px-5 py-4 bg-success border-success bg-opacity-20 border-opacity-5 text-dark dark:border-success dark:border-opacity-20 mb-2 flex items-center">
                <i data-lucide="alert-triangle" width="24" height="24"
                    class="stroke-1.5 mr-2 h-6 w-6 mr-2 h-6 w-6"></i>Jumlah Biaya Layanan : <b> Rp.
                    <?= number_format($potongan, 0, ',', '.') ?>,-</b>
            </div>
            <div class="flex mt-5">
                <a href="<?= site_url('dashboard/detail_cart') ?>"
                    class="btn w-32 border bg-danger text-white">Keranjang
                    Saya</a>
                <button type="submit" class="btn btn-primary w-32 shadow-md ml-auto">Check Out</button>
            </div>
        </div>
        </form>

        <!-- END: Post Info -->

        <?php }?>

    </div>
</div>
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
    } else if (selectedOption === 'Dompet Digital') {
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

document.querySelector('select[name="pay"]').addEventListener('change', function() {
    var selectedOption = this.value;
    var bankPayField = document.getElementById('pay_bank');
    var dompetDigitalPayField = document.getElementById('pay_dompet');

    if (selectedOption === 'Bank Transfer') {
        bankPayField.style.display = 'block';
        dompetDigitalPayField.style.display = 'none';
    } else if (selectedOption === 'Dompet Digital') {
        bankPayField.style.display = 'none';
        dompetDigitalPayField.style.display = 'block';
    } else {
        bankPayField.style.display = 'none';
        dompetDigitalPayField.style.display = 'none';
    }
});
</script>