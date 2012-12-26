<html>

<body>

	<script type="text/javascript">
		function checkBoxClicked(){
			//document.getElementById('syncAll').disabled = "disabled";
            //confirm('clicked');
            var syncClassesElements = document.getElementsByName('syncClass');
            for (var i = 0, j = syncClassesElements.length; i < j; i++) {
            	var e = syncClassesElements[i];
            	if(document.getElementById('syncAll').checked)
       	        	e.style.display = 'none';
            	else
                	e.style.display = 'block';
            }
    	}
		
    </script>
		
	<h2><?php echo "Sync Confirmation"; ?></h2><br>
	
	<form action="syncConfirmation" method="POST">
		<input type="hidden" name="locale_code" value="<?php  echo $locale_code; ?>" />
		<input type="hidden" name="legalRequest" value="1"/>
		
		<input type="checkbox" name="catchExceptions" value="1" checked="1" >Catch Exceptions<br>
		<input id="syncAll" type="checkbox" name="syncAll" value="1" checked="1" onchange="checkBoxClicked()">Sync All Worksheets<br><br>
		<?php 
		$sync_models_before = Kohana::$config->load('gameconfig.admin_sync_models_before_assets');
		$sync_models_after = Kohana::$config->load('gameconfig.admin_sync_models_after_assets');
		$sync_asset_states = Kohana::$config->load('gameconfig.sync_asset_states');
		
		foreach($sync_models_before as $sync_class){
			print ("<div name=\"syncClass\"  style=\"display: none;\"><input type=\"checkbox\" name=\"".$sync_class."\" value=\"1\">".$sync_class."<br></div>");
		}foreach($sync_models_after as $sync_class){
			print ("<div name=\"syncClass\"  style=\"display: none;\"><input type=\"checkbox\" name=\"".$sync_class."\" value=\"1\">".$sync_class."<br></div>");
		}
		print "<div name=\"syncClass\" style=\"display: none;\"><h2>Asset Worksheets:</h2></div>";
		foreach($asset_categories as $asset_category){
			print ("<div name=\"syncClass\"  style=\"display: none;\"><input type=\"checkbox\" name=\"".$asset_category."\" value=\"1\">".$asset_category."<br></div>");
		}
		print "<div name=\"syncClass\" style=\"display: none;\"><h2>State Worksheets:</h2></div>";
		foreach($sync_asset_states as $sync_class){
			print ("<div name=\"syncClass\"  style=\"display: none;\"><input type=\"checkbox\" name=\"".$sync_class."\" value=\"1\">".$sync_class."<br></div>");
		}
		?>
		<br>
		<input type="submit" value="Submit"/>
	</form>
</body>

</html>