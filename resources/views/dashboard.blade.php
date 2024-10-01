<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dashboard</h1>

    <?php 
    /* foreach($users as $user) {
        echo $user ['name'];
        echo "<br>";
        echo $user['age'];
        echo "<br>";
        echo "<br>";
    }
        */
    ?>

    @foreach ($users as $user)
    
    @if ($user['age'] >= 18)
    <h2>pouzivatel {{$user['name']}} ma {{$user['age']}} rokov a moze soferovat</h2>
    @else
    <h2>pouzivatel {{$user['name']}} ma {{$user['age']}} rokov a nemoze soferovat</h2>
    @endif  
    @endforeach

    
</body>
</html>