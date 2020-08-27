<?php


// passing data in the url: send article id using the query string.
// superglobals...
// sql injection example..
// check value isset before using it.
// DRY: the last item of the SOLID principle.
// require include require_once include_once.
// include vs require 

//organizing included files.
// htaccess file to restrict access to some files...

// require 'database.php';
include 'includes/database.php';



if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $conn = getDB();
$sql = "SELECT * FROM articles where id = " . $_GET["id"] ;
$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_assoc($result);
    var_dump($articles);
}
} else {
    $articles = null;
}
?>
<?php require "includes/header.php";?>
<body>
    <?php if ($articles == null): ?>
        <p>No article found.</p>
    <?php else: ?>

     <h2> <?php echo $articles["title"] ?> </h2>
      <p> <?php echo $articles["content"] ?> </p>


        <?php endif; ?>
</body>
</html>