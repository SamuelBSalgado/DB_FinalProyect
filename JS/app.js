//Cada div padre contiene otros divs donde esta impresa la informacion del centro
//NO ELIMINES EL CLASS btnReservar del boton, tu al ladito le escribes la clase y se va a agregar.
$(function () {
  $('#search').keyup(function () {

    if ($('#search').val()) {
      let search = $('#search').val();
      $.ajax({
        url: '../PHP/centroSearch.php',
        type: 'POST',
        data: { search },
        success: function (response) {
          let information = JSON.parse(response);
          let template = ' ';
          information.forEach(data => {
            $('#salasInfo').html('');
            template += `
            
            <div class='resultados' codigo='${data.codigo}' name='${data.nombre}' telefono='${data.telefono}' calle='${data.calle}' ciudad='${data.ciudad}' email='${data.email}'>Nombre: ${data.nombre}, ${data.ciudad} 
            <p style='display: none;' id='${data.codigo}'>${data.des}</p>
            </div>
                
            `;
          });

          $('#divResultados').html(template);
          $('#search').css('border-bottom', 'none');

          $(document).ready(function () {
            if ($('#divResultados').find(".resultados").length) {
              //console.log('Si existe');
            } else {
              //console.log('No existe');
              $("#search").removeAttr("style");
              $('#search').css('border-color', 'black');
            }
          });

        }
      });
    } else {
      template = '';
      $('#divResultados').html(template);
      $("#search").removeAttr("style");
      $('#search').css('border-color', 'black');
    }
  })

  //IDEA: MODIFICAR EL METODO DE BUSCAR Y AGREGAR QUE BUSQUE COINCIDENCIAS ANTES DE LA PALABRA
  //O SEA: %busquedU%.


  $(document).on('click', '.resultados', function () {
    $("#search").removeAttr("style");
    $('#search').css('border-color', 'black');
    let input = document.getElementById('search');
    let resClick = $(this)[0];
    //Obtenemos los valores de las  pseudo clases;
    let id = $(resClick).attr('codigo');
    let nombre = $(resClick).attr('name');
    let telefono = $(resClick).attr('telefono');
    let calle = $(resClick).attr('calle');
    let ciudad = $(resClick).attr('ciudad');
    let email = $(resClick).attr('email');
    let des = $('#' + id).html();
    $('#divResultados').css('display', 'none');
    input.value = nombre;


    //Mostrar la opcion seleccionada abajo
    let tameplate = `
    <div codigo=${id} nombre style="border-style: groove; border-radius: 6px; border-color: rgb(82, 163, 255); background-color: rgb(209, 255, 191)">
      <p>Nombre: ${nombre}</p>
      <p>Calle: ${calle}</p>
      <p>Ciudad: ${ciudad}</p>
      <p>Información al correo: ${email}</p>
      <p>Teléfono: ${telefono}</p>
      <p style="font-weight:bold">¿Qué encontrarás aquí?
      <br>
      "${des}"
      </p>
      <button class='btnVerSalas' style="cursor: pointer">Ver actividades</button>
      <br>
      <br>
    </div>
    `;
    $('#info').html(tameplate);

    /*
    $.post('../PHP/centroInfo.php', { id }, function (response) {
      console.log(response);
    });
*/
  });

  $('#search').focus(function () {
    let v = $('#search').val();
    if (v == '') {
      $("#search").removeAttr("style");
      $('#search').css('border-color', 'black');
    } else {
      $('#search').css('border-bottom', 'none');
      $('#divResultados').css('display', 'block');
    }
  });

  $(document).on('click', '.btnVerSalas', function () {
    let element = $(this)[0].parentElement;
    let id = $(element).attr('codigo');
    $('#divFecha').css('display', 'block');


    $.post('../PHP/salasInfo.php', { id }, function (response) {
      let template = '';
      let information = JSON.parse(response);
      information.forEach(data => {
        template += `
        <div codigo='${data.codigo}' class='${data.salaNombre}' style="border-style: groove; border-radius: 6px; border-color: rgb(82, 163, 255); background-color: rgb(209, 255, 191)">
        <h3>${data.salaNombre}</h3>
        <p style="font-weight: bold">${data.salaDes}</p>
        <button class='btnFecha' >Elegir actividad</button>
        </div>
        <br>
        `;
        $('#salasInfo').html(template);
      });
    });
  });

  $(document).on('click', '.btnFecha', function () {

    let element = $(this)[0].parentElement;
    let codigo = $(element).attr('codigo');
    let salaNombre = $(element).attr('class');
    let fecha = $('#fecha').val();


    $.post('../PHP/save.php', { codigo, salaNombre, fecha }, function (response) {
      alert(response);
    });

  });


});

