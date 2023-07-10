<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        List Pesanan Terbayar - Pick Up
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" id="searchInput" placeholder="Cari disini">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <button class="btn btn-sm btn-primary ml-2" id="searchButton">Search</button>

            </div>
            <div class="hidden xl:block mx-auto text-slate-500"></div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2" id="myTable">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Order ID</th>
                        <th class="whitespace-nowrap">Layanan Pesanan</th>
                        <th class="whitespace-nowrap">Rekening/e-Wallet</th>
                        <th class="whitespace-nowrap">Waktu Transaksi</th>
                        <th class="whitespace-nowrap">Pesanan Dikonfirmasi</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Keterangan</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
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
                        <td class="w-40 !py-4"> <a href="<?= site_url('bill/detail/' . $row->order_id) ?>"
                                class="underline decoration-dotted whitespace-nowrap text-center">#<?= $row->order_id ?></a>
                        </td>
                        <td class="w-40">
                            <button class="flex items-center mr-3 text-white btn btn-sm btn-success shadow-md mr-2"><i
                                    data-lucide="package" class="w-4 h-4 mr-1"></i><?= $row->layanan_pesanan ?></button>
                        </td>
                        <td class="w-40">
                            <div class="font-medium text-primary whitespace-nowrap text-center">
                                <?= $row->no_rekening ?></div>
                        </td>
                        <td class="w-40">
                            <div class="font-medium whitespace-nowrap text-center">
                                <?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></div>
                        </td>
                        <td class="w-40">
                            <div class="font-medium whitespace-nowrap text-center">
                                <?= date('d-M-Y H:i', strtotime($row->payment_limit)) ?></div>
                        </td>
                        <td class="w-40">
                            <div class="whitespace-nowrap text-center text-success"> Dibayar </div>
                        </td>
                        <td class="w-40">
                            <a class="btn btn-sm btn-rounded-success text-white flex items-center">Selesai <i
                                    data-lucide="pocket" class="w-4 h-4 mr-2"></i></a>
                        </td>
                    </tr>
                    <?php $counter++; endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
    <h2 class="intro-y text-lg font-medium mt-10">
        List Pesanan Terbayar - Drop Off
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Cari disini">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <button class="btn btn-sm btn-primary ml-2">Search</button>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500"></div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Order ID</th>
                        <th class="whitespace-nowrap">Layanan Pesanan</th>
                        <th class="whitespace-nowrap">No Rekening/Dompet Digital</th>
                        <th class="whitespace-nowrap">Waktu Transaksi</th>
                        <th class="whitespace-nowrap">Pesanan Dikonfirmasi</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Keterangan</th>
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
                            <div class="font-medium whitespace-nowrap text-center"><?= $counter ?></div>
                        </td>
                        <td class="w-40 !py-4"> <a href="<?= site_url('bill/detail/' . $row->order_id) ?>"
                                class="underline decoration-dotted whitespace-nowrap text-center">#<?= $row->order_id ?></a>
                        </td>
                        <td class="w-20">

                            <button class="flex items-center mr-3 text-white btn btn-sm btn-pending shadow-md mr-2"><i
                                    data-lucide="truck" class="w-4 h-4 mr-1"></i><?= $row->layanan_pesanan ?></button>

                        </td>
                        <td class="w-10">
                            <div class="font-medium text-primary whitespace-nowrap text-center">
                                <?= $row->no_rekening ?></div>
                        </td>
                        <td class="w-40">
                            <div class="font-medium whitespace-nowrap text-center">
                                <?= date('d-M-Y H:i', strtotime($row->transaction_time)) ?></div>
                        </td>
                        <td class="w-40">
                            <div class="font-medium whitespace-nowrap text-center">
                                <?= date('d-M-Y H:i', strtotime($row->payment_limit)) ?></div>
                        </td>
                        <td class="w-40">
                            <div class="whitespace-nowrap text-warning text-center"> Antar Sendiri </div>
                        </td>
                        <td class="w-40">
                            <a class="flex items-center btn btn-sm btn-rounded-success text-white">Selesai <i
                                    data-lucide="pocket" class="w-4 h-4 mr-2"></i></a>
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