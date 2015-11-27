<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="http://odyniec.net/css/google-code-prettify/prettify.css" />
 
    <link rel="stylesheet" type="text/css"
        href="http://odyniec.net/css/main.css" />
 
    <link rel="stylesheet" type="text/css"
        href="http://odyniec.net/themes/maria_yellow/css/main.css" /> 
    <link rel="stylesheet" type="text/css" href="http://odyniec.net/projects/imgareaselect/css/index.css" />
  
    <link rel="stylesheet" type="text/css" href="http://odyniec.net/projects/imgareaselect/css/imgareaselect-default.css" />

    <link rel="stylesheet" type="text/css" href="http://odyniec.net/projects/imgareaselect/css/examples.css" />
  
    
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body">
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
		   <div id="root">
	    
	    <div id="content" class="container">
		
	<script type="text/javascript" src="js/jquery-pack.js"></script>
	<script type="text/javascript" src="js/jquery.imgareaselect.min.js"></script>
	<script type="text/javascript" src="http://odyniec.net/projects/imgareaselect/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript">
	$(function () {
		$('#ladybug_ant').imgAreaSelect({ maxWidth: 200, maxHeight: 150, handles: true });
	});
	</script>
	<pre class="prettyprint">$(document).ready(function () {
	  $('#ladybug_ant').imgAreaSelect({ <em>maxWidth: 200</em>, <em>maxHeight: 150</em>, handles: true });
	});</pre>
	<p style="text-align: center;">
	<img id="ladybug_ant" src="ladybug_ant.jpg" alt="A ladybug being harassed by an ant." 
	 title="A ladybug being harassed by an ant." />
	</p>

	    </div> <!-- /#content -->
	    
	  </div> <!-- /#root -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
	  
  </body>
</html>

