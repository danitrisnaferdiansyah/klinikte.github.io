<?php 

// koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "klinik");


function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result) ) {
    $rows[]=$row;
  }

  return $rows;
}



function tambah($data){
  global $conn;
  // ambil data dari tiap elemen dalam form
$nama = htmlspecialchars($data["nama"]);
$email = htmlspecialchars($data["email"]);
$dktr = htmlspecialchars($data["dktr"]);
$telepon = htmlspecialchars($data["telepon"]);



// lakukan query :

$query = "INSERT INTO pendaftaran VALUES 
                ('','$nama','$email','$dktr','$telepon')
              ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}


function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM pendaftaran WHERE id = $id");
  return mysqli_affected_rows($conn);
}


// lakukan query :
function ubah($data){

 global $conn;
  // ambil data dari tiap elemen dalam form
 $id = $data["id"];
$nama = htmlspecialchars($data["nama"]);
$email = htmlspecialchars($data["email"]);
$dktr = htmlspecialchars($data["dktr"]);
$telepon = htmlspecialchars($data["telepon"]);




// lakukan query :

$query = "UPDATE pendaftaran SET
               nama = '$nama',
              email = '$email', 
              dktr = '$dktr', 
              telepon = '$telepon'
              WHERE id = $id
              ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function cari($keyword){
  $query = "SELECT * FROM pendaftaran WHERE
                 nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                dktr LIKE '%$keyword%' OR
                telepon LIKE '%$keyword%'
  ";

 return query($query);
}

 ?>





