<?php  
    include "partials/header.php";
?>
    <div class="col">
        <div class="page-header">
                <h1>VERY MUCH TODO LIST</h1>
        </div>

        <ul class="list-group col-sm-6">
                <li class="list-group-item">you very much to do this</li>
                <li class="list-group-item">but also this thing</li>
        </ul>
            
        <form action="add-new.php" class="col-sm-6 mt-3">
            <p class="form-group">
                <textarea class="form-control" name="message" id="text" rows="3" placeholder="watch this..."></textarea>
            </p>
            <p class="form-group">
                <button class="btn btn-sm btn-danger" type="submit">add new thing</button>
            </p>
        </form>
    </div>
<?php  
    include "partials/footer.php";
?>