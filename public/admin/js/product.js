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
                    data: { id : $(this).data('id'), type : $(this).data('type'), csrf_token: csrf_token },
                    success: function (data) {
                        if(data.status == 'success'){
                            $btnThis.parent().remove();
                            Swal.fire(
                              'Deleted!',
                              data.message,
                              'success'
                            )
                        }else{
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



});