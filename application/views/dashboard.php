<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-12">
        <h2 class="text-lg font-medium mr-auto">List Produk</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Search item...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500" data-lucide="search"></i>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                <?php foreach ($product as $row) : ?>
                
                <a href="<?php echo base_url('dashboard_categories/' . $row->kategori) ?>" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                    <div class="box rounded-md p-3 relative zoom-in">
                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                            <div class="absolute top-0 left-0 w-full h-full image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="<?= base_url() . '/uploads/' . $row->gambar ?>">
                        </div>
                    </div>
                        <div class="block font-medium text-center truncate mt-3"><?= $row->kategori ?></div>
                    </div>
                </a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>