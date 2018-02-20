	<!doctype html>
<html lang="en">
  <head>

    <?php include_once('inc/header.php'); ?>

  </head>
  <body>
	  <div class="container">
	  	<div style="margin: 30px 30px; position: relative;">
			<div class="card-footer-lg">
		    	<div class="m-0">
		    		<a href="#">
		    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
		    		</a>
		    	</div>
		    	<div class="m-1 input-comment">

				      <div class="input-group">

			    		<input type="text" class="form-control input-rounded" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="">
			    		<span class="input-group-btn"><span class="btn btn-file camera-color"><span class="fa fa-camera"></span>
         				 <input type="file" accept="image/png, image/jpeg, image/gif"/></span></span>
			    		<span class="input-group-btn"><span class="btn btn-file last-button"><span class="fa fa-smile-o"></span>
         				 <input type="file" accept="image/png, image/jpeg, image/gif"/></span></span>
			    	  </div>


		    	</div>
		    	<div class="m-1 btn-coment" >
		    		<input type="submit" name="post" class="btn btn-post" value="POST">

		    	</div>
			</div>
	  	</div>
	  </div>


	    <?php include_once('inc/footer.php');?>
    <?php include_once('inc/footer-script.php');?>

  </body>
</html>