$(document).ready(function () {
    $('select[name="status"]').on('change', function() {
        if($(this).val() == 'CANCELLED'){
            $('input[name="cancel_reason"]').parent().show();
        }
        else{
            $('input[name="cancel_reason"]').parent().hide();
        }
    })
});
$('input[name="cancel_reason"]').parent().hide();
