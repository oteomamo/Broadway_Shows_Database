<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
    if (isset($_POST['Show_ID']) && isset($_POST['Name']) && isset($_POST['Release_Date']) && isset($_POST['Gener'])) {
        $Show_ID = $_POST['Show_ID'];
        $Name = $_POST['Name'];
        $Release_Date = $_POST['Release_Date'];
        $Gener = $_POST['Gener'];

        $sql = "INSERT INTO `Shows` (`Show_ID`, `Name`, `Release_Date`, `Genre`) VALUES ('$Show_ID', '$Name', '$Release_Date', '$Gener')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<p>Entry Successful';
        } else {
            echo '<p>Error';
        }
    }
}
?>



