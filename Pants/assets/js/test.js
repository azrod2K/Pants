$("div").css('background', function () {
    var bg = ('url(' + $(this).data("setbg") + ') no-repeat center center fixed');
    return bg;
});