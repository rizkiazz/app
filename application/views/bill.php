<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Orders List - Pick Up
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <select class="form-select box ml-2">
                    <option hidden>Status</option>
                    <option>Pending</option>
                    <option>Dibayar</option>
                </select>
                <button class="btn btn-sm btn-primary ml-2">Search</button>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500"></div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Order ID</th>
                        <th class="whitespace-nowrap">Layanan Pesanan</th>
                        <th class="whitespace-nowrap">No Rekening/Dompet Digital</th>
                        <th class="whitespace-nowrap">Waktu Transaksi</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (empty($bill_pickUp)) {
                            echo '
                            <tr>
                                <td colspan="12" class="text-center">
                                    <div> Data Kosong </div>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                    <?php $counter = 1;
                    foreach ($bill_pickUp as $row) : ?>
                    <tr class="intro-x">
                        <td class="w-5">
                            <div class="font-medium whitespace-nowrap"><?= $counter ?></div>
                        </td>
                        <td class="w-40 !py-4"> <a href="<?= site_url('bill/detail/'.$row->order_id) ?>"
                                class="underline decoration-dotted whitespace-nowrap">#<?= $row->order_id ?></a> </td>
                        <td class="w-40">
                            <button class="flex items-center mr-3 text-white btn btn-sm btn-success shadow-md mr-2"><i
                                    data-lucide="package" class="w-4 h-4 mr-1"></i><?= $row->layanan_pesanan ?></button>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium text-primary whitespace-nowrap"><?= $row->no_rekening ?></a>
                        </td>
                        <td class="w-40">
                            <a href=""
                                class="font-medium whitespace-nowrap"><?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></a>
                        </td>
                        <td>
                            <div class="flex items-center whitespace-nowrap text-pending">Pending <i
                                    data-loading-icon="circles" class="w-4 h-4"></i></div>
                        </td>
                        <td>
                            <?php if (empty($row->bukti_pembayaran)){ ?>
                            <a data-tw-toggle="modal"
                                data-tw-target="#upload-confirmation-modal-<?php echo $row->order_id; ?>"
                                class="btn btn-sm btn-rounded-primary">Upload Bukti<i data-lucide="image"
                                    class="w-4 h-4 mr-2"></i></a>
                            <?php } else { ?>
                            <a class="btn btn-sm btn-rounded-success text-white">Verified <i data-lucide="pocket"
                                    class="w-4 h-4 mr-2"></i></a>
                            <?php } ?>
                            <!-- BEGIN: Delete Confirmation Modal -->
                            <div id="upload-confirmation-modal-<?php echo $row->order_id; ?>" class="modal"
                                tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <form action="<?= site_url('bill/upload')?>" method="post"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="order_id" id="order_id"
                                                    value="<?= $row->order_id ?>">
                                                <div class="p-5">
                                                    <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6"
                                                        role="alert">
                                                        <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
                                                        <span>Silahkan Upload Bukti Disini.</span>
                                                        <button type="button" class="btn-close text-white"
                                                            data-tw-dismiss="alert" aria-label="Close"> <i
                                                                data-lucide="x" class="w-4 h-4"></i> </button>
                                                    </div>
                                                    <div class="text-slate-500 mt-2">
                                                        <div
                                                            class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                                            <div
                                                                class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                                <img class="rounded-md" id="output">
                                                                <div
                                                                    class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-primary right-0 top-0 -mr-2 -mt-2">
                                                                    <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                                                </div>
                                                            </div>
                                                            <div class="mx-auto cursor-pointer relative mt-5">
                                                                <button type="button"
                                                                    class="btn btn-primary w-full">Upload Bukti
                                                                    Sampah diambil</button>
                                                                <input name="bukti_pembayaran" id="bukti_pembayaran"
                                                                    type="file"
                                                                    class="w-full h-full top-0 left-0 absolute opacity-0"
                                                                    accept="image/png, image/jpeg, image/jpg, image/gif"
                                                                    oninput="output.src=window.URL.createObjectURL(this.files[0])">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class=" px-5 pb-8 mt-6 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="submit" class="btn btn-danger w-24">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Delete Confirmation Modal -->
                        </td>
                    </tr>
                    <?php $counter++; endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
    <h2 class="intro-y text-lg font-medium mt-10">
        Orders List - Drop Off
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <select class="form-select box ml-2">
                    <option hidden>Status</option>
                    <option>Pending</option>
                    <option>Dibayar</option>
                </select>
                <button class="btn btn-sm btn-primary ml-2">Search</button>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500"></div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Order ID</th>
                        <th class="whitespace-nowrap">Layanan Pesanan</th>
                        <th class="whitespace-nowrap">No Rekening/Dompet Digital</th>
                        <th class="whitespace-nowrap">Waktu Transaksi</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (empty($bill_dropOff)) {
                            echo '
                            <tr>
                                <td colspan="12" class="text-center">
                                    <div> Data Kosong </div>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                    <?php $counter = 1;
                    foreach ($bill_dropOff as $row) : ?>
                    <tr class="intro-x">
                        <td class="w-5">
                            <div class="font-medium whitespace-nowrap"><?= $counter ?></div>
                        </td>
                        <td class="w-40 !py-4"> <a href="<?= site_url('bill/detail/'.$row->order_id) ?>"
                                class="underline decoration-dotted whitespace-nowrap">#<?= $row->order_id ?></a> </td>
                        <td class="w-40">
                            <button class="flex items-center mr-3 text-white btn btn-sm btn-pending shadow-md mr-2"><i
                                    data-lucide="truck" class="w-4 h-4 mr-1"></i><?= $row->layanan_pesanan ?></button>
                        </td>
                        <td class="w-40">
                            <div class="font-medium text-primary whitespace-nowrap"><?= $row->no_rekening ?></div>
                        </td>
                        <td class="w-40">
                            <div class="font-medium whitespace-nowrap">
                                <?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></div>
                        </td>
                        <td>
                            <?php if ($row->status == "0"){ ?>
                            <div class="flex items-center whitespace-nowrap text-pending">Pending <i
                                    data-loading-icon="circles" class="w-4 h-4"></i></div>
                            <?php } else if ($row->status == "1"){ ?>
                            <div class="flex items-center whitespace-nowrap text-success"> Dibayar </div>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if (empty($row->bukti_pembayaran)){ ?>
                            <a data-tw-toggle="modal"
                                data-tw-target="#upload-confirmation-modal-<?php echo $row->order_id; ?>"
                                class="btn btn-sm btn-rounded-primary">Upload Bukti<i data-lucide="image"
                                    class="w-4 h-4 mr-2"></i></a>
                            <?php } else { ?>
                            <a class="btn btn-sm btn-rounded-success text-white">Verified <i data-lucide="pocket"
                                    class="w-4 h-4 mr-2"></i></a>
                            <?php } ?>
                            <!-- BEGIN: Delete Confirmation Modal -->
                            <div id="upload-confirmation-modal-<?php echo $row->order_id; ?>" class="modal"
                                tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <form action="<?= site_url('bill/upload')?>" method="post"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="order_id" id="order_id"
                                                    value="<?= $row->order_id ?>">
                                                <div class="p-5">
                                                    <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6"
                                                        role="alert">
                                                        <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
                                                        <span>Silahkan Upload Bukti Disini.</span>
                                                        <button type="button" class="btn-close text-white"
                                                            data-tw-dismiss="alert" aria-label="Close"> <i
                                                                data-lucide="x" class="w-4 h-4"></i> </button>
                                                    </div>
                                                    <div class="text-slate-500 mt-2">
                                                        <div
                                                            class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                                            <div
                                                                class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                                <img class="rounded-md" id="output">
                                                                <div
                                                                    class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-primary right-0 top-0 -mr-2 -mt-2">
                                                                    <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                                                </div>
                                                            </div>
                                                            <div class="mx-auto cursor-pointer relative mt-5">
                                                                <button type="button"
                                                                    class="btn btn-primary w-full">Bukti Sampah
                                                                    diserahkan Mitra</button>
                                                                <input name="bukti_pembayaran" id="bukti_pembayaran"
                                                                    type="file"
                                                                    class="w-full h-full top-0 left-0 absolute opacity-0"
                                                                    accept="image/png, image/jpeg, image/jpg, image/gif"
                                                                    oninput="output.src=window.URL.createObjectURL(this.files[0])">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class=" px-5 pb-8 mt-6 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="submit" class="btn btn-danger w-24">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Delete Confirmation Modal -->
                        </td>
                    </tr>
                    <?php $counter++; endforeach; ?>
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
</div>
<?php if (@$_SESSION['sukses']) { ?>
<script>
swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>