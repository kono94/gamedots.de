<?php
$mysqli = new mysqli("localhost", "jan" , PW, "Wertentwicklung");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (". $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<html>
<head>
 <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no;">
    <title>GameDots</title>
    <link rel="icon" href="images/favicon.ico">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

</head>
<body style="padding: 20px;">
	<div id="expert" style=" height:90%; width:90%;position:absolute;margin-left:5%;display:none;"></div>
	<div id="simple" style=" height:90%;width:90%;position:absolute;margin-left:5%;"></div>
	<button id="button" class="btn-primary" style="position:absolute;">SHOW ALL GRAPHS</button>
	<button id="graph_switch_btn" class="btn-primary" style="position:absolute;margin-top:30px;">EXPERT GRAPH</button>

<script>

$('#expert').highcharts('StockChart',{
        chart: {
            type: 'spline'			
        },
        title: {
            text: 'Inventory values'
        },
        subtitle: {
            text: 'Counter Strike: Global Offensive'
        },
        xAxis: {
            type: 'datetime'          
         },
            title: {
                text: 'Inventory values'
            },
      
        yAxis: {
            title: {
                text: 'value in €'
            },
            // min: 0
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b %Y - %H : %M} <br> <b>{point.y:.2f}€</b>'
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                },
				dataLabels: {
                    enabled: true
			     }
            }		
        },
		 legend: {
            enabled: true
		 },
	     rangeSelector : {
			  enabled:true,
			  inputEnabled:true,
                buttons : [{
                    type : 'day',
                    count : 1,
                    text : '1 D'
                }, {
                    type : 'day',
                    count : 7,
                    text : '7 D'
                }, {
                    type : 'day',
                    count : 30,
                    text : '30 D'
                }, {
                    type : 'all',
                    count : 1,
                    text : 'ALL'
                }],     
                
				selected: 3
            },
			<?php
				$sql = "SELECT * FROM accounts INNER JOIN users ON accounts.OWNER_ID = users.ID WHERE accounts.DISPLAY = 1 ORDER BY accounts.MAIN DESC, accounts.OWNER_ID ASC";
				$result = $mysqli->query($sql);
				$string = "series: [";
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					$string .='{name: \''.addslashes($row["COMMENT"]).'\', data: [ ';
					$data_sql = "SELECT ACCOUNT_ID, UNIX_TIMESTAMP(CREATED), EURO, ITEMS FROM data WHERE ACCOUNT_ID =".$row["ACCOUNT_ID"];
					$data_result = $mysqli->query($data_sql);					
					while($data_row = $data_result->fetch_array(MYSQLI_ASSOC)){
						$string .= "[".$data_row["UNIX_TIMESTAMP(CREATED)"]."000, ".$data_row["EURO"]."],";
					}	
					
					$string = substr($string, 0, -1);	
					$string .= ']';		
					if($row["COMMENT"] == "Lyux"){
						$string .= ',visible: true';
					}else{
						$string .= ',visible: false';	
					}					
					$string .= '},';
				}
				$string = substr($string, 0, -1); ?>
				<?php
				echo $string."]";
					?>      
   
    });	

	
		var expert = false;
	    var hidden = true;			
		
		$('#button').click(function() {
			if(expert){
				var chart = $('#expert').highcharts();
			}else{
				var chart = $('#simple').highcharts();
			}
			var series = chart.series[0];
			if (!hidden) {
				$(chart.series).each(function(){					
					this.setVisible(false, false);
				});
				chart.redraw();
				hidden = true;
				$('#button').html('SHOW ALL GRAPHS');
				
			} else {
				$(chart.series).each(function(){					
					this.setVisible(true, false);
				});
				chart.redraw();
				hidden = false;
				$('#button').html('HIDE ALL GRAPHS');
			}
		});
		
	$button = $('#graph_switch_btn');
		$button.click(function() {
			if(expert){
				expert = false;
				$button.html('EXPERT GRAPH');
				$('#expert').css("display", "none");
				$('#simple').css("display", "block");
			}else{
				expert = true;
				$button.html('SIMPLE GRAPH');			
				
				hidden = false;
				$('#button').html('HIDE ALL GRAPHS');
				$('#expert').css("display", "block");
				$('#simple').css("display", "none");
			}
			
		});
</script>	
<script>
$('#simple').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Inventory values'
        },
        subtitle: {
            text: 'Counter Strike: Global Offensive'
        },
        xAxis: {
            type: 'datetime'          
         },
            title: {
                text: 'Inventory values'
            },
      
        yAxis: {
            title: {
                text: 'value in €'
            },
       //      min: 0
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b %Y - %H : %M} <br> <b>{point.y:.2f}€</b>'
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                },
				dataLabels: {
                    enabled: true
			     }						 
            }		
        },
				<?php
				echo $string."]";
					?>   
    });	
</script>
</body>
</html>