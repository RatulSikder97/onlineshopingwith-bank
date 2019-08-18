<?php include('server.php'); ?>

<?php
   $id = $_GET['id'];    
?>
<?php if(isset($_POST['delete']))
{
    
    $id = mysqli_real_escape_string($db, $_POST['did']);
    $query_mem="DELETE * FROM book WHERE isbn = '$id' ";
     mysqli_query($db, $query_mem);
     header('location: bookManage.php');
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Management System : The great tool for library </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
   <script type='text/javascript'>

</script>

    
</head>
<body style="background-color: rgba(0,255,255,.8);">
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-left" style="margin-right: 45%;" href="index.html">E-Library</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="">Admin Login</a></li>
            <li><a href="memberRegistration.php">Membership</a></li>
            <li><a href="">View Books</a></li>
            <li><a href="">About</a></li>
          </ul>

        
        </div>
      </div>
    </nav>

    <div class="regForm"  style="text-align: center;" > 
        <h1> Member Management</h1>
        <form method="post">
        <div class="form-group  has-feedback">
            <label>User ID</label>
            <input type="text" class="form-control" id="ID" value="<?php echo $id; ?>"  name="isbn">
            <span class="glyphicon glyphicon-sunglasses form-control-feedback" ></span>   
          </div>
         <button type="submit" name="bdel" class="btn btn-danger" >Confirm Delete</button>

       </form>
      </div>  
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>