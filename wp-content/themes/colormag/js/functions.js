$(document).ready(function() {

    /*DESAPARECER ENTRADAS EN EL HOME QUE APARECEN EN EL SLIDER*/

    if ($('body').hasClass('home')) {

        (function desapareceRepetidos() {

            var etiquetaSlider = $('.n2-ss-slider .n2-ss-layer h2'); //Llama a los elementos que contienen el titulo 
            var tituloSlider = []; //Crea el array

            var etiquetaEntrada = $('.home article header h2 a');
            var tituloEntrada = [];

            etiquetaSlider.each(function() { //Mete cada uno de los titulos dentro del array creado   
                tituloSlider.push($(this).text());
            });

            etiquetaEntrada.each(function() {
                tituloEntrada.push($(this).text());
            });

            var elemsComun = $(tituloEntrada).filter(tituloSlider); //Filtra las entradas del home con las del slider

            for (i = 0; i < elemsComun.length; i++) {
                $("h2 a:contains(" + elemsComun[i] + ")").parents("article").hide(); //Toma los elementos del array en comun y busca el parent principal y lo desaparece
                $('.home #content .post').animate({ opacity: '1' }, 500);
            }

        }());

    }

    /*CAMBIAR ALTO DEL TITULO EN LOS POSTS DE ACUERDO A SI HAY O NO SUBTITULOS O EL RESPONSIVE*/

    var contTitulo = $('.single-post .entry-header');

    if ($('body').hasClass('single-post')) {

        if ($('h2.subtitle').is(':empty')) {
            $('h2.subtitle').hide();
            $(contTitulo).css('height', '70px');
            $(contTitulo).css('margin-top', '-110px');
        }

        // Traduccion al español del boton de Facebook

        $('li.sharify-btn-facebook .sharify-title').html("compartir");

        //progress bar 

        var winHeight = $(window).height();
        var docHeight = $(document).height();
        var progressBar = $('progress');


        $(document).on('scroll', function() {


            (function porcentLectura() {
                max = docHeight - winHeight;
                progressBar.attr('max', max);
                value = $(window).scrollTop();

                if (value >= 0) {
                    progressBar.attr('value', value);
                } else {
                    progressBar.attr('value', 0);
                }

                var progressValue = $(progressBar).attr('value');

                if (progressValue >= 210) {
                    $(progressBar).css('visibility', 'visible');
                    $(progressBar).css('position', 'fixed');
                    $(progressBar).css('top', '0');
                    $(progressBar).css('margin-top', '0px');
                } else {
                    $(progressBar).css('position', 'relative');
                    $(progressBar).css('visibility', 'hidden');

                }

            }());

        })

    }

});