$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#submit-search', function(){
    var name = $('#pelanggan').val();
    // var comment = $('#comment').val();
    $.ajax({
      url: 'Database/query/Soal/RFunction.php',
      type: 'GET',
      data: {
        'save': 1,
        'name': name,
      },
      success: function(response){
        $('#name').val('');
        $('#comment').val('');
        $('#display_area').append(response);
      }
    });
  });
  });