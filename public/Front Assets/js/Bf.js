var swiper = new Swiper(".mySwiperBf", {
    direction: "vertical",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
const container=document.querySelectorAll("div.containerBf")
const range=document.querySelectorAll("input.sliderRange")
range.forEach((elem,index)=>{
    elem.addEventListener("input",function (e){
        container.forEach((item,i)=>{
            if (index===i){
                item.style.setProperty("--position",`${e.target.value}%`)
            }
        })
    })
})


