$("input#fullName").val("")
$("input#email").val("")
$("textarea#CommentMessage").val("")
$('.data').submit(function (e){
    e.preventDefault()
    let fullName=$("input#fullName").val()
    let email=$("input#email").val()
    let text=$("textarea#CommentMessage").val()
    let token=$('input[name="_token"]').val()
    let action=$("form.data").attr("action")
    $.ajax({
        url:action,
        type:'POST',
        data:{
            fullName:fullName,
            email:email,
            text:text,
            _token:token
        },
        error:function(){
            $.toast({
                heading: 'خطا!',
                text: 'پر کردن تمام فیلد ها الزامی است!     از فرمت صحیح ایمیل استفاده کنید! حداکثر طول متن پیام شما  کاراکتر 1000 است!   ' ,
                showHideTransition: 'fade',
                icon: 'error',
                position:'bottom-right'
            })
        },
        success:function (data){
            $.toast({
                heading: 'Success',
                text: 'پیام شما با موفقیت ارسال شد و در صورت تایید ادمین در بخش نظرات نمایش داده می شود.',
                showHideTransition: 'slide',
                icon: 'success'
            })
            $("input#fullName").val("")
            $("input#email").val("")
            $("textarea#CommentMessage").val("")
        },
    })
})
