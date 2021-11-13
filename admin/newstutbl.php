<?php
require("connectlms.php");
$sql="select * from student_tbl";
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
					<h2 class="title1">student</h2>
                    <a href="addnewstu.php"><button>new admission</button></a>
                    <br>
					<div class="panel-body widget-shadow">
						<h4>list</h4>
						<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Hover Rows Table:</h4>
					    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name </th>
                                    <th>phone</th>
                                    <th>dob</th>
                                    <th>gender</th>
                                    <th>state</th>
                                </tr>
                            </thead>
                            <tbody>
                          <?php  $num = 1;
                           while ($data=mysql_fetch_assoc($result)){
                            $user=$data['m_state_id'];
                            
                                echo"<tr>
                                    <th scope='row'>".$num."</th>
                                    
                                    <td>".$data['student_name']."</td>
                                    <td>".$data['student_phone']."</td>
                                    <td>".$data['student_dob']."</td>
                                    <td>".$data['student_gender']."</td>
                                    <td>".$data['student_state']."</td>
                                    <td><a href='editstate.php?user=$user'>Edit</a> | <a href='deletestate.php?user=$user'>Delete</a> </td>
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