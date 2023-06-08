   <div class="content">
       <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
           <h2 class="text-lg font-medium mr-auto">
               Detail Order
           </h2>
           <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
               <a href="<?= site_url('order') ?>" class="btn btn-danger shadow-md mr-2"> Riwayat Pesanan</a>
           </div>
       </div>
       <!-- BEGIN: Transaction Details -->
       <div class="intro-y grid grid-cols-12 gap-5 mt-5">
           <div class="col-span-6 lg:col-span-6 2xl:col-span-6">
               <div class="box p-5 rounded-md">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Transaction Details</div>
                   </div>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Order ID</b><span class="flex items-center ml-auto bg-primary/20 text-primary rounded"><a href="" class="underline decoration-dotted ml-1">#<?= $invoice->order_id ?></a></span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i><b>Metode Pembayaran&nbsp;</b><span class="flex items-center ml-auto">Direct Bank Transfer</span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i><b>Tanggal Pembelian&nbsp;</b><span class="flex items-center ml-auto"><?= date('l d-M-Y H:i:s', strtotime($invoice->transaction_time)) ?></span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Status Transaksi</b><span class="flex items-center ml-auto">
                       <?php if ($invoice->status == "0") { ?>
                           <span class="bg-warning/20 text-warning rounded px-2 ml-1">Pending(Tertunda)</span>
                       <?php } else if ($invoice->status == "1") { ?>
                           <span class="bg-success/20 text-success rounded px-2 ml-1">Paid(Dibayar)</span>
                       <?php } ?>
                       </span>
                   </div>
               </div>
            </div>
            <div class="col-span-6 lg:col-span-6 2xl:col-span-6">
               <div class="box p-5 rounded-md">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Detail Pembeli</div>
                   </div>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nama Pelanggan</b><span class="flex items-center ml-auto"><a href="" class="underline decoration-dotted ml-1"><?= $invoice->name ?></a></span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nomor Telepon</b><span class="flex items-center ml-auto"><?= $invoice->mobile_phone ?></span></div>
               </div>
            </div>
           <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
               <div class="box p-5 rounded-md mt-5">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Informasi Pengiriman</div>
                       <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="map-pin" class="w-4 h-4 mr-2"></i> Tracking Info </a>
                   </div>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Courier</b><span class="flex items-center ml-auto"> SI CEPAT</span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Tracking Order</b><span class="flex items-center ml-auto"> <?= $invoice->tracking_id ?> <i data-lucide="copy" class="w-4 h-4 text-slate-500 ml-2"></i></span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Alamat</b><span class="flex items-center ml-auto"> <small><?= $invoice->alamat ?>, <?= $invoice->city ?>.</small></span></div>
               </div>
           </div>
           <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
               <div class="box p-5 rounded-md">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Order Details</div>
                   </div>
                   <div class="overflow-auto lg:overflow-visible -mt-3">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th class="whitespace-nowrap !py-5">Produk Item</th>
                                   <th class="whitespace-nowrap text-right">Harga Satuan</th>
                                   <th class="whitespace-nowrap text-right">Jumlah</th>
                                   <th class="whitespace-nowrap text-right">Sub Total</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php $total = 0;
                                foreach ($pesanan as $row) :
                                    $subtotal = $row->jumlah * $row->harga;
                                    $total += $subtotal;
                                ?>
                                   <tr>
                                       <td class="!py-4">
                                           <div class="flex items-center">
                                               <a href="" class="font-medium whitespace-nowrap ml-4"><?= $row->nama_brg ?></a>
                                           </div>
                                       </td>
                                       <td class="text-right">Rp. <?= number_format($row->harga, 0, ',', '.') ?></td>
                                       <td class="text-right"><?= number_format($row->jumlah, 0, ',', '.') ?></td>
                                       <td class="text-right">Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
                                   </tr>
                               <?php endforeach; ?>

                               <tr>
                                   <td colspan="3" align="right"></td>
                                   <td align="right"><b>Rp. <?= number_format($total, 0, ',', '.') ?></b></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
       <!-- END: Transaction Details -->
   </div>