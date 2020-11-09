

<?php 
include_once "parsial/header.php";
include_once "apis/api.php";
$res = $api->get_movies_by_id($_GET['id']);

$genres = $res["genres"];
$production_countries = $res["production_countries"];
$production_companies = $res["production_companies"];
$spoken_languages = $res["spoken_languages"];


?>

	<body>
		<div id="wrapper">
			<a href="index.php" title="">
				<div id="logo">
					<h1><span>Movies DB</span></h1>
					<span>The Source Of Movies</span>
				</div>
			</a>
<!--============================= GALLERY =============================-->
			<div class="gallery">
				<?php 

				?>
					
					<div> 
						<div class="row">
						  <div class="column left">
						    <img src="https://image.tmdb.org/t/p/w500<?php echo $res['poster_path']; ?>" alt="" width="280px" height="400px" />
						  </div>
						  <div class="column right">
						    <table style="width:100%">
							  <tr>
							    <td>Genres</td>
							    <td>:</td>
							    <td><?php $api->to_arr_values($genres, "name") ?></td>
							  </tr>
							   <tr>
							    <td>Languages</td>
							    <td>:</td>
							    <td><?php $api->to_arr_values($spoken_languages, "name"); ?>
							    	
							    </td>
							  </tr>
							   <tr>
							    <td>Year Of Release</td>
							    <td>:</td>
							    <td><?php echo substr($res['release_date'], 0, 4); ?></td>
							  </tr>
							   <tr>
							    <td>Status</td>
							    <td>:</td>
							    <td><?php echo $res['status']; ?></td>
							  </tr>
							   <tr>
							    <td width="200px">Production Of Countries</td>
							    <td>:</td>
							    <td><?php $api->to_arr_values($production_countries, "name"); ?>
							  </tr>
							   <tr>
							    <td>Production Companies</td>
							    <td>:</td>
							    <td><?php $api->to_arr_values($production_companies, "name"); ?>
							  </tr>
							   <tr>
							    <td>Source</td>
							    <td>:</td>
							    <td><a target="_blank" href="<?php echo $res['homepage']; ?>" title=""><?php echo $res['homepage']; ?></a></td>
							  </tr>
							 
							</table>
						  </div>
						</div>
						
						
					
					</div>
			</div>
<!--============================= //GALLERY =============================-->	
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
