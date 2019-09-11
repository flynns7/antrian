    <!-- All Jquery -->
    <script src="<?= base_url('asset'); ?>/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->  
    <!-- <script src="<?= base_url('asset'); ?>/js/lib/bootstrap/js/popper.min.js"></script> -->
    <script src="<?= base_url('asset'); ?>/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('asset'); ?>/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('asset'); ?>/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url('asset'); ?>/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <!-- <script src="<?= base_url('asset'); ?>/js/lib/morris-chart/raphael-min.js"></script> -->
    <!-- <script src="<?= base_url('asset'); ?>/js/lib/morris-chart/morris.js"></script> -->
    <!-- <script src="<?= base_url('asset'); ?>/js/lib/morris-chart/dashboard1-init.js"></script> -->


	<script src="<?= base_url('asset'); ?>/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <!-- <script src="<?= base_url('asset'); ?>/js/lib/calendar-2/semantic.ui.min.js"></script> -->
     <!-- scripit init -->
    <script src="<?= base_url('asset'); ?>/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="<?= base_url('asset'); ?>/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="<?= base_url('asset'); ?>/js/lib/calendar-2/pignose.init.js"></script>

    <script src="<?= base_url('asset'); ?>/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/toastr/toastr.min.js"></script>
    <!-- scripit init-->

    <script src="<?= base_url('asset'); ?>/js/scripts.js"></script>


    <script src="<?= base_url('asset'); ?>/js/lib/datatables/datatables.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?= base_url('asset'); ?>/js/lib/datatables/datatables-init.js"></script>   
    
    <script type="text/javascript">

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
    
    function add_user() {
        $('#modal-add-user').modal('show');
        $('input[name="aksi"]').val('simpan');
    }

    function save_user(){
        var data = $('#form-user').serialize();
        var aksi = $('input[name="aksi"]').val();
        if (aksi=='simpan') {
            var url = '<?= site_url('admin/insert_user'); ?>';
        }else{
            var url = '<?= site_url('admin/update_user'); ?>';
        } 
        $.ajax({
            url:url,
            data:data,
            dataType:'JSON',
            type:'POST',
            success:function(response){
                if (response==1) {
                    location.reload();
                }else if(response==2){

                toastr.error('Username sudah digunakan','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }else{

                toastr.error('Gagal Input/Update Data User','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }
            }
        });

    }

    function delete_user(user_id){

        $.ajax({

            url:'<?= site_url('admin/delete_user') ?>'+'/'+user_id,
            dataType:'JSON',
            success:function(response){

                if (response==1) {
                    
                    location.reload();
                }else{

                toastr.error('Gagal Memuat Data User','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }
            }
        
        });

    }

    function edit_user(user_id){

        $.ajax({

            url:'<?= site_url('admin/edit_user') ?>'+'/'+user_id,
            dataType:'JSON',
            success:function(response){

                 $('#modal-add-user').modal('show');
                 $('input[name="aksi"]').val('update');
                 $('input[name="user_id"]').val(response.user_id);
                 $('input[name="username"]').val(response.username);
                 $('input[name="nama"]').val(response.nama);
                 $('input[name="password"]').val(response.password);
            }
        
        });

    }

    function add_loket() {
        $('input[name="aksi"]').val('simpan');
        $('#modal-add-loket').modal('show');
    }

    function save_loket(){

        var data = $('#form-loket').serialize();
        var aksi = $('input[name="aksi"]').val();

        if (aksi=='simpan') {
            var url = '<?= site_url('admin/insert_loket'); ?>';
        }else{
            var url = '<?= site_url('admin/update_loket'); ?>';
        }

        $.ajax({
            url:url,
            data:data,
            dataType:'JSON',
            type:'POST',
            success:function(response){
                if (response==1) {
                    location.reload();
                }else if(response==2){

                toastr.warning('Jumlah loket telah melebihi batas, batas : 9 loket','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }else if(response==3){


                toastr.warning('Loket sudah ada dalam daftar','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }else if(response==0){

                toastr.error('Gagal Input Data Loket','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }
            }
        });

    }

    function edit_loket(loket_id){

        $('input[name="aksi"]').val('update');
        $.ajax({

            url:'<?= site_url('admin/edit_loket') ?>/'+loket_id,
            dataType:'JSON',
            success:function(response){
            $('input[name="loket_id"]').val(response.loket_id);
            $('select[name="no_loket"]').val(response.no_loket);
            $('input[name="ip_address"]').val(response.ip_address);
            $('#modal-add-loket').modal('show');     
            
            }

        });        

    }

    function delete_loket(loket_id){

        $.ajax({

            url:'<?= site_url('admin/delete_loket') ?>'+'/'+loket_id,
            dataType:'JSON',
            success:function(response){

                if (response==1) {
                    location.reload()
                }else{

                toastr.error('Gagal Hapus Data User','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }
            }
        
        });

    }

    function add_slider() {
        $('#modal-add-slider').modal('show');
    }    

    function save_slider(){

        // var aksi                = $('input[name="aksi"]').val();
        var judul               = $('input[name="judul"]').val();  
        var sort_order          = $('input[name="sort_order"]').val();  
        var status              = $('select[name="status"]').val();  
        var foto                = $('input[name="gambar"]').prop('files')[0];   
        var form_data           = new FormData();
     
        form_data.append('judul', judul);    
        form_data.append('status', status);                   
        form_data.append('foto', foto);                 
        form_data.append('sort_order', sort_order);    

        // if (aksi=='simpan') {

        // form_data.append('foto', foto);  
        $.ajax({
            url:'<?= site_url('admin/insert_slider'); ?>',
            type:'post',
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data:form_data,
            success:function(msg){
                if (msg==0) {

                toastr.error('Gagal Input Slider Slider','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }else{
                    location.reload();
                }
            }
        });

        // }else{

        // var id_slider = $('input[name="id_slider"]').val();   
        // if (typeof foto == 'undefined') {
        //     foto = getName();
        // } 

        // // alert(foto);
        // form_data.append('id_slider', id_slider);  
        // form_data.append('foto', foto);  

        // $.ajax({
        //     url:'<?= site_url('admin/slider/update'); ?>',
        //     type:'post',
        //     dataType: 'text',  // what to expect back from the PHP script, if anything
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     data:form_data,
        //     success:function(msg){
        //         if (msg==0) {
        //             alert(msg);
        //         }else{
        //             location.reload();
        //         }
        //     }
        // });

        // }

    }

    function upload() {
    var judul= $('input[name="judul"]').val();  
    var file_data = $('input[name="gambar"]').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('foto', file_data); 
    form_data.append('judul', judul);
    // alert(form_data);     
    if (typeof file_data=='undefined') {
      alert('file foto belum dipilih');
    }else if(judul==''){
      alert('Judul harus diisi dan pilih file lagi');
     $('input[name="gambar"]').val('');
    }else{

    $.ajax({
                url: '<?= site_url('admin/upload'); ?>', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                beforeSend: function () {
                    $('#alert').html('Uploading......');
                },
                success: function(msg){
                    //alert(msg); // display response from the PHP script, if any
                    var obj = JSON.parse(msg);
                    if(obj.msg==1){
                      // alert('Foto berhasil diupload');
                      // $('#picture').attr('src','');
                      // $('#picture').attr('src','<?= base_url("assets/slider_picture/thumb"); ?>/'+obj.pesan);

                    $('#alert').html('Success......');
                    // location.reload();
                    }else{
                      // alert(obj.pesan);

                    $('#alert').html('Upload Failed......');
                      $('#foto').val('');
                    }
                }
     });

    }                        

         
    }

    function delete_slider(slider_id){

        $.ajax({

            url:'<?= site_url('admin/delete_slider') ?>'+'/'+slider_id,
            dataType:'JSON',
            success:function(response){

                if (response==1) {
                    location.reload()
                }else if(response==2){

                toastr.error('Gagal File Slider','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }else if(response==0){

                toastr.error('Gagal Hapus Data Slider','Pemberitahuan',{
                    "positionClass": "toast-top-right",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                });

                }
            }
        
        });

    }

    </script>   
