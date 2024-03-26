$(document).ready(function () {
  ///////  Product Edit /////

  const csrf_token = $('meta[name="csrf-token"]').attr('content');

  $(document).on("click", ".remove-media", function (e) {
    e.preventDefault();

    let $btnThis = $(this);

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: '/dw-admin/remove-media-file',
          type: 'POST',
          data: { id: $(this).data('id'), type: $(this).data('type'), csrf_token: csrf_token },
          success: function (data) {
            if (data.status == 'success') {
              $btnThis.parent().remove();
              Swal.fire(
                'Deleted!',
                data.message,
                'success'
              )
            } else {
              Swal.fire({ text: data.message, icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
            }
          },
          error: function (error) {
            Swal.fire({ text: 'Something error please try later', icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
          }
        });
      }
    });

  });





  $(document).on("click", ".add-store-data-modal", function (e) {
    e.preventDefault();
    // $('.add-all-category').html('');

    $('#kt_modal_add_store').modal('show');
  });



  $(document).on("change", "#percentage", function (e) {
    e.preventDefault();
    var percentage = parseFloat($(this).val());
    $('.variant_price').each(function () {
      var originalPrice = parseFloat($(this).data('original-price'));
      var newPrice = originalPrice + (originalPrice * (percentage / 100));
      $(this).val(newPrice.toFixed(2));
    });
  });


  $(document).on("submit", ".save_vendor_product", function (e) {
    e.preventDefault();
    var url = $(this).attr('action');
    var method = $(this).attr('method');
    var data = new FormData($(this)[0]);

    $.ajax({
      url: url,
      type: method,
      data: data,
      contentType: false,
      processData: false,
      dataType: 'json',
      beforeSend: function () {
        $(this).prop("disabled", true);
      },
      success: function (data) {
        $(this).prop("disabled", false);

        if (data.status == 'success') {

          // ToasterSuccess(data.message);

          // Swal.fire({ text: data.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

          // window.location.href = '/dw-admin/vendor';
          Swal.fire({
            text: data.message,
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn btn-primary"
            }
          }).then((result) => {
            if (result.isConfirmed) {
              // window.location.href = '/dw-admin/vendor';
              window.location.reload();

            }
          });

        } else if (data.status == 'errors') {

          if (data.message.category) {

            Swal.fire({ text: data.message.category[0], icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

          }
        }
      },
    });



  });


  // $(document).on("click", ".remove-store-data", function (e) {
  //   e.preventDefault();

  //   var prodId = $(this).data('id');
  //   $.ajax({
  //     url: '/dw-admin/delete-store-product',
  //     type: "POST",
  //     data: { id: prodId, csrf_token: csrf_token },
  //     dataType: 'json',

  //     success: function (data) {
  //       $(this).prop("disabled", false);

  //       if (data.status == 'success') {
  //         // Handle success response
  //         // Swal.fire({ text: data.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
  //         Swal.fire({
  //           text: data.message,
  //           icon: "success",
  //           buttonsStyling: false,
  //           confirmButtonText: "Ok, got it!",
  //           customClass: {
  //             confirmButton: "btn btn-primary"
  //           }
  //         }).then((result) => {
  //           if (result.isConfirmed) {
  //             window.location.reload();
  //           }
  //         });

  //       } else if (data.status == 'errors') {
  //         // Handle errors response
  //         Swal.fire({ text: data.message.category[0], icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

  //       }
  //     },
  //   });
  // });



  $(document).on("click", ".remove-store-data", function (e) {
    e.preventDefault();

    var prodId = $(this).data('id');

    // Show confirmation alert
    Swal.fire({
      text: "Are you sure you want to remove this store?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, remove it!"
    }).then((result) => {
      if (result.isConfirmed) {
        // User confirmed, proceed with delete
        $.ajax({
          url: '/dw-admin/delete-store-product',
          type: "POST",
          data: { id: prodId, csrf_token: csrf_token },
          dataType: 'json',
          success: function (data) {
            if (data.status == 'success') {
              // Handle success response
              Swal.fire({
                text: data.message,
                icon: "success",
                confirmButtonText: "Ok, got it!",
                customClass: { confirmButton: "btn btn-primary" }
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.reload();
                }
              });
            } else if (data.status == 'errors') {
              // Handle errors response
              Swal.fire({
                text: data.message.category[0],
                icon: "error",
                confirmButtonText: "Ok, got it!",
                customClass: { confirmButton: "btn btn-primary" }
              });
            }
          },
        });
      }
    });
  });



  $(document).on("change", ".choosetype", function (e) {
    e.preventDefault();
    var types = $(this).val();
    if (types === 'admin') {
      $('#adminTable').removeClass('d-none');
      $('#vendorTable').addClass('d-none');
    } else if (types === 'vendor') {
      $('#adminTable').addClass('d-none');
      $('#vendorTable').removeClass('d-none');
    }
  });

});