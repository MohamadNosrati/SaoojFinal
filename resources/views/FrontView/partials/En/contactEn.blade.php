<div class="contact">
    <h2 class="dark:text-[#D6D6D6]">Get In Touch With Us</h2>
    <div class="totalContact">
        <div class="singleContact">
            <img src="{{asset("Front Assets/Icons/Contact/email.svg")}}" alt="">
            <b>Email</b>
            <span class="dark:text-[#D6D6D6]">{{$sarooj->email}}</span>
        </div>
        <div class="singleContact">
            <img src="{{asset("Front Assets/Icons/Contact/location.svg")}}" alt="">
            <b>Address</b>
            <p class="dark:text-[#D6D6D6]">
                {{$sarooj->addressEn}}
            </p>
        </div>
        <div class="singleContact">
            <img src="{{asset("Front Assets/Icons/Contact/phone.svg")}}" alt="">
            <b>Phone Number</b>
            <span class="dark:text-[#D6D6D6]">{{$sarooj->phone1}}</span>
            @if(!empty($sarooj->phone2))
                <span class="dark:text-[#D6D6D6]">{{$sarooj->phone2}}</span>
            @endif
        </div>
    </div>
</div>
