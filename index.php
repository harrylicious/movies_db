

<?php 
include_once "parsial/header.php";
include_once "apis/api.php";
include_once "utils.php";
$res = $api->get_movies();

$title = "";

if (ISSET($_GET['txt'])) {
	$title = $_GET['txt'];
}


?>
	<body>

		<div id="filter-records"></div>
		<div id="wrapper">
			<div id="logo">
				<h1><span>Movies DB</span></h1>
				<span>The Source Of Movies</span>
			</div>

<!--============================= DETAIL =============================-->
			<div class="gallery">
				<ul><?php 

				foreach ($res['results'] as $key => $value) {
					if ($title=="") {
					?>
					<a href="detail.php?id=<?php echo $value['id']; ?>" title="">
						<li class="first">
							<img src="https://image.tmdb.org/t/p/w500<?php echo $value['poster_path']; ?>" alt="" width="280px" height="400px" /><br>
						<?php echo $value['title'].'<br>'; ?><br>
						</li>
					</a>
						
					<?php }  
					if (filter_str($value['title'], $title)) { ?>
						<a href="detail.php?id=<?php echo $value['id']; ?>" title="">
						<li class="first">
							<img src="https://image.tmdb.org/t/p/w500<?php echo $value['poster_path']; ?>" alt="" width="280px" height="400px" /><br>
						<?php echo $value['title'].'<br>'; ?><br>
						</li>
					</a>
					<?php
					} 
					}
				?>
				</ul>
			</div>

<!--============================= //DETAIL =============================-->

<!--============================= DETAIL =============================-->
<!--============================= ABOUT =============================-->	
			<?php include_once "parsial/about.php"; ?>
<!--============================= //ABOUT =============================-->
<!--============================= FOOTER =============================-->
			<div id="footer">
				<?php include_once "parsial/footer.php"; ?>
			</div>
<!--============================= //FOOTER =============================-->
		</div>
	</body>
</html>

<script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
           document.search.submit();
        }
    }
</script