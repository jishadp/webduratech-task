$(document).ready(function(){
    $(".doStatusChange").click(function(e){
        var action = $(this).attr('action');
        var status = $(this).attr('status');
        var bookId = $(this).attr('book-id');
        var element = $(this);
        $.ajax({
            type: 'POST',
            url:action,
            data:{
                'status':status,
                'book_id':bookId
            },
            success: function(response) {
                element.closest('body').find('.header div a.active span').html(
                    parseInt(element.closest('body').find('.header div a.active span').html()-1)
                )
                element.closest('body').find('.header div a.active').parent().next().find('span').html(
                    parseInt(element.closest('body').find('.header div a.active').parent().next().find('span').html())+1
                )

                
                element.closest('.holdr').addClass('hiddenDiv').slideUp("slow");
                var rowCount = element.closest('.mainDiv').children().not('.hiddenDiv').length;
                console.log(rowCount);
                
                if(rowCount < 5){
                    $('.viewMrBtn').remove();
                }
                
            },
            error:function(response){
                $('#global-loader').hide();
            }
        });
    });
    
});