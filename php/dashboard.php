<?php
    include "../private/connectDB.php";

	$filter = [];
	$options = ['sort'=>array('_id'=>-1)];

	$query = new MongoDB\Driver\Query($filter, $options);

	$rows = $conn->executeQuery($db, $query); // $mongo contains the connection object to MongoDB
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/109d641836.js" crossorigin="anonymous"></script>
    <!-- style css -->
    <link href="../global.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <title>Dashboard</title>
</head>
<body>
    <div class="">
        <div class="bg-warning d-flex">
            <h4 class="p-2" style="font-weight: bold; font-family: var(--heading);">ADMIN_SNEWS</h4>
            <a class="ms-auto p-2" href="../private/logout.php">Logout<span> <img src="../assests/logout.png" style="width: 20px; height: 20px; margin-bottom: 2px;"/></span></a>
        </div>
        
        <div class="mx-4">
            <p class="fw-bold mt-4">DATATABLE SPORT NEWS</p>
            <p>Total news: 13</p>
        </div>        
    
        <!--Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD SPORT NEWS </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../private/addnews.php" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="title" name='title'>
                          <label for="title" class="form-label">Title</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="author" name='author'>
                          <label for="author" class="form-label">Author</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example" name='category'>
                                <option selected value="football">Football</option>
                                <option value="f1">F1</option>
                                <option value="cricket">Cricket</option>
                                <option value="nba">NBA</option>
                                <option value="golf">Golf</option>
                                <option value="boxing">Boxing</option>
                                <option value="nfl">NFL</option>
                                <option value="tennis">Tennis</option>
                                <option value="racing">Racing</option>
                                <option value="rugbyunion">Rugby Union</option>
                                <option value="rugbyleague">Rugby League</option>
                                <option value="darts">Darts</option>
                            </select>
                            <label for="category" class="form-label">Category</label>
                            
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group date">
                                <input type="text" class="form-control" id="datepicker" name="datepicker">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="content" name="content"></textarea>
                            <label for="content" class="form-label">Content</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="image" name="main_image">
                            <label for="image" class="form-label">Image</label>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Save changes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <button class="btn btn-outline-warning bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#addModal">Add news</button>

        </div>
            <div class="table-responsive">
                <table class="table align-top table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col">Date</th>
                        <th scope="col">Content</th>
                        <th scope="col">Views</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach($rows as $document)
                        {
                            echo '<tr><td>'.$document->{'_id'}.'</td>'.
                            '<td>'.$document->{'title'}.'</td>'.
                            '<td>'.$document->{'author'}.'</td>'.
                            '<td>'.$document->{'category'}.'</td>'.
                            '<td>'.date($document->{'published'}).'</td>'.
                            '<td class="" style="width: 300rem;">'.
                            $document->{'text'}.
                            '</td><td>'.$document->{'thread'}->{'participants_count'}.'</td>'.
                            '<td>'.
                                '<button type="button" class="btn btn-outline-warning bg-warning text-dark editbtn">Edit</button>'.
                            '</td>'.
                            '<td>'.
                                '<button type="button" class="btn btn-outline-warning bg-warning text-dark deletebtn">Delete</button>'.
                            '</td></tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    

    <!--Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT SPORT NEWS </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../private/update.php" method="POST">
                <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-floating mb-3">
                        <input type="text" name = "title" class="form-control" id="edittitle">
                        <label for="title" class="form-label">Title</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input type="text" name = "author" class="form-control" id="editauthor">
                        <label for="author" class="form-label">Author</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example" name="category" id="editcategory">
                                <option selected value="football">Football</option>
                                <option value="f1">F1</option>
                                <option value="cricket">Cricket</option>
                                <option value="nba">NBA</option>
                                <option value="golf">Golf</option>
                                <option value="boxing">Boxing</option>
                                <option value="nfl">NFL</option>
                                <option value="tennis">Tennis</option>
                                <option value="racing">Racing</option>
                                <option value="rugbyunion">Rugby Union</option>
                                <option value="rugbyleague">Rugby League</option>
                                <option value="darts">Darts</option>
                            </select>
                            <label for="category" class="form-label">Category</label>
                            
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group date">
                                <input type="text" class="form-control" name="datepicker" id="editdatepicker">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" name="content" id="editcontent"></textarea>
                            <label for="content" class="form-label">Content</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="image" id="editimage">
                            <label for="image" class="form-label">Image</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-warning">Save changes</button>
                </div>
            </form>
        </div>
        </div>
    </div>


    <!--Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="../private/delete.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="delete_id" id="delete_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Delete</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deleteModal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#edittitle').val(data[1]);
                $('#editauthor').val(data[2]);
                $('#editcategory').val(data[3]);
                $('#editdatepicker').val(data[4]);
                $('#editcontent').val(data[5]);      
            });
        });
    </script>                    

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>