$('document').ready(function() {
  $('#form').on('submit', function(e) {
    e.preventDefault();
    $('#submit').attr('disabled','disabled');
    let dataForm = $(this).serialize();

    $.ajax({
      url: 'components/form-sendler.php',
      method: 'POST',
      dataType: 'html',
      data: dataForm,
      success: function(data) {
        alert('Операция выполнена успешно');
        $('#submit').attr('disabled',false);
      },
      error: function(jqxhr, ex) {
        alert('Что то пошло не так');
        $('#submit').attr('disabled',false);
      }
    })
  })
  $('#create').on('click', function(e) {
    e.preventDefault();
    $.ajax({
      url: 'components/install.php',
      method: 'GET',
      dataType: 'html',
      data: null,
      success: function(data) {
        alert('Операция выполнена успешно');
      },
      error: function(jqxhr, ex) {
        alert('Что то пошло не так');
      }
    })
  })
})
