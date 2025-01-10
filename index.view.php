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