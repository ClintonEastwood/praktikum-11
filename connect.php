<?php
        $conn = mysqli_connect("localhost", "root", "", "praktikum_11");

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
            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
        }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
            return mysqli_affected_rows($conn);
        }
?>