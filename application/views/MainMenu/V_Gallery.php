
<div class="masonry-gallery">
    <div class="masonry-container">
			<?php 

			$conn = mysqli_connect("localhost","root","","db_travel");
			$sql = mysqli_query($conn, "SELECT * FROM tbl_gambar");
			while ($data = mysqli_fetch_assoc($sql)) {
			?>

				<img class="masonry-block animate-box" src="assets/images/<?php echo $data['file_name']; ?>" alt="<?php echo $data['file_name']; ?>">	

			<?php } ?>
		</div>
	</div>
