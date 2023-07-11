  <div class="content">
      <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
          <h2 class="text-lg font-medium mr-auto">
              Details Invoice
          </h2>
          <?php if ($invoice->status == "0"){ ?>
          <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
              <a href="<?= site_url('bill')?>" class="btn btn-danger shadow-md mr-2">Kembali</a>
          </div>
          <?php } else if ($invoice->status == "1"){ ?>
          <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
              <a href="<?= site_url('pay')?>" class="btn btn-danger shadow-md mr-2">Kembali</a>
          </div> <?php } ?>
          <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
              <a href="<?= site_url('order/detail/'.$invoice->order_id) ?>"
                  class="btn btn-primary shadow-md mr-2">Detail
                  Order</a>
          </div>
      </div>
      <!-- BEGIN: Invoice -->
      <div class="intro-y box overflow-hidden mt-5">
          <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
              <div class="px-5 py-10 sm:px-20 sm:py-20">
                  <div class="text-primary font-semibold text-3xl">INVOICE</div>
                  <div class="mt-2"> Receipt <span class="font-medium">#<?= $invoice->order_id ?></span> </div>
                  <div class="mt-1"><?= date('l d M Y H:i', strtotime($invoice->transaction_time)) ?></div>
              </div>
              <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                  <div>
                      <div class="text-base text-slate-500">Detail Client</div>
                      <div class="text-lg font-medium text-primary mt-2"><?= $invoice->name ?></div>
                      <div class="mt-1"><?= $invoice->email ?></div>
                      <div class="mt-1"><?= $invoice->alamat ?>, <?= $invoice->city ?>, <?= $invoice->kode_pos ?>.</div>
                  </div>
                  <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                      <div class="text-base text-slate-500">Payment to</div>
                      <div class="text-lg font-medium text-primary mt-2">EasyPickTrash</div>
                      <div class="mt-1">easypicktrash@gmail.co.id</div>
                  </div>
              </div>
          </div>
          <div class="px-5 sm:px-16 py-10 sm:py-20">
              <div class="overflow-x-auto">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th class="whitespace-nowrap !py-5">Produk Item</th>
                              <th class="whitespace-nowrap !py-5">Layanan Pesanan</th>
                              <th class="whitespace-nowrap text-right">Poin</th>
                              <th class="whitespace-nowrap text-right">Harga</th>
                              <th class="whitespace-nowrap text-right">Jumlah</th>
                              <th class="whitespace-nowrap text-right">Total Poin</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $total = 0;
                        foreach ($pesanan as $row) :
                            $subtotal = $row->jumlah * $row->poin; 
                            $total += $subtotal;
                            ?>
                          <tr>
                              <td class="!py-4">
                                  <div class="flex items-center">
                                      <a href="" class="font-medium whitespace-nowrap ml-4"><?= $row->nama_brg?></a>
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
                              <td class="text-right">Rp <?= number_format($row->harga, 0, ',', '.') ?> /kg,-</td>
                              <td class="text-right"><?= number_format($row->jumlah, 0, ',', '.') ?></td>
                              <td class="text-right"><?= number_format($subtotal, 0, ',', '.') ?> poin</td>
                          </tr>

                          <?php endforeach; ?>
                          <tr>
                              <td class="text-right" colspan="5"><b>Poin yang didapatkan</b></td>
                              <td class="text-right" colspan="6"><?= number_format($total, 0, ',', '.') ?> poin</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
              <div class="text-center sm:text-left mt-10 sm:mt-0">
                  <div class="text-base text-slate-500">Rekening/e-Wallet</div>
                  <div class="text-lg text-primary font-medium mt-2"><?= $invoice->no_rekening ?></div>
                  <div>
                      <?php if ($invoice->status == "0"){ ?>
                      <img class="mt-2" src="<?= site_url('asset') ?>/pending.jpg" width="120">
                      <?php } else if ($invoice->status == "1"){ ?>
                      <img src="<?= site_url('asset') ?>/paid.webp" width="120">
                      <?php } ?>
                  </div>
              </div>
              <div class="text-center sm:text-right sm:ml-auto">
                  <div class="text-base text-slate-500">Pendapatan Total</div>
                  <div class="text-xl text-primary font-medium mt-2">Rp. <?= $invoice->pendapatan ?></div>
                  <div class="mt-1 text-danger">*sudah termasuk biaya layanan</div>
              </div>
          </div>
      </div>
      <!-- END: Invoice -->
  </div>