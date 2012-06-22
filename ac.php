<html>
	<head>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js"></script>
		<STYLE type="text/css">
            body {
                background-color:;
                padding : 1px;
            }
            table {
                width: 100%;
                height:100%;
            }
            tr {
            }
            td {
            }
            div.panel {
                border:solid 1px #F4F4F4;
                display : block;
                height : 100%;
                padding:auto;
                margin:auto;
                text-align : center;
                /*font-size : 10em;*/
               font:normal small-caps bold 9em 'verdana','verdana',serif;
               color:#F4F4F4;
            }
            a {
                text-decoration : none;
            }
		</STYLE>
		<script>
		    $(document).ready(function(){
		        $('div #panel1').click(function(){
		            window.console.log();
		        })
		        
		    })
		</script>
	</head>
	<body>
		<table>
			<? $cnt=1;
               for ($i=1; $i <= 3; $i++) { ?>
			<tr>
				<?  for ($ii=1; $ii <= 3; $ii++) { ?>
				<td><a href="#"><div id="panel<?=$cnt ?>" class="panel"><?=$cnt ?><?/*=$ii ?>-<?=$ii */?></div></a></td>
				<? $cnt++;}; ?>
			</tr>
			<? } ?>
		</table>
	</body>
</html>