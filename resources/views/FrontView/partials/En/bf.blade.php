<div class="MainBf">
    <div class="swiper mySwiperBf">
        <div class="swiper-wrapper">
            @foreach($bfs->bfs as $bf)
                <div class="swiper-slide">
                    <main>
                        <div class="containerBf">
                            <div class="imageContainer">
                                <span class="before">Before</span>
                                <span class="after">After</span>
                                <img class="imageBefore sliderImage" src="{{asset("images/bf/".$bf->imageBefore)}}" alt="{{$bf->altBeforeEn}}" />
                                <img class="imageAfter sliderImage" src="{{asset("images/bf/".$bf->imageAfter)}}" alt="{{$bf->altAfterEn}}" />
                            </div>
                            <input type="range" min="0" max="100" value="50" class="sliderRange"/>
                            <div class="sliderLine">
                            </div>
                            <div class="sliderButton" aria-hidden="true">
                                <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4029 29.5693C12.1274 29.8611 11.9978 30.2352 12.0102 30.6044C12.0226 30.9736 12.177 31.3381 12.4714 31.6107L24.5192 42.7682C24.95 43.1671 25.5806 43.2699 26.1182 43.0279C26.6559 42.7873 26.9926 42.2472 26.973 41.664L26.1976 18.5661C26.178 17.9829 25.8058 17.4667 25.2532 17.2626C24.7006 17.0572 24.0783 17.2021 23.6753 17.6289L12.4029 29.5693Z"/>
                                    <path d="M32.8824 17.0065C32.3448 17.2471 32.008 17.7872 32.0276 18.3704L32.803 41.4683C32.8226 42.0515 33.1948 42.5677 33.7474 42.7718C34.3 42.9772 34.9223 42.8323 35.3253 42.4055L46.5977 30.4651C46.8725 30.174 47.0029 29.7996 46.9905 29.43C46.978 29.0605 46.8228 28.6956 46.5292 28.4237L34.4814 17.2662C34.0507 16.8673 33.42 16.7645 32.8824 17.0065Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M31.0066 59.9835C14.4474 60.5394 0.572831 47.5662 0.0169178 31.007C-0.538996 14.4478 12.4342 0.573226 28.9935 0.0173124C45.5527 -0.538601 59.4272 12.4346 59.9831 28.9938C60.539 45.5531 47.5658 59.4276 31.0066 59.9835ZM30.9059 56.9852C16.0026 57.4855 3.51555 45.8096 3.01523 30.9063C2.51491 16.003 14.1908 3.51595 29.0941 3.01562C43.9974 2.5153 56.4845 14.1912 56.9848 29.0945C57.4851 43.9978 45.8092 56.4849 30.9059 56.9852Z"/>
                                </svg>
                            </div>
                        </div>
                    </main>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
