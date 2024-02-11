//First way to make cursor and blure cursor
// document.addEventListener("mousemove",function(dets){ 
//     document.querySelector("#cursor").style.opacity=100
//     document.querySelector("#cursor").style.left=dets.x+"px"
//     document.querySelector("#cursor").style.top=dets.y+"px"
// })
// document.addEventListener("mousemove",function(dets){ 
//     // document.querySelector("#cursor-blur").style.opacity=100
//     //both will work querySelector & getElementById
//     document.getElementById("cursor-blur").style.opacity=100
//     document.querySelector("#cursor-blur").style.left=dets.x-120+"px"
//     document.querySelector("#cursor-blur").style.top=dets.y-120+"px"
// })


var crsr=document.getElementById("cursor")
document.addEventListener("mousemove",function(dets){
crsr.style.opacity=100
crsr.style.left=dets.x+"px"
crsr.style.top=dets.y+"px"
})
//Second way to make cursor and blure cursor

var crsrBlur=document.getElementById("cursor-blur")
document.addEventListener("mousemove",function(dets){
    crsrBlur.style.opacity=100
    crsrBlur.style.left=dets.x-120+"px"
    crsrBlur.style.top=dets.y-120+"px"
    })
gsap.to(".nav",{
    backgroundColor:"black",
    height:100,
    duration:1,
    // delay:1,
    scrollTrigger:{
        trigger:".nav",
        scroller:"body",
        // markers:true,
        start:"top -10%",
        scrub:1,
    }
})
gsap.to(".main",{
    backgroundColor:"black",
    // duration:1,
    scrollTrigger:{
        trigger:".main",
        scroller:"body",
        // markers:true,
        start:"top -30%",
        end:"top -80%",
        scrub:5,
    }
})