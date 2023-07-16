<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BIOGRAFI SAYA</title>
	<style>
	* {box-sizing: border-box;
	}body {
	  font-family: Arial, Helvetica, sans-serif;}
	/* Style the header */
	header {background-color: #666;
	  padding: 30px;
	  text-align: center;
	  font-size: 35px;
	  color: white;}
	/* Create two columns/boxes that floats next to each other */
	nav {
	  float: left;
	  width: 30%;
	  height: 300px; /* only for demonstration, should be removed */
	  background: #ccc;
	  padding: 20px;}
	/* Style the list inside the menu */
	nav ul {
	  list-style-type: none;
	  padding: 0;}
	article {
	  float: left;
	  padding: 20px;
	  width: 70%;
	  background-color: #f1f1f1;
	  height: 300px; /* only for demonstration, should be removed */
	}
	/* Clear floats after the columns */
	section:after {
	  content: "";
	  display: table;
	  clear: both;
	}
	/* Style the footer */
	footer {
	  background-color: #777;
	  padding: 10px;
	  text-align: center;
	  color: white;
	}
	@media (max-width: 600px) {
	  nav, article {
	    width: 100%;
	    height: auto;
	  }
	}
	</style>
</head>
<body>
	<header>
	  <h2>Selamat Datang di Biografi saya!</h2>
	</header>
	<section>
	  <nav>
	    <ul>
	      <li><a href="#">Biodata</a></li>
	      <li><a href="#">Cerita Pengalaman</a></li>
	      <li><a href="#">Cerita Masa Depan</a></li>
	    </ul>
	  </nav>
	  <article>
	    <h1>Siapa Saya?</h1>
	    <p>Saya adalah seorang Masaiswa Jurusan Akuntansi Politeknik Negeri Semarang.</p>
	    <p>Saya sangat mencintai dan menghargai diri saya! </p>
	  </article>
	</section>
	<footer><p>Footer</p>
	</footer>

</body>
</html>