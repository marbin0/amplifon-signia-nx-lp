const next = $('.next'),
    input01 = $('input[name="was"]'),
    input02 = $('input[name="wer"]'),
    input03 = $('input[name="probleme"]'),
    input04 = $('input[name="hoergeraet"]'),
    input05 = $('input[name="alter"]'),
    input06 = $('input[name="plz"]'),
    input07 = $('input[name="plz"]'),
    input08 = $('input[name="mail"]'),
    inactive = $('.next.inactive'),
    input = $('input[type="radio"]');

next.on('click', function () {
    if ($(this).hasClass('inactive') == false) {
        $(this).parent().removeClass('active');
        $(this).parent().next().addClass('active');
    }

})
input.on('change', function () {
    $(this).parent().parent().next('.btn').removeClass('inactive');
})

inactive.on('click', function () {
    if ($(this).hasClass('inactive')) {
        alert('Bitte treffen Sie eine gültige Auswahl!');
    }
})



