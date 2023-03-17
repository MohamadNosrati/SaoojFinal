<div id="team" class="team teamLightBg dark:teamDarkBg">
    <h1>تیم <span class="text-[black] dark:text-[#F1F1F2]">ما</span></h1>
    <div class="itemTeam">
        @foreach($team as $item)
            <div class="singleTeam">
                <div class="teamPic">
                    <img src="{{asset("images/team/".$item->image)}}" alt="{{$item->altFa}}">
                </div>
                <span class="dark:text-[#FCFCFD]">{{$item->nameFa}}</span>
                <b>{{$item->jobFa}}</b>
                <p class="dark:text-[#D6D6D6]">
                    {{$item->textFa}}
                </p>
                <div class="TeamSocials">
                    @foreach($item->socials as $social)
                        <a href="{{$social->link}}">
                            <svg class="svgLight hover:svgLightHover dark:hover:svgDarkHover" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="{{$social->icon}}"/>
                            </svg>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

