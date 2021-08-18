<?php
require_once 'includes/DbFunctions.php';
$database = new DbFunctions();

$news = $database->show_all_records();

?>

<html>
    <title>Task 3.1</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <div align="center">
        <br>
        <div class="container" style="background:#fafad2; padding: 10px;" >
            <h2>Task 3. 1</h2>

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
