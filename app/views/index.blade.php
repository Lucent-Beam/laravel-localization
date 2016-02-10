<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Language</title>
  </head>
  <body>
    <form class="" action="lang" method="post">
      <label for="">Choose a language</label><input type="text" id="lang" name="lang" value="">
      <button type="submit" class="save">Save</button>
    </form>

    <div class="">
        {{trans('greetings.hello')}}
    </div>

  </body>
</html>
