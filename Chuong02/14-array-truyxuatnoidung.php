<?php
// cho url http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma
// Lấy các giá trị
// No: 06
// Name: BienTham
// Album: TinhYeu
// Singer: Ly Mai Trang
// Type: wma
$url = "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

//Cách 1
$tt = explode('/', $url);
echo "<pre>";
print_r($tt);
echo "</pre>";