function placeDate(){
    var today = new Date();
    var hour=today.getHours();
    var minutes=today.getMinutes();
    var month=today.getMonth();
    var day=today.getDate();
   
    if (hour>12){
        hour=hour-12;
    }
    
    var theTime=hour+':'+minutes;
    var theMonth;
    
    switch(month) {
        case 0:
            theMonth='January';
            break;
        case 1:
            theMonth='February';
            break;
        case 2:
            theMonth='March';
            break;
        case 3:
            theMonth='April';
            break;
        case 4:
            theMonth='May';
            break;
        case 5:
            theMonth='June';
            break;
        case 6:
            theMonth='July';
            break;
        case 7:
            theMonth='August';
            break;
        case 8:
            theMonth='September';
            break;
        case 9:
            theMonth='October';
            break;
        case 10:
            theMonth='November';
            break;
        default:
            theMonth='December';
            break;
    }
    var theDate=theMonth+" "+day;
    var theEntireDate="<h2>"+theDate+". "+theTime+" (at page load).</h2";
    var el=document.getElementById('content');
    el.innerHTML=theEntireDate;
    
    
   
}
