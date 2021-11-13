<?php
require("connectlms.php");
$sql="select * from category_tbl";
$result=mysql_query($sql,$con);

?>

<?php include('top_header.php') ?>
<body class="cbp-spmenu-push">
	<div class="main-content">

<?php include('sidebar.php') ?>

<?php include('header.php') ?>


<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">course category</h2>
                    <a href="addcategory.php"><button>add new category</button></a>
                    <br>
					<div class="panel-body widget-shadow">
						<h4>list</h4>
						<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Hover Rows Table:</h4>
					    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>category_title</th>
                                    <th>category_desc</th>
                                    <th>category_img</th>
                                    <th>state_status</th>
                                    <th>option</th>
                                </tr>
                            </thead>
                            <tbody>
                          <?php  $num = 1;
                           while ($data=mysql_fetch_assoc($result)){
                            $user=$data['m_category_id'];
                            if ($data['m_category_status']==0)
                            {
                                $status="inactive";

                            }else{
                                $status="active";
                            }

                            
                                echo"<tr>
                                    <th scope='row'>".$num."</th>
                                    
                                    <td>".$data['m_category_title']."</td>
                                    <td>".$data['m_category_desc']."</td>
                                    <td><img src='images/".$data['m_category_img']."'style='width:68px'></td>
                                    <td>".$status."</td>
                                    <td><a href='editcategory.php?user=$user'>Edit</a> | <a href='deletecategory.php?user=$user'>Delete</a> </td>
                                </tr>";
                                $num++;
                          }
                              ?>
                            </tbody>
                            </table>
					</div>
					</div>

                    <?php include('footer.php')?>
<?php include('top_footer.php') ?>