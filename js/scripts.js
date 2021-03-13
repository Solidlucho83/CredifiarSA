((function(){
    'use strict';
    
    $('.dropdown-submenu a.test').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });



    var windowHeight = $(window).height(); 
    var scrollVertical = 0;
    var i = 0;
    windowHeight = windowHeight-270;
    
    $(window).scroll(function () {
      
        // EFECTO NAVBAR
        var scroll = $(window).scrollTop();
        if (scroll > (windowHeight)) {            
            $('.navbar').addClass('bg-credifiar');
            $('.navbar').addClass('text-credifiar');
            // btn-outline-light-barra
            $('#btn-ingreso').addClass('btn-outline-light-middle');
            $('#btn-ingreso').removeClass('btn-outline-light-top');
        }else{
            $('.navbar').removeClass('bg-credifiar');
            $('.navbar').removeClass('text-credifiar');
            // btn-outline-light-barra
            $('#btn-ingreso').removeClass('btn-outline-light-middle');
            $('#btn-ingreso').addClass('btn-outline-light-top');
        }
        
        // ANIMACION NUMERO
        scrollVertical = window.scrollY;
        if (scrollVertical >= 150 && i == 0) {
            $('#animacion-numeros .counter:nth-child(1) p').animateNumber({number:478},1500);
            $('#animacion-numeros .counter:nth-child(2) p').animateNumber({number:200},1500);
            $('#animacion-numeros .counter:nth-child(3) p').animateNumber({number:894},1500);
            $('#animacion-numeros .counter:nth-child(4) p').animateNumber({number:78},1500);
            i = 1;
            // console.log(scrollVertical);
        }
    });
    // PRUEBA
    $("#pruebaaa").hide();
    // ver detalles de sucursales
    $("#detalle-central").show();

    $("#list-central-list").click(function(){
        $(".detalle-locales").hide(); 
        $("#detalle-central").show();
      });

      $("#list-aristobulo-list").click(function(){
        $(".detalle-locales").hide(); 
        $("#detalle-aristobulo").show();
      });
      
      $("#list-esperanza-list").click(function(){
        $(".detalle-locales").hide(); 
        $("#detalle-esperanza").show();
      });

      $("#list-parana-list").click(function(){
        $(".detalle-locales").hide(); 
        $("#detalle-parana").show();
      });

      $("#list-ceres-list").click(function(){
        $(".detalle-locales").hide(); 
        $("#detalle-ceres").show();
      });
    
    //   fin de detalles

    // demora de descarga
    $("#demora_descarga").hide();

    $("#mostrar_resumen").click(function(){
      $("#demora_descarga").show();
    });

  }))();