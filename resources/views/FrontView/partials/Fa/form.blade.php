<div class="form">
    <h4 class="dark:text-[#F1F1F2]">اگر سوالی دارید</h4>
    <h4 class="dark:text-[#F1F1F2]">لطفا در ارسال پیام به ما تردید نکنید !</h4>
    <div class="itemForm">
        <Form id="commentForm" class="data" action="{{route("comment.post")}}" method="post" enctype="multipart/form-data">
            @csrf
            <input id="fullName" class="bg-[#D6D6D6] text-[#4F4F4F] dark:bg-[#1D1D1D]" name="fullName" type="text" placeholder="نام و نام خانوادگی">
            <span style="display: block;width: 100%;color: red" id="fullNameCheck">

            </span>
            <input id="email" class="bg-[#D6D6D6] text-[#4F4F4F] dark:bg-[#1D1D1D]" name="email" type="email" placeholder="ایمیل">
            <span id="emailCheck">

            </span>
            <textarea id="CommentMessage" class="bg-[#D6D6D6] text-[#4F4F4F] dark:bg-[#1D1D1D]" name="Comment" placeholder="متن پیام">
            </textarea>
            <span style="display: block;width: 100%;color: red" id="commentCheck">

            </span>
            <input type="submit" value="ارسال پیام">
        </Form>
    </div>
{{--</div>--}}

