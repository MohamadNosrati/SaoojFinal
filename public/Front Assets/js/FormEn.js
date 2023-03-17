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
        success:function (){
            $.toast({
                heading: 'Success',
                text: 'Your Message Has Sent Successfully.',
                showHideTransition: 'slide',
                icon: 'success'
            })
            $("input#fullName").val("")
            $("input#email").val("")
            $("textarea#CommentMessage").val("")
        },
        error:function(){
            $.toast({
                heading: 'Error',
                text: 'All Fields Are Required!',
                showHideTransition: 'fade',
                icon: 'error',
            })
        }
    })
})
