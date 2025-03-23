
$(document).ready(function() {
    $('.loadSelect').each(function () {
        let targetController = $(this).data('target');
        // $('#id_' + targetController)
        let url = baseClass + '/option_' + targetController;
        $(this).load(url);
    });

    // $("#kategori").change(function(){
    //     var id_kategori = $(this).val();

    //     if (id_kategori === "") {
    //         $("#produk").html('<option value="">Pilih Produk</option>');
    //         return;
    //     }

    //     $.ajax({
    //         url: "<?= base_url('user/Pemesanan/option_produk/') ?>" + id_kategori,
    //         type: "GET",
    //         success: function(data) {
    //             $("#produk").html(data);
    //         }
    //     });
    // });

    $('.table').each(function () {
        let target = $(this).data('target');
        var table = $("#table_" + target);
        loadDataTable(table);
    });

    $(document).on('hidden.bs.modal', '.modal', function () {
        const modal = $(this);
        const form = modal.find('form')[0];
    
        if (form) {
            form.reset(); // Reset form
        }
        
        modal.find('.text-danger').text(''); // Hapus pesan error
        modal.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid'); // Hapus kelas validasi
    });    

    
    $("#check-all").click(function() {
        $(".data-check").prop('checked', $(this).prop('checked'));
    });

});



$(document).on("click", ".btnRefresh", function() {
    let target = $(this).data('target');
    var table = $("#table_" + target);
    // var table = $("#table_" + currentClass);
    reloadTable(table);
});

$(document).on('click', '.btnTambah', function(){
	var targetController = $(this).data('target');
	$('#id').val('');
	
	$('#form_' + targetController).trigger('reset');
	$('#modal_' + targetController).modal('show');

})

function reloadTable(el) {
    return el.DataTable().ajax.reload(null, false);
}

function initTable(el) {
    el.DataTable({
        "retrieve": true,
        "processing": true,
        "order": [],
        "columnDefs": [],
        

    });
}

function loadDataTable(el, filter = '') {
    var ds = el.data("target");
    el.DataTable().destroy();
    el.DataTable({
        "retrieve": true,
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "scrollX": true,
        "ajax": {
            "url":  baseClass + '/' + 'table_' + ds,
            "type": "POST",
            "data": function(data) {
                data.filter = filter;
                console.log("Data yang dikirim:", data); // Debugging
            }
        },
        "columnDefs": [
            {
                "targets": [-1],
                "orderable": false,
            }
        ]
    });
}


$(document).on('click', '.editBtn', function() {
	let targetController = $(this).data('target');
	let id = $(this).data('value');
	let url = baseClass +'/edit_' + targetController + '/' + id;
	let form = '#form_' + targetController;
	$.ajax({
		url: url,
		type: 'POST',
        data: { id: id }, // Pastikan dikirim sebagai objek biasa
        dataType: 'json',
		success: function(response) {
			if (response.status) {
				$.each(response.data, function (i, item) {
					$(form + ' [name="' + i + '"]').val(item);
				});
                console.log("Modal yang dipanggil:", '#modal_' + targetController);
				$('#modal_' + targetController).modal('show');
			} else {
				alert(response.message);
			}
		}

	})
});



$(document).on('click', '.btnSave', function() {
    $('.text-danger').html('');
    $('input').removeClass('is-invalid');

    var targetController = $(this).data('target');
    var formElement = $('#form_' + targetController)[0];
    var table = $("#table_" + targetController);
    var formData = new FormData(formElement);

    $.ajax({
        url: baseClass + '/save_' + targetController,
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(response) {
            if (response.status) {
                // Gantilah alert dengan SweetAlert
                $('#modal_' + targetController).modal('hide'); // Tutup modal setelah OK ditekan
                swal({
                    title: "Sukses!",
                    text: response.message,
                    icon: "success",
                    button: "OK"
                }).then(() => {
                    reloadTable(table);
                });
                reloadTable(table);

            } else {
                $('.text-danger').html('');
                $('input').removeClass('is-invalid').removeClass('is-valid');

                if (response.error) {
                    for (var prop in response.error) {
                        if (response.error[prop] !== '') {
                            $('#form_' + targetController + " [name=" + prop + "] ").addClass('is-invalid')
                                .next('.text-danger').html(response.error[prop]);
                        }
                    }
                }
            }
        }
    });
});


$(document).on('click', '.deleteBtn', function() {
	var targetController = $(this).data('target');
	var table = $("#table_" + targetController);
	var id = $(this).data('value');
	$.ajax({
		url: baseClass +'/delete_' + targetController,
		type: 'POST',
		data: {
			id: id
		},
		dataType: 'json',
		success: function(response) {
			if (response.status) {
				alert(response.message);
				reloadTable(table);
			} else {
				alert(response.message);
			}
		}

	})
})


$(document).on('click', '.detailBtn', function() {
    let targetController = $(this).data('target');
    let id = $(this).data('value');
    let url = baseClass + '/get_detail_' + targetController + '/' + id;

    $.ajax({
        url: url,
        type: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function(response) {
            if (response.status) {
                // Mengisi data ke modal
                $.each(response.data, function(i, item) {
                    $('#detailModal [name="' + i + '"]').val(item);
                });

                // Menampilkan modal
                $('#detailModal').modal('show');
            } else {
                alert(response.message);
            }
        }
    });
});



