<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="editor.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
     <script>tinymce.init({ selector:'textarea' });</script> -->
    <?php  
    include("adore.php");
    ?>
<!-- Add the following code inside the head tag -->
 
<style>
    .profileA{
        font-family: 'Poppins';
         font-size: 22px;
         text-align:left;
    }
    .profileB{
        font-family: 'Poppins';
         font-size: 22px;
    }

/*  */
.container{
    
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 

}

.content{
    display: flex;
position: relative;
    background-color: #fffdfd;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    z-index: 1 !important;
}


select{
    font-size: medium;
    /* width: 400px; */
    padding: 5px;
    border-color: black;
}

input{

    font-size: medium;
    width: 95%;
    border-radius: 3px;
    margin: 10px !important;
    padding: 5px;
    border: 1px black solid;
    
}

.button{
    background-color: rgb(55, 55, 75);
    color: white;
    padding: 2px !important;
    border-radius: 5px;
    border-style: none;
    margin-bottom: 30px;
    float: bottom;
    font-size: medium;
}


.form{
    margin: auto;
    width: 600px;
    
}

.content h2{
    margin-right: 10px;
}

.textarea{
    width: 650px;
    margin-top: 10px;
    margin-bottom: 10px;
    border: 1px black solid;
   
}

#add_fields{
    text-decoration: none;
    padding: 5px;
    background-color: white;
    border-color: rgb(71, 71, 197);
    color: rgb(71, 71, 197);
    margin: 10px;
    border-radius:5px;
    
}
.close {
    color: #5f5050;
    float: right;
    justify-items: right;
     margin-top: -40px;
    
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }



/*  */
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-label {
            font-size: 18px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        /* Styles for container and content */
        .container {
            padding: 15px;
        }

        .content {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .content {
                padding: 15px;
            }

            .form-label {
                font-size: 16px;
            }

            .form-control,
            .button {
                font-size: 14px;
            }
        }
</style>

</head>
<body>
<!-- popup text editor -->

<div class="container" >
    <div class="content">
        <form action="adore.php" method="post" class="form" id="form" enctype="multipart/form-data">
            <span class="close" id="closeid">&nbsp;&nbsp;&nbsp;&nbsp;&times;</span>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><h3>Blog Title:</h3></label>
                  <input type="text" name="blog_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your blog name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Blog Image:</label>
                  <input type="file" name="blog_image" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
                 <textarea class="form-control" name="blog_content" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your entire blog here max limit (1000 words)."></textarea>
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Bio of speaker</label>
                 <textarea class="form-control" name="nameauthor" id="exampleFormControlTextarea1" rows="3" placeholder="enter the details like name , email ,city etc"></textarea>
            </div> 
           <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Author:</label>
                <input type="text" class="form-control" id="exampleFormControlTextarea1" required >
                    <!-- <option value="sayantan chaudary">satayan chaudary</option>
                    <option value="Dinesh aggrawal">Dinesh aggrawal</option>
                    <option value="Ashish mukherjee">Ashish mukherjee</option>
                    <option value="simran sharma ">simran sharma </option>
              </select> &nbsp;&nbsp;&nbsp;&nbsp; -->
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Uploaded_by :</label>
                <input type="text" name="uploaded_by"  class="form-control" id="exampleFormControlInput1" placeholder="Name of the person by whom the blog has been updated">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">country</label>
                <input type="text" name="country"  class="form-control" id="exampleFormControlInput1" placeholder="Enter your country name">
            </div>
            
            
           
            <!-- <button type="button" id="add_fields"  onclick="addfield()">+</button> -->
            <button type="submit" class="button" id="submit">Submit</button>
        </form>
    </div>
</div>

<!-- popup text editor end -->
 <!-- edit button pop and edit form -->
 <?php   while($r=$resul->fetch_assoc()) { $t=$results->fetch_assoc() ?>
<div class="modal fade" id="Examplemodel<?php echo $r["Id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$r["blog_name"] ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="adore.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Blog Image</label>
                <br>
                <img src="image/<?=$t["blog_image"] ?>" alt="ex image" style="width:100px; height:100px;">
                  <input type="file" name="blog_image" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
                 <textarea class="form-control" name="blog_content" id="exampleFormControlTextarea1" rows="3" placeholder="enter your entire text here"> <?=$t["blog_content"] ?></textarea>
            </div> 
           
            <input type="text"  name="id"  value="<?=$r["Id"] ?>" required hidden />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>

</div>

</form>
 <?php }?>
<!-- view class -->



<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-`lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical" style="max-width:215px">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-div="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <img src="ADORE.png" alt="...">
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <!-- <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a> -->
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-divledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="login1.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item active" >
                        <!-- <a class="nav-link" href="index.php">
                            <i class="bi bi-house" ></i>  Home -->
                            <a class="nav-link" href="index.php">
                            <i class="bi bi-house" ></i>
                                Home <span class="sr-only"> (active)</span></a>
                        <!-- </a> -->
                    </li>
                    <!-- user................-->
                    <!-- Inside your modal -->

    <!-- Your other modal content -->

    <!-- User Button -->
    

                  <li class="nav-item">
                        <a class="nav-link" href="user.php">
                            <i class="bi bi-people" ></i> Users
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="bio.php">
                            <i class="bi bi-people" ></i> bio of speaker
                        </a>
                    </li> -->
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
                <!-- Navigation -->
                
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                            <i class="bi bi-person-square"></i> Account
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login1.html">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-5 ">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight ">Blog Post Dashboard</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">

<!-- Modal -->


<!-- Your existing code for the "Entry" button -->
<span class="btn d-inline-flex btn-sm btn-primary mx-1">
     <span class="pe-2" id="entry" >       
        <i class="bi bi-plus"></i>
       ENTRY
    </span>
                                 </span>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    
                </div>
            </div>
        </header>
        <!-- Main -->
        
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0" style="box-shadow: none;">Applications</h5> 
                    
                        </div>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                            <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Blog name</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Bio of Author</th>
                                    <th scope="col">Author's Country</th>
                                    <th scope="col">Uploaded_by</th>
                                    <th scope="col">TimeStamp</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                               
                                while($row=$result->fetch_assoc()) { ?>
                                    
                                <tr>
                                    <td>
                                       
                                        <a class="text-heading font-semibold" href="#">
                                            <!-- backend  -->
                                              #<?php echo $row["Id"] ?>
                                        
                                        </a>
                                    </td>
                                    <td>
                                    <?php echo $row["blog_name"] ?>
                                    </td>
                                    
                                  


                                    <td>
                                        <?php echo $row["speaker_bio"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["author"] ?>
                                    </td>
                                    <td>
                                        <!-- <span class="badge badge-lg badge-dot"> -->
                                            <?php echo $row["country"] ?>
                                        </span>
                                    </td>
                                    <td>
                                        
                                        <?php echo $row["uploaded_by"] ?>

                                    </td>
                                

                                    <td>
                                        <!-- <span class="badge badge-lg badge-dot"> -->
                                            <?php echo $row["TimeStamp"] ?>
                                        </span>
                                    </td>

                                    
                                    
                                    <td class="text-end">
                                       
                                        <!-- <a href="#" class="btn btn-sm btn-neutral">View</a> -->
                                        <button type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-bs-toggle="modal" 
                                        data-bs-target="#Examplemodel<?php echo $row["Id"];?>" data-bs-whatever="@mdo">
                                        <i class="bi bi-pencil" ></i>Edit
                                                   </button>
  


                                         <!-- Button trigger modal -->
                                         <a href="http://localhost:8080/adoreearth/adoreearth/page-blog.php?id=<?php echo $row["Id"]; ?>" class="btn btn-sm btn-neutral">View</a>             
                              <!-- <a href="https://simtrak.in/test" class="btn btn-sm btn-neutral">View</a> -->
                      <a href="delete.php?id=<?php echo $row["Id"];?>" class="btn btn-sm btn-neutral">Delete</a>
   
                                    </td>
                                </tr>
                                   <?php  }?>
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 0 items out of 0 results found</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<!-- Add the following code inside the script tag or include it from an external file -->

<script defer src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


 <script src="entry.js"></script>
<?php
                                 include("db_connect.php");
                                 $sql="SELECT * FROM `registration` WHERE `id`=1";
                                 $result=mysqli_query($conn,$sql);
                                 $profile=mysqli_fetch_assoc($result);


                                                                      
                            ?>
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-divledby="staticBackdropdiv" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body"> 
                                <div class="row" >
                                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                        <div class="profileA"><b>ID:</b></div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                        <div class="login2 pull-left pull-right-pro"><?=$profile["id"]  ?></div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                        <div class="profileA"><b> username:</b></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="login2 pull-left pull-right-pro"><?=$profile["first_name"]." " .$profile["last_name"] ?></div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                        <div class="profileA"><b> email: </b> </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="login2 pull-left pull-right-pro"><?=$profile["email"]  ?></div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                        <div class="profileA"> <b> contact:</b></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="login2 pull-left pull-right-pro"><?=$profile["phone"] ?> </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                                        <div class="profileA"> <b> city: </b></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="login2 pull-left pull-right-pro"><?=$profile["city"]  ?></div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inside the <head> or before </body> -->

    </body> 
    </html>