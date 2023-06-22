    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Daftar Permintaan Order
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
                <div class="flex w-full sm:w-auto">
                    <div class="w-48 relative text-slate-500">
                        <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                    </div>
                    <select class="form-select box ml-2">
                        <option>Status</option>
                        <option>Waiting Payment</option>
                        <option>Confirmed</option>
                        <option>Packing</option>
                        <option>Delivered</option>
                        <option>Completed</option>
                    </select>
                </div>
                <div class="hidden xl:block mx-auto text-slate-500"></div>
               
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Order ID</th>
                            <th class="whitespace-nowrap">Nama Pelanggan</th>
                            <th class="whitespace-nowrap">Waktu Transaksi</th>
                            <th class="whitespace-nowrap">Bukti Pembayaran</th>
                            <th class="whitespace-nowrap">Status</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoice as $row) : ?>

                            <tr class="intro-x">
                                <td class="w-40 !py-4"> <a href="<?= site_url('admin/invoice/detail/'.$row->order_id) ?>" class="underline decoration-dotted whitespace-nowrap">#<?= $row->order_id ?></a> </td>
                                <td class="w-40">
                                    <a href="" class="font-medium whitespace-nowrap"><?= $row->name ?></a>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5"><?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></div>
                                </td>
                                <td><?php if (empty($row->bukti_pembayaran)){ ?>
                                       <div class="flex items-center whitespace-nowrap text-danger"> <i data-lucide="alert-circle" class="w-4 h-4 mr-2"></i>Belum upload bukti </div>
                                   <?php } else { ?>
                                    <div class="flex items-center whitespace-nowrap text-primary"> <i data-lucide="link" class="w-4 h-4 mr-2"></i>
                                        <a data-tw-toggle="modal" data-tw-target="#show-upload-bukti">Lihat Bukti</a>
                                        <i data-lucide="image" class="w-4 h-4 mr-2"></i>
                                    </div>
                                    <?php } ?>
                                </td>
                                <td>
                                  <?php if ($row->status == "0"){ ?>
                                    <div class="flex items-center whitespace-nowrap text-pending"><b>PENDING</b> </div>
                                <?php } else if ($row->status == "1"){ ?>
                                    <div class="flex items-center whitespace-nowrap text-success"> <b>Terbayar</b> </div>
                                <?php } ?>
                            </td>
                            <td class="table-report__action"><center>
                                <?php if ($row->status == "0"){ ?>
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-primary whitespace-nowrap" href="<?= site_url('admin/invoice/confirm/'. $row->order_id) ?>"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Ubah Status </a>
                                    </div>
                                <?php } else if ($row->status == "1"){ ?>
                                    <button class="btn btn-sm btn-success text-white">Pembayaran Berhasil</button>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
            <!--  <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                        </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                        </li>
                    </ul>
                </nav>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div> -->
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">
                            Do you really want to delete these records? 
                            <br>
                            This process cannot be undone.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="show-upload-bukti" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5">
                        <div class="text-slate-500 mt-2">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto"> 
                                    <img class="rounded-md" id="output">
                                    <div class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-primary right-0 top-0 -mr-2 -mt-2"> <i data-lucide="alert-circle" class="w-4 h-4"></i> </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <?php if ($row->layanan_pesanan == "Pick Up") { ?>
                                        <button type="button" class="btn btn-primary w-full">Upload Bukti Pembayaran</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-primary w-full">Upload Bukti Antar</button>
                                    <?php } ?>
                                    <input name="bukti_pembayaran" id="bukti_pembayaran" type="file" class="w-full h-full top-0 left-0 absolute opacity-0" accept="image/png, image/jpeg, image/jpg, image/gif" onchange="loadFile(event)">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                    <div class="px-5 pb-8 mt-6 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-danger w-24">Kirim</button>
                    </div>
\                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>