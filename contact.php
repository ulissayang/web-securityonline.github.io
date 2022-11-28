<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "admin");

//cek tombol kirim sudah di tekan atau belum
if(!isset($_POST["submit"])){ 
    echo "<script> 
            header('location:contact.php');
        </script>";
}

if(isset($_POST["submit"])){ 
    //ambil semua data yang di kirim
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan']; 

        if (empty($nama) || empty($email) || empty($pesan)){
            echo "<script> 
            alert('Data Tidak Boleh Kosong');
            header('location:contact.php');
            </script>";
        } 
        else {  
            //masukan data ke tabel
		@$result = mysqli_query( $conn, "INSERT INTO contact VALUES ('', '$nama', '$email', '$pesan') " );
        }
        
    }
?>


<?php require"partial/header.php"; ?>

<div class="container-fluid pb-4 bg-light">
    <div class="container mt-5">
        <div class="row">
            <!--colom 1-->
            <div class="col-sm-4" ></div>
            <!--akhir colom 1-->
            
            <!--colom 2-->
            <div class="col-sm-4 text-center mt-4">
                <h4>Contact</h4>

                <?php if(@$result ) : ?>
                    <script>
                        Swal.fire({
                        title:'Data Barhasil Di Kirim !',
                        text: 'You clicked the button!',
                        icon: 'success' }) 
                    </script>
                <?php endif; ?>
            </div>
            <!--akhir colom 2-->
        </div>

        <div class="row">
        <!-- Colom 3 -->
            <div class="col-sm-4"></div>
            <!-- Akhir colom 3 -->

            <!-- Colom 4 -->
            <div class="col-sm-4">
                <div class="card rounded-sm p-2">
                    <div class="card-body">
                        <form action="contact.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="ex:ulissayang@gmail.com" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="3" name="pesan" equired></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Kirim</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div> 
        <!-- Akhir Colom 4 -->
    </div>
</div>


<div class="container-fluid pt-4 pb-4"  style="background-image:url('https://wallpaperaccess.com/full/3004475.jpg');;
">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.679081677419!2d128.21720941411564!3d-3.660385443853858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce94f86c46665%3A0x0!2zM8KwMzknMzcuNCJTIDEyOMKwMTMnMDkuOCJF!5e0!3m2!1sid!2sid!4v1669169333321!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                
            </div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid pb-3 pt-3">
    <div class="container text-center">
        <h4 class="pb-2">Sosmed</h4>
        <a href="https://web.facebook.com/profile.php?id=100008691764112"><i class="fa-brands fa-facebook fa-2x"></i> </a>
        <a href="https://wa.me/085280357433"><i class="fa-brands fa-whatsapp fa-2x mr-3 ml-3"></i></a>
        <a href="https://instagram.com/ulis_leu_sari?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram fa-2x"></i> </a>
    </div>
</div>  -->


    <!--ini footer-->
    <?php require"partial/footer.php"; ?>
    <!-- ini akhir footer-->
