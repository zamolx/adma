var timer = {
    deadline : 15,
    now: 0,
    counter: "",
    clock : function() {
        this.counter = setInterval( function() {
            time.now ++;
            if (time.now === time.deadline) {
                time.clearClock();
                document.getElementById('answer').style.display='none';
            }
        },1000);
    },
    clearClock : function() {
        clearInterval(this.counter);
        this.now = 0;
    }
}
var time= Object.create(timer);
time.clock();
var changeFrom = document.getElementById('czechRepublic');
changeFrom.addEventListener("change", function(e){
    if (e.target.value != 'CZ')
    {
        document.getElementById('outsideCZTo').style.display='none';
    } else {document.getElementById('outsideCZTo').style.display='block'; }
})
var changeTo = document.getElementById('FromCountryRegion');
changeTo.addEventListener("change", function(e){
    if (e.target.value != 'CZ')
    {
        document.getElementById('outsideCZFrom').style.display='none';
    } else {document.getElementById('outsideCZFrom').style.display='block'; }
})