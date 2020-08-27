<?php
// PDO: PHP data objects ....
/**
 * procedural and oo interface of database connection in php
 * both are ok but must be consistent
 * 
 */
require './classes/Database.php';
require './classes/Article.php';
require './classes/User.php';

$db = new Database();
$conn = $db -> getConn();
// using static method in the Article class
$articles = Article::getAll($conn);

//var_dump($articles);

//$test = Article::getArticleById($conn, 5);
//var_dump($test);

// testing auth function
$user = User::authenticate($conn, 'ertugrul', '1234');
//var_dump($user);

/**
 * __DIR__ : contains directory including the full path
 * dirname(dir): directory name
 */



 // usage of colspan and rowspan in table in html
 // th element table header in table
 // thead element
 // tbody element
 // tfoot element

 // for more, google it.




 // adding nav link sitewide using href and ul listing: login logout admin links etc.
 //dbms notes
 // avoid duplicate keys in the article_category table
 // using try catch or insert ignore statement
 // implode method in php to join array of string
 // delete article category from article_category table if unchecked cat
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
    
    table, th, td {
        border:1px solid grey;
    }

    </style>
</head>
<body>





<table>
    <tr>
        <td>Name</td>
        <td>Height</td>
    </tr>

    <tr>
        <td>Ali</td>
        <td>150</td>
    </tr>

</table>

<br>

    <table>
        <thead>
            <th>Title</th>
            <th>Content</th>
            <th>ID</th>
            <th>Image</th>
        </thead>

        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td>
                        <?php echo $article['title']; ?>
                    </td>
                    <td>
                        <?php echo $article['content']; ?>
                    </td>
                    <td>
                        <?php echo $article['id']; ?>
                    </td>
                    <td> <a href="edit-article-image.php?id=<?php echo $article['id']; ?>"> Image link</a> </td>
                </tr>
            <?php endforeach;?>
        </tbody>

    </table>




    
</body>
</html>