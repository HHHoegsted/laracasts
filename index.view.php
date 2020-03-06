<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background : #e3e3e3;
            padding: 1.5em;
            text-align: center;
            padding-bottom: 1em;
        }
        ul{
            padding-top: 1em;
        }
    </style>
</head>
<body>
    

    <header>
    
        <h1>Test af småting</h1>

    </header>
   
   <ul>
        <?php foreach ($tasks as $task) : ?>

            <li>
            
                <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
                <?php else: ?>
                <?=$task->description; ?>
                <?php endif ?>

            </li>

        <?php endforeach ?>
   </ul>

</body>
</html>