<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <style type="text/css">
        input {
            padding: 6px;
        }

        select {
          padding: 6px;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .vh-100 {
            height: 100vh;
        }

        .p-100 {
            height: 100%;
        }

        .flex-direction-column {
            flex-direction: column;
        }

        .display-flex {
            display: flex;
        }

        .m-b-6 {
            margin-bottom: 6px;
        }
    </style>
  </head>
  <body class="vh-100">
    <form class="flex-center p-100" method="POST" action="{{route('form.submit')}}">
      @csrf
      <div class="flex-direction-column display-flex">
       <input class="m-b-6" type="text" name="full_name" placeholder="Your name here" />
       <input class="m-b-6" type="email" name="email" placeholder="Your email here" />
       <select class="m-b-6" name="follow">
        <option value="sports">sports</option>
        <option value="tech">tech</option>
        <option value="events">events</option>
        <option value="management">management</option>
       </select>
       <input type="submit" value="submit"/>
     </div>
    </form>
  </body>
</html>
