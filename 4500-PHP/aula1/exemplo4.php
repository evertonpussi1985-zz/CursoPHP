<?php

//lacos de repeticao
echo "+============ CHERNOBYL ===============+\n\n";

while (($num += 10) <= 100){
	echo "\rApagando os arquivos do seu computador: $num%";
	sleep(1);
}

echo "n;D";