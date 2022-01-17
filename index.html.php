<?php 
    include("./sitewrap/header.php");
?>
<section id="todo">
    <form action="submitToDo.html.php" method="post">
        <input type="text" name="todo">
        <input type="submit" value="Add Todo">
    </form>
</section>
<?php
    include("./sitewrap/footer.php");
?>