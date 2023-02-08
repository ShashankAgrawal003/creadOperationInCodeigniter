<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">CRUD Application</a>
    </div>
</div>
<div class="container" style="padding-top:10px" >
    <h3>Update User</h3>
    <hr>
    <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
    <div class="row">
        
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>     
                <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
                <?php echo form_error('name');?>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
                <?php echo form_error('email');?>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
           
            </div>
        </div>
    </div>
    </form>
</div>        
</body>
</html>