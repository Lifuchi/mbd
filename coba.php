<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restoran</title>

  </head>
    <h2>cobaS</h2>
    <br>


     <section class="mencari">
      <form >
          <input id="pelanggan" class="inp" type="text" name="pelanggan" placeholder="search">
          <button  id="submit-search" type="button" name="submit-search" > search </button>
          <div id="responses"></div>
      </form>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>  
        $(document).ready(function(){
        // save comment to database

        // $('#submit-search').click(function(){
        //      alert('Username/Password salah');
        // });

         $(document).on('click', '#submit-search', function(){
            
           var name = $('#pelanggan').val();
          // var comment = $('#comment').val(); 
           $.ajax({
            url: 'Database/query/Soal/RFunction.php',
            type: 'POST',
            data: {
              'save': 1,
              'name': name,
            },
            success: function(response){
              // alert(name);
              $('#pelanggan').val('');
              $('#responses').append(response);
            }

          });
         });
        });
    </script>

    <!-- ajax -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  </body>

</html>
