<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
  Login
</button>
      </form>
    </div>
  </div>
</nav>

<?php
    if(isset(($_SESSION['error']))){
        ?>
        <div class = "alert alert-danger">
            <strong>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
    }
    ?>
    </strong>
    </div>
    <?php
?>

<style>
    .navbar{
        background-color: #343a40;
        border-bottom: 4px solid #28a745;
        box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
    }
    .navbar-brand{
        font-size: 24px;
        font-weight: bold;
        display: flex;
        align-items: center;
    }
    .alert-danger{
        margin-top: 20px;
        padding: 10px;
        background-color: #dc3545;
        color: #fff;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }
</style>