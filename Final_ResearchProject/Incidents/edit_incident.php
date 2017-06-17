<?php
require_once("../db.php");
if(count($_POST)>0) {
	$sql = "UPDATE Incidents set IncidentName='" . $_POST["IncidentName"] . "', IncidentDate='" . $_POST["IncidentDate"] . "', Owner='" . $_POST["Owner"] . "', ReportedBy='" . $_POST["ReportedBy"] . "', Location='" . $_POST["Location"] . "', Description='" . $_POST["Description"] . "', Systems='" . $_POST["Systems"] . "', Type='" . $_POST["Type"] . "', Impact='" . $_POST["Impact"] . "', Department='" . $_POST["Department"] . "', Priority='" . $_POST["Priority"] . "', RiskID='" . $_POST["RiskID"] . "', RiskName='" . $_POST["RiskName"] . "' WHERE IncidentID='" . $_POST["IncidentID"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM Incidents WHERE IncidentID='" . $_GET["IncidentID"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>RAMS</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">R.A.M.S</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Janine Cahoon</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Janine Cahoon</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Janine Cahoon</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Janine Cahoon <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>  
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="../CRUD/add_risk.php"><i class="fa fa-fw fa-bar-chart-o"></i> Add New Risk</a>
                    </li>
                    <li>
                        <a href="../CRUD/index.php"><i class="fa fa-fw fa-table"></i> Risk Register</a>
                    </li>
                    <li>
                        <a href="index.php"><i class="glyphicon glyphicon-search"></i> Incidents</a>
                    </li>
                    <li>
                        <a href="../KnowledgeBase/list_files.php"><i class="fa fa-fw fa-desktop"></i> Knowledge Base</a>
                    </li>
                    <li>
                        <a href="../Analytics/index.php"><i class="fa fa-fw fa-wrench"></i> Analytics</a>
                    </li>
                </ul>
            </div>
                <!-- /.navbar-collapse -->
            </nav>
   
    <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Edit Incident
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="../index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i class="fa fa-database"></i> <a href="index.html">Incident Log</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-edit"></i> Add Incident
                                </li>
                            </ol>
                        </div>
                    </div>
       

    </head>
    <body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Risks</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Incident</td>
</tr>
<tr>
<td><label> Incident ID</label></td>
<td><input type="text" name="IncidentID" class="form-control" value="<?php echo $row['IncidentID']; ?>" readonly></td>
</tr
<tr>
    <td><label>Incident Name</label></td>
<td><input type="text" name="IncidentName" class="form-control" value="<?php echo $row['IncidentName']; ?>"></td>
</tr>
<tr>
<td><label>Date of Incident</label></td>
<td><input type="text" name="IncidentDate" class="form-control" value="<?php echo $row['IncidentDate']; ?>"></td>
</tr>
<tr>
<td><label>Incident Owner</label></td>
<td><input type="text" name="Owner" class="form-control" value="<?php echo $row['Owner']; ?>"></td>
</tr>
<tr>
<td><label>Reported By</label></td>
<td><input type="text" name="ReportedBy" class="form-control" value="<?php echo $row['ReportedBy']; ?>"></td>
</tr>
<tr>
<td><label>Location</label></td>
<td><input type="text" name="Location" class="form-control" value="<?php echo $row['Location']; ?>"></td>
</tr>
<tr>
<td><label>Description of Incident</label></td>
<!--<td><input type="text" name="Description" class="form-control" value="<?php// echo $row['Description']; ?>"></td>-->
<td><textarea rows="4" cols="50" name="Description" class="form-control" value="<?php echo $row['Description']; ?>">
</textarea></td>
</tr>
<tr>
<td><label>Systems Affected (if applicable)</label></td>
<!--<td><input type="text" name="Systems" class="form-control" value="<?php //echo $row['Systems']; ?>"></td>-->
<td><textarea rows="4" cols="50" name="Systems" class="form-control" value="<?php echo $row['Systems']; ?>">
</textarea></td>
</tr>
<tr>
<td><label>Incident Type</label></td>
<td><input type="text" name="Type" class="form-control" value="<?php echo $row['Type']; ?>"></td>
</tr>
<tr>
<td><label>Impact of Incident</label></td>
<td><input type="text" name="Impact" class="form-control" value="<?php echo $row['Impact']; ?>"></td>
</tr>
<tr>
<td><label>Department</label></td>
<td><input type="text" name="Department" class="form-control" value="<?php echo $row['Department']; ?>"></td>
</tr>
<tr>
<td><label>Priority</label></td>
<!--<td><input type="text" name="Priority" class="form-control"value="<?php //echo $row['Priority']; ?>"></td>-->
<td><select name="Priority" class="form-control">
    <option value="Low">Low</option>
    <option value="Medium">Medium</option>
    <option value="High">High</option>
    </select></td>
</tr>
<tr>
<td><label>Associated Risk ID</label></td>
<td><input type="text" name="RiskID" class="form-control" value="<?php echo $row['RiskID']; ?>"></td>
</tr>
<tr>
<td><label>Associated Risk Name</label></td>
<td><input type="text" name="RiskName" class="form-control" value="<?php echo $row['RiskName']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>