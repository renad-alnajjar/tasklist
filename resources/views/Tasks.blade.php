<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
</head>
 <body>
      <ul>
      <?php foreach($tasks as $Key=> $task):?> 
          
      <li> <a href="{{'show/'.$Key}}"><?php echo $task?></a> </li>
      <?php endforeach;?>
      </ul>
        </body> 
      </html>  