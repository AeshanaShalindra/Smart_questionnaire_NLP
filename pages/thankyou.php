<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	 <script src="js/jquery-2.1.1.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  
    <link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
  <script src="js/jquery-gmaps-latlon-picker.js"></script>
	
<!--  It is a good idea to bundle all CSS in one file. The same with JS -->
 
<!--  JQUERY -->
<script type="text/javascript" src="/path/to/jquery.min.js"></script>
 
<!--  BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="/path/to/bootstrap.min.css">
<script type="text/javascript" src="/path/to/bootstrap.min.js"></script>
 
<!--  JQUERY-UI (only sortable and datepicker is needed) -->
<link rel="stylesheet" type="text/css" href="/path/to/jquery-ui.min.css">
<script type="text/javascript" src="/path/to/jquery-ui.min.js"></script>
<!--  if timepicker is used in filters -->
<link rel="stylesheet" type="text/css" href="/path/to/jquery-ui-timepicker-addon.min.css"/>
<script type="text/javascript" src="/path/to/jquery-ui-timepicker-addon.min.js"></script>
<!--  if touch event support is needed (mobile devices) -->
<script type="text/javascript" src="/path/to/jquery.ui.touch-punch.min.js"></script>
  
<!--  PAGINATION plugin -->
<link rel="stylesheet" type="text/css" href="/path/to/jquery.bs_pagination.min.css">
<script type="text/javascript" src="/path/to/jquery.bs_pagination.min.js"></script>
<script type="text/javascript" src="/path/to/bs_pagination/localization/en.min.js"></script>
 
<!--  FILTERS plugin --> 
<link rel="stylesheet" type="text/css" href="/path/to/jquery.jui_filter_rules.bs.min.css">
<script type="text/javascript" src="/path/to/jquery.jui_filter_rules.min.js"></script>
<script type="text/javascript" src="/path/to/jui_filter_rules/localization/en.min.js"></script>
<!--  required from filters plugin -->
<script type="text/javascript" src="/path/to/moment.min.js"></script>
 
<!--  DATAGRID plugin -->
<link rel="stylesheet" type="text/css" href="/path/to/jquery.bs_grid.min.css">
<script type="text/javascript" src="/path/to/jquery.bs_grid.min.js"></script>
<script type="text/javascript" src="/path/to/bs_grid/localization/en.min.js"></script>

	<script language="Javascript" type="text/javascript" src="edit_area/edit_area_full.js"></script>
	<script language="Javascript" type="text/javascript">
		// initialisation
		editAreaLoader.init({
			id: "example_1"	// id of the textarea to transform		
			,start_highlight: true	// if start with highlight
			,allow_resize: "both"
			,allow_toggle: true
			,word_wrap: true
			,language: "en"
			,syntax: "php"	
		});
		
		editAreaLoader.init({
			id: "example_2"	// id of the textarea to transform	
			,start_highlight: true
			,allow_toggle: false
			,language: "en"
			,syntax: "html"	
			,toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, syntax_selection, |, change_smooth_selection, highlight, reset_highlight, |, help"
			,syntax_selection_allow: "css,html,js,php,python,vb,xml,c,cpp,sql,basic,pas,brainfuck"
			,is_multi_files: true
			,EA_load_callback: "editAreaLoaded"
			,show_line_colors: true
		});
		
		editAreaLoader.init({
			id: "example_3"	// id of the textarea to transform	
			,start_highlight: true	
			,font_size: "8"
			,font_family: "verdana, monospace"
			,allow_resize: "y"
			,allow_toggle: false
			,language: "fr"
			,syntax: "css"	
			,toolbar: "new_document, save, load, |, charmap, |, search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help"
			,load_callback: "my_load"
			,save_callback: "my_save"
			,plugins: "charmap"
			,charmap_default: "arrows"
				
		});
		
		editAreaLoader.init({
			id: "example_4"	// id of the textarea to transform		
			//,start_highlight: true	// if start with highlight
			//,font_size: "10"	
			,allow_resize: "no"
			,allow_toggle: true
			,language: "de"
			,syntax: "python"
			,load_callback: "my_load"
			,save_callback: "my_save"
			,display: "later"
			,replace_tab_by_spaces: 4
			,min_height: 350
		});
		
		// callback functions
		function my_save(id, content){
			alert("Here is the content of the EditArea '"+ id +"' as received by the save callback function:\n"+content);
		}
		
		function my_load(id){
			editAreaLoader.setValue(id, "The content is loaded from the load_callback function into EditArea");
		}
		
		function test_setSelectionRange(id){
			editAreaLoader.setSelectionRange(id, 100, 150);
		}
		
		function test_getSelectionRange(id){
			var sel =editAreaLoader.getSelectionRange(id);
			alert("start: "+sel["start"]+"\nend: "+sel["end"]); 
		}
		
		function test_setSelectedText(id){
			text= "[REPLACED SELECTION]"; 
			editAreaLoader.setSelectedText(id, text);
		}
		
		function test_getSelectedText(id){
			alert(editAreaLoader.getSelectedText(id)); 
		}
		
		function editAreaLoaded(id){
			if(id=="example_2")
			{
				open_file1();
				open_file2();
			}
		}
		
		function open_file1()
		{
			var new_file= {id: "to\\ é # € to", text: "$authors= array();\n$news= array();", syntax: 'php', title: 'beautiful title'};
			editAreaLoader.openFile('example_2', new_file);
		}
		
		function open_file2()
		{
			var new_file= {id: "Filename", text: "<a href=\"toto\">\n\tbouh\n</a>\n<!-- it's a comment -->", syntax: 'html'};
			editAreaLoader.openFile('example_2', new_file);
		}
		
		function close_file1()
		{
			editAreaLoader.closeFile('example_2', "to\\ é # € to");
		}
		
		function toogle_editable(id)
		{
			editAreaLoader.execCommand(id, 'set_editable', !editAreaLoader.execCommand(id, 'is_editable'));
		}
	
	</script>

<style>
#sampleDate { 
   display:inline;
}
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smart CV Questionnaire</a>
            </div>
            <!-- /.navbar-header -->

          
           
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thank You!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-6">
				<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<!--academic-->

<?php
// configuration


if(isset($_POST['btndanger'])){
$file =$_POST['txtvalue'];

$url = 'http://localhost/cvfilter_admin/pages/update_onthology.php';

}


// check if form has been submitted
if (isset($_POST['test_1']))
{
	$file=$_POST['txtfile'];
	
    // save the text contents
    file_put_contents($file, $_POST['test_1']);

    // redirect to form again
    //header(sprintf('Location: %s', $url));
    @printf('<a href="%s">Successfully Updated</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
@$text = file_get_contents($file);

?>


		
		
		
		
                </div>
         
            </div>
            <!-- /.row -->
          
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<?php


include 'SA/examples/demo.php';

?>
</body>

</html>
