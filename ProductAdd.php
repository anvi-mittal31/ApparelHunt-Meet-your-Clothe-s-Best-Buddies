<!DOCTYPE html>
<html>

<head>
  <title> Product Adding Page</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Google fonts --->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      background-image: linear-gradient(to right top, #b97a95, #c486a1, #ce92ad, #d99eb9, #e4aac5, #e7b1ca, #eab7d0, #edbed5, #e9c1d5, #e5c5d4, #e0c8d4, #dccbd3);
    }

    .topnav {
      overflow: hidden;
      background-color: #b97a95;
    }


    .topnav a {
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 15px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
      font-weight: bold;
    }

    .topnav a.active {
      background-color: #ddd;
      color: black;
      font-weight: bold;
    }

    .e {
      background-color: #ddd;
      font-family: 'Montserrat', sans-serif;
      color: black;
      border-radius: 30px;
      width: 168px;
      height: 58px;
      font-size: 16px;
      line-height: 20px;
    }

    h4 {
      font-weight: bold;
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>

<body>

  <div class="topnav">
    <a href="ProductAdd.php" class="active">Add Product </a>
    <a href="ProductDel.php">Delete Product </a>
    <a href="ProductUpdate.php">Update Product </a>
    <a href="HomePage.html">HomePage</a>

  </div>
  <div class="container-fluid" style="background-color:#b97a95;">
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-10">
        <br>
        <b>
          <h4 class="b">Product <span class="a"> Additions </span></h4>
        </b>
        <!--  <b><p class="c">Complete this form and be a Admin<br></p></b> -->
        <hr style="border: 1px solid #613556">
        <div class="container card card-body" style="background-color:#b97a95;border-radius:10px;border: 0px;">
          <div class="row">
            <div class="col-md-6">
              <form action="Product_add_display.php" method="POST" class="text-center container" enctype="multipart/form-data" style="border-radius:50%;">
                <div class="form-group">
                  <input type="text" name="ProductID" class="form-control d" placeholder="Enter the Apparel ID: " required>
                  <br>
                  <input type="text" name="ProductName" class="form-control d" placeholder="Enter the Apparel Name: " required>
                  <br>
                  <input type="number" name="ProductPrice" class="form-control d" placeholder="Enter the Apparel Price: " required>
                  <br>
                  <textarea type="varchar" name="Productdescription" class="form-control d" placeholder="Enter the Apparel's Description: " required></textarea>
                </div>
            </div>
            <!-- <div class="col-md-6">
              <div class="form-group ">
                <br>
                <center>
                  <div class="col-6 d-flex">
                    <div class="wrapper">
                      <span class="body-title"></span>
                      <div class="content d-flex align-items-center">
                        <div class="preview">
                          <img id="default-btn-preview">
                        </div> <br><br><br><br><br><br><br><br><br>
                        <label name="Img" for="Img" type="file" class="btn e" style="margin-left:10px;font-size:24px;margin-top:-5px;"> Product Picture</label>
                        <input name="Img" id="Img" type="file" accept="image/*" onchange="showPreview(event);" hidden>
                </center>
              </div>
            </div> -->
          </div>
          </center>
        </div>
      </div>
    </div>
    <br>

    <center>
      <br>
      <input type="submit" name="submit" method="POST" class="btn e">
    </center>
    </form>

    <div class="text-center">

    </div>
    <hr style="border: 1px solid #613556">
  </div>

  <div class="col-md-1">

  </div>
  </div>

  </div>

  </section>
  <hr style="border:20px solid #b97a95">
<!-- 
<p id="pid"><b>ProductID: 12345</b> <span ></span></p>
<p id="pname"><b>ProductName: Tees</b> <span></span></p>
<p id="pprice"><b>ProductPrice: 2500</b> <span></span></p>
<p id="pdesc"><b>Productdescription: Looks good.</b> <span</span></p> -->

  <!-- <script>
    function showPreview(event) {
      if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("default-btn-preview");
        preview.src = src;
        preview.width = "180";
        preview.height = "190";
        preview.style.display = 'center';
      }
    }
  </script> -->
</body>

</html>
