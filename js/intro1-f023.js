function intro_calcular() {
    
    var intro = introJs();
    intro.setOptions({
        steps: [
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><strong><h5>¡Hola!</h5></strong> Soy tu asistente Senabot<br> presiona siguiente para avanzar <br><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_intro.mp3" type="audio/mpeg"></audio></div><img class="senabot-img" src="imagenes/undraw/senabot.png" width="280px" alt=""">',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><br><strong><h4 class="text-success">Formato F023 planeación (concertación) versión 5</h4></strong><br><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_2.mp3" type="audio/mpeg"></audio></div><img class="senabot-img" src="imagenes/undraw/senabot.png" width="280px" alt=""">',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro1'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_3.mp3" type="audio/mpeg"></audio></div>', step: 1
            },
            {
                element: document.getElementById('intro2'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_4.mp3" type="audio/mpeg"></audio></div>', step: 2
            },
            {
                element: document.getElementById('intro3'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_5.mp3" type="audio/mpeg"></audio></div>', step: 3
            },
            {
                element: document.getElementById('intro4'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_6.mp3" type="audio/mpeg"></audio></div>', step: 4
            },
            {
                element: document.getElementById('intro5'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_7.mp3" type="audio/mpeg"></audio></div>', step: 5
            },
            {
                element: document.getElementById('intro6'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_8.mp3" type="audio/mpeg"></audio></div>', step: 6
            },
            {
                element: document.getElementById('intro7'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_9.mp3" type="audio/mpeg"></audio></div>', step: 7
            },
            {
                element: document.getElementById('intro8'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_10.mp3" type="audio/mpeg"></audio></div>', step: 8
            },
            {
                element: document.getElementById('intro9'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_11.mp3" type="audio/mpeg"></audio></div>', step: 9
            },
            {
                element: document.getElementById('intro10'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_13.mp3" type="audio/mpeg"></audio></div>', step: 10
            },
            {
                element: document.getElementById('intro11'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_14.mp3" type="audio/mpeg"></audio></div>', step: 11
            },
            
            {
                element: document.getElementById('intro12'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_19.mp3" type="audio/mpeg"></audio></div>', step: 12
            },
            {
                element: document.getElementById('intro13'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_20.mp3" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById('intro14'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_21.mp3" type="audio/mpeg"></audio></div>', step: 14
            },
            {
                element: document.getElementById('intro15'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_22.mp3" type="audio/mpeg"></audio></div>', step: 15
            },
            {
                element: document.getElementById('intro16'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_23.mp3" type="audio/mpeg"></audio></div>', step: 16
            },

            {
                element: document.getElementById('intro17'),
                intro: '<div class="btn mb-0 subtitulos"><audio autoplay class="audio-intro" controls><source src="audios/f023-01_v5/f023-1_24.mp3" type="audio/mpeg"></audio></div>', step: 17
            },


        ]
    });
    intro.start();
}
// Estilo personalizado para el tooltip */ es un CSS personalizado para que pueda modificarce el toltip
//.introjs-custom-tooltip {
//    max-width: 400px; /* Ancho máximo del tooltip */
//    font-size: 16px; /* Tamaño de fuente personalizado */
//    /* Otros estilos personalizados, como el fondo, el color de texto, el margen, etc. */
//}

// intro_calcular()