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
    <h1>{{$user['name']}}</h1>
    <h2>{{$user['age']}}</h2>
    @endforeach
</body>
</html>