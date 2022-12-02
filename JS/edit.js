$(document).ready(function () {
  $(document).on('click', '.btnBuscar', function () {

    let codigo = $('.codigo').val();
    console.log(codigo);
    $.ajax({
      url: '../PHP/editBuscarCentro.php',
      type: 'POST',
      data: { codigo },
      success: function (response) {
        let information = JSON.parse(response);
        information.forEach(data => {

          $('#codigo').attr("value", data.codigo);
          $('#nombre').attr("value", data.nombre);
          $('#calle').attr("value", data.calle);
          $('#ciudad').attr("value", data.ciudad);
          $('#telefono').attr("value", data.telefono);
          $('#email').attr("value", data.email);
          $('#des').val(data.des);

        });
        $('.btnUpdate').css("display", "block");
      }
    });
  });


  $(document).on('click', '.btnUpdate', function () {
    let codigo = $('#codigo').val();
    let nombre = $('#nombre').val();
    let calle = $('#calle').val();
    let ciudad = $('#ciudad').val();
    let telefono = $('#telefono').val();
    let email = $('#email').val();
    let des = $('#des').val();

    $.post('../PHP/centroUpdate.php', { codigo, nombre, calle, ciudad, telefono, email, des }, function (response) {
      alert(response);
    });
  });


  $(document).on('click', '#btnEliminar', function () {
    let codigo = $('#codigo').val();
    $.post('../PHP/centroDelete.php', { codigo }, function (response) {
      alert(response);
      location.reload();
    });
  });

});
