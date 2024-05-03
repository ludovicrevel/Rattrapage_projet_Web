<!-- Enregistrement des modifs -->
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Selection dans une liste -->
<script src="assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Personnalisation -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="assets/plugins/dropzone/min/dropzone.min.js"></script>
<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Date et heure -->
<script src="assets/dist/js/jquery.datetimepicker.full.min.js"></script>
<script>
	$(document).ready(function(){
	  $('.select2').select2({
	    placeholder:"Séléctionnez ici",
	    width: "100%"
	  });
    })
	window.start_load = function(){
		$('body').prepend('<div id="preloader2"></div>')
	}
	window.end_load = function(){
	    $('#preloader2').fadeOut('fast', function() {
	        $(this).remove();
	    })
	}
	window.uni_modal = function($title = '' , $url='',$size=""){
	    start_load()
	    $.ajax({
	        url:$url,
	        error:err=>{
	            console.log()
	            alert("Une erreur s'est produite")
	        },
	        success:function(resp){
	            if(resp){
	                $('#uni_modal .modal-title').html($title)
	                $('#uni_modal .modal-body').html(resp)
	                if($size != ''){
	                    $('#uni_modal .modal-dialog').addClass($size)
	                }else{
	                    $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
	                }
	                $('#uni_modal').modal({
	                show:true,
	                backdrop:'static',
	                keyboard:false,
	                focus:true
	                })
	                end_load()
	            }
	        }
	    })
	}
	window._conf = function($msg='',$func='',$params = []){
	    $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
	    $('#confirm_modal .modal-body').html($msg)
	    $('#confirm_modal').modal('show')
	}
	window.alert_toast= function($msg = 'TEST',$bg = 'success' ,$pos=''){
	   	var Toast = Swal.mixin({
	    	toast: true,
	    	position: $pos || 'top-end',
	    	showConfirmButton: false,
	    	timer: 5000
	    });
	    Toast.fire({
	        icon: $bg,
	        title: $msg
	    })
	}
$(function () {
	bsCustomFileInput.init();
	$('.summernote').summernote({
        height: 300,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    })
	$('.datetimepicker').datetimepicker({
		format:'Y/m/d H:i',
	})
})
</script>
<!-- Menu déroulant -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>