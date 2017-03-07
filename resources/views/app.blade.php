<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <documento>Simple CRUD with Ajax and Modal</documento>-->

    <!-- Bootstrap -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->

    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('googleapis/css.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
                html, body {
                background-image: "img_gifs/fondo_unal/4.jpg";
                background-repeat: no-repeat;
                color: #000000;
                font-weight: bold;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
  </style>


  </head>
  <body background="{{ url('img_gifs/fondo_unal/4.jpg') }}">

    <div class="container">
      @yield('content')
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    // Edit Data (Modal and function edit data)
    $(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text(" Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-documento').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#t').val($(this).data('documento'));
    $('#d').val($(this).data('email'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'documento': $('#t').val(),
          'email': $('#d').val()
      },
      success: function(data) {
          $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.documento + "</td><td>" + data.email + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-documento='" + data.documento + "' data-email='" + data.email + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-documento='" + data.documento + "' data-email='" + data.email + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
      }
  });
});
// add function
$("#add").click(function() {
  $.ajax({
    type: 'post',
    url: '/addItem',
    data: {
      '_token': $('input[name=_token]').val(),
      'documento': $('input[name=documento]').val(),
      'email': $('input[name=email]').val(),
      'modulo': $('input[name=modulo]').val()
    },
    success: function(data) {
      if ((data.errors)) {
        $('.error').removeClass('hidden');
        $('.error').text(data.errors.documento);
        $('.error').text(data.errors.email);
        $('.error').text(data.errors.modulo);
      } else {
        $('.error').remove();
        

        /*$('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.documento + "</td><td>" + data.email + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-documento='" + data.documento + "' data-email='" + data.email + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-documento='" + data.documento + "' data-email='" + data.email + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");*/


        $('#table').prepend("<tr class='item" + data.id + "'><td>" + data.email + "</td><td>" + data.modulo + "</td><td>" + data.created_at + "</td></tr>");
      }
    },
  });
  $('#documento').val('');
  $('#email').val('');
  $('#modulo').val('');
  $('#moduloSelect').val(1);
});

//delete function
$(document).on('click', '.delete-modal', function() {
  $('#footer_action_button').text(" Delete");
  $('#footer_action_button').removeClass('glyphicon-check');
  $('#footer_action_button').addClass('glyphicon-trash');
  $('.actionBtn').removeClass('btn-success');
  $('.actionBtn').addClass('btn-danger');
  $('.actionBtn').addClass('delete');
  $('.modal-documento').text('Delete');
  $('.id').text($(this).data('id'));
  $('.deleteContent').show();
  $('.form-horizontal').hide();
  $('.documento').html($(this).data('documento'));
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function() {
  $.ajax({
    type: 'post',
    url: '/deleteItem',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data) {
      $('.item' + $('.id').text()).remove();
    }
  });
});




</script>

<script language="javascript" type="text/javascript">
function es_vacio()
  {
  
   if (document.getElementById('buscar').value=="")
      {   
       document.getElementById('btnBuscar').disabled=true;
      
      }
  
   else {
         document.getElementById('btnBuscar').disabled=false;
         
         }
   }  
        
</script>


<script>
    var mostrarValor = function(x){
            document.getElementById('modulo').value=x;
            }
 

</script>

  </body>
</html>