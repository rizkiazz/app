<h2><center>Detail Pembeli</center></h2>
<hr/>

<table border="0" width="100%" style="text-align:center;">
	<tr>
		<th class="whitespace-nowrap !py-5">Nama Pelanggan</th>
		<th class="whitespace-nowrap !py-5">Nomor Hp</th>
		<th class="whitespace-nowrap text-right">Alamat</th>
		<th class="whitespace-nowrap text-right">Status</th>
	</tr>

	<tr>
		<td><?= $invoice->name ?></td>
		<td><?= $invoice->mobile_phone ?></td>
		<td><?= $invoice->alamat ?></td>
		<?php if ($invoice->status == "0") { ?>
			<td>Pending(Tertunda)</td>
		<?php } else if ($invoice->status == "1") { ?>
			<td>Paid(Dibayar)</td>
		<?php } ?>
	</tr>
</table>

<hr/>
<h2><center>Order Details</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		<th class="whitespace-nowrap !py-5">Produk Item</th>
		<th class="whitespace-nowrap !py-5">Layanan Pesanan</th>
		<th class="whitespace-nowrap text-right">Poin</th>
		<th class="whitespace-nowrap text-right">Jumlah</th>
		<th class="whitespace-nowrap text-right">Total poin</th>
	</tr>
	<?php 
	$no=1; 
	$total = 0;
	foreach ($pesanan as $row) :
		$subtotal = $row->jumlah * $row->harga; 
		$total += $subtotal; 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?= $row->nama_brg?></td>
			<td><?= number_format($row->harga, 0, ',', '.') ?></td>
			<td><?= number_format($row->jumlah, 0, ',', '.') ?></td>
			<td><?= number_format($subtotal, 0, ',', '.') ?></td>
		</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="4" align="right">Poin yang didapat</td>
		<td align="right"><b><?= number_format($total, 0, ',', '.') ?> poin</b></td>
	</tr>
</table>