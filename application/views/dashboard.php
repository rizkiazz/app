<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Product List
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">


            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout
        <?php foreach ($product as $row) : ?>
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="<?= base_url() . '/uploads/' . $row->gambar ?>">
                            <span class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href="" class="block font-medium text-base"><?= $row->nama_brg ?></a> <span class="text-white/90 text-xs mt-3"><?= $row->kategori ?></span> </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Price: IDR <?= number_format($row->harga, 0, ',', '.') ?> </div>
                            <div class="flex items-center mt-2"> <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Remaining Stock: <?= number_format($row->stok, 0, ',', '.') ?> </div>
                            <div class="flex items-center mt-2"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Status: Active </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60">
                         <a class="flex items-center btn btn-sm btn-success text-white mr-3" href="<?php echo base_url('dashboard/detail_product/' . $row->id_brg) ?>" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="info" class="w-4 h-4 mr-1"></i> Detail </a>
                        <a class="flex items-center btn btn-sm btn-primary mr-3" href="<?= site_url('dashboard/cart/' . $row->id_brg) ?>"> <i data-lucide="shopping-cart" class="w-4 h-4 mr-1"></i> Add to Cart </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> -->

            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="https://1.bp.blogspot.com/-IeHQKWcp0vo/XRxf5ZeVxMI/AAAAAAAABHw/pF7mrTdF8l8p9rG-dXFy38pB0zco4nCmgCLcBGAs/w1200-h630-p-k-no-nu/plastik%2Bbotol%2Brongsok%2Bbekas.PNG">
                            <span class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href="" class="block font-medium text-base">Botol Plastik <span class="text-white/90 text-xs mt-3"><Botol</span> </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Harga: IDR Rp. 5000/kg </div>
                            <div class="flex items-center mt-2"> <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Remaining Stock: <?= number_format($row->stok, 0, ',', '.') ?> </div>
                            <div class="flex items-center mt-2"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Status: Active </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60">
                         <a class="flex items-center btn btn-sm btn-success text-white mr-3" href="<?php echo base_url('dashboard/detail_product/' . $row->id_brg) ?>" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="info" class="w-4 h-4 mr-1"></i> Detail </a>
                        <a class="flex items-center btn btn-sm btn-primary mr-3" href="<?= site_url('dashboard/cart/' . $row->id_brg) ?>"> <i data-lucide="shopping-cart" class="w-4 h-4 mr-1"></i> Jual </a>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="data:image/jpeg;base64,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">
                            <span class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href="" class="block font-medium text-base">Kardus <span class="text-white/90 text-xs mt-3"><Botol</span> </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Harga: IDR Rp. 5000/kg </div>
                            <div class="flex items-center mt-2"> <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Remaining Stock: <?= number_format($row->stok, 0, ',', '.') ?> </div>
                            <div class="flex items-center mt-2"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Status: Active </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60">
                         <a class="flex items-center btn btn-sm btn-success text-white mr-3" href="<?php echo base_url('dashboard/detail_product/' . $row->id_brg) ?>" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="info" class="w-4 h-4 mr-1"></i> Detail </a>
                        <a class="flex items-center btn btn-sm btn-primary mr-3" href="<?= site_url('dashboard/cart/' . $row->id_brg) ?>"> <i data-lucide="shopping-cart" class="w-4 h-4 mr-1"></i> Jual </a>
                    </div>
                </div>
            </div>

        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <!-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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