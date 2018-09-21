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
	<script type="text/javascript">
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var countryLists = new Array(6) 
 countryLists["empty"] = ["Select Subject area"]; 
 countryLists["Genaral"] = ["QA","BA","Software Engineer","UI Engineer"]; 
 countryLists["QA"] = ["Testing Types", "Design Techniques", "Test Cases","Automation","Testing Tools"]; 
 countryLists["BA"] = ["Documentation(SRS)", "Design(UML)", "Life Cycles", "Tools","Brain Teasers"]; 
 countryLists["Software Engineer"] = ["Design Patterns", "OOP concepts", "Algorithems","Computer Architecture","Software Architecutre"]; 
 countryLists["UI Engineer"]= ["Color harmony", "UX","ui 3rd sub"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("country"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>
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
                <a class="navbar-brand" href="index.php">Smart CV Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
              
            
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						
						<li>
                            <a href="qa.php"><i class="fa fa-dashboard fa-fw"></i> Add questions</a>
                        </li>
						<li>
                            <a href="qa_all.php"><i class="fa fa-dashboard fa-fw"></i>view questionns</a>
                        </li>
						<li>
                            <a href="qa_answers.php"><i class="fa fa-dashboard fa-fw"></i>Questionnaire Results</a>
                        </li>
						
						
                       
                      
                    <?php
					$con=mysqli_connect('localhost','root','','xyz') or die(mysqli_error());
					
			
						
						$sql = mysqli_query($con,"SELECT DISTINCT sname FROM answers")
					or die(mysqli_error());
						
				
					while($row = mysqli_fetch_array($sql)){
					?>
					
					
						
					
						
						
						
						
					<?php
					
					}
					?>
                  
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Question Creator</h1>
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
       <form action="" method="POST">
	   <div class="form-group">
		<select class="form-control" name="txtc" id="continent" onchange="countryChange(this);">
		<option value="Empty">Select a Subject</option>
		<option value="Genaral">Genaral</option>
		<option value="QA">QA</option>
			<option value="BA">BA</option>
				<option value="Software Engineer">Software Engineer</option>
					<option value="UI Engineer">UI Engineer</option>
		</select>
		</div>
		
		<div class="form-group">
		<select class="form-control" name="txts" placeholder="subject area" id="country">
		<option value="0">Select a subject area</option>
		</select>
		
		
		
		
		<!--
		<input type="text" placeholder="Question Number" class="form-control" name="txtn">
		-->
		</div>
		<div class="form-group">
		<input type="text" placeholder="Question" class="form-control" name="txtq">
		
		</div>
		Expected Answer : 
		<fieldset>
		
		
		<textarea id="example_1" style="height: 350px; width: 100%;" name="txta">
<?php echo htmlspecialchars($text) ?>
		</textarea>
		<input type="submit" class="btn btn-warning" name="btnsave" />
<input type="reset" name="btnok" class="btn btn-primary"/>
</br></br></br>
	</fieldset>
		</form>
		
		<?php
			if(isset($_POST['btnsave'])){
						
						
						$qqq=$_POST['txtq'];
						$aaa=$_POST['txta'];
						$ccc=$_POST['txtc'];
						$sss=$_POST['txts'];
						
						
						
						
						$con=mysqli_connect("localhost","root","","xyz");
						
						
						
						$sql="insert into questions
						(question,answer,category,SubjectArea)
						values('$qqq','$aaa','$ccc','$sss')";
						
						@$_SESSION['cat']=$uname;
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}

						
						
					@header('Location:qa.php');
						
						}
		
		
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
