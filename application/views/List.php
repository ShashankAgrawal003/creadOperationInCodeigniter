<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand align-center">CRUD Application</a>
        </div>
    </div>
    <div class="container" style="padding-top:10px">
        <div class="row"> 
            <div class="col-md-12">
                <?php $success=$this->session->userdata('success');
                if($success!=""){
                ?>
                <div class="alert alert-success">
                    <?php echo $success;?>
                </div>
                <?php
                }
                ?>
                <?php $failure=$this->session->userdata("failure");
                if($failure!=""){
                    ?> <div class="alert alert-success"> <?php echo $failure;?></div> <?php }?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6">
                        <h3>View Users</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?php echo base_url().'index.php/user/create'?>" class="btn btn-primary">Create</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>



        <div class="row">

            <div class="col-md-8">
                <table class="table table-striped text-center">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="60">Edit</th>
                        <th width="70">Delete</th>
                    </tr>
                    <?php $my_id=0;?>
                    <?php if(!empty($users)){
                        foreach($users as $user){
                            $my_id++;?>
                    <tr>
                        
                        <td><?php echo $my_id ?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>"
                                class="btn btn-primary">Edit</a>
                        </td>

                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }} else{?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                    <?php }?>
                </table>


            </div>
        </div>






    </div>
</body>

</html>