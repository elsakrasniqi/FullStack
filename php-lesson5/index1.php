<html>
    <head>
        <style>
            table {
                width: 50%;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid;
            }
            th {
                background-color: lightblue;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <table border="1">
            <tr>
                <th>Brand</th>
                <th>Origin</th>
                <th>Year</th>
            </tr>

            <?php
            // Multidimensional arrays
            $cars = array(
                array("BMW", "Germany", 2020),
                array("Mercedes", "France", 2017),
                array("Audi", "Italy", 2024)
            );

            // Loop through the array and populate the table rows
            for ($row = 0; $row < 3; $row++) {
                echo "<tr>"; // Start a new row
                for ($col = 0; $col < 3; $col++) {
                    echo "<td>" . $cars[$row][$col] . "</td>"; // Fill the columns
                }
                echo "</tr>"; // End the row
            }
            ?>
        </table>
    </body>
</html>
