<html lang="en">  
    <head> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Results</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>   
    </head> 
    <body> 
        <div data-aos="zoom-in" class="container flexblock">   
            <form class="flexblock" method="post" action="form.php">       
                <div class="data flexblock">       
                    <input style="width: 380px;" step="any" type="number" Name="value" placeholder="Enter the value">
                    <select Name="unit">               
                        <option value="K">[K] - Kelvin</option>
                        <option value="C">[C] - Celsius</option>
                        <option value="F">[F] - Fahrenheit</option>
                    
                    </select>
                    <button id="confirm" type="submit">Calculate</button>
                
                </div>
                
                <?php
                error_reporting(E_PARSE);
                    $value = $_POST['value'];
                    $unit = $_POST['unit'];
                    $comma = $_POST['comma'];
                
                    if (!isset($value) or $value == null){
                        
                        echo "<a class='info'>You must enter the temperature!</a>";
                        echo "<div class='data2 flexblock'>Number of decimal places: <input type='number' step='any' Name='comma'></div>";
                        
                    }else{
                
                    if (!isset($comma)){
                        
                        echo "<a class='info'>Enter how many decimal places to round the temperature!</a>";
                        echo "<div class='data2 flexblock'>Number of decimal places: <input type='number' step='any' Name='comma'></div>";
                        
                    }else{
                
                    if ($comma < 0){
                        
                        echo "<a class='info'>Number of decimal places must be positive or zero!</a>";
                        echo "<div class='data2 flexblock'>Number of decimal places: <input type='number' step='any' Name='comma'></div>";
                        
                    }else{
                
                    if ($unit == "C"){
                        
                        $fahren = ($value * 1.8) + 32;
                        $kelvin = $value + 273.15;
                        
                        $fahren = round($fahren, $comma);
                        $kelvin = round($kelvin, $comma);
                        
                    }
                
                    if ($unit == "K"){
                        
                        $celsius = $value - 273.15;
                        $fahren = ($value * 1.8) - 459.67;
                        
                        $celsius = round($celsius, $comma);
                        $fahren = round($fahren, $comma);
                        
                    }
                
                    if ($unit == "F"){
                        
                        $celsius = ($value - 32) / 1.8;
                        $kelvin = ($value * 459.67) * 5/9;
                        
                        $celsius = round($celsius, $comma);
                        $kelvin = round($kelvin, $comma);
                    }

                
                
                        if ($unit == "C"){
                            
                            echo "<table><tr style='background:rgb(245,245,245);'>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Result</th>
                    </tr>
                    <tr><td style='width: 310px;'>Kelvin</td>
                        <td>K</td>
                        <td>".$kelvin."</td>
                        </tr>
                    <tr>
                        <td style='width: 310px;'>fahrenheit</td>
                        <td>°F</td>
                        <td>".$fahren."</td>
                    </tr></table><div class='data2 flexblock'>Number of decimal places: <input type='number' step='any' Name='comma'></div>";
                            
                            $connect = mysqli_connect('localhost', 'root', '', 'measurement');
                            
                            if (!$connect){
                                
                                echo "Connection error.";
                                
                            }
                            
                            $query = "INSERT INTO archives(id,unit,celsius,fahrenheit,kelvin,comma) VALUES (null,'C',".$value.",".$fahren.",".$kelvin.",".$comma.")";
                            
                            mysqli_query($connect, $query); 
                        
                            mysqli_close($connect);
                            
                        }
                        if ($unit == "K"){
                            
                            echo "<table><tr style='background:rgb(245,245,245);'>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Result</th>
                    </tr>
                    <tr><td style='width: 310px;'>celsius</td>
                        <td>°C</td>
                        <td>".$celsius."</td>
                        </tr>
                    <tr>
                        <td style='width: 310px;'>fahrenheit</td>
                        <td>°F</td>
                        <td>".$fahren."</td>
                    </tr></table><div class='data2 flexblock'>Number of decimal places: <input type='number' step='any' Name='comma'></div>";
                            
                            $connect = mysqli_connect('localhost', 'root', '', 'measurement');
                            
                            if (!$connect){
                                
                                echo "Connection error.";
                                
                            }
                            
                            $query = "INSERT INTO archives(id,unit,celsius,fahrenheit,kelvin,comma) VALUES (null,'K',".$celsius.",".$fahren.",".$value.",".$comma.")";
                            
                            mysqli_query($connect, $query); 
                        
                            mysqli_close($connect);
                            
                        }
                        if ($unit == "F"){
                            
                             echo "<table><tr style='background:rgb(245,245,245);'>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Result</th>
                    </tr>
                    <tr><td style='width: 310px;'>celsius </td>
                        <td>°C</td>
                        <td>".$celsius."</td>
                        </tr>
                    <tr>
                        <td style='width: 310px;'>kelvin </td>
                        <td>K</td>
                        <td>".$kelvin."</td>
                        </tr></table><div class='data2 flexblock'>Number of decimal places: <input type='number' step='any' Name='comma'></div>";
                            
                            $connect = mysqli_connect('localhost', 'root', '', 'measurement');
                            
                            if (!$connect){
                                
                                echo "Connection error.";
                                
                            }
                            
                            $query = "INSERT INTO archives(id,unit,celsius,fahrenheit,kelvin,comma) VALUES (null,'F',".$celsius.",".$value.",".$kelvin.",".$comma.")";
                            
                            mysqli_query($connect, $query); 
                        
                            mysqli_close($connect);
                            
                        }
                        
                    }
                    }
                    }
                        
                        ?>
            
            
            </form>
            
            <div class="other flexblock">
            
            <a href="results.php">archives results</a>
            <a href="extremes.php">extremes of results</a>
            
            </div>
        
        
        </div>
        
        <script>
  AOS.init();
</script>
    
    </body>

</html>