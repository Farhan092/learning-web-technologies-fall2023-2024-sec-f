<?php
    require_once('../model/pModel.php');
    require_once('../controller/sessionCheck.php');

    $products=seeProduct();
?>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <form action="">
            <fieldset>
            <legend>Products</legend>
            <h1>List of products</h1>
            <table border="1" width=50%>
                <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>brand</th>
                </tr>
                <?php for($i=0;$i<count($products);$i++)
                {?>
                <tr>                   
                    <td><?=$products[$i]['name']?></td>
                    <td><?=$products[$i]['price']?></td>
                    <td><?=$products[$i]['brand']?></td>                

        <?php   }?>
                </tr>
            </table>          
            </fieldset>
        </form>      
    </body>
</html>