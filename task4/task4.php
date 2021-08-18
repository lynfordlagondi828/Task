<?php
require_once  'includes/DbFunctions.php';
$database = new DbFunctions();

$books_with_author = $database->get_all_books_with_author();

?>

<html>
    <title>
        Books with authors
    </title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <br>
    <div align="center">
        <h3>Books</h3>
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Publish Date</th>
                </tr>
                <?php foreach ($books_with_author as $books): ?>
                    <tr>
                        <td><?php echo $books["book_name"] ?></td>
                        <td>
                            <?php echo $books["first_name"] ?>
                            <?php echo $books["last_name"] ?>

                        </td>
                        <td><?php echo $books["publish_date"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</html>
