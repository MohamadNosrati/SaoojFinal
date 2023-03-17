let iconDirection=document.querySelectorAll("div.iconDirection>img")
let answer=document.querySelectorAll("div.answer")
iconDirection.forEach((elem,index)=>{
    removeActiveQ()
    removeAccordion()
    elem.addEventListener("click",function (){
        elem.classList.toggle("activeQuestionDi")
        answer.forEach((item,i)=>{
            if (index===i){
                item.classList.toggle("activeAnswer")
                if (item.style.maxHeight) {
                    item.style.maxHeight = null;
                } else {
                    item.style.maxHeight = item.scrollHeight + "px";
                }
            }
        })
    })
})
function removeActiveQ(){
    iconDirection.forEach((elem)=>{
        elem.classList.toggle("activeQuestionDi")
    })
}
function removeAccordion(){
    answer.forEach((elem)=>{
        elem.classList.remove("activeAnswer")
    })
}