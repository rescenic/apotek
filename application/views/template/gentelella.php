<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/ico" />

		<title><?php echo $title ?></title>

		<!-- Import CSS -->
		<link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">


		<link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">

		<!-- PNotify -->
		<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.nonblock.css') ?>" rel="stylesheet">


		<!-- FullCalendar -->
		<link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.css') ?>" rel="stylesheet" >
		<link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.print.css') ?>" rel="stylesheet" media="print">
	    

			<!-- Datatables -->
		<link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
			<!-- Custom Theme Style -->
		<link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
		<!-- /Import CSS -->


		

	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php echo $sidenavs ?>
				<?php echo $navs ?>
				<!-- Page Content -->
				<div class="right_col" role="main">
					<div>
						<div class="page-title">
							<div class="title_left">
								<h3><?php echo $header ?></h3>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php echo $content ?>
					</div>
					<div style=" margin-top: 10%;">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/pet.png') ?>" alt="..." class="img-home"></a>
						<div class="clearfix"></div>
				</div>
				</div>

				<!-- /Page Content -->
				<!-- Footer Content -->
				<footer>
					<div class="pull-right">
						<a href="https://http://rsh.fkh.ugm.ac.id/main/">Rumah Sakit Hewan Prof. Soeparwi</a> <?php echo $footer; ?>
					</div>
			        <div class="clearfix"></div>
				</footer>
				<!-- /Footer Content -->
			</div>
		</div>

		<!-- Import Javascript -->
		<script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery-ui/jquery-ui.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
		<script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
		
		<script src="<?php echo base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/raphael/raphael.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/morris.js/morris.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/raphael/raphael.min.js') ?>"></script>

		<script src="<?php echo base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/iCheck/icheck.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/skycons/skycons.js') ?>"></script>
			<!-- Flot -->
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
			<!-- Flot Plugins -->
		<script src="<?php echo base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
		<script src="<?php echo base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
			<!-- JQVMap -->
		<script src="<?php echo base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>

		<script src="<?php echo base_url('vendors/DateJS/build/date.js') ?>"></script>
			<!-- Bootstrap Date Range Picker -->
		<script src="<?php echo base_url('vendors/moment/min/moment.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
			<!-- bootstrap-datetimepicker --> 
		<script src="<?php echo base_url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>"></script>



		<!-- FullCalendar -->
		<script src="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.js') ?>"></script>
		

		<!-- Ion.RangeSlider -->
		<script src="<?php echo base_url('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') ?>"></script>
		<!-- Bootstrap Colorpicker -->
		<script src="<?php echo base_url('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') ?>"></script>
		<!-- jquery.inputmask -->
		<script src="<?php echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') ?>"></script>
		<!-- jQuery Knob -->
		<script src="<?php echo base_url('vendors/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
		

		<script src="<?php echo base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
		<script src="<?php echo base_url('vendors/google-code-prettify/src/prettify.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
		<script src="<?php echo base_url('vendors/switchery/dist/switchery.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js') ?>"></script>

			<!-- Validate -->
		<script src="<?php echo base_url('vendors/parsleyjs/dist/parsley.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/validator/validator.js') ?>"></script>

		<script src="<?php echo base_url('vendors/autosize/dist/autosize.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/starrr/dist/starrr.js') ?>"></script>
			<!-- Datatables -->
		<script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
			<!-- Custom JS -->


		<!-- PNotify -->
		<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.js') ?>"></script>
		<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js') ?>"></script>
		<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.nonblock.js') ?>"></script>

		
		
		<script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
		<!-- /Import Javascript -->


<!-- Date Picker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });

</script>

<!-- remove welcome notif pnotify and add notif -->
<script>
   $(document).ready(function (){
           $('.ui-pnotify').remove();
           $('.source').trigger("click");

   });

</script>




<!-- Add row and calculate -->

<script type="text/javascript">

	var t = $('#prod').DataTable( {
              "paging":   false,
                "ordering": false,
                "info":     false,
                "searching": false,
            });
         
    var counter = 1;

          $('#addRow').on( 'click', function () {
            t.row.add( [
              '<input style="width:100%;" class="form-control nama_obat" id="nama_obat" name="nama_obat" data-stok="#stok'+counter+'" data-unit="#unit'+counter+'" data-harga_jual="#harga_jual'+counter+'">',
              '<input id="stok'+counter+'" name="stok" class="form-control" readonly >',
              '<input id="unit'+counter+'" name="unit" class="form-control" readonly>',
              '<input id="harga_jual'+counter+'" name="harga_jual" class="form-control harga_jual" readonly>',
              '<input type="number" id="banyak'+counter+'" name="banyak" class="form-control banyak">',
              '<input id="subtotal'+counter+'" name="subtotal" class="form-control subtotal" readonly>',
              '<button id="removeproduk" class="btn btn-danger btn-sm" type="button"><span class="fa fa-trash"></span> Hapus</button>',
            ] ).draw( false );

            counter++;
  
          } );


          $('#addRow').click();


          $('#prod').on("click", "#removeproduk", function(){
            console.log($(this).parent());
            t.row($(this).parents('tr')).remove().draw(false);
          });


          $( ".nama_obat" ).autocomplete({
              source: "<?php echo site_url('example/get_autocomplete/?');?>"
            });


        $('#prod').on('change', '.nama_obat', function() {
		  var $select = $(this);
		  var nama_obat = $select.val();

		  $.ajax({
		    type: "POST",
		    url: "<?php echo base_url('example/product')?>",
		    dataType: "JSON",
		    data: { nama_obat: nama_obat },
		    cache: false,
		    success: function(data) {
		      $.each(data, function(nama_obat, stok, unit, harga_jual) {
		        $($select.data('stok')).val(data.stok);
		        $($select.data('unit')).val(data.unit);
		        $($select.data('harga_jual')).val(data.harga_jual);
		      });
		    }
		  });
		});


		$('#prod').on('change', '.banyak', function() {
		
		var $row = $(this).closest('tr');
		
        var unitCount = $row.find('.banyak').val() ;
        var unitPrice = $row.find('.harga_jual').val() ;
        $row.find('.subtotal').val(unitCount * unitPrice);
        updateTotal();
            });

		function updateTotal() {
		  var grandtotal = 0;
		  $('.subtotal').each(function() {
		    grandtotal += parseInt($(this).val(), 10);
		  });
		  $('#grandtotal').val(grandtotal);
		}



</script>

<script>
	 $.ajax({
		    
		   url: "<?php echo base_url('example/chart')?>",
		   method: "GET",
		    success: function(data) {
		    	var data = JSON.parse(data); 
		    	console.log(data);
		    	

		    	var stok = [];
			    var nama_kategori = [];
			    
			    for (var i in data){
			    	stok.push(data[i].stok);
			    	nama_kategori.push(data[i].nama_kategori);
			    }   
		      
		      var chartdata = {
				labels: nama_kategori,
				datasets : [
					{
						label: 'Stok obat',
						backgroundColor: 'rgba(26, 187, 156, 0.7)',
						borderColor: 'rgba(26, 187, 156, 0.7)',
						hoverBackgroundColor: 'rgba(26, 187, 156, 1)',
						hoverBorderColor: 'rgba(26, 187, 156, 1)',
						data: stok
					}
				]
			};

			var ctx = $("#canvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});


			}


});
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>


   


	</body>
</html>