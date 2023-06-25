<?php
session_start();
$username = $_SESSION ['username'];
$level = $_SESSION ['level'];
if(!empty($username) && ($level == '1')){
}else {
    header('location:Login_v1/index.php');
}
?>
<a href="exportaksi.php">Export Data ke Excel</a>
<table class="table table-striped table-hover r-0 data-tables">
		<thead>
		<tr >
		<th>No</th>
        <th>Nik Anak</th>
		<th>Nama Anak</th>
        <th>Tanggal Lahir</th>
        <th>Nama Orang Tua</th>
        <th>Nik Orang Tua</th>
        <th>Nomor Telepon</th>
        <th>Posyandu</th>
        <th>Alamat Anak</th>
        <th>Tanggal Ukur</th>
        <th>Berat Badan</th>
        <th>Tinggi Badan</th>
        <th>Lingkar Kepala</th>
        <th>Status Gizi BB/ U</th>
        <th>Status Gizi TB/ U</th>
        <th>Status Gizi BB/ TB</th>
        <th>Status Gizi IMT/U</th>
        
		</tr>
		</thead>

		<tbody>
		<?php 
		//th untuk huruf tebal atau bold, td huruf tipis//
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from laki");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
            <td><?php echo $no++; ?></td>
			    <td><?php echo $d['Nik'];            ?></td>
				<td><?php echo $d['NamaAnak'];       ?></td>
				<td><?php echo $d['TanggalLahir'];   ?></td>
                <td><?php echo $d['NamaOrangTua'];   ?></td>
                <td><?php echo $d['NikOrangTua'];    ?></td>
                <td><?php echo $d['NomorTelepon'];   ?></td>
                <td><?php echo $d['Posyandu'];       ?></td>
                <td><?php echo $d['Alamat'];         ?></td>
				<td><?php echo $d['TanggalUkur'];    ?></td>
				<td><?php echo $d['BeratBadan'];     ?></td>
                <td><?php echo $d['TinggiBadan'];    ?></td>
                <td><?php echo $d['LingkarKepala'];  ?></td>
                <td><?php echo $d['StatusGiziBB'];   ?></td>
                <td><?php echo $d['StatusGiziTB'];   ?></td>
                <td><?php echo $d['StatusGiziBBTB']; ?></td>
                <td><?php echo $d['StatusGiziIMT'];  ?></td>
				
			</tr>
			<?php 
		}
		?>
		</tbody>
	</table>