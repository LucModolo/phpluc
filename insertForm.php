


<?php include 'components/head.inc.php'; 
?>
    
    <form class="form-inline" action="insert.php" method="post">
        
    <div  class="form-group">
        name: <input type="text" class="form-control" name="field1">
        vorname: <input type="text" class="form-control" name="field2">
        Strasse: <input type="text" class="form-control"name="field3">
    </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
</body>
</html>



