<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Menu Keranjang
        </h2>
    </div>
    <!-- BEGIN: Transaction Details -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">

        <div class="col-span-12 lg:col-span-12 2xl:col-span-8">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">List Pesanan</div>
                    <a href="<?= site_url('dashboard/clear') ?>"
                        class="flex items-end ml-auto btn btn-danger shadow-md mr-2">Hapus Semua Keranjang</a>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <?php echo form_open('dashboard/update_cart'); ?>
                    <table class="table table-report table-striped mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Gambar</th>
                                <th class="whitespace-nowrap">Produk Item</th>
                                <th class="whitespace-nowrap">Kategori</th>
                                <th class="whitespace-nowrap">Poin Unit</th>
                                <th class="whitespace-nowrap">Jumlah</th>
                                <th class="whitespace-nowrap">Total Poin</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (empty($this->cart->contents())) {
                                    echo '
                                    <tr>
                                        <td colspan="12" class="text-center">
                                            <div> Data Kosong </div>
                                        </td>
                                    </tr>
                                    ';
                                }
                            ?>

                            <?php $no = 1; $total_subtotal = 0;
                            foreach ($this->cart->contents() as $items) : ?>
                            <?php 
                                $items_subtotal = $items['poin'] * $items['qty'];
                                $total_subtotal += $items_subtotal;
                            ?>

                            <td class="w-10">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="" class="tooltip rounded-full"
                                            src="<?= base_url() . '/uploads/produk/' . $items['options']['gambar']; ?>"
                                            title="<?= $items['name']; ?>">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=""
                                    class="font-medium whitespace-nowrap text-slate-500"><?= $items['name']; ?></a>
                            </td>
                            <td>
                                <a href=""
                                    class="font-medium whitespace-nowrap text-slate-500"><?= $items['options']['kategori']; ?></a>
                            </td>
                            <td>
                                <a href=""
                                    class="font-medium whitespace-nowrap text-slate-500"><?= number_format($items['poin'], 0, ',', '.') ?></a>
                            </td>
                            <td class="w-10">
                                <input name="quantity<?= $no++; ?>" min="1" max="100" id="quantity" type="number"
                                    class="form-control w-24 text-center itemQty" placeholder="Item quantity"
                                    value="<?= number_format($items['qty']) ?>"><small class="text-center">maks
                                    100
                                    kg</small>
                            </td>
                            <td class="w-30">
                                <div class="text-danger">
                                    <?= isset($items_subtotal) ? number_format($items_subtotal, 0, ',', '.') : '0' ?>
                                </div>
                            </td>
                            <td>
                                <div class="flex justify-center items-center">
                                    <button class="flex items-center text-danger" type="submit">
                                        <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
                                    </button>
                                    <a class="flex items-center text-danger"
                                        href="<?= site_url('dashboard/delete/'.$items['rowid']) ?>"
                                        data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                    </a>
                                </div>
                            </td>
                            </tr>

                            <?php endforeach; ?>
                            <?php echo form_close(); ?>

                            <tr>
                                <td colspan="5"></td>
                                <td class="text-left">
                                    <strong><?= isset($items_subtotal) ? number_format($total_subtotal, 0, ',', '.') : '0' ?>
                                        poin,-</strong>
                                </td>
                                <td colspan="5">
                                    <h5 class="text-center">Pilih Layanan</h5>
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3 text-white btn btn-sm btn-pending shadow-md mr-2"
                                            href="<?= site_url('dashboard/drop_off') ?>">
                                            <i data-lucide="package" class="w-4 h-4 mr-1"></i> Drop Off
                                        </a>
                                        <a class="flex items-center text-white btn btn-sm btn-success shadow-md mr-2"
                                            href="<?= site_url('dashboard/pick_up') ?>">
                                            <i data-lucide="truck" class="w-4 h-4 mr-1"></i> Pick Up
                                        </a>
                                </td>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="mt-5">
                        <div class="alert alert-info show mb-2" role="alert">
                            <h5 class="text-center mb-1">Note : <span class="text-danger">1 Produk, hanya dapat
                                    1 Checkout</span></h5>
                        </div>
                        <p><span class="font-medium">Note :</span> Jika lebih dari 1 Produk, Silahkan <b>pilih</b>
                            yang akan diproses dan <b>hapus</b> produk lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Transaction Details -->
</div>

<div id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto"><?= $items['name']; ?></h2>
            </div>
            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12">
                    <label for="pos-form-4" class="form-label">Quantity</label>
                    <div class="flex mt-2 flex-1">
                        <button type="button"
                            class="btn btn-number w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 mr-1"
                            data-type="minus" data-field="quant[1]">-</button>
                        <input name="quant[1]" min="0" max="10" id="pos-form-4" type="text"
                            class="form-control w-24 text-center input-number" placeholder="Item quantity"
                            value="<?= number_format($items['qty'], 0, ',', '.') ?>">
                        <button type="button"
                            class="btn btn-number w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 ml-1"
                            data-type="plus" data-field="quant[1]">+</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-right">
                <button type="button" data-tw-dismiss="modal"
                    class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                <button type="button" onClick="addCart(<?= number_format($items['qty'], 0, ',', '.') ?>)"
                    class="btn btn-primary w-24">Ubah</button>
            </div>
        </div>
    </div>
</div>


<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

<?php if (@$_SESSION['sukses']) { ?>
<script>
swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>

<script>
// Update item quantity
function updateCartItem(obj, rowid) {
    $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {
        rowid: rowid,
        qty: obj.value
    }, function(resp) {
        if (resp == 'ok') {
            location.reload();
        } else {
            alert('Cart update failed, please try again.');
        }
    });
}
</script>

</script>