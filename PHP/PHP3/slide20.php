<?php
$items = array('img1.png', 'img2.png');
echo "Phạm Văn Anh-2121050414 <br>";
foreach ($items as $item) {
    echo "<img src = 'images/$item' width =150px height=150px alt='$item'>";
}