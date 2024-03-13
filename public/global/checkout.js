$(document).ready(function () {

  const csrf_token = $('meta[name="csrf-token"]').attr('content');

  

  $(document).on("click", "#same-address", function (e) {
    var isChecked = $(this).prop('checked');
    if(isChecked == true){
        $('.shipping-address-section').addClass('d-none').hide();
    }else{
        $('.shipping-address-section').removeClass('d-none').show();
    }
  });


  $(document).on("change", "#billing_country, #shopping_country", function (e) {
     var type = $(this).data('type');
     $.ajax({
        url: '/get-country',
        method: 'POST',
        data: {
            id: $(this).val(),
            csrf_token: csrf_token
        },
        success: function (response) {
            var html = '<option data-display="Select">Choose...</option>';
            $.each(response.data, function(index, value) {
                html += '<option value="'+value.id+'">'+value.name+'</option>';
            });
            $('#'+type+'_state').html(html);
        },
    });
  });



  

});