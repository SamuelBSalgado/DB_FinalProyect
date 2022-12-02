$(document).ready(function () {
  $(document).on('click', '#q1', function () {
    let q = '1';
    let res = '';
    $.post('../PHP/consultas.php', { q }, function (response) {
      let information = JSON.parse(response);
      information.forEach(data => {
        res += `<div>${data.res}</div>`;
      });
      $('#res').html(res);
    });
  });

  $(document).on('click', '#q2', function () {
    let q = '2';
    let res = '';
    $.post('../PHP/consultas.php', { q }, function (response) {
      let information = JSON.parse(response);
      information.forEach(data => {
        res += `<div>${data.res}</div>`;
      });
      $('#res').html(res);
    });
  });

  $(document).on('click', '#q3', function () {
    let q = '3';
    let res = '';
    $.post('../PHP/consultas.php', { q }, function (response) {
      let information = JSON.parse(response);
      information.forEach(data => {
        res += `<div>${data.res}</div>`;
      });
      $('#res').html(res);
    });
  });

  $(document).on('click', '#q4', function () {
    let q = '4';
    let res = '';
    $.post('../PHP/consultas.php', { q }, function (response) {
      let information = JSON.parse(response);
      information.forEach(data => {
        res += `<div>${data.res}</div>`;
      });
      $('#res').html(res);
    });
  });

  $(document).on('click', '#q5', function () {
    let q = '5';
    let res = '';
    $.post('../PHP/consultas.php', { q }, function (response) {
      let information = JSON.parse(response);
      information.forEach(data => {
        res += `<div>Email: ${data.email} password: ${data.pass}</div>`;
      });
      $('#res').html(res);
    });
  });

});