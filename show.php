<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table Database</title>
    <style type="text/css">
        table{
            border-collapse: collapase;
            width: 100%;
            color: d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: #d96459;
            color:white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
    <table class="table table-bordered" id="mytable">
            <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>nomor Telepon</th>
            </tr>
        <?php
            $conn = mysqli_connect("localhost","root","","tdatabase");
            if($conn-> connect_error){
                die("connection failed: ". $conn-> connect_error);
            }
            $sql = "SELECT nama, alamat, nomor_telepon from form_entry";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["nama"]. "</td><td>". $row["alamat"]. "</td><td>". $row["nomor_telepon"]. "</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn-> close();
        ?>
</body>
</html>