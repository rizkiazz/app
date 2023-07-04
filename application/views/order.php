    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Orders List
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
                <div class="flex w-full sm:w-auto">
                    <div class="w-48 relative text-slate-500">
                        <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                    </div>
                </div>
                <div class="hidden xl:block mx-auto text-slate-500"></div>

            </div>
            <h2 class="intro-y text-lg font-medium mt-5">
                Pick Up List</h2>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">No</th>
                            <th class="whitespace-nowrap">Order ID</th>
                            <th class="whitespace-nowrap">Nama</th>
                            <th class="text-center whitespace-nowrap">Alamat Pengiriman</th>
                            <th class="whitespace-nowrap">Layanan Pesanan</th>
                            <th class="whitespace-nowrap">Status</th>
                            <th class="whitespace-nowrap">Waktu Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (empty($pickOff)) {
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
                        foreach ($pickOff as $row) : ?>
                        <tr class="intro-x">
                            <td class="w-5">
                                <div class="font-medium whitespace-nowrap"><?= $counter ?></div>
                            </td>
                            <td class="w-40 !py-4"> <a href="<?= site_url('order/detail/'.$row->order_id) ?>"
                                    class="underline decoration-dotted whitespace-nowrap">#<?= $row->order_id ?></a>
                            </td>
                            <td class="w-10">
                                <a href="" class="font-medium whitespace-nowrap"><?= $row->name ?></a>
                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap "> <?= $row->alamat ?>,
                                    <?= $row->city ?>, <?= $row->kode_pos ?> </div>
                            </td>
                            <td><button
                                    class="flex items-center mr-3 text-white btn btn-sm btn-success shadow-md mr-2"><i
                                        data-lucide="package" class="w-4 h-4 mr-1"></i> <?= $row->layanan_pesanan ?>
                                </button>
                            </td>
                            <td>
                                <?php if ($row->status == "0"){ ?>
                                <div
                                    class="btn btn-sm btn-outline-rounded-info flex items-center whitespace-nowrap text-pending">
                                    Proses &nbsp; &nbsp;<i data-loading-icon="circles" class="w-4 h-4"></i></div>
                                <?php } else if ($row->status == "1"){ ?>
                                <div
                                    class="btn btn-sm btn-outline-rounded flex items-center whitespace-nowrap text-success">
                                    Selesai &nbsp; &nbsp;<i data-loading-icon="hearts" class="w-4 h-4"></i></div>
                                <?php } ?>
                            </td>
                            <td>
                                <div class="text-slate-500 whitespace-nowrap mt-0.5">
                                    <?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></div>
                            </td>
                        </tr>
                        <?php $counter++; endforeach; ?>
                    </tbody>
                </table>
            </div>
            <h2 class="intro-y text-lg font-medium mt-5">
                Drop Off List
            </h2>
            <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">NO</th>
                            <th class="whitespace-nowrap">Order ID</th>
                            <th class="whitespace-nowrap">Nama</th>
                            <th class="text-center whitespace-nowrap">Tujuan Pengiriman</th>
                            <th class="whitespace-nowrap">Layanan Pesanan</th>
                            <th class="whitespace-nowrap">Status</th>
                            <th class="whitespace-nowrap">Waktu Order</th>
                        </tr>
                    </thead>
                    <hr>
                    <tbody>
                        <?php
                            if (empty($dropOff)) {
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
                        foreach ($dropOff as $row) : ?>
                        <tr class="intro-x">
                            <td class="w-5">
                                <div class="font-medium whitespace-nowrap"><?= $counter ?></div>
                            </td>
                            <td class="w-40 !py-4"> <a href="<?= site_url('order/detail/'.$row->order_id) ?>"
                                    class="underline decoration-dotted whitespace-nowrap">#<?= $row->order_id ?></a>
                            </td>
                            <td class="w-10">
                                <div class="font-medium whitespace-nowrap"><?= $row->name ?></div>
                            </td>
                            <td class="text-center">
                                <div class="font-medium whitespace-nowrap"><?= $row->tujuan ?></div>
                            </td>
                            <td>
                                <button
                                    class="flex items-center mr-3 text-white btn btn-sm btn-pending shadow-md mr-2"><i
                                        data-lucide="package" class="w-4 h-4 mr-1"></i> <?= $row->layanan_pesanan ?>
                                </button>
                            </td>
                            <td>
                                <?php if ($row->status == "0"){ ?>
                                <div
                                    class="btn btn-sm btn-outline-rounded-info flex items-center whitespace-nowrap text-pending">
                                    Proses &nbsp; &nbsp;<i data-loading-icon="circles" class="w-4 h-4"></i></div>
                                <?php } else if ($row->status == "1"){ ?>
                                <div
                                    class="btn btn-sm btn-outline-rounded flex items-center whitespace-nowrap text-success">
                                    Selesai &nbsp; &nbsp;<i data-loading-icon="hearts" class="w-4 h-4"></i></div>
                                <?php } ?>
                            </td>
                            <td>
                                <div class="text-slate-500 whitespace-nowrap mt-0.5">
                                    <?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></div>
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
                            <button type="button" data-tw-dismiss="modal"
                                class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-danger w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Delete Confirmation Modal -->
    </div>