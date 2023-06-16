<div class="content">
    <div class="intro-y box px-3 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-3 -mx-3">
            <div class="flex flex-1 px-0 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <?php foreach ($profile as $row) : ?>
                    <img class="rounded-full" src="<?= base_url() . '/uploads/avatar/' . $row->avatar ?>">
                    <?php endforeach; ?>
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-white rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg> </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg"><?php echo $this->session->userdata('nama_user') ?></div>
                    <div class="text-slate-500">EasyPickTrash Customer</div>
                </div>
                <div class="ml-8">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Poin</div>
                    <?php foreach ($point as $row) : ?>

                    <div class="text-slate-500"><?= number_format($row->harga, 0, ',', '.') ?></div>

                    <?php endforeach; ?>    

                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: General Report -->
    <!-- <div class="col-span-12 mt-8">
        <div class="intro-y flex h-10 items-center">
            <h2 class="mr-5 truncate text-lg font-medium">Tukar Poin</h2>
        </div>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-lucide="shopping-cart" width="24" height="24" class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            <div class="ml-auto">
                                <div title="33% Higher than last month" class="tooltip cursor-pointer flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">
                                    33%
                                    <i data-lucide="chevron-up" width="24" height="24" class="stroke-1.5 ml-0.5 h-4 w-4 ml-0.5 h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-3xl font-medium leading-8">4.710</div>
                        <div class="mt-1 text-base text-slate-500">DANA</div>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-lucide="credit-card" width="24" height="24" class="stroke-1.5 h-[28px] w-[28px] text-pending h-[28px] w-[28px] text-pending"></i>
                            <div class="ml-auto">
                                <div title="2% Lower than last month" class="tooltip cursor-pointer flex cursor-pointer items-center rounded-full bg-danger py-[3px] pl-2 pr-1 text-xs font-medium text-white flex cursor-pointer items-center rounded-full bg-danger py-[3px] pl-2 pr-1 text-xs font-medium text-white">
                                    2%
                                    <i data-lucide="chevron-down" width="24" height="24" class="stroke-1.5 ml-0.5 h-4 w-4 ml-0.5 h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-3xl font-medium leading-8">3.721</div>
                        <div class="mt-1 text-base text-slate-500">GOPAY</div>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-lucide="monitor" width="24" height="24" class="stroke-1.5 h-[28px] w-[28px] text-warning h-[28px] w-[28px] text-warning"></i>
                            <div class="ml-auto">
                                <div title="12% Higher than last month" class="tooltip cursor-pointer flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">
                                    12%
                                    <i data-lucide="chevron-up" width="24" height="24" class="stroke-1.5 ml-0.5 h-4 w-4 ml-0.5 h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-3xl font-medium leading-8">2.149</div>
                        <div class="mt-1 text-base text-slate-500">SHOPEEPAY</div>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-lucide="user" width="24" height="24" class="stroke-1.5 h-[28px] w-[28px] text-success h-[28px] w-[28px] text-success"></i>
                            <div class="ml-auto">
                                <div title="22% Higher than last month" class="tooltip cursor-pointer flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">
                                    22%
                                    <i data-lucide="chevron-up" width="24" height="24" class="stroke-1.5 ml-0.5 h-4 w-4 ml-0.5 h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-3xl font-medium leading-8">152.040</div>
                        <div class="mt-1 text-base text-slate-500">OVO</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END: General Report -->

    <!-- <div class="intro-y flex h-10 items-center">
            <h2 class="mr-5 truncate text-lg font-medium">Donasi Poin</h2>
        </div>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-lucide="shopping-cart" width="24" height="24" class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            <div class="ml-auto">
                                <div title="33% Higher than last month" class="tooltip cursor-pointer flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white flex cursor-pointer items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">
                                    33%
                                    <i data-lucide="chevron-up" width="24" height="24" class="stroke-1.5 ml-0.5 h-4 w-4 ml-0.5 h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-3xl font-medium leading-8">4.710</div>
                        <div class="mt-1 text-base text-slate-500">DANA</div>
                    </div>
                </div>
            </div>
    </div> -->

    <h2 class="mr-5 mt-5 truncate text-lg font-medium">Tukar Poin</h2>

    <div class="mt-5 grid grid-cols-12 gap-5 border-t pt-5">
        <a class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3" data-tw-toggle="modal" data-tw-target="#add-item-modal" href="<?= site_url('/tukar_poin/dana') ?>">
            <div class="box zoom-in relative rounded-md p-3">
                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                    <div class="image-fit absolute top-0 left-0 h-full w-full">
                        <img class="rounded-md" src="https://a.m.dana.id/danaweb/web/dana-meta-logo.png" alt="Dana">
                    </div>
                </div>
                <div class="mt-3 block truncate text-center font-medium">
                    DANA
                </div>
            </div>
        </a>
        <a class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3" data-tw-toggle="modal" data-tw-target="#add-item-modal" href="<?= site_url('/tukar_poin/gopay') ?>">
            <div class="box zoom-in relative rounded-md p-3">
                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                    <div class="image-fit absolute top-0 left-0 h-full w-full">
                        <img class="rounded-md" src="data:image/png;base64,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" alt="Gopay">
                    </div>
                </div>
                <div class="mt-3 block truncate text-center font-medium">
                    GOPAY
                </div>
            </div>
        </a>
        <a class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3" data-tw-toggle="modal" data-tw-target="#add-item-modal" href="<?= site_url('/tukar_poin/shopee_pay') ?>">
            <div class="box zoom-in relative rounded-md p-3">
                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                    <div class="image-fit absolute top-0 left-0 h-full w-full">
                        <img class="rounded-md" src="https://static.vecteezy.com/system/resources/previews/013/109/756/original/shopee-element-symbol-shopeepay-shopeepay-icon-free-vector.jpg" alt="Shopee Pay">
                    </div>
                </div>
                <div class="mt-3 block truncate text-center font-medium">
                    SHOPEE PAY
                </div>
            </div>
        </a>
        <a class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3" data-tw-toggle="modal" data-tw-target="#add-item-modal" href="<?= site_url('/tukar_poin/ovo') ?>">
            <div class="box zoom-in relative rounded-md p-3">
                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                    <div class="image-fit absolute top-0 left-0 h-full w-full">
                        <img class="rounded-md" src="data:image/jpeg;base64,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" alt="OVO">
                    </div>
                </div>
                <div class="mt-3 block truncate text-center font-medium">
                    OVO
                </div>
            </div>
        </a>
    </div>

    <h2 class="mr-5 mt-5 truncate text-lg font-medium">Donasi Poin</h2>
    <div class="mt-5 grid grid-cols-12 gap-5 border-t pt-5">
        <a class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3" data-tw-toggle="modal" data-tw-target="#add-item-modal" href="<?= site_url('/tukar_poin/qurban') ?>">
            <div class="box zoom-in relative rounded-md p-3">
                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                    <div class="image-fit absolute top-0 left-0 h-full w-full">
                        <img class="rounded-md" src="https://pantiyatim.or.id/wp-content/uploads/2022/06/qurban.png" alt="Qurban">
                    </div>
                </div>
                <div class="mt-3 block truncate text-center font-medium">
                    QURBAN
                </div>
            </div>
        </a>
        <a class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3" data-tw-toggle="modal" data-tw-target="#add-item-modal" href="<?= site_url('/tukar_poin/galang_dana_pembangunan') ?>">
            <div class="box zoom-in relative rounded-md p-3">
                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                    <div class="image-fit absolute top-0 left-0 h-full w-full">
                        <img class="rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTILJHAVu8vJsA_VqMNnoGmATCWhUKkmX1JdQ&usqp=CAU" alt="Qurban">
                    </div>
                </div>
                <div class="mt-3 block truncate text-center font-medium">
                    GALANG DANA PEMBANGUNAN
                </div>
            </div>
        </a>
    </div>
</div>