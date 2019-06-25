//Umfrage Step 1
$('#next1').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 1');
    _tfa.push({notify: 'event', name: 'Step1', id: 1142431});
    obApi('track', 'Step 1');
})
//Umfrage Step 2
$('#next2').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 2')
    _tfa.push({notify: 'event', name: 'Step2', id: 1142431});
    obApi('track', 'Step2');
})
//Umfrage Step 3
$('#next3').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 3')
    _tfa.push({notify: 'event', name: 'Step3', id: 1142431});
    obApi('track', 'Step3');
})
//Umfrage Step 4
$('#next4').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 4')
    _tfa.push({notify: 'event', name: 'Step4', id: 1142431});
    obApi('track', 'Step 4');
})
//Umfrage Step 5
$('#next5').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 5')

})
//Umfrage Step 6
$('#next6').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 6')
    
})
//Umfrage Step 7
$('#next7').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage Step 7')
})
//Umfrage Step 8
$('#next8').on('click', function () {
    ga('send', 'event', 'umfrage', 'click', 'Umfrage senden')
    _tfa.push({notify: 'event', name: 'Absenden', id: 1142431});
    obApi('track', 'Absenden');
})
// Telefon
$('.hotline a').on('click', function () {
    ga('send', 'event', 'header', 'click', 'Telefonnummer Header')
})
//Logos
$('#phonak').on('click', function () {
    ga('send', 'event', 'logo', 'click', 'Phonak Logo')
})
$('#oticon').on('click', function () {
    ga('send', 'event', 'logo', 'click', 'Oticon Logo')
})
$('#resound').on('click', function () {
    ga('send', 'event', 'logo', 'click', 'ReSound Logo')
})
$('#signia').on('click', function () {
    ga('send', 'event', 'logo', 'click', 'signia Logo')
})

// Jetzt teilnehmen
$('#teilnehmenBtn').on('click', function(){
    _tfa.push({notify: 'event', name: 'Start'});
    obApi('track', 'Start');
})