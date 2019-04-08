<?php
function idOptions()
{
    $dbc = mysqli_connect('localhost', 'root', '', 'dbchallenge') or die('Error connecting.');
    $query = "SELECT user_id FROM users";
    $result = mysqli_query($dbc, $query);
    $data = mysqli_fetch_all($result);
    echo "<option value=''></option>";
    foreach ($data as $values) {
        foreach ($values as $value) {
            echo "<option value='" . $value . "'>" . $value . "</option>";
        }
    }
    mysqli_close($dbc);
}