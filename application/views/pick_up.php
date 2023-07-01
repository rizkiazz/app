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
                        <a href="<?= site_url('dashboard') ?>" class="btn btn-danger shadow-md mr-2"> Kembali Ke Dashboard</a>
                    </div>
                </div>
            </div>
        <?php }else { ?>

            <?php
            $grand_total = 0;

            if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
                $harga = $item['price']; //harga /kg
                $items_subtotal = $item['poin'] * $item['qty'];//poin yg didapat

                $qty = $item['qty']; //quantity
                $grand_total = $harga * $qty; // total harga
                $biaya_antar = $harga * $item['qty']; //biaya antar
                $potongan = $biaya_antar /5; //biaya antar / t
                $biaya_layanan_total = $biaya_antar - $potongan;

            }
        } ?>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="alert alert-primary show mb-2" role="alert">Jumlah Transaksi Yang Harus Dibayar : <b>Rp. <?= number_format($potongan, 0, ',', '.') ?>,-</b></div>
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <form id="payment-form" action="<?= site_url('dashboard/pick_up_proccess') ?>" method="post" enctype="multipart/form-data">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Pelanggan </div>
                                <div class="mt-5">
                                    <div class="mb-5">
                                        <input type="hidden" id="order_id" name="order_id" value="INV-<?= mt_rand(000000000, 111111111) ?>" maxlength="8" autocomplete="off" required>
                                        <input type="hidden" id="tracking_id" name="tracking_id" value="<?= mt_rand(0000000000000, 1111111111111) ?>" maxlength="12" autocomplete="off" required>
                                        <input type="hidden" name="biaya" value="<?= number_format($biaya_layanan_total, 0, ',', '.') ?>">
                                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                        <input type="hidden" name="status" id="status" value="0">
                                        <input type="hidden" name="layanan_pesanan" id="layanan_pesanan" value="Pick Up">
                                    </div>

                                    <div class="flex mb-5 mt-5">
                                        <div class="mr-auto">Nama Pengirim</div>
                                        <div class="font-medium"><?php echo $this->session->userdata('nama_user') ?></div>
                                        <input type="hidden" id="name" name="name" value="<?= $user->nama_user ?>" class="form-control">
                                    </div>                                     
                                    <div class="flex mb-5">
                                        <div class="mr-auto">Email</div>
                                        <div class="font-medium"><?php echo $this->session->userdata('email') ?></div>
                                        <input type="hidden" id="email" name="email" value="<?= $user->email ?>" class="form-control">
                                    </div>                                     
                                    <div class="flex mb-5">
                                        <label for="post-form-7" class="form-label mr-auto">Nomor HP <small class="text-danger">*</small></label>
                                        <input type="text" id="mobile_phone" name="mobile_phone" value="<?= $user->nomor_hp ?>" class="form-control" autocomplete="off" style="text-align: right;border: none;outline: none;width: 50%;">
                                    </div>
                                </div>
                            </div>
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Caption & Images
                                </div>
                                <div class="mt-5">
                                    <div>
                                    <label for="post-form-7" class="form-label">Caption</label>
                                    <select name="caption" id="caption" data-placeholder="Select Caption" class="tom-select w-full" multiple>
                                        <option value="Plastik">Plastik</option>
                                        <option value="Kertas">Kertas</option>
                                        <option value="Kaca">Kaca</option>
                                        <option value="Elektronik">Barang Elektronik</option>
                                        <option value="Tekstil">Tekstil</option>
                                    </select>
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label">Upload Image</label>
                                        <div class="border-2 border-dashed dark:border-darkmode-600 rounded-md pt-4">
                                            <div class="flex flex-wrap px-4">
                                                <div class="image-fit zoom-in relative mb-5 mr-5 h-24 w-24 cursor-pointer">
                                                    <img class="rounded-md" alt="" id="output">
                                                    <!-- <div class="tooltip cursor-pointer absolute top-0 right-0 -mt-2 -mr-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white absolute top-0 right-0 -mt-2 -mr-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="x" data-lucide="x" class="lucide lucide-x stroke-1.5 h-4 w-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div> -->
                                                </div>
                                            </div>

                                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="upload text-primary mr-1">Upload gambar</span> atau tarik dan taruh disini
                                                <input name="file_gambar" id="file_gambar" type="file" class="w-full h-full top-0 left-0 absolute opacity-0" accept="image/png, image/jpeg, image/jpg" onchange="loadFile(event)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Alamat </div>
                                <div class="mt-5">
                                    <div class="flex mb-5">
                                        <label for="post-form-7" class="form-label mr-auto">Alamat <small class="text-danger">*</small></label>
                                        <textarea id="alamat" name="alamat" class="form-control" autocomplete="off" style="text-align: right;border: none;outline:none; width: 50%;"><?= $user->alamat ?></textarea>
                                    </div>
                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label"> Provinsi <small class="text-danger">*</small></label>
                                        <select name="provinsi" id="provinsi" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label"> Kota <small class="text-danger">*</small></label>
                                        <select name="kota" id="kota" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label"> Kode Pos <small class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Your mobile phone" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Nomor Rekening </div>
                                    <div class="mt-5">
                                        <div class="mb-5">
                                            <label for="post-form-7" class="form-label"> Metode Pembayaran <small class="text-danger">*</small></label>
                                            <select name="payment_method" data-placeholder="Pilih Bank" class="tom-select w-full">
                                                <option value="BRI - 6750527090">Bank BRI 6750527090</option>
                                                <option value="BCA - 6750527080">Bank BCA 6750527080</option>
                                                <option value="MANDIRI - 6750527070">Bank MANDIRI 6750527070</option>
                                                <option value="BNI - 6750527060">Bank BNI 6750527060</option>
                                                <option value="BTN - 6750527050">Bank BTN 6750527060</option>
                                            </select>
                                        </div>
                                        <div class="mb-5">
                                            <label for="post-form-7" class="form-label"> Rekening User <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" id="no_rekening" name="no_rekening" placeholder="Nomor Rekening Anda" autocomplete="off" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="flex mt-5">
                                <a href="<?= site_url('dashboard/detail_cart') ?>" class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500">My Cart</a>
                                <button type="submit" class="btn btn-primary w-32 shadow-md ml-auto">Check Out</button>
                            </div> -->
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
                        <div class="mb-5">
                            <label for="post-form-7" class="form-label"> Rekening Anda <small class="text-danger">*</small></label>
                            <input type="number" class="form-control" id="no_rekening" name="no_rekening" placeholder="Nomor Rekening Anda" autocomplete="off" required>
                        </div>
                        <label for="post-form-7" class="form-label"> Metode Pembayaran <small class="text-danger">*</small></label>
                        <select name="payment_method" data-placeholder="Pilih Bank" class="tom-select w-full">
                            <option value="BRI - 6750527090">Bank BRI 6750527090</option>
                            <option value="BCA - 6750527080">Bank BCA 6750527080</option>
                            <option value="MANDIRI - 6750527070">Bank MANDIRI 6750527070</option>
                            <option value="BNI - 6750527060">Bank BNI 6750527060</option>
                            <option value="BTN - 6750527050">Bank BTN 6750527060</option>
                        </select>
                    </div>
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
                        <div class="mr-auto text-danger"><small>Biaya layanan</small></div>
                        <div class="font-medium text-danger">Rp. <?= number_format($potongan, 0, ',', '.') ?></div>
                    </div>
                    <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="mr-auto font-medium text-base">Anda mendapat</div>
                        <div class="font-medium text-base"><strong>Rp. <?= number_format($biaya_layanan_total, 0, ',', '.') ?>,-</strong></div>
                    </div>
                    <p class="text-base text-info text-sm"><b>Note : </b><br>Akan dikirim ke nomor rekening anda <br>silahkan lengkapi form anda</p>
                </div>
            </div>
            <div class="flex mt-5">
                <a href="<?= site_url('dashboard/detail_cart') ?>" class="btn w-32 border bg-danger text-white">Keranjang Saya</a>
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
</script>

