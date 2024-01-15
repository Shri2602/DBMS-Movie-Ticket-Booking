<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title></title>
        <style type="text/css">
            
        </style>
    </head>
    <body>
        <?php include('admin_outline.html'); ?><br><br>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-7" style="margin-top:128px;">
            <button type="button" class="btn btn-success" onclick="window.location='admin_movielist.php';">Go Back</button><br><br>
                <ul class="list-group">
                    <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $dbname="proj";
                    
                        $conn=mysqli_connect($servername, $username, $password, $dbname);
            
                        $sql="SELECT * FROM deleted_movies";
                        $query=mysqli_query($conn,$sql);
                        $valid=mysqli_num_rows($query)>0;
            
                        if($valid){
                            while($row=mysqli_fetch_assoc($query)){

                    ?>
                    <li class="list-group-item">
                        <b><?php echo $row['mov_name'] ?></b><br>  
                        OUT OF THEATRE DATE : <?php echo $row['deleted_date'] ?>                                             
                    </li>
                <?php
                            }
                        }
                        else{
                            echo "NO MOVIES TO DISPLAY";
                        }
                ?>
                </ul>
            </div>
        </div>


        <?php include('footer.html'); ?>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>