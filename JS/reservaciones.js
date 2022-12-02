$(document).ready(function showResults() {
  let search = '1';
  $.ajax({
    url: '../PHP/saveSearch.php',
    type: 'POST',
    data: { search },
    success: function (response) {
      let information = JSON.parse(response);
      let template = ' ';
      information.forEach(data => {
        $('#salasInfo').html('');
        template += `
        <div id='${data.nombresala}'>
          <div class='showReservaciones';'>
            <b>Lugar: </b> ${data.nombresala}. <b> Reservado para: </b>${data.fecha} a las: ${data.hora}
            <button class='btnCancelar'>CANCELAR RESERVACIÓN</button>
          </div>
          <div>"${data.des}"</div>
          <br>
        </div>
        `;
      });
      $('#showReservaciones').html(template);
    }
  });

  $(document).on('click', '.btnCancelar', function () {
    let element = $(this)[0].parentElement.parentElement;
    let nombre = $(element).attr('id');
    $.post('../PHP/saveDelete.php', { nombre }, function (response) {
      showResults();
    });
  });

});



