<?php include('top_header.php') ?>
<body class="cbp-spmenu-push">
	<div class="main-content">
<?php include('sidebar.php') ?>
<?php include('header.php') ?>

<div id="page-wrapper">
			<div class="main-page">
<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Horizontal form :</h4>
							</div>
							<div class="form-body">
   <form class="form-horizontal" action="insertstate.php" method="post">
      <div class="form-group">
         <label for="inputEmail3" class="col-sm-2 control-label">state_title</label>
         <div class="col-sm-9"> 
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="u_statetitle"> 
         </div>
      </div>
      <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">state_country</label> 
         <div class="col-sm-9"> <input type="text" class="form-control" id="inputPassword3" placeholder="state_country" name="u_statecountry"> </div>
      </div>
      <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox"> <label> <input type="checkbox"> status </label> </div>
         </div>
      </div>
      <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">submit</button> </div>
   </form>
  </div>
  </div>
</div>
					
					</div>










<?php include('footer.php')?>
<?php include('top_footer.php') ?>