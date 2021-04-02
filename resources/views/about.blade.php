<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        </head>
        <body>
        <h2> My name is {{$name}} </h2>
        <form action="send" method="POST">
        @csrf    
      Name
        
        <input type="text" name="myname" id="myname"  />
       <input type ="submit" value ="Send"/>
                </from >
        </body>
      <html>
      