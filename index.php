<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>


<div class="w_high">

            <?php

            $query = "SELECT * FROM 'user' ";
            $user_query = mysqli_query($_CONNECTION , $query);


            if ($user_query) {

                echo $user_query;

            }


            ?>


</div>



<?php include "inc/footer.php"; ?>
