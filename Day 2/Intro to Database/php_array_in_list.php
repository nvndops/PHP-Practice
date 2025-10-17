<?php

$articles = [
    [
        "title" => "First Post",
        "content" => "This is fist of many posts"
    ],
    [
        "title" => "Second Post",
        "content" => "This is Second of many posts"
    ],
    [
        "title" => "Third Post",
        "content" => "This is third of many posts"
    ],
    [
        "title" => "Forth Post",
        "content" => "This is forth of many posts"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
</head>

<body>
    <header>
        <h1>My Blog</h1>
    </header>

    <main>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li>
                    <article>
                        <h2><?= $article['title']; ?></h2>
                        <p><?= $article['content']; ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>