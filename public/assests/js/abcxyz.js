jQuery(document).ready(function($){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').on('click','.ajax-cart',function () {
        let id = $(this).attr('value');
        let qty = 1;
        $.post('gio-hang/addcart',
            {
                id: id,
                qty: qty
            },
            function(){
                window.location.href = 'gio-hang';
            });
    });
});

jQuery(document).ready(function($){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').on('change','.ajax-qty',function () {
        let qty = $(this).val();
        let rowId = $(this).attr('rowId');
        let update = 'update_cart';
        $.post('gio-hang/update',
            {
                update: update,
                rowId: rowId,
                qty: qty
            },
            function(){
                window.location.reload();
            });
    });
});

