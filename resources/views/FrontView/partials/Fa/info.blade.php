@if(!empty($project->info))
    <div class="projectInfo">
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.22222 0C1.00771 0 0 1.00771 0 2.22222V17.7778C0 18.9923 1.00771 20 2.22222 20H17.7778C18.9923 20 20 18.9923 20 17.7778V2.22222C20 1.00771 18.9923 0 17.7778 0H13.3333V2.22222H17.7778V8.88889H15.5556V11.1111H17.7778V17.7778H10V11.1111H12.2222V8.88889H5.55556V11.1111H7.77778V17.7778H2.22222V2.22222H7.31771L10.6402 5.5447L12.2114 3.97352L8.23785 0H2.22222Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]">مساحت :   {{$project->info->area}} متر مربع </h5>
            </div>
        </div>
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.33333 0V2H2.22222C1 2 0 2.9 0 4V18C0 19.1 1 20 2.22222 20H17.7778C19 20 20 19.1 20 18V4C20 2.9 19 2 17.7778 2H16.6667V0H14.4444V2H5.55556V0H3.33333ZM2.22222 4H17.7778V6H2.22222V4ZM2.22222 8H17.7778V18H2.22222V8Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]"> تاریخ شروع پروژه  :   <span dir="ltr">{{$project->info->startFa}}</span> </h5>
            </div>
        </div>
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0C9.82 0 9.63975 0.0386236 9.46875 0.112574L0.900391 3.84027C0.356391 4.07626 0 4.64843 0 5.28462V5.86236C0 6.94987 1 6.94987 1 6.94987V17.825C0.448 17.825 0 18.3122 0 18.9125C0 19.5128 0.448 20 1 20H19C19.552 20 20 19.5128 20 18.9125C20 18.3122 19.552 17.825 19 17.825V6.94987C19 6.94987 20 6.94987 20 5.86236V5.28462C20 4.64843 19.6436 4.07626 19.0996 3.84027L10.5312 0.112574C10.3612 0.0375361 10.18 0 10 0ZM3 6.94987H5V17.825H3V6.94987ZM7 6.94987H9V17.825H7V6.94987ZM11 6.94987H13V17.825H11V6.94987ZM15 6.94987H17V17.825H15V6.94987Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]">سبک معماری : {{$projectCat}} </h5>
            </div>
        </div>
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.33333 0V2H2.22222C1 2 0 2.9 0 4V18C0 19.1 1 20 2.22222 20H17.7778C19 20 20 19.1 20 18V4C20 2.9 19 2 17.7778 2H16.6667V0H14.4444V2H5.55556V0H3.33333ZM2.22222 4H17.7778V6H2.22222V4ZM2.22222 8H17.7778V18H2.22222V8Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]"> تاریخ پایان پروژه :  <span dir="rtl" style="direction: rtl !important;">{{$project->info->endFa}}</span></h5>
            </div>
        </div>
    </div>
    <div class="projectDescription">
        <div class="DescriptionIcon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0V1.81818V40H40V0H0ZM3.63636 3.63636H36.3636V36.3636H3.63636V3.63636ZM7.27273 7.27273V10.9091H32.7273V7.27273H7.27273ZM7.27273 14.5455V18.1818H23.6364V14.5455H7.27273ZM7.27273 21.8182V25.4545H32.7273V21.8182H7.27273ZM7.27273 29.0909V32.7273H23.6364V29.0909H7.27273Z" fill="#AE8649"/>
            </svg>
        </div>
        <div class="DescriptionText">
            <p class="dark:text-[#D6D6D6]">
                <span>توضیحات:</span>
                {{$project->info->textFa}}
            </p>
        </div>
    </div>
@else
    <div class="projectInfo">
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.22222 0C1.00771 0 0 1.00771 0 2.22222V17.7778C0 18.9923 1.00771 20 2.22222 20H17.7778C18.9923 20 20 18.9923 20 17.7778V2.22222C20 1.00771 18.9923 0 17.7778 0H13.3333V2.22222H17.7778V8.88889H15.5556V11.1111H17.7778V17.7778H10V11.1111H12.2222V8.88889H5.55556V11.1111H7.77778V17.7778H2.22222V2.22222H7.31771L10.6402 5.5447L12.2114 3.97352L8.23785 0H2.22222Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]">مساحت :دیتا وارد نشده است. </h5>
            </div>
        </div>
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.33333 0V2H2.22222C1 2 0 2.9 0 4V18C0 19.1 1 20 2.22222 20H17.7778C19 20 20 19.1 20 18V4C20 2.9 19 2 17.7778 2H16.6667V0H14.4444V2H5.55556V0H3.33333ZM2.22222 4H17.7778V6H2.22222V4ZM2.22222 8H17.7778V18H2.22222V8Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]"> تاریخ شروع پروژه  :
                    <span dir="ltr">دیتا وارد نشده است.</span>
                </h5>
            </div>
        </div>
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0C9.82 0 9.63975 0.0386236 9.46875 0.112574L0.900391 3.84027C0.356391 4.07626 0 4.64843 0 5.28462V5.86236C0 6.94987 1 6.94987 1 6.94987V17.825C0.448 17.825 0 18.3122 0 18.9125C0 19.5128 0.448 20 1 20H19C19.552 20 20 19.5128 20 18.9125C20 18.3122 19.552 17.825 19 17.825V6.94987C19 6.94987 20 6.94987 20 5.86236V5.28462C20 4.64843 19.6436 4.07626 19.0996 3.84027L10.5312 0.112574C10.3612 0.0375361 10.18 0 10 0ZM3 6.94987H5V17.825H3V6.94987ZM7 6.94987H9V17.825H7V6.94987ZM11 6.94987H13V17.825H11V6.94987ZM15 6.94987H17V17.825H15V6.94987Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]">سبک معماری : {{$projectCat}} </h5>
            </div>
        </div>
        <div class="itemInfo">
            <div class="iconInfo">
                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.33333 0V2H2.22222C1 2 0 2.9 0 4V18C0 19.1 1 20 2.22222 20H17.7778C19 20 20 19.1 20 18V4C20 2.9 19 2 17.7778 2H16.6667V0H14.4444V2H5.55556V0H3.33333ZM2.22222 4H17.7778V6H2.22222V4ZM2.22222 8H17.7778V18H2.22222V8Z" fill="#AE8649"/>
                </svg>
            </div>
            <div class="textInfo">
                <h5 class="dark:text-[#D6D6D6]">
                    تاریخ پایان پروژه :
                    <span dir="rtl">دیتا وارد نشده است.</span>
                </h5>
            </div>
        </div>
    </div>
    <div class="projectDescription">
        <div class="DescriptionIcon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0V1.81818V40H40V0H0ZM3.63636 3.63636H36.3636V36.3636H3.63636V3.63636ZM7.27273 7.27273V10.9091H32.7273V7.27273H7.27273ZM7.27273 14.5455V18.1818H23.6364V14.5455H7.27273ZM7.27273 21.8182V25.4545H32.7273V21.8182H7.27273ZM7.27273 29.0909V32.7273H23.6364V29.0909H7.27273Z" fill="#AE8649"/>
            </svg>
        </div>
        <div class="DescriptionText">
            <p class="dark:text-[#D6D6D6]">
                <span>توضیحات:</span>
                دیتا وارد نشده است.
            </p>
        </div>
    </div>
@endif
