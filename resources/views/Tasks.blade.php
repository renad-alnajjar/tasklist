<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
</head>
 <body>
      <ul>
  @foreach($tasks as $task) 
      <li><a href="tasks/show/{{$task->id}}">{{$task->title}}</a>   </li>
  @endforeach
      </ul>
        </body> 
      </html>  