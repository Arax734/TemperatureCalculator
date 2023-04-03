<html lang="en">
    <head>    
        <link rel="stylesheet" href="tables.css" type="text/css">
        <meta charset="utf-8">
        <title>Results</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>   
    </head>    
    <body>  
        <div data-aos="zoom-in" class="container flexblock">        
            <?php      
                    $serverName = "localhost";
                    $userName = "root";
                    $password = "";
                    $baza = "measurement";
                    // Create connection
                    $conn = new mysqli($serverName, $userName, $password, $baza);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection error: " . $conn->connect_error);
                    }
            
                    $sql = "SELECT * from archives";
                        $results = $conn-> query($sql);   
                        if ($results-> num_rows <= 0){
                            
                            echo "<a class='title'>No data in the database</a>";
                            
                        }else{
                            
                            
                            echo "<a class='title'>Results</a> <table>
                <tr style='background:rgb(245,245,245);'>
                    <th>Unit</th>
                    <th>Maximum</th>
                    <th>Minimum</th>
                    <th>Average</th>
                </tr>
                <tr>
                    <td>Celsius</td>";
                    
                        $serverName = "localhost";
                        $userName = "root";
                        $password = "";
                        $baza = "measurement";

                        // Create connection
                        $conn = new mysqli($serverName, $userName, $password, $baza);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection error: " . $conn->connect_error);
                        }

                        $sql = "SELECT MAX(celsius) as max_cels from archives";
                        $results = $conn-> query($sql);   
                        if ($results-> num_rows > 0) {
                            $row = $results-> fetch_assoc();{
                                echo "<td>".$row['max_cels']."</td>";
                            }
                        }
                        $sql = "SELECT MIN(celsius) as min_cels from archives";
                            $results = $conn-> query($sql);   
                            if ($results-> num_rows > 0) {
                                $row = $results-> fetch_assoc();{
                                    echo "<td>".$row['min_cels']."</td>";
                                }
                            }
                        $sql = "SELECT AVG(celsius) as avg_cels from archives";
                            $results = $conn-> query($sql);   
                            if ($results-> num_rows > 0) {
                                $row = $results-> fetch_assoc();{
                                    echo "<td>".$row['avg_cels']."</td>";
                                }
                            }
                    
                    ?>
                </tr>
                <tr>
                    <td>Fahrenheit</td>
                    <?php
                    
                        $serverName = "localhost";
                        $userName = "root";
                        $password = "";
                        $baza = "measurement";

                        // Create connection
                        $conn = new mysqli($serverName, $userName, $password, $baza);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection error: " . $conn->connect_error);
                        }

                        $sql = "SELECT MAX(fahrenheit) as max_fah from archives";
                        $results = $conn-> query($sql);   
                        if ($results-> num_rows > 0) {
                            $row = $results-> fetch_assoc();{
                                echo "<td>".$row['max_fah']."</td>";
                            }
                        }
                        $sql = "SELECT MIN(fahrenheit) as min_fah from archives";
                            $results = $conn-> query($sql);   
                            if ($results-> num_rows > 0) {
                                $row = $results-> fetch_assoc();{
                                    echo "<td>".$row['min_fah']."</td>";
                                }
                            }
                        $sql = "SELECT AVG(fahrenheit) as avg_fah from archives";
                            $results = $conn-> query($sql);   
                            if ($results-> num_rows > 0) {
                                $row = $results-> fetch_assoc();{
                                    echo "<td>".$row['avg_fah']."</td>";
                                }
                            }
                    
                    ?>
                </tr>
                <tr>
                    <td>Kelvin</td>
                    <?php
                    
                        $serverName = "localhost";
                        $userName = "root";
                        $password = "";
                        $baza = "measurement";

                        // Create connection
                        $conn = new mysqli($serverName, $userName, $password, $baza);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection error: " . $conn->connect_error);
                        }

                        $sql = "SELECT MAX(kelvin) as max_kel from archives";
                        $results = $conn-> query($sql);   
                        if ($results-> num_rows > 0) {
                            $row = $results-> fetch_assoc();{
                                echo "<td>".$row['max_kel']."</td>";
                            }
                        }
                        $sql = "SELECT MIN(kelvin) as min_kel from archives";
                            $results = $conn-> query($sql);   
                            if ($results-> num_rows > 0) {
                                $row = $results-> fetch_assoc();{
                                    echo "<td>".$row['min_kel']."</td>";
                                }
                            }
                        $sql = "SELECT AVG(kelvin) as avg_kel from archives";
                            $results = $conn-> query($sql);   
                            if ($results-> num_rows > 0) {
                                $row = $results-> fetch_assoc();{
                                    echo "<td>".$row['avg_kel']."</td>";
                                }
                            }
                        }
                    ?>
                </tr>
            </table>
        
            <a class="other" href="form.php">Go back</a>
        
        </div>
    
    <script>
  AOS.init();
</script>
    
    
    </body>

</html>