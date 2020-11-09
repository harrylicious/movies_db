<?php
Class api {
	public $api_key = "456e78c7f1c29dd3b3cc4af91c02a1fe&language=en-US";
	public $endpoint = "https://api.themoviedb.org/3/movie";
	public $slug_movies_byid = "";

	
	//retrieve all top movies
	public function get_movies() {
		$json_movies = file_get_contents(($this->endpoint)."/top_rated?api_key=".($this->api_key));
		//echo($json_movies);
		$json_array = json_decode($json_movies, true);
		//echo(json_encode($json_array));
		return $json_array;

	}

	//get data movies by its id
	public function get_movies_by_id($id) {
		$json_movies = file_get_contents(($this->endpoint)."/".$id."?api_key=".($this->api_key));
		//echo($json_movies);
		$json_array = json_decode($json_movies, true);
		//echo(json_encode($json_array));
		return $json_array;

	}


	function to_arr_values($arr, $field) {
		$str = '';
	    $res = '';
		foreach ($arr as $val) {
		  $str .=  $val[$field].",";
		} 
		  $res = rtrim($str, ","); // remove last separator
		  echo $res;
	}

}

	#define new object of class
	$api = new api();


?>