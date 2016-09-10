<?php 

echo "\n+========= FOR-1===========+\n";
for($i =0; $i < 20; $i++) {
	if ($i ==3) {
		continue;
	}
	echo "Contador: $i\n";
}

 for ($i =0; $i < 20; $i++) {
 	if ($i == 3) {
 		break;
 	}
 	echo "Contador: $i\n";
 }
echo "\n+========= FOR-1===========+\n";