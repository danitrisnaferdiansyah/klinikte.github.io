<?php 

require 'dokter.php';

// cek tombol tambah data 
if ( isset($_POST["submit"]) ){


if ( tambah($_POST) > 0) {

  echo "
   <script>
alert('Data Berhasil di Tambahkan !');
document.location.href = 'coba.php'
   </script>
  ";
  # code...
}

else{
  echo "<script>
      alert('Data Gagal di Tambahkan !');
      document.location.href = 'coba.php'
    </script>";
  
}

}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
  button {
    background: rgba(0,0,0,0.4);

  padding: 15px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #eee;
 
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}


.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

  }
</style>

<body>
<div class="container">
  <div class="row">
     <div class="col-lg-6">
    <h3><p style="padding-bottom: 3%;font-weight: bold;" align="center"><span class="spinner-border" role="status">
    </span> Make an Appointment <span class="spinner-border" role="status"></span></p></h3>
    <table style="box-shadow: 0 10px 45px rgba(0, 0, 0, 0.6);text-align: center;" align="center">

      <form method="POST" action="">

  <tr>
    <td height="50" style="padding: 20px;"> <label for="nama"></label><input type="text" name="nama" id="nama" 
      placeholder=" Nama" autocomplete="off" style="height: 60px;"></td>
    <td style="padding: 20px;"> <label for="email"></label><input type="text" name="email" id="email" placeholder="Email " autocomplete="off" style="height: 60px;"></td>
  </tr>
<tr>
    <td height="50" style="padding: 10px;">
       <label for="dktr"></label>
<input name="dktr" id="dktr" placeholder="Alamat" style="height: 60px;" type="text">
    </td>
    <td style="padding: 20px;">
      <label for="telepon"></label><input type="text" id="telepon" name="telepon" autocomplete="off" placeholder=" No tlp-hp" style="height: 60px;">

    </td>
  </tr>
  <tr>
     <td style="padding-bottom: 30px;"><button class="button" type="submit" name="submit" data-toggle="modal" data-target="#exampleModal" style="color: #eee;">Daftar !
     </button></td>
   </form>
  </tr>
  </table>

    </div>
  </div>
</div>
   

</body>
</html>>