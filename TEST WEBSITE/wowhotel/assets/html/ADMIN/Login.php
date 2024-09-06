     <!-- PHP CODES -->

     <?php
        include("connection.php");

        if(isset($_POST['submit']))
        {
            $user_name = $_POST['user'];
            $password= $_POST['pass'];

            $sql = "select * from tbladmin where user_name = '$user_name' and password = '$password' "; 

            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if($count==1) 
            {
                header("Location:W.H-admin-tracker.html");
            }

            else
            {
                echo '<script>
                        window.location.href = "W.H-admin.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
            }
            
        }
        

     ?>