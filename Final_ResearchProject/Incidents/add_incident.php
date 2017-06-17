<?php
if(count($_POST)>0) {
	require_once("../db.php");
                $sql = "INSERT INTO Incidents (IncidentName, IncidentDate, Owner, ReportedBy, Location, Description, Systems, Type, Impact, Department, Priority, RiskID, RiskName) VALUES ('" . $_POST["IncidentName"] . "','" . $_POST["IncidentDate"] . "','" . $_POST["Description"] . "','" . $_POST["Systems"] . "', '" . $_POST["Type"] . "','" . $_POST["Impact"] . "', '" . $_POST["Department"] . "','" . $_POST["Priority"] . "','" . $_POST["RiskID"] . "','" . $_POST["RiskName"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Incident Added Successfully";
	}
}
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
        
    </head>

    <body>

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
                    <a class="navbar-brand" href="index.html">R.A.M.S</a>
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
                                Add Incident
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
    
    <script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}  

function sum() {
            var RiskImpact = document.getElementById('Impact').value;
            var RiskProb = document.getElementById('Probability').value;
            var result = parseInt(RiskImpact) * parseInt(RiskProb);
            if (!isNaN(result)) {
                document.getElementById('PIValue').value = result;
            }
        }
</script>

</head>
<body>
<form name="frmUser" method="post" action="" width="500px">
<div width="500px">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> See All Incidents</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="50%" align="center" class="tblSaveForm">

    <tr>
        <td><label>Incident Name</label></td>
        <td><input type="text" name="IncidentName" class="form-control" value="<?php echo $row['IncidentName']; ?>"></td>
    </tr>

    <tr>
        <td><label>Incident Date</label></td>
        <td><input type="text" name="IncidentDate" class="form-control" value="<?php echo $row['IncidentDate']; ?>"></td>
    </tr>
    
    <tr>
        <td><label>Owner</label></td>
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
        <td><label>Description</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="Description" class="form-control" value="<?php echo $row['Description']; ?>"></td>
    </tr>
    <tr>
        <td><label>Systems</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="Systems" class="form-control" value="<?php echo $row['Systems']; ?>"></td>
    </tr>
    <tr>
        <td><label>Type</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="Type" class="form-control" value="<?php echo $row['Type']; ?>"></td>
    </tr>
    <tr>
        <td><label>Impact</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="Impact" class="form-control" value="<?php echo $row['Impact']; ?>"></td>
    </tr>
    <tr>
        <td><label>Department</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="Department" class="form-control" value="<?php echo $row['Department']; ?>"></td>
    </tr>
    <tr>
        <td><label>Priority</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="Priority" class="form-control" value="<?php echo $row['Priority']; ?>"></td>
    </tr>
    <tr>
        <td><label>Risk ID</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="RiskID" class="form-control" value="<?php echo $row['RiskID']; ?>"></td>
    </tr>
    <tr>
        <td><label>Risk Name</label></td>
        <!--<td><input type="text" name="Owner" class="form-control" value="<?php //echo $row['Owner']; ?>"></td>-->
        <td><input type="text" name="RiskName" class="form-control" value="<?php echo $row['RiskName']; ?>"></td>
    </tr>
    

<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit btn-primary"></td>

</table>
</div>
</form>
</body></html>