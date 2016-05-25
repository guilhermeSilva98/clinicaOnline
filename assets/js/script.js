$(document).ready(function(){


  // $('#diaSemana').on('change', function(){

  //   var d = $('#diaSemana').val();
  //   $.ajax({
  //     'type' : 'POST',
  //     'url' : 'medico/displayDoctors/'+d
  //   }). success(function(data){
  //     data = JSON.parse(data);
  //     $('#medicoLista tbody').html('');
  //     preencherLista($('#medicoLista'), data);
  //   });
  // });

  // function preencherLista(lista, data){
  //   $.each(data, function(index, value){
  //     lista.find('tbody').append('<tr><td>'+value.nome+'</td><td>'+value.email+'</td><td><a href="cliente/agendarConsulta/'+value.id_medico+'">Agendar</a></td></tr>');
  //   });
  // }

  var action = $('#especForm').attr('action');

  $('#especSelect').on('change', function(){
    $('#especForm').attr('action', action + $(this).val());
    
  });

  $('.selecionarAgenda').on('click', function(){
    var a = $(this).find('a').data('horario');
    as = a.split(':');
    horario = as[0] + ':' + as[1];

    var b = $(this).find('a').data('data');
    bs = b.split('-');
    data = bs[2] + '/' + bs[1];


    console.log(horario);
    $('#selecHorario').text(horario);
    $('#selecData').text(data);
    $('#horario').val(a);
    $('#data').val(b);
  });

  $('#confirm').on('click', function(){
    var horario = $('#horario').val();
    var data = $('#data').val();
    var id_cliente = $('#id_usuario').val();
    var id_medico = $('#id_medico').val();

    $.ajax({
      'type' : 'post',
      'url' : '/clinicaOnline/cliente/salvarConsulta',
      'data' : {
        id_cliente : id_cliente,
        id_medico : id_medico,
        data : data,
        horario : horario
      }
    }).done(function(){
      $('#myModal').modal('toggle');
    });


    
  })
  






})
