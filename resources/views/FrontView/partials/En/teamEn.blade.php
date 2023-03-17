<div id="teamEn" class="team teamLightBg dark:teamDarkBg">
    <h1>Team  <span class="text-[black] dark:text-[#F1F1F2]">Our</span></h1>
    <div class="itemTeam">
        @foreach($team as $item)
            <div class="singleTeam">
                <div class="teamPic">
                    <img src="{{asset("images/team/".$item->image)}}" alt="{{$item->altEn}}">
                </div>
                <span class="dark:text-[#FCFCFD]">{{$item->nameEn}}</span>
                <b>{{$item->jobEn}}</b>
                <p class="dark:text-[#D6D6D6]">
                    {{$item->textEn}}
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
