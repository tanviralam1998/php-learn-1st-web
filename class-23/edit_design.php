
<?= 
    include 'connect.php';

    if(isset($_POST['update'])){
        /** fetch data from reg form and prevent theme from sql injection */
        $email = mysqli_escape_string($conn,$_POST['email']) ;
        // md5 is encryted password
        $password = mysqli_escape_string($conn,md5($_POST['pwd']));
        $dob = mysqli_escape_string($conn,$_POST['date']);
        $id=mysqli_escape_string($conn,$_POST['uid']);
        $sql="UPDATE user SET email='$email', password='$password',dob='$dob' WHERE id='$id'";
        $query=mysqli_query($conn,$sql);
        if($query){
            header('location:select.php');
        }
        else{
            echo "<script> alert('Something Went Wrong')</script>".mysqli_error($conn);   
        }
    }
    $id='';
    $email='';
    $password='';

    if(isset($_GET['id'])){
        $sql="SELECT *FROM user whare id=".$_GET['id'];
        $query=mysqli_query($conn,$sql);
        if($query){
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_assoc($query)){
                    $id=$row['id'];
                    $email=$row['email'];
                    $password=$row['password'];
                    $dob=$row['dob'];
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Information</h2>
  <form class="form-horizontal" mathod="POST" action="edit.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" value="<?=$email?>" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" value="<?=$password?>" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date of Birth</label>
      <div class="col-sm-10">          
        <input type="date" value="<?=$dob?> " class="form-control" id="date" name="date">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="hidden" class="form-control" id="date" value="<?=$id?>" name="date">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="update" class="btn btn-default">Update Information</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
