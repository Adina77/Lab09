<?php
// Error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Heading for web page
echo '<h2>Multiplication Table</h2>';
echo '<br>';

// Function for displaying multiplication table on web page.
// See my Lab 8 Profile page code for simple table and explanation of table tags
function multTable()
{
    echo '<table border="1">';

    // Make the first row, with one blank square
    echo '<td></td>';
    for ($i = 1; $i <= 100; $i++)
    {
        echo "<td>" . $i . "<t/d>";
    }

    for ($col = 1; $col <= 100; $col++)
    {
        echo '<tr>' . '<td>' . $col . '</td>';
        for ($row = 1; $row <= 100; $row++)
        {
            $value = $col * $row;
            echo '<td> ' . $value . ' </td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

// Now call the function so it will displate the multiplication table
multTable();
?>
