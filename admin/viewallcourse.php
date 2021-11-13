<?php
require("connectlms.php");
?>

<?php include('top_header.php') ?>
<body class="cbp-spmenu-push">
	<div class="main-content">

<?php include('sidebar.php') ?>

<?php include('header.php') ?>


<div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h2 class="title1">Courses<span class="pull-right">
                        <a href="addnewcourse.php" class="btn btn-info">Add New</a></span></h2>
                    <div class="panel-body widget-shadow">
                        <h4></h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Course Name</th>
                                  <th>Cousre Description</th>
                                  <th>Cousre Category</th>
                                  <th>Cousre Fees</th>
                                  <th>Course Image</th>
                                  <th>Status</th>
                                  <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>

                                    
<?php
$query="select * from course_tbl order by course_order ASC";
$data=mysql_query($query, $con);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysql_fetch_assoc($data))
    {
        $uid = $result['course_id'];
        if($result['course_status'] == 0){
           $status = "In-Active";
        }else{
            $status = "Active";
        }
    
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['course_title']."</td>
        <td>".$result['course_desc']."</td>
        <td>".$result['course_category']."</td>
        <td>".$result['course_fees']."</td>
        <td><img src='images/".$result['course_img']."' style='width:68px'></td>
        <td>".$status."</td>
        <td><a href='editcourse.php?user=$uid'>Edit</a> | <a href='deletecourse.php?user=$uid'>Delete</a></td>
        </tr>
        
        ";
        $num++;
    }
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
                   <!--footer-->
    <?php include('footer.php');?>
      <!--//footer-->
    </div>
        
    <?php include('top_footer.php');?>
</body>
</html>