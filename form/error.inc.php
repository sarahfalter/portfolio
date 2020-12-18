<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
}

body {
background-image: linear-gradient(to bottom left, #532727,#724848, #EDBEBC);
font-family: sans-serif;
color: white;
}
header {
  margin-left: 0;
  margin-top: 25px;
  height: 98px;
}

.logo {
  margin-left: 170px;
  margin-top: -8px;
  position: absolute;
}

.menu > ul > li {
  display: inline-block;
  margin: 32px
}

.menu ul {
  text-align: center;
  font-size: 10pt;
  position: relative;
}

.menu-item a {
  color: #F7F4F2;
  text-decoration: none;

}

.menu ul li a:hover {
  color: #B1ADAA;
  transition: .5s;
}


.container {
  max-width: 900px;
  padding: 20px;
  text-align: center;
}

</style>

<div class="container">
  <header>
    <nav class="menu">
      <img class="logo" src="images/logo_whiteedit.png" alt="mylogo" width="200px"/>
       <ul>
       <li class="menu-item"><a href="index.html">Home</a></li>
       <li class="menu-item"><a href="about.html">About</a></li>
       <li class="menu-item"><a href="#projects">Projects</a></li>
       <li class="menu-item"><a href="about.html#contact">Contact</a></li>
      </ul>
     </nav>
    </header>
 <h1>Missing fields</h1>
  <p>Sorry, you have not completed all of the required fields.</p>
  <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>
