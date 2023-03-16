<?php

//exec('git clone https://oauth2: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@github.com/attsoftwaredev/Hello-World.git/', $output);
//print_r($output);  // to see the response to your command
exec('git --git-dir=Hello-World/.git add --all', $output);print_r($output); 
echo "<br><br><br>";
exec('git  --git-dir=Hello-World/.git  commit -m "test"', $output);print_r($output); echo "<br><br><br>";

exec('git  --git-dir=Hello-World/.git  push origin main', $output);print_r($output); 


 
?>