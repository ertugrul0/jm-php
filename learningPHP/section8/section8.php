<?php

// introduction to databases using php.
// phpMyAdmin...
// collation when creating database, char sets etc...
// ertugrul - DnujWQZasCEYAGr0
// sql create tables etc, queries etc.
// indexes in databases... for faster queries
// order by in mysql
// connect db from php below..
$db_host = "localhost";
$db_name = "cms";
$db_user = "ertugrul";
$db_password = "DnujWQZasCEYAGr0";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}
echo "Connection established!";
// reading from database:

$sql = "SELECT * FROM articles;";
$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($articles);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (empty($articles)): ?>
        <p>No articles found.</p>
    <?php else: ?>

    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2> <a href="./../section9/section9.php?id=<?= $article['id']; ?>"><?php echo $article['title']; ?></a> </h2>
                    <p> <?php echo $article['content']; ?> </p>
                    <p> <?php echo $article['id']; ?></p>
                    <p>Edit </p>
                    <form action="deleteArticle.php" method="post" >
                        <button>Delete</button>
                    </form>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>

        <?php endif; ?>
</body>
</html>