<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
include_once 'header.php' ;
include_once 'sidebar.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="card m-2 col-0">
  <div class="container card-body">
  <form  method="POST" action="BMIPasien.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Lengkap :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-o"></i>
          </div>
        </div> 
        <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="lokasi" class="col-4 col-form-label">Tempat Lahir :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-location-arrow"></i>
          </div>
        </div> 
        <input id="location" name="location" placeholder="Masukkan Tempat Lahir Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Tanggal Lahir :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin :</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
        <label for="gender_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
        <label for="gender_1" class="custom-control-label">Wanita</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="weight" class="col-4 col-form-label">Berat Badan :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div> 
        <input id="weight" name="weight" placeholder="Masukkan Berat Badan Anda" type="number" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="height" class="col-4 col-form-label">Tinggi Badan :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bar-chart"></i>
          </div>
        </div> 
        <input id="height" name="height" placeholder="Masukkan Tinggi Badan Anda" type="number" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope-o"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
</div>
</body>
</html>
<?php
require_once "BMI.php";
error_reporting(0);
$pasien = array(
    1 => array(1, "2022-04-21", "P001", "Fathiya Anandita", "Wanita", 60, 160, 23.4, "Sehat (Healthy)"),
        array(2, "2022-04-22", "P002", "Fajar Wanda Putra", "Pria", 70, 167, 25.1, "Kelebihan berat badan (Overweight)"),
        array(3, "2022-04-22", "P003", "Muhammad Raihan Ghaisan", "Pria", 53, 170, 18.4, "Kekurangan berat badan (Underweight)")
    );

$nama = $_POST['name'];
$tmpt_lahir = $_POST['location'];
$jenis_kelamin = $_POST['gender'];
$tgl_lahir = $_POST['tanggalLahir'];
$berat_badan = $_POST['weight'];
$tinggi_badan = $_POST['height'];
$email = $_POST['email'];

$psn_baru = new BmiPasien(count($pasien) + 1, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan);
$psn_baru->bmi = $psn_baru->hasilBMI();
array_push($pasien, array(
$psn_baru->id, 
$psn_baru->tanggal, 
$psn_baru->kode, 
$psn_baru->nama, 
$psn_baru->jenis_kelamin, 
$psn_baru->berat_badan,
$psn_baru->tinggi_badan, 
$psn_baru->bmi, 
$psn_baru->nilai($psn_baru->bmi)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <hr>
    <table class="container table table-striped table-bordered text-center">
        <thead class="table-dark">
        </div>
            <tr>
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Berat Badan (Kg)</th>
                <th>Tinggi Badan (Cm)</th>
                <th>Nilai BMI</th>
                <th>Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pasien as $obj => $val){
                    echo "<tr>";
                        echo "<td>".$val[0]."</td>";
                        echo "<td>".$val[1]."</td>";
                        echo "<td>".$val[2]."</td>";
                        echo "<td>".$val[3]."</td>";
                        echo "<td>".$val[4]."</td>";
                        echo "<td>".$val[5]."</td>";
                        echo "<td>".$val[6]."</td>";
                        echo "<td>".$val[7]."</td>";
                        echo "<td>".$val[8]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php 
include_once 'footer.php';
?>