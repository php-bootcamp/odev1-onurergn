<?php 

$age = 25;

if($age <= 0){
    echo 'Lütfen doğru bir yaş değeri giriniz';
}

elseif($age <= 14){
    echo 'Çocuk';
}

elseif($age <= 24){
    echo 'Genç';
}

elseif($age <= 64){
    echo 'Yetişkin';
}
else{
    echo 'Yaşlı';
}

?>
