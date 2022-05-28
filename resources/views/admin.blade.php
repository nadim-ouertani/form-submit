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
    <form class="flex-center p-100" method="POST" action="{{route('campaign.launch')}}">
      @csrf
      <div class="flex-direction-column display-flex">
       <select class="m-b-6" name="follow">
        <option value="all">ALL</option>
        @foreach ($subscribers as $subscriber)
        <option value="{{$subscriber->follow}}">{{$subscriber->follow}}</option>
        @endforeach
        <!-- TODO:: Add a new table with all the follow and linked to each user -->
       </select>

       <select class="m-b-6" name="country">
        <option value="all">ALL</option>
        @foreach ($subscribers as $subscriber)
        <option value="{{$subscriber->country}}">{{$subscriber->country}}</option>
        @endforeach
       </select>

       <select class="m-b-6" name="user">
        <option value="all">ALL</option>
        @foreach ($subscribers as $subscriber)
        <option value="{{$subscriber->full_name}}">{{$subscriber->full_name}}</option>
        @endforeach
       </select>
       <input type="submit" value="submit"/>
     </div>
    </form>
  </body>
</html>
