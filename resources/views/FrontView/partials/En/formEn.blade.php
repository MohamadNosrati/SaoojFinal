<div class="form">
    <h4 class="dark:text-[#F1F1F2]">If You Have Any Questions</h4>
    <h4 class="dark:text-[#F1F1F2]">Please Don,t Hesitate to Send Us A Message</h4>
    <div class="itemForm">
        <Form class="data" action="{{route("comment-en.post")}}" method="post" enctype="multipart/form-data">
            @csrf
            <input id="fullName" class="bg-[#D6D6D6] text-[#4F4F4F] dark:bg-[#1D1D1D]" name="fullName" type="text" placeholder="FullName">
            <input id="email" class="bg-[#D6D6D6] text-[#4F4F4F] dark:bg-[#1D1D1D]" name="email" type="email" placeholder="Email">
            <textarea id="CommentMessage" class="bg-[#D6D6D6] text-[#4F4F4F] dark:bg-[#1D1D1D]" name="Comment" placeholder="Message">

            </textarea>
            <input type="submit" value="Send Message">
        </Form>
    </div>
{{--</div>--}}
