<?php 

include 'db_conn.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments1 (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/fac1.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" type="image/png" href="gambar/logo.png">
    <title>Agrowisata Kusuma</title>
</head>
<body>
    <div class="header" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a class="header-logo" href="index.html" ><img src="gambar/logox.png"  ></a>
            <ul>
                <li><a  href="home">HOME</a></li>
                <li><a  href="streetview">STREET VIEW</a></li>
                <li><a  href="home#facilities">FACILITIES</a></li>
                <li><a  href="order">ORDER</a></li>
                <li><a  href="gallery">GALLERY</a></li>
                <li><a  href="contact">CONTACT US</a></li>

                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                
                <?php
                } else {
                  ?>
                  <a href="signin.php"><i class="fas fa-sign-in-alt"></i></a>
                <?php
                }
                ?>
            </ul>
    </div>

    <div class="hero">
        <div class="myslide">
          <div class="txt">
            <h1>Petik Buah Naga</h1>
            <a href="#paket" class="btnhero">EXPLORE</a>
          </div>
          <img src="gambar/hero1.jpg" style="width: 100%; height: 100%;">
        </div>
        
        <div class="myslide">
          <div class="txts">
            <h1>Petik Apel</h1>
            <a href="#paket" class="btnhero">EXPLORE</a>
          </div>
          <img src="gambar/hero2.jpg" style="width: 100%; height: 100%;">
        </div>
        
        <div class="myslide">
          <div class="txts">
            <h1>Petik Jeruk</h1>
            <a href="#paket" class="btnhero">EXPLORE</a>
          </div>
          <img src="gambar/hero3.jpg" style="width: 100%; height: 100%;">
        </div>
        
        <div class="myslide">
          <div class="txts">
            <h1>Petik Jambu</h1>
            <a href="#paket" class="btnhero">EXPLORE</a>
          </div>
          <img src="gambar/hero4.jpg" style="width: 100%; height: 100%;">
        </div>
        
        <div class="myslide">
          <div class="txt">
            <h1>Petik Strawberry</h1>
            <a href="#paket" class="btnhero">EXPLORE</a>
          </div>
          <img src="gambar/hero5.jpg" style="width: 100%; height: 100%;">
        </div>
        <div class="myslide">
            <div class="txts">
              <h1>Paket Hore</h1>
              <a href="#paket" class="btnhero">EXPLORE</a>
            </div>
            <img src="gambar/hero6.jpg" style="width: 100%; height: 100%;">
          </div>
          <div class="myslide">
            <div class="txts">
              <h1>Paket Boom</h1>
              <a href="#paket" class="btnhero">EXPLORE</a>
            </div>
            <img src="gambar/hero7.jpg" style="width: 100%; height: 100%;">
          </div>

  
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        <div class="dotsbox" style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
          <span class="dot" onclick="currentSlide(7)"></span>
        </div>
        
      </div>
    <div class="itemtitle" id="paket">
        <h1 class="title" id="package">PAKET WISATA PETIK BUAH</h1>
    </div>
    <div class="itemlist">
        

        <div class="item">
            <h3>Petik Buah Naga</h3>
            <img src="gambar/naga.png" >
            <div class="info">
                <p>Ayo Petik Buah Naga</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>60.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>
        <div class="item">
            <h3>Petik Apel</h3>
            <img src="gambar/apple.png" >
            <div class="info">
                <p>Ayo Petik Apel</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>60.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>
        <div class="item">
                <h3>Petik Jeruk</h3>
                <img src="gambar/orange.png" >
            <div class="info">
                <p>Ayo Petik Jeruk</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>35.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>
        <div class="item">
            <h3>Petik Jambu</h3>
            <img src="gambar/jambu.png">
            <div class="info">
                <p>Ayo Petik Jambu</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>25.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>
        <div class="item">
            <h3>Petik Strawberry</h3>
            <img src="gambar/strawberry.png">
            <div class="info">
                <p>Ayo Petik Strawberry</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>75.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>
        <div class="item">
            <h3>Paket Hore</h3>
            <img src="gambar/hore.png">
            <div class="info">
                <p>Petik Jambu, Apel, Jeruk</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>105.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>      
        <div class="item">
            <h3>Paket Boom</h3>
            <img src="gambar/boom.png">
            <div class="info">
                <p>Petik Apel, Buah Naga, Strawberry, Jambu</p>
                <p>Dan Makan Sepuasnya</p>
            </div>
            <div class="price">
                <h3><sup>Rp.</sup>115.000</h3>
            </div>
            <div class="btn">
                <a href="#">Order</a>
            </div>
        </div>      


    </div>
          
    <div class="wrapper">
        <h1>COMMENTS</h1>
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments1";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>   
    
    <div class="footer">
        <div class="footer-logo">KUSUMA</div>
        <div class="alamat">Kawasan Wisata Kusuma Agro, Jalan Abdul Gani Atas, Ngaglik, Kecamatan Batu, Ngaglik, Batu, Batu City, East Java 65311</div>

    </div>

    <div class="footer2">
        <h1>2021 © Agrowisata Kusuma by Team 5 HCI</h1>
    </div>

        


    

    

    <script type="text/javascript">
        var lastScrollTop = 0;
            navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function(){
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.style.top ="-60px";
            } else {
                navbar.style.top="0";
            }
            lastScrollTop = scrollTop;
        })    
    </script>

    <script src="js/herojs.js"></script>
</body>
</html>