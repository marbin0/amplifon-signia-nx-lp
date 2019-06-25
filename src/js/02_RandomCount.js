$(function () {

    var num = Math.floor(Math.random() * (115 - 80) + 80) ;
    var numberValue = num;
    
    if (localStorage.getItem('number') === null) {
        localStorage.setItem('number', numberValue);
    }
    document.getElementById('counter').innerHTML = localStorage.getItem('number');
    
    $('#next8').on('click', function(){
        var storedNumber = localStorage.getItem('number') - 1;
        localStorage.setItem('number', storedNumber)
        document.getElementById('counter').innerHTML = localStorage.getItem('number');
    })
})