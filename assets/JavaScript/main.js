$(document).ready(function () {

    //CLASE ACTIVE

    $('.ai .fas.fa-globe[category="all"]').addClass('categoryItem-active');

    $('.item').click(function () {

        var catProduct = $(this).attr('category');

        //CLASE ACTIVE SELECTED

        $('.item').removeClass('categoryItem-active');
        $(this).addClass('categoryItem-active');

        //OCULTAR PRODUCTOS

        $('.articulo').hide();

        //MOSTRAR PRODUCTOS

        $('.articulo[category="' + catProduct + '"]').show();

    });

    $('.item[category="all"]').click(function () {

        $('.articulo').show();
    });

    $('.header .themeChanger .aChanger').click(function () {

        var state = $('.switch').attr('id');

        if (state == "light") {

            $('.header').removeClass('headerLight');
            $('.header').addClass('headerDark');
            $('body').css({ 'background': 'linear-gradient(#121212, #212121)' });
            $('.switch').removeClass('far fa-moon');
            $('.switch').addClass('fas fa-moon');
            $('.switch').css({ 'transition': '.5s', 'transform': 'rotate(360deg)' });
            $('.fas.fa-book').css({ 'color': 'black' });
            $('.fas.fa-home').css({ 'color': 'black' });
            $('.titleH1').css({'color':'white'});
            $('.titleH2').css({'color':'white'});
            $('.categories').css({'background-color':'#212121', 'box-shadow': '0px 0px 10px black'});
            $('.arts').css({'background-color':'#212121', 'box-shadow': '0px 0px 10px black'});
            $('.banner').css({'box-shadow': '0px 0px 10px black', 'background-color':'#212121'});
            $('.banner p').css({'color':'white'});
            $('#mail').css({'background-color':'#414141', 'color':'white'});
            $('#follow').css({'color':'white'});
            $('.spamSocial h1').css({'color':'white'});
            $('.spamSocial h2').css({'color':'white'});
            $('#p').css({'color':'black'});
            $('.switch').removeAttr('id');
            $('.switch').attr('id', 'dark');
        }

        else if (state == "dark") {

            $('.header').removeClass('headerDark');
            $('.header').addClass('headerLight');
            $('body').css({ 'background':'linear-gradient(white, #c9c9c9)'});
            $('.switch').removeClass('fas fa-moon');
            $('.switch').addClass('far fa-moon');
            $('.moon').css({ 'transition': '.5s', 'transform': 'rotate(-360deg)' });
            $('.fas.fa-book').css({ 'color': 'white' });
            $('.fas.fa-home').css({ 'color': 'white' });
            $('.titleH1').css({'color':'black'});
            $('.titleH2').css({'color':'black'});
            $('.categories').css({'background-color':'white', 'box-shadow': '0px 0px 12px grey'});
            $('.arts').css({'background-color':'white', 'box-shadow': '0px 0px 12px grey'});
            $('.banner').css({'box-shadow': '0px 0px 12px grey', 'background-color':'white'});
            $('.banner p').css({'color':'black'});
            $('#mail').css({'background-color':'white', 'color':'black'});
            $('#follow').css({'color':'black'});
            $('.spamSocial h1').css({'color':'black'});
            $('.spamSocial h2').css({'color':'black'});
            $('#p').css({'color':'white'});
            $('.switch').removeAttr('id');
            $('.switch').attr('id', 'light');
        }
    });

    var quantity = $('.ulSlider li').length;
    var position = 1;

    setInterval(function () {
        rightSlider();
    }, 8000);

    $('#right').click(function () {

        if (position == quantity) {
            position = 1;
        } else {
            position++;
        }

        $('.ulSlider li').hide();
        $('.ulSlider li:nth-child(' + position + ')').fadeIn();
    });

    $('#left').click(function () {

        if (position == quantity + 1) {
            position = 1;
        } if (position == 1) {
            position = 4;
        } else {
            position = position - 1;
        }

        $('.ulSlider li').hide();
        $('.ulSlider li:nth-child(' + position + ')').fadeIn();
    });
    position = 1;

    function rightSlider() {
        if (position == quantity) {
            position = 1;
        } else {
            position++;
        }

        $('.ulSlider li').hide();
        $('.ulSlider li:nth-child(' + position + ')').fadeIn();
    }
});