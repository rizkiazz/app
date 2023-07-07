<div class="content">
    <div class="intro-y box px-3 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-3 -mx-3">
            <div class="w-24 ml-5 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Poin Anda</div>
            <div class="flex flex-1 px-0 items-center justify-center lg:justify-end">
                <div class="mr-5">
                    <?php foreach ($profile as $row) : ?>
                    <?php $profile = $row->poin ?>
                    <?php if(!$profile){
                            echo'<div class="text-slate-500 text-lg"><b>0 poin</b></div>';
                        } else {
                            echo '<div class="text-slate-500 text-lg"><b>' . $profile . ' poin</b></div>';
                        
                        }?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-8">
        <div class="intro-y flex h-10 items-center" style="display: flex; justify-content:space-between;">
            <h2 class="mr-5 truncate text-lg font-medium">Gopay Poin</h2>
            <div class="sm:w-auto sm:mt-0">
                <a href="<?= site_url('tukar_poin') ?>" class="btn btn-danger shadow-md mr-2"> Kembali</a>
            </div>
        </div>

        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#modal_50">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-lucide="shopping-cart" width="24" height="24"
                                    class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            </div>
                            <div class="mt-6 text-3xl font-medium leading-8">5.000</div>
                            <div class="mt-1 text-base text-slate-500">50 Poin</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#modal_100">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-lucide="shopping-cart" width="24" height="24"
                                    class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            </div>
                            <div class="mt-6 text-3xl font-medium leading-8">10.000</div>
                            <div class="mt-1 text-base text-slate-500">100 Poin</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#modal_250">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-lucide="shopping-cart" width="24" height="24"
                                    class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            </div>
                            <div class="mt-6 text-3xl font-medium leading-8">25.000</div>
                            <div class="mt-1 text-base text-slate-500">250 Poin</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#modal_500">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-lucide="shopping-cart" width="24" height="24"
                                    class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            </div>
                            <div class="mt-6 text-3xl font-medium leading-8">50.000</div>
                            <div class="mt-1 text-base text-slate-500">500 Poin</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#modal_1000">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-lucide="shopping-cart" width="24" height="24"
                                    class="stroke-1.5 h-[28px] w-[28px] text-primary h-[28px] w-[28px] text-primary"></i>
                            </div>
                            <div class="mt-6 text-3xl font-medium leading-8">100.000</div>
                            <div class="mt-1 text-base text-slate-500">1000 Poin</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: General Report -->
    <!-- BEGIN: riwayat penukaran -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">

        <div class="col-span-12 lg:col-span-12 2xl:col-span-8">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Riwayat Penukaran</div>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <table class="table table-report table-striped mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Nama User</th>
                                <th class="whitespace-nowrap">Nomor tujuan</th>
                                <th class="whitespace-nowrap">Jumlah Poin Ditukar</th>
                                <th class="whitespace-nowrap">Nominal Penarikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (empty($riwayat)) {
                                    echo '
                                    <tr>
                                        <td colspan="12" class="text-center">
                                            <div> Data Kosong </div>
                                        </td>
                                    </tr>
                                    ';
                                }
                            ?>

                            <?php
                            $totalPoints = 0;
                            foreach ($riwayat as $row) : ?>
                            <?php $totalPoints += $row->jumlah_penarikan;?>
                            <td>
                                <div class="font-medium whitespace-nowrap text-slate-500">
                                    <?php echo $this->session->userdata('nama_user') ?></div>
                            </td>
                            <td class="w-30">
                                <div class="text-black">
                                    <?= $row->no_tujuan?>
                                </div>
                            </td>
                            <td class="w-30">
                                <div class="text-danger"><span>-</span>
                                    <?= number_format($row->poin, 0, ',', '.') ?>
                                </div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap text-slate-500 text-success">+
                                    <?= number_format($row->jumlah_penarikan, 0, ',', '.') ?></div>
                            </td>
                            </tr>

                            <?php endforeach; ?>

                            <tr>
                                <td colspan="3"></td>
                                <td class="text-left"><strong>Rp.
                                        <?= number_format($totalPoints, 0, ',', '.') ?>,-</strong></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END: riwayat penukaran -->


    <!-- BEGIN: Modal Content -->
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="modal_50"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
        <div class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] group-[.show]: group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
            style="margin-top:100px; width:400px;">
            <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Tukar Poin Anda
                </h2>
            </div>

            <form action="<?= site_url('tukar_poin/tukar_gopay') ?>" method="post">
                <div class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                    <input type="hidden" name="id_user" id="id_user"
                        value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="gopay" id="gopay" value="50">

                    <input type="hidden" name="platform" id="platform" value="gopay">

                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">

                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nama User
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nominal
                        </label>
                        <input type="text" class="form-control" id="jumlah_penarikan" name="jumlah_penarikan"
                            value="5000" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nomor Tujuan
                        </label>
                        <input name="no_tujuan" id="no_tujuan" data-tw-merge id="modal-form-1" type="number"
                            placeholder="08xxxxxxxxx"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"><button
                        data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                    <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Tukar</button>
                </div>
            </form>

        </div>
    </div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="modal_100"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
        <div class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] group-[.show]: group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
            style="margin-top:100px; width:400px;">
            <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Tukar Poin Anda
                </h2>
            </div>

            <form action="<?= site_url('tukar_poin/tukar_gopay') ?>" method="post">
                <div class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                    <input type="hidden" name="id_user" id="id_user"
                        value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="gopay" id="gopay" value="100">

                    <input type="hidden" name="platform" id="platform" value="gopay">

                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">

                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nama User
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nominal
                        </label>
                        <input type="text" class="form-control" id="jumlah_penarikan" name="jumlah_penarikan"
                            value="10000" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nomor Tujuan
                        </label>
                        <input name="no_tujuan" id="no_tujuan" data-tw-merge id="modal-form-1" type="number"
                            placeholder="08xxxxxxxxx"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"><button
                        data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                    <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Tukar</button>
                </div>
            </form>

        </div>
    </div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="modal_250"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
        <div class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] group-[.show]: group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
            style="margin-top:100px; width:400px;">
            <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Tukar Poin Anda
                </h2>
            </div>

            <form action="<?= site_url('tukar_poin/tukar_gopay') ?>" method="post">
                <div class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                    <input type="hidden" name="id_user" id="id_user"
                        value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="gopay" id="gopay" value="250">

                    <input type="hidden" name="platform" id="platform" value="gopay">

                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">

                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nama User
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nominal
                        </label>
                        <input type="text" class="form-control" id="jumlah_penarikan" name="jumlah_penarikan"
                            value="25000" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nomor Tujuan
                        </label>
                        <input name="no_tujuan" id="no_tujuan" data-tw-merge id="modal-form-1" type="number"
                            placeholder="08xxxxxxxxx"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"><button
                        data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                    <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Tukar</button>
                </div>
            </form>

        </div>
    </div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="modal_500"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
        <div class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] group-[.show]: group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
            style="margin-top:100px; width:400px;">
            <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Tukar Poin Anda
                </h2>
            </div>

            <form action="<?= site_url('tukar_poin/tukar_gopay') ?>" method="post">
                <div class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                    <input type="hidden" name="id_user" id="id_user"
                        value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="gopay" id="gopay" value="500">

                    <input type="hidden" name="platform" id="platform" value="gopay">

                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">

                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nama User
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nominal
                        </label>
                        <input type="text" class="form-control" id="jumlah_penarikan" name="jumlah_penarikan"
                            value="50000" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nomor Tujuan
                        </label>
                        <input name="no_tujuan" id="no_tujuan" data-tw-merge id="modal-form-1" type="number"
                            placeholder="08xxxxxxxxx"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"><button
                        data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                    <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Tukar</button>
                </div>
            </form>

        </div>
    </div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="modal_1000"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
        <div class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] group-[.show]: group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
            style="margin-top:100px; width:400px;">
            <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Tukar Poin Anda
                </h2>
            </div>

            <form action="<?= site_url('tukar_poin/tukar_gopay') ?>" method="post">
                <div class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                    <input type="hidden" name="id_user" id="id_user"
                        value="<?php echo $this->session->userdata('id_user') ?>">
                    <input type="hidden" name="gopay" id="gopay" value="1000">
                    <input type="hidden" name="platform" id="platform" value="gopay">

                    <input type="hidden" name="poin" id="poin" value="<?= $profile ?>">

                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nama User
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nominal
                        </label>
                        <input type="text" class="form-control" id="jumlah_penarikan" name="jumlah_penarikan"
                            value="100000" autocomplete="off" readonly>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label data-tw-merge for="modal-form-1" class="inline-block mb-2">
                            Nomor Tujuan
                        </label>
                        <input name="no_tujuan" id="no_tujuan" data-tw-merge id="modal-form-1" type="number"
                            placeholder="08xxxxxxxxx"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"><button
                        data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                    <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Tukar</button>
                </div>
            </form>

        </div>
    </div>
    <!-- END: Modal Content -->

</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<?php if (@$_SESSION['sukses']) { ?>
<script>
swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);

} ?>
<?php if (@$_SESSION['error']) { ?>
<script>
swal("Ups!", "<?php echo $_SESSION['error']; ?>", "error");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['error']);
} ?>
<?php if (@$_SESSION['warning']) { ?>
<script>
swal("Ups!", "<?php echo $_SESSION['warning']; ?>", "warning");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['warning']);
} ?>