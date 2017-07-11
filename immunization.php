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
</head>
<body>
<div class="container-fluid">
    <div class="row">
      <h1><center>Health Informatics Governance and Data Analytics</center></h1>
    </div>
    <div class="row">
      <div class="col-sm-2">
          <div class="btn-group-vertical">
          <button type="button" class="btn btn-primary"><a href="index.php">Home</a></button>
         <button type="button" class="btn btn-primary"><a href="index.php">Data Elements</a></button>
          <button type="button" class="btn btn-primary"><a href="organizations.php">Orgnization Units</a></button>
          <button type="button" class="btn btn-primary"><a href="immunization.php">Analytics</a></button>
          <button type="button" class="btn btn-primary"><a href="maping.php">Maping</a></button>
        </div>
        </div>
        
    </div>
</div>
</body>
</html>
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
                              <li><a href="map.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Maps</a></li>

      </ul>
    <div class="attribution">:&HiGDA <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Hackathon</a><br/><a href="http://www.glyphs.co" style="color: #333;">DevJob by Code Samurai</a></div>
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><img src="images/logo.png"></li>
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
           
          <div class="row">
            <div class="col-sm-6">
              <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1KsaJo-M2zzZ6tAiZ-p4-KqJlVhx1Q1Sx_PexAJcLLpQ/pubchart?oid=1409470235&amp;format=interactive"></iframe>
            </div>
            <div class="col-sm-6">
              <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1KsaJo-M2zzZ6tAiZ-p4-KqJlVhx1Q1Sx_PexAJcLLpQ/pubchart?oid=200770588&amp;format=interactive"></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              <ul>
                <li>Measles doses given</li>
            <li>BCG doses given</li>
            <li>Yellow Fever doses given</li>
          </ul>
            </div>
            <div class="col-sm-10">
              <center>
                <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1yog--23KyDKa9gsj01XaNatsADC2Uk4WQ3q9HGxW-AA/pubchart?oid=398690082&amp;format=interactive"></iframe>
              </center>
            </div>
          </div>
      <div class="col-sm-2"></div>
        
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
function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("searchinput");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
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
