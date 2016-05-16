$(document).ready(function(){


  $('#diaSemana').on('change', function(){

    var d = $('#diaSemana').val();
    $.ajax({
      'type' : 'POST',
      'url' : 'medico/displayDoctors/'+d
    }). success(function(data){
      data = JSON.parse(data);
      $('#medicoLista tbody').html('');
      preencherLista($('#medicoLista'), data);
    });
  });

  function preencherLista(lista, data){
    $.each(data, function(index, value){
      lista.find('tbody').append('<tr><td>'+value.nome+'</td><td>'+value.email+'</td><td><a href="cliente/agendarConsulta/'+value.id_medico+'">Agendar</a></td></tr>');
    });
  }





})
