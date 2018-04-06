$(document).ready(function(){

    // Agragar clase active al primer enlace
    $('.category_list .category_item[category="all"]').addClass('ct_item-active');

    // Filtrar productos
    $('.category_item').click(function(){
        var catProduct = $(this).attr('category');
        console.log(catProduct);

        // Agragar la clase active al seleccionar el botón
        $('.category_item').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        // Ocultar productos
        $('.product-item').css('transform', 'scale(0)');
        function hideProduct(){
            $('.product-item').hide();
        } setTimeout(hideProduct,400);

        // Mostrar productos
        function showProduct(){
            $('.product-item[category="'+catProduct+'"]').show();
            $('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
        } setTimeout(showProduct,400);
    });

    // Mostrar todos los productos

    $('.category_item[category="all"]').click(function(){
            $('.product-item[category="´perso"]').show();
            $('.product-item').css('transform', 'scale(1)');
        } setTimeout(showAll,400);
    });



});