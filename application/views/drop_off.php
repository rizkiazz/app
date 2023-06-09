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
                        <a href="<?= site_url('dashboard') ?>" class="btn btn-danger shadow-md mr-2"> Kembali Ke Dashboard</a>
                    </div>
                </div>
            </div>
        <?php }else { ?>

            <?php $grand_total = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $item) {
                    $grand_total = $grand_total + $item['subtotal'];
                    $qty = $item['qty'];
                    $item_poin = $grand_total / $item['qty'];
                }
            } ?>
            <div class="intro-y col-span-12 lg:col-span-8">
                <div class="alert alert-primary show mb-2" role="alert">Jumlah Poin Yang Didapatkan : <b><?= number_format($grand_total, 0, ',', '.') ?> poin,-</b></div>
                <div class="post intro-y overflow-hidden box mt-5">
                    <ul class="post__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800" role="tablist">
                        <li class="nav-item">
                            <button title="Fill in the article content" data-tw-toggle="tab" data-tw-target="#content" class="nav-link tooltip w-full sm:w-200 py-4 active" id="content-tab" role="tab" aria-controls="content" aria-selected="true"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Detail Pengiriman </button>
                        </li>
                    </ul>
                    <div class="post__content tab-content">
                        <form id="payment-form" action="<?= site_url('dashboard/drop_off_proccess') ?>" method="post" enctype="multipart/form-data">
                            <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Info Pelanggan </div>
                                    <div class="mt-5">
                                        <div class="mb-5">
                                            <label for="post-form-7" class="form-label"> Nama <small class="text-danger">*</small></label>
                                            <input type="hidden" id="order_id" name="order_id" value="INV-<?= mt_rand(000000000, 111111111) ?>" maxlength="8" autocomplete="off" required>
                                            <input type="hidden" id="tracking_id" name="tracking_id" value="<?= mt_rand(0000000000000, 1111111111111) ?>" maxlength="12" autocomplete="off" required>
                                            <input type="hidden" name="payment_method" value="Antar Sendiri">
                                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                            <input type="hidden" name="status" id="status" value="0">
                                            <input type="hidden" name="biaya" id="biaya" value="0 (Antar Sendiri)">
                                            <input type="hidden" name="layanan_pesanan" id="layanan_pesanan" value="Drop Off">
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                                        </div>
    
                                        <div class="mb-5">
                                            <label for="post-form-7" class="form-label"> Email <small class="text-danger">*</small></label>
                                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $this->session->userdata('email') ?>" autocomplete="off" readonly>
                                        </div>
    
                                        <div class="mb-5">
                                            <label for="post-form-7" class="form-label">Nomor HP <small class="text-danger">*</small></label>
                                            <input type="text" id="nomor_hp" name="nomor_hp" value="<?php echo $this->session->userdata('nomor_hp') ?>" class="form-control" autocomplete="off">
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
                                        <select data-placeholder="Select Caption" class="tom-select w-full" multiple>
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
                                        <div class="mb-5">
                                            <label for="post-form-7" class="form-label"> Alamat <small class="text-danger">*</small></label>
                                            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat anda" autocomplete="off" required>
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
                                <div class="flex mt-5">
                                    <a href="<?= site_url('dashboard/detail_cart') ?>" class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500">My Cart</a>
                                    <button type="submit" class="btn btn-primary w-32 shadow-md ml-auto">Check Out</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Post Content -->
            <!-- BEGIN: Post Info -->
            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y pr-1">
                    <div class="alert alert-primary show mb-2" role="alert"> Informasi Poin </div>
                </div>
                <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
    
                    <div class="box p-5 mt-5">
                        <div class="flex">
                            <div class="mr-auto">Poin/kg</div>
                            <div class="font-medium"><?= number_format($item_poin, 0, ',', '.') ?></div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Berat barang</div>
                            <div class="font-medium text-danger"><?= number_format($qty, 0, ',', '.') ?></div>
                        </div>
                        <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                            <div class="mr-auto font-medium text-base">Poin yang didapat</div>
                            <div class="font-medium text-base"><strong><?= number_format($this->cart->total(), 0, ',', '.') ?> poin,-</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Post Info -->
            
        <<?php }?>
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