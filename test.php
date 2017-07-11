<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HIGDA- Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Health Informatics Governance </span>and Data Analytics</a>
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="organizations.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Organization Unit</a></li>
			<li><a href="immunization.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Immunization</a></li>
			<li><a href="dataelements.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Data Elements</a></li>
			</ul>
		<div class="attribution">:&HiGDA <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Hackathon</a><br/><a href="http://www.glyphs.co" style="color: #333;">DevJob by Code Samurai</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<hr>
        <div class="table-responsive">
         <input type="text" id="searchinput" onkeyup="searchFunc()" placeholder="Search by code.."/>
          <table id="table" class="table-striped" width="100%">
            <tr>
              <th>Name</th>
              <th>Code</th>
            </tr>
            <tbody>
              <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://play.dhis2.org/release1/api/25/analytics.json?dimension=dx%3AYtbsuPPo010%3Bl6byfWFUGaP%3Bs46m5MS0hxu&dimension=pe%3ALAST_12_MONTHS&filter=ou%3AImspTQPwCqd&displayProperty=NAME&skipMeta=true",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic YWRtaW46ZGlzdHJpY3Q=",
    "cache-control: no-cache",
    "postman-token: 8a2e6f2e-ded8-0485-7dbb-2bd043d38a88"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $data = json_decode($response, true);

                $clinics = $data["headers"];
                
                foreach ($clinics as $clinic) {
                  echo '<tr>';
                  echo '<td>' . $clinic['name'] . '</td>';
                  echo '<td>' . $clinic['code'] . '</td>';
    }              echo '</tr>';
}
?>

            </tbody>
          </table>
        </div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
