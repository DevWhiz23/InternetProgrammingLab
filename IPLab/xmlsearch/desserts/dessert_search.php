<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dessert Details</title>
</head>
<body style="font-size:25px;">
    <?php
    $xml_data = simplexml_load_file("dessert_userlist.xml");
    $search_id = $_POST['dessert_id'];
    $flag = 0;
    foreach ($xml_data->children() as $dessert) {
        if ($dessert->id == $search_id) {
            ?>
            <h1 align="center">DESSERT DETAILS</h1>
            <table align="center" style="font-size:25px;">
                <tr>
                    <td><b>DESSERT ID</b></td>
                    <td>:</td>
                    <td><?php echo $dessert->id ?></td>
                </tr>
                <tr>
                    <td><b>DESSERT NAME</b></td>
                    <td>:</td>
                    <td><?php echo $dessert->name ?></td>
                </tr>
                <tr>
                    <td><b>DESCRIPTION</b></td>
                    <td>:</td>
                    <td><?php echo $dessert->description ?></td>
                </tr>
            </table>
            <?php
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        ?>
        <h1 style="text-align:center">Oops! Dessert not found.</h1>
        <?php
    }
    ?>
</body>
</html>
