<html>
    <head> 
    </head>  
    <body>  
        <?php      
            $id = $_POST['todelete'];
            
            $connect = mysqli_connect('localhost', 'root', '', 'measurement');
                            
            if (!$connect){                               
               echo "Connection error.";                                
            }                   
            $query = "DELETE FROM archives WHERE id='".$id."'";
                            
            mysqli_query($connect, $query);                       
            mysqli_close($connect);
       
            header('Location: results.php');        
        ?>   
    </body>
</html>