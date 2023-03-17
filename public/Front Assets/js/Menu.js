const pjs=document.getElementById("pjs")
const psj=document.getElementById("psj")
const subPj=document.querySelector("div.subPj")
const subPjMb=document.querySelector("div.subPjMb")
const html = document.getElementById("html")
const darkMode = document.getElementById("darkMode")
const world=document.getElementById("world")
const lge=document.querySelector("div.faEn")
const hamburger=document.querySelector("div.hamburger>svg")
const navMb=document.querySelector("nav.mb")
const close=document.getElementById("close")
const closeEn=document.getElementById("closeEn")
const lgeMb=document.getElementById("lgeMb")
const main=document.querySelector("section.main")
let clickCoverW="";
let clickCoverH="";
let clickCoverP="";
function toggleDark() {
    if (html.classList.contains('dark')) {
        html.classList.remove('dark');
        localStorage.setItem("theme", "light");
        darkMode.src = "icons/MainPage/mooon.svg"
    } else {
        html.classList.add('dark');
        localStorage.setItem("theme", "dark");
        darkMode.src = "icons/MainPage/sun.svg"
    }
}
if (localStorage.getItem("theme") === "dark") {
    html.classList.add('dark');
    darkMode.src = "icons/MainPage/sun.svg"

}
document.getElementById("darkMode").addEventListener('click', toggleDark);
pjs.addEventListener("click",function (){
    this.classList.toggle("activeQuestionDi")
    subPj.classList.add("activeAnimation")
    subPj.classList.toggle("activeSub")
    clickCoverP=document.createElement("div")
    clickCoverP.setAttribute("class","clickCoverP")
    main.prepend(clickCoverP)
    clickCoverP.addEventListener("click",function (){
        main.removeChild(clickCoverP)
        subPj.classList.remove("activeSub")
        pjs.classList.remove("activeQuestionDi")
    })
})
lgeMb.addEventListener("click",function (){
    this.classList.toggle("activeQuestionDi")
    subPjMb.classList.add("activeAnimation")
    subPjMb.classList.toggle("activeSub")
})
world.addEventListener("click",function () {
    lge.classList.toggle("activeAnimation")
    lge.classList.toggle("activeSub")
    clickCoverW=document.createElement("div")
    clickCoverW.setAttribute("class","clickCoverW")
    main.prepend(clickCoverW)
    clickCoverW.addEventListener("click",function (){
        main.removeChild(clickCoverW)
        lge.classList.remove("activeSub")
    })
})
hamburger.addEventListener("click",function (){
    navMb.classList.add("activeNavMbFa")
    navMb.classList.add("activeNavMbEn")
    clickCoverH=document.createElement("div")
    clickCoverH.setAttribute("class","clickCoverH")
    main.prepend(clickCoverH)
    clickCoverH.addEventListener("click",function (){
        main.removeChild(clickCoverH)
        navMb.classList.remove("activeNavMbEn")
        navMb.classList.remove("activeNavMbFa")
    })
})
close.addEventListener("click",function (){
    navMb.classList.remove("activeNavMbEn")
    navMb.classList.remove("activeNavMbFa")
})


