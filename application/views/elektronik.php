<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Produk List
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
        <!-- BEGIN: Users Layout -->
        <?php if(!$elektronik) { ?>
        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
            <div class="box">
                <div class="p-5">
                    <div
                        class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-white before:to-black/10">
                        <img alt="Midone - HTML Admin Template" class="rounded-md"
                            src="<?= base_url() . '/uploads/produk/coming_soon.png'?>">
                    </div>
                    <div class="text-slate-600 dark:text-slate-500 mt-5">
                        <div class="flex items-center" style="justify-content: space-between;"> Segera Hadir!!
                            <span class="w-8 h-8">
                                <svg class="w-full h-full" width="20" viewBox="0 0 57 57"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)">
                                            <circle cx="5" cy="50" r="5" fill="#2d3748">
                                                <animate values="50;5;50;50" attributeName="cy" begin="0s" dur="2.2s"
                                                    calcMode="linear" repeatCount="indefinite"></animate>
                                                <animate values="5;27;49;5" attributeName="cx" begin="0s" dur="2.2s"
                                                    calcMode="linear" repeatCount="indefinite"></animate>
                                            </circle>
                                            <circle cx="27" cy="5" r="5" fill="#2d3748">
                                                <animate values="5;50;50;5" attributeName="cy" begin="0s" dur="2.2s"
                                                    from="5" to="5" calcMode="linear" repeatCount="indefinite">
                                                </animate>
                                                <animate values="27;49;5;27" attributeName="cx" begin="0s" dur="2.2s"
                                                    from="27" to="27" calcMode="linear" repeatCount="indefinite">
                                                </animate>
                                            </circle>
                                            <circle cx="49" cy="50" r="5" fill="#2d3748">
                                                <animate values="50;50;5;50" attributeName="cy" begin="0s" dur="2.2s"
                                                    calcMode="linear" repeatCount="indefinite"></animate>
                                                <animate values="49;5;27;49" attributeName="cx" from="49" to="49"
                                                    begin="0s" dur="2.2s" calcMode="linear" repeatCount="indefinite">
                                                </animate>
                                            </circle>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>

        <?php foreach ($elektronik as $row) : ?>
        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
            <div class="box">
                <div class="p-5">
                    <div
                        class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                        <img alt="Midone - HTML Admin Template" class="rounded-md"
                            src="<?= base_url() . '/uploads/produk/' . $row->gambar ?>">
                        <span class="absolute top-0 bg-warning text-white text-xs m-5 px-2 py-1 rounded z-10"><i
                                data-lucide="star" class="w-4 h-4 mr-1"></i></span>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a
                                href="<?php echo base_url('dashboard/detail_product/' . $row->id_brg) ?>"
                                class="block font-medium text-base"><?= $row->nama_brg ?></a> <span
                                class="text-white/90 text-xs mt-3"><?= $row->kategori ?></span> </div>
                    </div>
                    <div class="text-slate-600 dark:text-slate-500 mt-5">
                        <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Poin
                            <?= number_format($row->poin, 0, ',', '.') ?> /kg</div>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60">
                    <a class="flex items-center btn btn-sm btn-success text-white mr-3"
                        href="<?php echo base_url('dashboard/detail_product/' . $row->id_brg) ?>"> <i data-lucide="info"
                            class="w-4 h-4 mr-1"></i> Detail </a>
                    <a class="flex items-center btn btn-sm btn-success text-white mr-3"
                        href="<?php echo base_url('dashboard/cart/' . $row->id_brg) ?>"> <i data-lucide="shopping-cart"
                            class="w-4 h-4 mr-1"></i>Keranjang</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <?php } ?>
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
<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="alert-circle" class="w-16 h-16 text-primary mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Please Wait</div>
                    <div class="text-slate-500 mt-2">
                        Anda harus melakukan login terlebih dahulu
                        <br>
                        Untuk melanjutkan proses checkout item.
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-tw-dismiss="modal"
                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <a href="<?= site_url('welcome')?>" class="btn btn-primary w-24">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<?php if (@$_SESSION['sukses']) { ?>
<script>
swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>