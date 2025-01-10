<?php 
    $topics = [
        [
            'title' => 'Arrays',
            'description' => 'How arrays and associative arrays work in PHP',
            'difficulty' => 'Easy'
        ],
        [
            'title' => 'Functions',
            'description' => 'How to create functions in PHP',
            'difficulty' => 'Easy'
        ],
        [
            'title' => 'Objects',
            'description' => 'How to declare and use objects in PHP',
            'difficulty' => 'Easy'
        ],
        [
            'title' => 'Databases',
            'description' => 'How to connect to databases in PHP',
            'difficulty' => 'Easy'
        ]
    ]
?>
<html>
<head>
    <title>PHP Project</title>
</head>
<body>
    <h1>PHP Project</h1>
    <ul>
        <?php foreach($topics as $topic) : ?>
            <li>
                <h3>
                    <?php echo $topic['title'] ?>
                </h3>
                <p>
                    <?php echo $topic['description'] ?>
                </p>
                <p>
                    <?php echo $topic['difficulty'] ?>
                </p>
            </li>
        <?php endforeach ?>
</body>
</html>