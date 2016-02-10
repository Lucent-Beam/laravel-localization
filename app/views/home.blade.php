<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Translation</title>
    <script type="text/javascript" src="js/jquery.js"></script>
  </head>
  <body>

    <form>
      <label for="">Choose a language: </label>
      <select id="language" name="">
        <option>es</option>
        <option>en</option>
      </select>
      <button type="submit" class="save">Save the changes</button>
    </form>
    <div class="container">
        {{trans('greetings.hello')}}
    </div>


    <script type="text/javascript">

    $('.save').click(function(d){

        var language = $('#language').val();
        //var language = 'en'
        //alert(language);
        $.ajax({
            url : "<?= URL::to('lang'); ?>",
            type : "POST",
            async: false,

            data : {
              //  'language' : language,

           },

            success: function(e){
                {
                 alert(e);
                  if (e==1){
                    alert('Spanish');
                  }

                  else {
                    alert('Ingles');
                  }

                }

              }

        });

    });



    </script>

  </body>
</html>
