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
                       <div class="font-medium text-base truncate">Detail Order</div>
                   </div>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                       <b>Order ID</b><span class="flex items-center ml-auto bg-primary/20 text-primary rounded"><a
                               href="" class="underline decoration-dotted ml-1">#<?= $invoice->order_id ?></a></span>
                   </div>
                   <div class="flex items-center mt-3"> <i data-lucide="clipboard"
                           class="w-4 h-4 text-slate-500 mr-2"></i><b>Metode Pembayaran&nbsp;</b><span
                           class="flex items-center ml-auto"><?= $invoice->payment_method ?></span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar"
                           class="w-4 h-4 text-slate-500 mr-2"></i><b>Tanggal Transaksi&nbsp;</b><span
                           class="flex items-center ml-auto"><?= date('l d-M-Y H:i:s', strtotime($invoice->transaction_time)) ?></span>
                   </div>
                   <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i>
                       <b>Status Transaksi</b><span class="flex items-center ml-auto">
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
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                       <b>Nama Pelanggan</b><span class="flex items-center ml-auto"><a href=""
                               class="underline decoration-dotted ml-1"><?= $invoice->name ?></a></span>
                   </div>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar"
                           class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nomor Telepon</b><span
                           class="flex items-center ml-auto"><?= $invoice->mobile_phone ?></span>
                   </div>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar"
                           class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nomor Rekening/Dompet Digital</b><span
                           class="flex items-center ml-auto"><?= $invoice->no_rekening ?></span>
                   </div>
               </div>
           </div>
           <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
               <div class="box p-5 rounded-md mt-5">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Informasi Pengiriman</div>
                       <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="map-pin"
                               class="w-4 h-4 mr-2"></i> Tracking Info </a>
                   </div>
                   <?php if($invoice->layanan_pesanan == "Pick Up") { ?>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                       <b>Courier</b><span class="flex items-center ml-auto">Kurir EasyPickTrash</span>
                   </div>
                   <?php }else {?>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                       <b>Lokasi Kantor Center EasyPickTrash</b><span
                           class="flex items-center ml-auto"><?= $invoice->tujuan ?></span>
                   </div>
                   <div class="flex items-center mt-3"> <i data-lucide="clipboard"
                           class="w-4 h-4 text-slate-500 mr-2"></i>
                       <b>Kota</b><span class="flex items-center ml-auto"><?= $invoice->city ?>.</span>
                   </div>
                   <?php }?>
                   <div class="flex items-center mt-3"> <i data-lucide="calendar"
                           class="w-4 h-4 text-slate-500 mr-2"></i> <b>Tracking Order</b><span
                           class="flex items-center ml-auto"> <?= $invoice->tracking_id ?> <i data-lucide="copy"
                               class="w-4 h-4 text-slate-500 ml-2"></i></span></div>
                   <div class="flex items-center mt-3"> <i data-lucide="map-pin"
                           class="w-4 h-4 text-slate-500 mr-2"></i> <b>Alamat Pelanggan</b><span
                           class="flex items-center ml-auto"><?= $invoice->alamat ?></span></div>
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
                                   <th class="whitespace-nowrap !py-5">Layanan Pesanan</th>
                                   <th class="whitespace-nowrap text-right">Poin</th>
                                   <th class="whitespace-nowrap text-right">Harga</th>
                                   <th class="whitespace-nowrap text-right">Jumlah</th>
                                   <th class="whitespace-nowrap text-right">Total poin</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php if(empty($pesanan)) { ?>
                               <tr>
                                   <td colspan="12" class="text-center">
                                       <div> Data Kosong </div>
                                   </td>
                               </tr>
                               <?php } else { ?>
                               <?php $total = 0;
                                 foreach ($pesanan as $row) :
                                     $subtotal = $row->jumlah * $row->poin;
                                     $total += $subtotal;
                                 ?>
                               <tr>
                                   <td class="!py-4">
                                       <div class="flex items-center">
                                           <a href=""
                                               class="font-medium whitespace-nowrap ml-4"><?= $row->nama_brg ?></a>
                                       </div>
                                   </td>
                                   <td>
                                       <?php
                                             if ($invoice->layanan_pesanan == "Pick Up") {
                                             echo '<button class="flex items-center mr-3 text-white btn btn-sm btn-success shadow-md mr-2"><i data-lucide="package" class="w-4 h-4 mr-1"></i>' . $invoice->layanan_pesanan . '</button>';
                                             } else {
                                             echo '<button class="flex items-center mr-3 text-white btn btn-sm btn-pending shadow-md mr-2"><i data-lucide="package" class="w-4 h-4 mr-1"></i>' . $invoice->layanan_pesanan . '</button>';
                                             }
                                         ?>
                                   </td>
                                   <td class="text-right"><?= number_format($row->poin, 0, ',', '.') ?> poin</td>
                                   <td class="text-right">Rp. <?= number_format($row->harga, 0, ',', '.') ?> /kg,-</td>
                                   <td class="text-right"><?= number_format($row->jumlah, 0, ',', '.') ?></td>
                                   <td class="text-right"><?= number_format($subtotal, 0, ',', '.') ?> poin</td>
                               </tr>
                               <?php endforeach; ?>

                               <tr>
                                   <td colspan="5" align="right">Poin yang didapat</td>
                                   <td align="right"><b><?= number_format($total, 0, ',', '.') ?> poin</b></td>
                               </tr>
                               <?php }?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
           <div class="col-span-6 lg:col-span-6 2xl:col-span-6">
               <div class="box p-5 rounded-md">
                   <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                       <div
                           class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                           <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Gambar di Upload
                       </div>
                       <div class="mt-3">
                           <?php if(empty($invoice->file_gambar)) {?>
                           <h2 class="text-center mt-5 text-xl">belum upload file</h2>
                           <?php } else {?>
                           <div class="image-fit zoom-in relative mb-5 mr-5 h-64 w-5/5 cursor-pointer">
                               <img class="rounded-md" alt="" data-action="zoom"
                                   src="<?= base_url() . '/uploads/order/' . $invoice->file_gambar ?>">
                           </div>
                           <?php }?>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-span-6 lg:col-span-6 2xl:col-span-6">
               <div class="box p-5 rounded-md">
                   <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                       <?php if($invoice->layanan_pesanan == "Pick Up") {?>
                       <div
                           class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                           <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Bukti Sampah Sudah diambil
                       </div>
                       <?php } else {?>
                       <div
                           class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                           <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Bukti Sampah diserahkan Kantor
                           Center EasyPickTrash
                       </div>
                       <?php }?>
                       <div class="mt-3">
                           <?php if(empty($invoice->bukti_pembayaran)) {?>
                           <h2 class="text-center mt-5 text-xl">belum upload file</h2>
                           <?php } else {?>
                           <div class="image-fit zoom-in relative mb-5 mr-5 h-64 w-5/5 cursor-pointer">
                               <img class="rounded-md" alt="" data-action="zoom"
                                   src="<?= base_url() . '/uploads/bukti_pembayaran/' . $invoice->bukti_pembayaran ?>">
                           </div>
                       </div>
                       <?php }?>
                   </div>
               </div>
           </div>
       </div>
       <!-- END: Transaction Details -->
   </div>