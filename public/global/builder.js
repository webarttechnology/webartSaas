$(document).ready(function () {

    function ToasterMsg(msg, type){
        if (type === 'success') {
            $('body').append('<div id="trixcarttoaster" class="toaster-success" style="font-size: 17px; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background-color: #333; color: #fff; padding: 15px 25px; border-radius: 4px; display: none; z-index: 999;"></div>');
            $('#trixcarttoaster').text(msg).fadeIn().delay(5000).fadeOut();
            
        } else{
            $('body').append('<div id="trixcarttoaster" class="toaster-error" style="font-size: 17px; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background-color: #bb1010; color: #fff; padding: 15px 25px; border-radius: 4px; display: none; z-index: 999;"></div>');
            $('#trixcarttoaster').text(msg).fadeIn().delay(5000).fadeOut();
        }
        setTimeout(function() {
            $('#trixcarttoaster').remove();
        }, 5000);
    }

    const csrf_token = $('meta[name="csrf-token"]').attr('content');


    var tempElement;


    function fetchBuilder(section, type)
    {

        $.ajax({
            url: '/edit-builder',
            method: 'POST',
            data: {
                section: section,
                csrf_token: csrf_token
            },
            success: function (response) {

                tempElement = document.createElement('div');
                tempElement.innerHTML = response.data;

                setTimeout(() => {
                    
                    if(type == 'edit'){
                        $('#myModal').modal('show');
                        $('#builder-section').html(response.data);
                        runCommon();
                    }

                }, 1000);
            },
            error: function (xhr, status, error) {
                // Handle errors
            }
        });

    }

    $(document).on("click", ".theme-builder-model", function (e) {
        e.preventDefault();

        var section = $(this).data('section');

        fetchBuilder(section, 'edit');

        // $.ajax({
        //     url: '/edit-builder',
        //     method: 'POST',
        //     data: {
        //         section: section,
        //         csrf_token: csrf_token
        //     },
        //     success: function (response) {
        //         $('#builder-section').html(response.data);
        //         setTimeout(() => {
        //             collectData('radio-tile-group');
        //             runCommon();
        //             $('#myModal').modal('show');
        //         }, 1000);
        //     },
        //     error: function (xhr, status, error) {
        //         // Handle errors
        //     }
        // });
    });



    $(document).on("click", ".theme-builder-remove", function (e) {
        e.preventDefault();


        var $ThisBtn = $(this);

        var section = $(this).data('section');

        var type = $(this).text();

        fetchBuilder(section, 'remove');

         setTimeout(() => {

            var elementsWithClass = tempElement.getElementsByClassName(section+'-fetch-html-'+0);
            if (elementsWithClass.length > 0) {
    
                var htmlContent = elementsWithClass[0].innerHTML;
    
                saveEditTheme(section, htmlContent, type);
    
                if(type.trim() == 'Remove'){
    
                    $(this).html('<i class="fa fa-undo"></i> Back');
        
                    $(this).closest('section').css({
                        'height': '200px',
                    });
            
                    $("#" + section).find("div:first").css({
                        'display': 'none',
                        'opacity': '0',
                    });
        
                }else{

                    backEditTheme(section, $ThisBtn);
        
                }
    
            } else {
                console.log('No element found with the class '+section+'"-fetch-html" ');
            }
            
         }, 1000);
        
    });


    $(document).on("click", ".radio-button", function (e) {

        var section = $(this).data('section');
        var number = $(this).data('number');

        var elementsWithClass = tempElement.getElementsByClassName(section+'-fetch-html-'+number);

        if (elementsWithClass.length > 0) {
            var htmlContent = elementsWithClass[0].innerHTML;

            setTimeout(function() {

                saveEditTheme(section, htmlContent, 'Add');

                $('#'+section).html(htmlContent);

                $('#'+section).closest('section').css({
                    'height': '',
                });

                var elements = document.querySelectorAll('.theme-builder-remove');

                elements.forEach(function(element) {
                    if (element.getAttribute('data-section') === section ) {
                        element.innerHTML = '<i class="fa-solid fa-trash-can"></i> Remove';
                    } 
                });

                setTimeout(() => {
                    runCommon();
                    $('#myModal').modal('hide');
                    htmlContent = '';
                    tempElement = '';
                }, 1000);

            }, 1000);
        } else {
            console.log('No element found with the class '+type+'"-fetch-html" ');
        }
    });


    function saveEditTheme(section,content, action){

        var url = window.location.pathname;
        var newUrl  = url.replace(/\//g, '');

        if(newUrl){
            var page = newUrl;
        }else{
            var page = 'home';
        }

        $.ajax({
            url: '/edit-theme-save',
            method: 'POST',
            data: {
                page: page,
                section: section,
                content: content,
                action: action,
                csrf_token: csrf_token
            },
            success: function (response) {
                console.log("Success");
            },
            error: function (xhr, status, error) {
                // Handle errors
            }
        });

    }

    function backEditTheme(section, $ThisBtn){

        var url = window.location.pathname;
        var newUrl  = url.replace(/\//g, '');

        if(newUrl){
            var page = newUrl;
        }else{
            var page = 'home';
        }

        $.ajax({
            url: '/back-edit-theme',
            method: 'POST',
            data: {
                page: page,
                section: section,
                csrf_token: csrf_token
            },
            success: function (response) {

                $ThisBtn.html('<i class="fa-solid fa-trash-can"></i> Remove');
        
                $ThisBtn.closest('section').css({
                    'height': '',
                });
    
                $("#" + section).find("div:first").css({
                    'display': '',
                    'opacity': '1',
                });

                $("#" + section).html(response.data);

                runCommon();

            },
            error: function (xhr, status, error) {
                // Handle errors
            }
        });

    }

   

});