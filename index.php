<?php
include "common/check-login.php";
include "common/navbar.php";

if (isAuthenticated()) {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php 
    echo $navbar;
    ?>

    <div class="container-sm" style="margin-top:2rem;">

      <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <h4 style="margin-bottom: 1em;">Account Type Form</h4>
        <div class="row">
          <div class="col-sm">
            <form id="foo">
              <div class="form-group">
                <label for="type">Account Type Name</label>
                <input type="text" class="form-control" id="account_type_name" name="account_type_name">
              </div>
              <button type="button" onclick="save()" id="submitType" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>  
      
      <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  </body>
</html>


<script>
function save() {
  axios({
    method: 'post',
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
      "Access-Control-Allow-Origin": "*"
    },
    url: 'http://52.77.79.135:8081/api/v1/account-type',
    data: {
      account_type_name: 'example'
    }
  });
  console.log('success')
}
</script>
<?php
} else {
  header("Location: login/");
}
?>