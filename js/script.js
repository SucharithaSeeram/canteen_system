// Mouse glow effect

document.addEventListener("mousemove", function(e){

const glow = document.createElement("div");

glow.classList.add("cursor-glow");

glow.style.left = e.pageX + "px";
glow.style.top = e.pageY + "px";

document.body.appendChild(glow);

setTimeout(()=>{
glow.remove();
},500);

});