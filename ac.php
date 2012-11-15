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
		        $('div.panel').each(function(){
		            panel = $(this);
		            panel.click(function(){
		                $(this).css('background-color', changecolor($(this).css('background-color')));
		            })
                });
		    })
		    
            if($('div.panel1').css('background-color')==$('div.panel2').css('background-color')==$('div.panel1').css('background-color')){
                window.console.log('BINGO!');
            }		    
		    
		    //colorchange method
		    function changecolor(color){
		        window.console.log(color);
		        switch (true) {
		            case color=='transparent':
		            case color=='rgba(0, 0, 0, 0)'://chrome対策
		            color='#ff0000';
		            break;
                    case color=='rgb(255, 0, 0)':
                    case color=='#ff0000'://IE対策
                    color='#0000ff';
                    break;
                    case color=='rgb(0, 0, 255)':
                    case color=='#0000ff'://IE対策
                    color='#008000';
                    break;
                    case color=='rgb(0, 128, 0)':
                    case color=='#008000'://IE対策
                    color='#ffff00';
                    break;
                    case color=='rgb(255, 255, 0)':
                    case color=='#ffff00'://IE対策
                    color='#800080';
                    break;
                    case color=='rgb(128, 0, 128)':
                    case color=='#800080'://IE対策
                    color='#ff00ff';
                    break;
                    case color=='rgb(255, 0, 255)':
                    case color=='#ff00ff'://IE対策
                    color='transparent';
                    break;
		            default:
		            color='transparent';
		            break;
		        }
		        return color;
		    }
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