<?php
include '../app/Models/DataBaseManagement.php';
$dbInfo = readDataBase();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/tableStyle.css">
    <title>Info data base</title>

    <script src="../resources/js/sortTable.js"></script>
</head>

<body>
    <div>
        <table id="table">
            <caption>Rents informations</caption>
            <thead>
                <tr>
                    <th class="firstcorner" data-type="number">ID</th>
                    <th data-type="string">Person Name </th>
                    <th data-type="time">Start Time</th>
                    <th data-type="date">Start Date</th>
                    <th data-type="time">End Time</th>
                    <th data-type="date">End Date</th>
                    <th class="lastcorner" data-type="number">Payment Amount</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($dbInfo as $element) { ?>
                    <tr>
                        <td> <?php echo $element->id ?></td>
                        <td> <?php echo $element->personName ?></td>
                        <td><?php echo $element->startTime ?></td>
                        <td><?php echo $element->startDate ?></td>
                        <td><?php echo $element->endTime ?></td>
                        <td><?php echo $element->endDate ?></td>
                        <td><?php echo $element->paymentAmount ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>