<!DOCTYPE html>
<html>
<head>
	<title>Antrian Pendaftaran Pasien Melinda</title>
	<?php $this->load->view('css'); ?>
	<style type="text/css">
	@media print {
	  body * {
	    visibility: hidden;
	  }
	  #print-antri * {
	    visibility: visible;
	  }
	}	
	</style>	
</head>
<body>
		<audio id="suarabel" src="<?= base_url('asset'); ?>/Airport_Bell.mp3"></audio>
		<audio id="suarabelnomorurut" src="<?= base_url('asset'); ?>/rekaman/nomor-urut.wav"  ></audio> 
		<audio id="suarabelsuarabelloket" src="<?= base_url('asset'); ?>/rekaman/loket.wav"  ></audio> 
       
		<audio id="belas" src="<?= base_url('asset'); ?>/rekaman/belas.wav"  ></audio> 
		<audio id="sebelas" src="<?= base_url('asset'); ?>/rekaman/sebelas.wav"  ></audio> 
        <audio id="puluh" src="<?= base_url('asset'); ?>/rekaman/puluh.wav"  ></audio> 
        <audio id="sepuluh" src="<?= base_url('asset'); ?>/rekaman/sepuluh.wav"  ></audio> 
        <audio id="ratus" src="<?= base_url('asset'); ?>/rekaman/ratus.wav"  ></audio> 
        <audio id="seratus" src="<?= base_url('asset'); ?>/rekaman/seratus.wav"  ></audio> 
        <audio id="suarabelloket1" src="<?= base_url('asset'); ?>/rekaman/<?= $this->session->userdata('loket_temp'); ?>.wav"  ></audio> 
        <div id="suara">
        	
        </div>	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<h3>Welcome,<strong><?= $this->session->userdata('nama'); ?></strong></h3>
		</div>
		<div class="col-md-3">
			<br><br><br><br><br><br><br>
			<div class="card-deck shadow-lg p-3 mb-5 bg-white rounded" id="print-antri">
			  <div class="card">
			      <div class="card-header text-center">Melinda Hospital 1</div>
			  	<strong style="font-size: 80px; text-align: center;" id="no-waiting"><?= $data_waiting->nomor; ?></strong>
			    <div class="card-body">
			      <h5 class="card-title text-center">Terima Kasih Telah Menunggu</h5>
			    </div>
			    <div class="card-footer bg-transparent text-center" id="status-waiting"><?= ucfirst($data_waiting->status); ?></div>
			  </div>
			</div>		
			<br>
			<button type="button" onclick="panggil()" class="btn btn-lg btn-warning" style="width:100%;"> Panggil</button>	
		</div>
		<div class="col-md-3">
			<br><br><br><br><br><br><br>
			<div class="card-deck shadow-lg p-3 mb-5 bg-white rounded" id="print-antri">
			  <div class="card">
			      <div class="card-header text-center">Melinda Hospital 1</div>
			  	<strong style="font-size: 80px; text-align: center;" id="no-servicing"><?= $data_servicing->nomor; ?></strong>
			    <div class="card-body">
			      <h5 class="card-title text-center">Terima Kasih Telah Menunggu</h5>
			    </div>
			    <div class="card-footer bg-transparent text-center" id="status-servicing"><?= ucfirst($data_servicing->status); ?></div>
			  </div>
			</div>			
		</div>
		<div class="col-md-3 text-right">
			<a href="javascript:void(0)" onclick="logout()"><h3>Logout</h3></a>
		</div>
	</div>
</div>
<?php $this->load->view('script'); ?>

<script type="text/javascript">

	function panggil() {

		$.ajax({
			url:'<?= site_url("dashboard/panggil_antrian") ?>',
			dataType:'JSON',
			success:function(data){
				if (data==0) {
					alert('antrian habiss!!');
				}else if (data!=null) {
					data_servicing = data.data_servicing;
					data_waiting   = data.data_waiting;
					$("#no-waiting").html(data_waiting.nomor);
					$("#status-waiting").html(data_waiting.status);
					$("#no-servicing").html(data_servicing.nomor);
					$("#status-servicing").html(data_servicing.status);
					// $('#no-waiting').html(data.nomor);
					// var nomor = parseInt(data_waiting.nomor-1);
					mulai(data_servicing.nomor);
				}else{
					alert('gagal generate nomor');
				}
			}
		});	

	}

	function logout(){

		$.ajax({
			url:'<?= site_url("login/logout") ?>',
			dataType:'JSON',
			success:function(response){
				if (response==1) {
					location.replace("<?= site_url('login'); ?>");
				}
			}
		});
	}

$(document).ready(function(){
	$("#play").click(function(){
		document.getElementById('suarabel').play();		
	});
	
	
});

function mulai(antrian){

suara = $('#suara');
suara.html('');
for (var i = 0; i < antrian.length; i++) {
	suara.append('<audio id="suarabel'+i+'" src="<?= base_url('asset/rekaman'); ?>/'+antrian.substr(i,1)+'.wav" ></audio>');
}

	//MAINKAN SUARA BEL PADA SAAT AWAL
	document.getElementById('suarabel').pause();
	document.getElementById('suarabel').currentTime=0;
	document.getElementById('suarabel').play();
			
	//SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT		
	totalwaktu=document.getElementById('suarabel').duration*1000;	

	//MAINKAN SUARA NOMOR URUT		
	setTimeout(function() {
			document.getElementById('suarabelnomorurut').pause();
			document.getElementById('suarabelnomorurut').currentTime=0;
			document.getElementById('suarabelnomorurut').play();
	}, totalwaktu);
	totalwaktu=totalwaktu+1000;
	
		//JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
		if (antrian<10) {
			setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
			
			totalwaktu=totalwaktu+1000;
		}else if(antrian==10){
			
			//JIKA 10 MAKA MAIKAN SUARA SEPULUH
				setTimeout(function() {
						document.getElementById('sepuluh').pause();
						document.getElementById('sepuluh').currentTime=0;
						document.getElementById('sepuluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(antrian == 11){

				//JIKA 11 MAKA MAIKAN SUARA SEBELAS
				setTimeout(function() {
						document.getElementById('sebelas').pause();
						document.getElementById('sebelas').currentTime=0;
						document.getElementById('sebelas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;

		}else if(antrian < 20){

				//JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('belas').pause();
						document.getElementById('belas').currentTime=0;
						document.getElementById('belas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;

		}else if(antrian < 100){

				//JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;

		}else{
		
				//JIKA LEBIH DARI 100 
				//Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
				//Selebihnya akan langsung disebutkan angkanya saja 
				//tanpa kata "RATUS", "PULUH", maupun "BELAS"
		var panjang = antrian.length;
			for(i=0;i<panjang;i++){
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabel'+i).pause();
						document.getElementById('suarabel'+i).currentTime=0;
						document.getElementById('suarabel'+i).play();
					}, totalwaktu);
			}
		
		}		
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabelsuarabelloket').pause();
						document.getElementById('suarabelsuarabelloket').currentTime=0;
						document.getElementById('suarabelsuarabelloket').play();
					}, totalwaktu);
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabelloket1').pause();
						document.getElementById('suarabelloket1').currentTime=0;
						document.getElementById('suarabelloket1').play();
					}, totalwaktu);	
}

</script>

</body>
</html>