<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Project</a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Exit</button>
        </form>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="create.php" class="btn btn-success">Add Post</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">№</th>
                    <th scope="col">Title</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <?php foreach ($posts as $com): ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo $com['id']; ?></th>
                        <td><?php echo $com['name']; ?></td>
                        <td><?php echo $com['describes']; ?></td>
                        <td>
                    
                                <button type="submit" class="btn btn-warning">Edit</button>
                            
                            
                                <button type="submit" class="btn btn-danger">Delete</button>
                            
                        </td>
                        </tr>
                    </tbody>
                 <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>