$(document).ready(function(){
    $(".doStatusChange").click(function(e){
        var action = $(this).attr('action');
        var status = $(this).attr('status');
        var bookId = $(this).attr('book-id');
        var element = $(this);
        element.closest('.holdr').addClass('hiddenDiv').slideUp("slow");
        $.ajax({
            type: 'POST',
            url:action,
            data:{
                'status':status,
                'book_id':bookId
            },
            success: function(response) {

                if(response.status ==200){
                    element.closest('body').find('.header div a.active span').html(
                        parseInt(element.closest('body').find('.header div a.active span').html()-1)
                    )
                    element.closest('body').find('.header div a.active').parent().next().find('span').html(
                        parseInt(element.closest('body').find('.header div a.active').parent().next().find('span').html())+1
                    )
                    var rowCount = element.closest('.mainDiv').children().not('.hiddenDiv').length;
                    if(rowCount < 5){
                        $('.viewMrBtn').remove();
                    }
                }else{
                    alert('ERROR !!, Please contact system administrator...')
                }
                
                
            }
        });
    });
    
});