// Quando o menu for aberto
$('#navbarNav').on('shown.bs.collapse', function () {
    $('.navbar').addClass('navbar-dark-bg');
     
});

// Quando o menu for fechado
$('#navbarNav').on('hidden.bs.collapse', function () {
    $('.navbar').removeClass('navbar-dark-bg'); 
});
