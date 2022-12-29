<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "praktikum_11");

        //fungsi untuk mengambil data dari database
        function query1($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $karyawann = [];
            while( $karyawan = mysqli_fetch_assoc($data) ) {
                $karyawann[] = $karyawan;
            }
            return $karyawann;
        }

        function tambah($data){
            global $conn;

            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $position=$_POST['position'];
            $status = $_POST['status'];

            $query = "INSERT INTO karyawan
                    VALUES
                    ('','$name', '$email', '$address', '$gender', '$position', '$status')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }
?>