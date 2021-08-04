
    $(function(){
        $('.addStock').on('click', function(){
            const id = $(this).data('id');
            const inputstock = $(this).data('stock');

            $.ajax({
                url: 'http://localhost/ApotekOnline/Admin/Item/getData',
                data: {id:id},
                method: 'post',
                dataType: 'json',
                success: function(data){
                    $('#formname').html(data.nama_item);
                    $('#id_itemStock').val(data.id_item);
                    $('#stock').val(data.stok);
                }
            });
        });
    	$('.add-data-item').on('click', function(){
        	$('#FormModalLabel').html('Form Add Item');
        	$('.modal-footer button[type=submit]').html("Save");
        	$('.modal-content form').attr('action', 'http://localhost/ApotekOnline/admin/item/add');
            $('#id_item').val(null);
            $('#nama_item').val(null);
            $('#id_kategori').val("Select Category :");
            $('#stok').val(null);
            $('#satuan').val(null);
            $('#harga').val(null);
      	});
      	$('.get-data-item').on('click', function(){
        	$('#FormModalLabel').html('Form Edit Item');
        	$('.modal-footer button[type=submit]').html("Update");
        	$('.modal-content form').attr('action', 'http://localhost/ApotekOnline/admin/item/edit');

        	const id = $(this).data('id');

        	$.ajax({
        		url: 'http://localhost/ApotekOnline/Admin/Item/getData',
        		data: {id:id},
        		method: 'post',
        		dataType: 'json',
        		success: function(data){
        			$('#id_item').val(data.id_item);
        			$('#nama_item').val(data.nama_item);
        			$('#id_kategori').val(data.id_kategori);
        			$('#stok').val(data.stok);
        			$('#satuan').val(data.satuan);
        			$('#harga').val(data.harga);
                    $('#txt-img').html(data.image);
                    $('#image').val(data.image);
        		}
        	});
      	});
      	$('.statusPemesanan').on('click', function(){
      		const id = $(this).data('id');
      		$('.modal-content form').attr('action', 'http://localhost/TravelTrip/Admin/Pemesanan/updateStatus');

        	$.ajax({
        		url: 'http://localhost/TravelTrip/Admin/Pemesanan/getStatus',
        		data: {id:id},
        		method: 'post',
        		dataType: 'json',
        		success: function(data){
        			$('#id_pemesanan').val(data.id);
        			$('#NIK').val(data.NIK);
        			$('#id_trip').val(data.id_trip);
        			$('#tgl_pemesanan').val(data.tgl_pemesanan);
        			$('#jumlah_orang').val(data.jumlah_orang);
        			$('#total').val(data.total);
        			if(data.status == '1'){
        				$('.modal-footer button[type=submit]').html("Deactivated!");
        				$('#status').val('0');	
        			}else{
        				$('.modal-footer button[type=submit]').html("Activated!");
        				
        				$('#status').val('1');
        			}
        			
        			
        			
        			
        		}
        	});
      		

      	});

    });
