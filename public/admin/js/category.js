// bootstrap 5 step widzad
$(document).ready(function () {

    function ToasterSuccess($msg) {
        $.fn.toaster({
            message: $msg,
            position: 'top-right',
            type: 'success',
        });
    }

    function ToasterError($msg) {
        $.fn.toaster({
            message: $msg,
            position: 'top-right',
            type: 'error',
        });
    }

    $('.choosefile').on('click', function () {
        $('#cat_image').click();
    });

    const csrf_token = $('meta[name="csrf-token"]').attr('content');

    $(document).on("submit", ".save-category", function (e) {
        e.preventDefault();

        if ($('#category').val() == '') {
            $('.error-category').text('Category field is required');
        } else {
            $('.error-category').text('');
        }

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

                $('.error-user').text('');
                $('.error-password').text('');
                $('.catBtn').html('');

                if (data.status == 'success') {
                    $('#category').val('');
                    $('#sub_category').val('');

                    // ToasterSuccess(data.message);

                    Swal.fire({ text: data.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

                    resetCKEditor();
                    
                    // setTimeout(() => {
                    //     location.reload();
                    // }, 1000);
                }else if(data.status == 'errors'){

                   
                    if(data.message.category){
                      
                    Swal.fire({ text: data.message.category[0], icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

                    }
                    
      
                  }
            },
            error: function (error) {
                $('.error-user').text('');
               
            }
        });



    });


    $(document).on("change", ".sub_category", function (e) {
        e.preventDefault();
        var currentSelect = $(this);

        if(currentSelect.val()){
            $.ajax({
                url: '/dw-admin/get-category',
                type: 'POST',
                data: { id: $(this).val(), csrf_token: csrf_token },
                success: function (response) {
                    console.log(response);
                    
    
                    if (response.status === 'success') {
                        var subcategories = response.data.subcategory;
                        if (subcategories.length > 0) {
                            currentSelect.nextAll('.sub_category').remove();
                            var newSelect = $('<select class="form-control sub_category mb-3" name="sub_category[]" id="sub_category">');
                            newSelect.append($('<option>', { value: '', text: 'Choose Subcategory' }));
                            
                            $.each(subcategories, function (index, subcategory) {
                                newSelect.append($('<option>', { value: subcategory.id, text: subcategory.name }));
                            });

                            currentSelect.after(newSelect);

                        }else{

                            currentSelect.nextAll('.sub_category').remove(); 
                        }
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }else{
            currentSelect.nextAll('.sub_category').remove();
        }

       
    });

    $('#category').on('input', function () {
        $('.error-category').text('');
    });


    function resetCKEditor() {
        // Clearing the editor's content
        editorInstance.setData('');
        // Alternatively, you can destroy the instance and reinitialize it
        editorInstance.destroy()
            .then(() => {
                // Reinitialize CKEditor with default configuration
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(newEditor => {
                        // Assign the new editor instance to a variable for further use
                        editorInstance = newEditor;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
    }


    $(document).on("click", ".show-cate-choose-modal", function (e) {
        e.preventDefault();

        $('.add-all-category').html('');

        $.ajax({
            url: '/dw-admin/list-all-category',
            type: 'POST',
            data: { csrf_token: csrf_token },
            success: function (response) {
                if (response.status === 'success') {
                    var html = '<label class="form-label">Choose category</label><select class="form-control sub_category mb-3" name="sub_category[]" id="sub_category"><option value="">Choose Category</option>';
                    var subcategories = response.data;
                    $.each(subcategories, function (index, subcategory) {
                        html += '<option value="'+subcategory.id+'">'+subcategory.name+'</option>';
                    });
                    html += '</select>';
                   $('.add-all-category').html(html);
                }else{
                    $('.add-all-category').html('');
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });

        $('#kt_modal_add_category').modal('show');
    });

    

    $(document).on("click", ".remove", function (e) {
        e.preventDefault();
        $(this).parent().remove();
    });

    $(document).on("submit", ".get-category-name", function (e) {
        e.preventDefault();

        var $btnThis = $(this);

        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = $(this).serialize();

        $.ajax({
            url: url,
            type: method,
            data: data,
            beforeSend: function () {
            //   $(this).prop("disabled", true);
            },
            success: function (data) {
            
                $btnThis.prop("disabled", false);

                var subcategories = data.data;
             

              if(data.status == 'success'){
               
                // ToasterSuccess(data.message);

                var html = '<ul class="d-flex mb-4">';
                var lastSubcategoryId = ''; 

                $.each(subcategories, function (index, subcategory) {
                    html += '<li>'+subcategory.name+'</li>';
                    lastSubcategoryId = subcategory.id;
                });
                html += '<input type="hidden" name="category[]" value="'+lastSubcategoryId+'">';
                html += '<li class="remove"><i class="fas fa-trash-alt"></i></li>';
                html += '</ul>';

               $('.category-step').append(html);

               $('#kt_modal_add_category').modal('hide');

              }else if(data.status == 'error'){
              
              }
             
            },
            error: function (error) {
              // Handle error response
              console.error('Error:', error);
              $btnThis.prop("disabled", false);
            }
          });
  
      });



});