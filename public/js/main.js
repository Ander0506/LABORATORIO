// var posStep = $('ul.stepper-vertical li.warning').index();

    // switch(pos) {
    //     case 0:
    //         return '/lottie/Espera_Confirmacion.json';
    //         break;
    //     case 1:
    //         return '/lottie/Analisis_Aprobado.json';
    //         break;
    //     case 2:
    //         return anim = bodymovin.loadAnimation({
    //             container: document.getElementById('proceso'), // Required
    //             path: '/lottie/Enviando_Muestra.json', // Required
    //             renderer: 'svg', // Required
    //             loop: false, // Optional
    //             autoplay: true, // Optional
    //         });
    //         break;
    //     case 3:
    //         return '/lottie/Muestra_Entregada.json';
    //         break;
    //     case 4:
    //         return '/lottie/Analisis_Proceso.json';
    //         break;
    //     case 5:
    //         return '/lottie/Analisis_Finalizado.json';
    //         break;
    //     default:
    //         return '';

$(document).ready(function () {
    $('#TableUsu').DataTable();
    $('#TableLab').DataTable();
    $('.dataTables_length').addClass('bs-select');
});

function logout() {
    event.preventDefault();
    $('#logout-form').submit();
}

function ll(){
    lottie.loadAnimation({
        container: 'proceso', // the dom element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: 'Analisis_Aprobado.json' // the path to the animation json
    });
}