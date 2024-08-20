                       {{-- Auto complete for student info --}}
                       <script type="text/javascript">

// CSRF Token


//cell one
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub1" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub1').val(ui.item.value)
            return false;
          }
        });

      });


      //cell 2
      // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub2" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub2').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub3" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub3').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub4" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub4').val(ui.item.value)
            return false;
          }
        });

      });

      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub5" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub5').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub6" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub6').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub7" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub7').val(ui.item.value)
            return false;
          }
        });

      });


            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub8" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub8').val(ui.item.value)
            return false;
          }
        });

      });

      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub9" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub9').val(ui.item.value)
            return false;
          }
        });

      });

      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub10" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub10').val(ui.item.value)
            return false;
          }
        });

      });


      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub11" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub11').val(ui.item.value)
            return false;
          }
        });

      });


            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub12" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub12').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub13" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub13').val(ui.item.value)
            return false;
          }
        });

      });


//cell one
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub14" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub14').val(ui.item.value)
            return false;
          }
        });

      });


      //cell 2
      // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub15" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub15').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub16" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub16').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub17" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub17').val(ui.item.value)
            return false;
          }
        });

      });

      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub18" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub18').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub19" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub19').val(ui.item.value)
            return false;
          }
        });

      });

            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub20" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub20').val(ui.item.value)
            return false;
          }
        });

      });


            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub21" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub21').val(ui.item.value)
            return false;
          }
        });

      });

      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub22" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub22').val(ui.item.value)
            return false;
          }
        });

      });

      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub23" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub23').val(ui.item.value)
            return false;
          }
        });

      });


      // CSRF Token
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub24" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub24').val(ui.item.value)
            return false;
          }
        });

      });


            // CSRF Token
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#sub25" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('searchsub')}}",
        type: 'post',
        dataType: "json",
        data: {
          _token: CSRF_TOKEN,
          search: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    
          select: function (event, ui) {
          $('#sub25').val(ui.item.value)
            return false;
          }
        });

      });



</script>