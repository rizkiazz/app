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
                    <a href="<?= site_url('dashboard/clear') ?>" class="flex items-end ml-auto btn btn-danger shadow-md mr-2">Hapus Semua Keranjang</a>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <?php echo form_open('dashboard/update_cart'); ?>
                    <!-- <form method="post"> -->
                    <!-- <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th class="whitespace-nowrap !py-5">Produk Item</th>
                                <th class="whitespace-nowrap text-right">Harga Unit</th>
                                <th class="whitespace-nowrap text-right">Jumlah</th>
                                <th class="whitespace-nowrap text-right">Total</th>
                                <th class="whitespace-nowrap text-right">Edit</th>
                                <th class="whitespace-nowrap text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($this->cart->contents() as $items) : ?>
                                <tr>
                                    <td><a href="<?= site_url('dashboard/delete/'.$items['rowid']) ?>"><i data-lucide="trash-2" class="w-4 h-4"></i></a></td>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md tooltip" src="<?= base_url() . '/uploads/' . $items['options']['gambar']; ?>" title="Uploaded at 8 December 2021">
                                            </div>
                                            <a href="" class="font-medium whitespace-nowrap ml-4"><?= $items['name']; ?></a>
                                        </div>
                                    </td>
                                    <td class="text-right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                                    <td class="text-right"><?= number_format($items['qty'], 0, ',', '.') ?></td>
                                    <td class="text-right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                                    <td class="text-right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                                    <td class="text-right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4"></td>
                                <td class="text-right"><strong>Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>,-</strong></td>
                                <td class="text-right"><strong>Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>,-</strong></td>
                            </tr>
                        </tbody>
                    </table> -->
                    <table class="table table-report table-striped mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Gambar</th>
                                <th class="whitespace-nowrap">Produk Item</th>
                                <th class="whitespace-nowrap">Harga Unit</th>
                                <th class="whitespace-nowrap">Jumlah</th>
                                <th class="whitespace-nowrap">Total</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $no = 1;
                            foreach ($this->cart->contents() as $items) : ?>

                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="" class="tooltip rounded-full" src="<?= base_url() . '/uploads/' . $items['options']['gambar']; ?>" title="<?= $items['name']; ?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap text-slate-500"><?= $items['name']; ?></a>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap text-slate-500"><?= 'Rp' . number_format($items['price'], 0, ',', '.') ?></a>
                                </td>
                                <td class="w-10">
                                    <input name="quantity<?= $no++; ?>"  min="1" max="10" id="quantity" type="number" class="form-control w-24 text-center itemQty" placeholder="Item quantity" value="<?= number_format($items['qty']) ?>">
                                </td>
                                <td class="w-30">
                                    <div class="text-danger">
                                       Rp.<?= number_format($items['subtotal'], 0, ',', '.') ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex justify-center items-center">
                                    <!-- BEGIN: Modal Toggle -->
                                    <!-- <a class="flex items-cente mr-2r" href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview" class="btn btn-primary">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a> -->
                                    <button class="flex items-center text-danger" type="submit">
                                        <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
                                    </button>
                                    <!-- <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                                        <div class="max-w-[50%] truncate mr-1">Edit</div>
                                        <i data-lucide="edit" class="w-4 h-4 text-slate-500 ml-2"></i>
                                    </a> -->
                                    <!-- END: Modal Toggle -->
                                    <a class="flex items-center text-danger" href="<?= site_url('dashboard/delete/'.$items['rowid']) ?>" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                    </a>
                                    </div>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                            <?php echo form_close(); ?>


                            <tr>
                                <td colspan="4"></td>
                                <td class="text-left"><strong>Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>,-</strong></td>
                                <td colspan="5"><h5 class="text-center">Pilih Layanan</h5>
                                    <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3 text-white btn btn-sm btn-pending shadow-md mr-2" href="<?= site_url('dashboard/drop_off') ?>">
                                        <i data-lucide="package" class="w-4 h-4 mr-1"></i> Drop Off
                                    </a>
                                    <a class="flex items-center text-white btn btn-sm btn-success shadow-md mr-2" href="<?= site_url('dashboard/pick_up') ?>">
                                        <i data-lucide="truck" class="w-4 h-4 mr-1"></i> Pick Up
                                    </a>
                                </td>
                            </td>
                            </tr>

                        </tbody>
                    </table>                    
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
                        <button type="button" class="btn btn-number w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 mr-1" data-type="minus" data-field="quant[1]">-</button>
                        <input name="quant[1]"  min="0" max="10" id="pos-form-4" type="text" class="form-control w-24 text-center input-number" placeholder="Item quantity" value="<?= number_format($items['qty'], 0, ',', '.') ?>">
                        <button type="button" class="btn btn-number w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 ml-1" data-type="plus" data-field="quant[1]">+</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-right">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                <button type="button" onClick="addCart(<?= number_format($items['qty'], 0, ',', '.') ?>)" class="btn btn-primary w-24">Ubah</button>
            </div>
        </div>
    </div>
</div>


<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>

<script>
    // $(document).ready(function)
    // {
    //     $(".itemQty").on('change', function)
    //     {
    //         var el = $(this).closest('tr');
    //         var id = $(el).find('#rowid').val();
    //         var qty = $(this).val();

    //         $ajax({
    //             'url' : 'update_cart',
    //             'type' : 'POST',
    //             'data' : {'id' : id, 'qty' : qty},
    //             success : function(result){
    //                 window.location.href =''
    //             }
    //         })
    //     }
    // }
    
    // $('.btn-number').click(function(e){
    //     e.preventDefault();
        
    //     fieldName = $(this).attr('data-field');
    //     type      = $(this).attr('data-type');
    //     var input = $("input[name='"+fieldName+"']");
    //     var currentVal = parseInt(input.val());
    //     if (!isNaN(currentVal)) {
    //         if(type == 'minus') {
                
    //             if(currentVal > input.attr('min')) {
    //                 input.val(currentVal - 1).change();
    //             } 
    //             if(parseInt(input.val()) == input.attr('min')) {
    //                 $(this).attr('disabled', true);
    //             }

    //         } else if(type == 'plus') {

    //             if(currentVal < input.attr('max')) {
    //                 input.val(currentVal + 1).change();
    //             }
    //             if(parseInt(input.val()) == input.attr('max')) {
    //                 $(this).attr('disabled', true);
    //             }

    //         }
    //     } else {
    //         input.val(0);
    //     }
    // });
    // $('.input-number').focusin(function(){
    // $(this).data('oldValue', $(this).val());
    // });
    // $('.input-number').change(function() {
        
    //     minValue =  parseInt($(this).attr('min'));
    //     maxValue =  parseInt($(this).attr('max'));
    //     valueCurrent = parseInt($(this).val());
        
    //     name = $(this).attr('name');
    //     if(valueCurrent >= minValue) {
    //         $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    //     } else {
    //         alert('Sorry, the minimum value was reached');
    //         $(this).val($(this).data('oldValue'));
    //     }
    //     if(valueCurrent <= maxValue) {
    //         $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    //     } else {
    //         alert('Sorry, the maximum value was reached');
    //         $(this).val($(this).data('oldValue'));
    //     }
        
        
    // });
    // $(".input-number").keydown(function (e) {
    //         // Allow: backspace, delete, tab, escape, enter and .
    //         if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
    //             // Allow: Ctrl+A
    //             (e.keyCode == 65 && e.ctrlKey === true) || 
    //             // Allow: home, end, left, right
    //             (e.keyCode >= 35 && e.keyCode <= 39)) {
    //                 // let it happen, don't do anything
    //                 return;
    //         }
    //         // Ensure that it is a number and stop the keypress
    //         if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
    //             e.preventDefault();
    //         }
    //     });



    // Update item quantity
    function updateCartItem(obj, rowid){
        $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
            if(resp == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
</script>

</script>