var posStep = $('ul.stepper-vertical li.warning').index();


if (posStep == 2) {
    var anim = l({
        container: ('proceso'), // Required
        path: '/lottie/Analisis_Aprobado.json', // Required
        renderer: 'svg', // Required
        loop: false, // Optional
        autoplay: true, // Optional
    });
}
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