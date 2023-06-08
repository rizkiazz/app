<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Product List
    </h2>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Search item...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500" data-lucide="search"></i>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                <?php foreach ($product_category as $row) : ?>
                
                <a href="<?php echo base_url('categories/' . $row->kategori) ?>" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                    <div class="box rounded-md p-3 relative zoom-in">
                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                            <div class="absolute top-0 left-0 w-full h-full image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="<?= base_url() . '/uploads/' . $row->gambar ?>">
                            </div>
                        </div>
                        <div class="block font-medium truncate mt-3"><?= $row->kategori ?></div>
                    </div>
                </a>
                <?php endforeach; ?>

            </div>
        </div>
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
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <a href="<?= site_url('welcome')?>" class="btn btn-primary w-24">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->