$(document).ready(function() {

    $('.table').each(function () {
        let target = $(this).data('target');
        var table = $("#table_" + target);
        loadDataTable(table);
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



