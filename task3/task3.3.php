<?php


    //Task 3

    require_once 'includes/DbFunctions.php';
    $database = new DbFunctions();

    //you can change the request id into 1 or 2 in order to find the match id's in the article
    $id = 3;

    $news = $database->get_news($id);

    if ($news){
    } else {
        header('HTTP/1.1 404 Not Found');
        include 'error.php';
        exit();
    }

    ?>


<html>
<title>News/Articles</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<div align="center">
    <br>
    <div class="container" style="background:#fafad2; padding: 10px;" >
        <h2>Task 3.2</h2>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Description</th>
                <th>Article</th>
            </tr>
            <?php foreach($news as $articles): ?>
                <tr>
                    <td><?php echo $articles["short_description"] ?></td>
                    <td><?php echo $articles["article"] ?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
</html>

