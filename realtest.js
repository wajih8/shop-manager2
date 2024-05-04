function refresh() {
    setTimeout(times,1000)

}

function count(x){
  pr=document.getElementById('timers')
  setTimeout(count,1000)
  while (true) {
    setTimeout(count,1000)
    pr.innerHTML=x
    x=x+1
  }
}

function times(x) {
    da=new Date()
    
    s=da.getSeconds()
    m=da.getMinutes()
    h=da.getHours()
    ps=document.getElementById('holor')
    
    
    ps.style.backgroundColor=rgbToHex((h*4)+100,m+50,(s*2)+90)
    if(s<10){s="0"+s}
    if(m<10){m="0"+m}
    if(h<10){h="0"+h}
    ps.innerHTML=(h+":"+m+":"+s)
    refresh()
}
function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
  }
  
  function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
  }