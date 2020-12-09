<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
}

body {
background: #D7D5D3;
font-family: sans-serif;
color: #4d4d4d;
}

.container {
  max-width: 900px;
  padding: 20px;
  text-align: center;
}

</style>

<div class="container">
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
