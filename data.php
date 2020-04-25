<!doctype html>
<html>
<head>
       <title>Data Pamantauan Covid19</title>
</head>
<body>
<h1 align="center"> Data Pemantauan Covid19 Wilayah DKI Jakarta</h1>
<h2 align="center">
<body onload="viewjam(); hari();">
<div><i>Per</i> <strong><big><a id="tampilhari"></a></big></strong>
<i></i> <strong><big><a id="tampiljam"></a></big></strong></div></h2>
<h3 align="center"> Demo Satria / 2016141984 </h3>

<table border="1" width="600px" align="center">
<thead>
 <tr>
	<th>Positif</th>
	<th>Dirawat</th>
	<th>Sembuh</th>
	<th>Meninggal</th>
 </tr>
</thead>
<tbody>
 <tr>
	<td>2902</td>
	<td>1769</td>
	<td>206</td>
	<td>257</td>
 </tr>
</tbody>
</table>
</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>

var hariseminggu = new Array('Ahad','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
          var bulansetahun = new Array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
         
          function hari(){
                   var hariini;
                   var hari = new Date();//membuat objek waktu
                   hariini = hariseminggu[hari.getDay()]+", "+hari.getDate()+" "+bulansetahun[hari.getMonth()]+" "+hari.getFullYear();//menempatkan data waktu pada variabel
                   document.getElementById('tampilhari').innerHTML=hariini; //menampilkan variabel hariini pada html
                   setTimeout('hari()',300); //meload function secara terus menerus
          }
		   
		   function viewjam(){
                   var jam;
                   var jamku = new Date();//membuat objek waktu
                   jam = " "+jamku.getHours()+":"+jamku.getMinutes()+":"+jamku.getSeconds();//menempatkan data waktu pada variabel
                   document.getElementById('tampiljam').innerHTML=jam;//menampilkan variabel jam pada html
                   setTimeout('viewjam()',0);//meload function secara terus menerus
          }

</script>
</body>
</html>