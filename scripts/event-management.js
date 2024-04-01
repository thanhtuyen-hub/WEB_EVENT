// Xem thông tin
$(document).ready(function(){
    $('.btn-view').click(function(event){
        event.stopPropagation(); 
        console.log("Button view clicked!");
        $('#form-view').show();

        $('body').append('<div class="overlay"></div>');
    });

    $('#form-view .form-header a').click(function(event){
        event.preventDefault(); 
        console.log("Close button clicked!");
        $('#form-view').hide();

        $('.overlay').remove();
    });

    $(document).on('click', '.overlay', function(){
        console.log("Overlay clicked!");
        $('#form-view').hide();
        $('.overlay').remove();
    });
});


// Sửa thông tin
$(document).ready(function(){
    $('#update').click(function(event){
        event.preventDefault(); 
        console.log("Update link clicked!"); 
        $('#form-edit').show(); 

        $('body').append('<div class="overlay"></div>');
    });

    $('#form-edit .form-header a').click(function(event){
        event.preventDefault(); 
        console.log("Close button clicked!");
        $('#form-edit').hide();

        $('.overlay').remove();
    });

    $(document).on('click', '.overlay', function(){
        console.log("Overlay clicked!");
        $('#form-edit').hide();
        $('.overlay').remove();
    });
});

// thêm thông tin
$(document).ready(function(){
    $('#insert').click(function(event){
        event.preventDefault(); 
        console.log("insert link clicked!"); 
        $('#form-insert').show(); 

        $('body').append('<div class="overlay"></div>');
    });

    $('#form-insert .form-header a').click(function(event){
        event.preventDefault(); 
        console.log("Close button clicked!");
        $('#form-insert').hide();

        $('.overlay').remove();
    });

    $(document).on('click', '.overlay', function(){
        console.log("Overlay clicked!");
        $('#form-insert').hide();
        $('.overlay').remove();
    });
});

