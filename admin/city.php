<?php
require("connectlms.php");
$sql="select * from city_tbl";
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
					<h2 class="title1">city</h2>
                    <a href="addcity.php"><button>add new city</button></a>
                    <br>
					<div class="panel-body widget-shadow">
						<h4>list</h4>
						<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Hover Rows Table:</h4>
					    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>city_id</th>
                                    <th>city_title </th>
                                    <th>city_country</th>
                                    <th>city_status</th>
                                    <th>option</th>
                                </tr>
                            </thead>
                            <tbody>
                          <?php  $num = 1;
                           while ($data=mysql_fetch_assoc($result)){
                            $user=$data['m_city_id'];
                            
                                echo"<tr>
                                    <th scope='row'>".$num."</th>
                                    
                                    <td>".$data['m_city_title']."</td>
                                    <td>".$data['m_city_country']."</td>
                                    <td>".$data['m_city_status']."</td>
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