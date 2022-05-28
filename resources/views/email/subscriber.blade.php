<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

  </head>
  <body>
    <table>
      <td>{{$name}}</td>
      <td>{{$email}}</td>
      <td>{{$follow}}</td>
      <td>{{$ip}}</td>
      <td>{{$country}}</td>
    </table>
  </body>
</html>