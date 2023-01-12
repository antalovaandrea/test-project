<?php
    include "_partials/header.php";
?>
<div class="container">
    <div class="row">
        <div class="page-header  mt-3">
                <h1>VERY MUCH TODO LIST</h1>
        </div>

        <?php

            $data = $database->select('items', 'text');
            
            // echo '<pre>';
            // print_r( $data );
            // echo '</pre>';

        ?>

        <ul class="list-group col-sm-6">
                <?php

                    foreach ($data as $item) {
                        echo '<li class="list-group-item">' . $item . '</li>';
                    }

                ?>
        </ul>
        
        <form action="add-new.php" class="col-sm-6">
            <p class="form-group">
                <textarea class="form-control" name="message" id="text" rows="3" placeholder="watch this..."></textarea>
            </p>
            <p class="form-group">
                <input class="btn btn-sm btn-danger" type="submit" value="add new thing">
            </p>
        </form>
        
    </div>
</div>
<?php  
    include "_partials/footer.php";
?>