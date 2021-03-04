$ = jQuery;
$(document).ready(function() {
    $('#sampleInput').keyup(function(){
        $('#outputText').text($(this).val());

        // return a random color
        var colors = ['#F8B195', '#F67280', '#C06C84', '#6C5N7B', '#355C7D'];
        var color = colors[Math.floor(Math.random() * colors.length)];

        $('#outputText').css('color', color);
    });
});