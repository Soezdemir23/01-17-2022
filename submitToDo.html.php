<?php include("./sitewrap/header.php");    
    $submission = $_POST['todo'];
    echo $submission;
    $array = [];
    $array.array_push($submission);
?>
<section class="todo-list">
    <table>
        <table>
            <tr>
                <td>Todo</td>
                <td>Done: non-functional for now</td>
            </tr>
            <?php
                for ($i=0; $i < count($array); $i++) { 
                    # can't see why it doesn't wprk, this is why I need errors
                    echo "<tr> <td>".$array[$i]."</td> </tr>";
                }
                
            ?>
        </table>
    </table>
</section>
    
</body>
</html>


