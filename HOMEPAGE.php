<?php 
include('session.php');
?>

<html lang="en">
<head>
		<meta charset="utf-8">
		<title>KTYS - Student Portal</title>
		<meta name="description" content="overview &amp; stats">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sidebar Menu for Admin Dashboard | CodingNepal</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

		<!--basic styles-->

	
		 <link rel="stylesheet" href="style.css" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

		<link rel="stylesheet" href="assets/css/datepicker.css">
        <link rel="stylesheet" href="assets/css/daterangepicker.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!--[if IE 7]>
		  <link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">

		<!--ace styles-->

		<link rel="stylesheet" href="css/ace.min.css">
		<link rel="stylesheet" href="css/ace-responsive.min.css">
		<link rel="stylesheet" href="css/ace-skins.min.css">

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="css/ace-ie.min.css" />
		<![endif]-->

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: E1AB74;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color:black;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: E1AB74;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: E1AB74;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:E1AB74;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
	
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>


<link rel="stylesheet" href="css/colorbox.css">


<script src="js/box.jquery.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script>

function get2D( num ) {
    if( num.toString().length == 11 ) // Integer of less than two digits
        return "0" + num; // Prepend a zero!
	else if( num.toString().length == 10 ) // Integer of less than two digits
        return "00" + num; // Prepend a zero!
	else if( num.toString().length == 9 ) // Integer of less than two digits
        return "000" + num; // Prepend a zero!
    return num.toString(); // return string for consistency
}

      function viewAktif(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/aktif.php?ic=" +get2D(a)});
      }
	  
      function viewTangguh(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/tangguh.php?ic=" +get2D(a)});
      }	  
	  
      function viewNaik(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/jpk_naik.php?ic=" +get2D(a)});
      }
	  
      function viewTamat(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/jpk_tamat.php?ic=" +get2D(a)});
      }	  	  

      function viewOnline(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/aca_online.php?ic=" +get2D(a)});
      }
	  
      function viewSemuka(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/aca_semuka.php?ic=" +get2D(a)});
      }	  	  

      function viewStd(a){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/regsub.php?ic=" +get2D(a)});
      }

      function printSlip(a){
        $.colorbox({iframe:true, width:"85%", height:"85%", href: "page/exam_slip.php?ic=" +get2D(a)});
      }
	  
      function printSlipKonvo(a){
		  //alert(a);
        $.colorbox({iframe:true, width:"85%", height:"85%", href: "page/konvo_slip.php?ic=" +get2D(a)});
      }	  

      function printRegSlip(a){
        $.colorbox({iframe:true, width:"85%", height:"85%", href: "page/ls_reg.php?ic=" +get2D(a)});
      }
	  
      function viewPra(a){
        $.colorbox({iframe:true, width:"65%", height:"65%", href: "page/regpra.php?ic=" +get2D(a)});
      }

      function delCourse_std(a){
		  //alert(a);
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/delcourse_std.php?id=" +a});
      }	  



      function openColorBox(){
$.colorbox({ 
    href:"popup/popup.html", 
    open:true, 
    onComplete:function(){ 
        $('#cboxLoadedContent').click(function(){ 
            window.open('https://www.facebook.com/photo.php?fbid=2157667324346667&set=a.392994837480600&type=3&theater','_blank');
        }) 
    }
}); 		  
   $.colorbox({iframe:true, width:"50%", height:"95%",title:"To close this dialog click <font style='color:red;'>X</font> icon at the right", href: "popup/popup.html"});
     }
	  
      //setTimeout(openColorBox, 1000);
	  
	  
</script>

<script type="text/javascript">
 var popup;
 function ShowPopup(url) {
   popup = window.open(url, "Popup", "toolbar=no,scrollbars=no,location=no,statusbar=no,menubar=no,resizable=0,width=750,height=450,left = 490,top = 162");
   popup.focus();
  }
</script>
	
<style>
table { background-color:7BC2CA; }
tr { background-color: 7BC2CA; }
td { background-color: 7BC2CA; }

</style>			

                  

<br>
 <body>
 <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <p><a href="results.php">Keputusan</a></p>
  <p><a href="PDFupload.html">Upload PDF</a></p>
  <p><a href="e-borang.html">E-Borang</a></p>
  <p><a href="feedback.php">Feedback</a></p>
  <p><a href="logout.php">Logout</a></p>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
  
</div>
<div align="center">
<table width="90%" border="1" class="contents">
  <tbody><tr class="contents">
   <td align="right" width="20%">Nama &nbsp;</td>
    <td align="center" width="1%">:</td>
    <td align="left" width="30%"> &nbsp;<?php echo $login_session; ?></td>
    <td align="right" width="10%">No Matrik &nbsp;</td>
    <td align="center" width="1%">:</td>
    <td align="left" width="40%" style="text-transform: uppercase;"> &nbsp;<?php echo $nomatrik; ?></td>
  </tr>
  <tr class="contents">
  	<td align="right">MyKAD &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left"> &nbsp;<?php echo $nric; ?></td>
  	<td align="right">Program &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left"> &nbsp;<?php echo $program; ?></td>
  </tr>
  <tr class="contents">
  	<td align="right">No.HP &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left"> &nbsp;<?php echo $telno; ?></td>
  	<td align="right">Kursus &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left">&nbsp;<?php echo $course; ?></td>
  </tr>  
  <tr class="contents">
  	<td align="right" valign="top">Alamat &nbsp;</td>
  	<td align="center" valign="top">:</td>
  	<td align="left" colspan="4">&nbsp;<?php echo $address; ?></td>
  </tr>    
  
    <tr class="contents">
  	<td align="left" colspan="6">&nbsp; </td>
  </tr>    
   
  <tr class="contents">
  	<td align="right" valign="top"> Nama Penasihat Akademik &nbsp;</td>
  	<td align="center" valign="top">:</td>
  	<td align="left" colspan="4"> &nbsp;<strong><?php echo $penasihat; ?></strong></td>
  </tr>    
    
</tbody></table>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>   
</body>



<script>

function func_check_form() {
        if ((document.getElementById('txtRaptai').checked) && (document.getElementById('txtKonvo').checked) && (document.getElementById('txtPeraturan').checked)) {
			document.formI.submit();
		    return true;			
        } else {
            alert("Sila tandakan / untuk mengesahkan keterangan anda");
			document.getElementById("txtRaptai").focus();
        }
}

</script>	
        
<link rel="stylesheet" href="css/colorbox.css">

<script>

function chStd( num ) {
    if( num.toString().length == 11 ) // Integer of less than two digits
        return "0" + num; // Prepend a zero!
	else if( num.toString().length == 10 ) // Integer of less than two digits
        return "00" + num; // Prepend a zero!
	else if( num.toString().length == 9 ) // Integer of less than two digits
        return "000" + num; // Prepend a zero!
    return num.toString(); // return string for consistency
}

</script>    

<script src="js/box.jquery.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script>
      function openColorBox(){
        $.colorbox({iframe:true, width:"95%", height:"95%", href: "peraturan.html"});
      }

      function upDoc(){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "upload/index.php"});
      }      

      function upBKSA(a){
        $.colorbox({iframe:true, width:"95%", height:"98%", href: "../../tracer/index.php?ic=" +chStd(a)});
      }      

      function sahPelajar2(){
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/jpak_sah.php?id=" +chStd(a)});
      }      
	  
      function courseUpload(a){
		  //alert(a);
        $.colorbox({iframe:true, width:"65%", height:"90%", href: "course_upload/index.php?id=" +a});
      }    	  
	  
      function sahKonvo(a){
		  //alert(a);
        $.colorbox({iframe:true, width:"55%", height:"55%", href: "page/sah_konvo.php?id=" +get2D(a)});
      }	  
      //setTimeout(openColorBox, 1000);
</script>

		<script src="js/jquery.min.js"></script>

		<script type="text/javascript">
			window.jQuery || document.write("<script src='js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="js/bootstrap.min.js"></script>



		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="js/excanvas.min.js"></script>
		<![endif]-->

		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/date-time/moment.min.js"></script>
		<script src="assets/js/date-time/daterangepicker.min.js"></script>
        
        <!---->
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<script src="js/jquery.slimscroll.min.js"></script>
		<script src="js/jquery.easy-pie-chart.min.js"></script>
		<script src="js/jquery.sparkline.min.js"></script>
		<script src="js/flot/jquery.flot.min.js"></script>
		<script src="js/flot/jquery.flot.pie.min.js"></script>
		<script src="js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="js/ace-elements.min.js"></script>
		<script src="js/ace.min.js"></script>
        
<script src="js/jquery.searchable-1.0.0.min.js"></script>
    


		<!--inline scripts related to this page-->   
        
		<script type="text/javascript">

$(function () {
    $( '#mytable1' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    

});		
		
$(function () {
    $( '#mytable2' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    

});

     $(document).ready(function(){
      var i=1;
	  //var cntrow=2;
	  var cntrow = $("#txtTotal").val()
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><textarea class='span12' id='form-field-8' placeholder='Tasks' name='desc[]'></textarea>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');

$("#txtTotal").val(cntrow);	  
      i++; 
	  cntrow++; 
  });
     $("#delete_row").click(function(){
		 var cntrow = $("#txtTotal").val()
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 cntrow-=1;
$("#txtTotal").val(cntrow);			 
		 }
	 });

});		
//additional price on package 
// <input type='number'  id='total_1' class='form-control totalLinePrice' autocomplete='off' >
//<input type='number'  id='price_1' class='form-control changesNo net_rate' autocomplete='off' >
//<input type='text' class='form-control qty' autocomplete='off'>

      //$('#addr'+i).html("<td>"+ (i+1) +"</td><td><input type='text' class='form-control' placeholder='Task' name='addition[]'/></td><td><input type='text' class='form-control' placeholder='Quantity' name='quantity[]'/></td><td><input type='text' class='price2' placeholder='Price' name='price[]'/></td><td><input type='text' class='form-control' placeholder='Total' name='total[]'/>");
$(document).ready(function(){
 $("#tag").autocomplete("sys/autocomplete.php", {
		selectFirst: true
	});
});
	  
     $(document).ready(function(){
      var i=1;
	  //var cntrow=2;
     $("#add_price").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input type='text' class='form-control' placeholder='Task' name='addition[]' /></td><td><input type='text' class='input-mini qty' autocomplete='off' name='quantity[]'></td><td><input type='text' class='input-mini' autocomplete='off' name='uom[]'/></td><td><input type='number' id='price_1' class='form-control changesNo net_rate' autocomplete='off' name='price[]'></td><td><input type='number' id='total_1' class='form-control totalLinePrice' autocomplete='off' name='total[]'/></td>");


      $('#invoice-table').append('<tr id="addr'+(i+1)+'"></tr>');

      i++; 
  });
     $("#delete_price").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;	 
		 }
	 });

});


   $(document).ready(function() {
          var id = 1;
          // Add button functionality
          $(".addrow").click(function() {
            id++;
            var master = $(".invoice_table");
            // Get a new row based on the prototype row
            var prot = master.find(".prototype").clone();
            prot.attr("class", id + " item")
            prot.find(".id").attr("value", id);
            master.find("tbody").append(prot);
            prot.find(':input:not(".id")').val(" ");
          });
          $("#invoice-table").on('click', '.deleteinvoiceitem', function() {
            $(this).closest('tr').remove();
            recalcId();
            id--;
          });
        });

        function recalcId() {
          $.each($("table tr.item"), function(i, el) {
            $(this).find("td:first input").val(i + 2); // Simply couse the first "prototype" is not counted in the list
          })
        }
 $(document).on('keyup', '.qty, .net_rate', function () {
  var parent = $(this).closest('tr');
    calculate(parent);
})


function calculate(e){
    var q = +$(e).find('.qty').val();
    var n = +$(e).find('.net_rate').val();
    var sum = 0;
    $(e).find('.totalLinePrice').val(q*n);
    $('.totalLinePrice').each(function(i,e){
        sum += +$(e).val();        
    });
    $('.grand').val(sum);
} ;
		
		
		
			$(function() {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaings",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			
			  var $tooltip = $("<div class='tooltip top in hide'><div class='tooltip-inner'></div></div>").appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>
	

</div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button type="button" id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button type="button" id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>