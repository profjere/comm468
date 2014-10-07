 function changeBackground() {
    //var color = ['#ddd','#ccc','#bbb','#aaa'];
    var color = ['green','red','grey','yellow'];
    var random = Math.floor((Math.random() * 4));
    document.body.style.background = color[random];
 }
 
