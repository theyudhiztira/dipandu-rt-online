<!DOCTYPE html>
<!--
Copyright Pandu Yudhistira
-->
<html>
<head>
<?php
include_once 'lib/dipandu.php';
dependencies();
?>
<meta charset="UTF-8">
<title>DiPandu</title>
</head>
<body>
<div class="row navigation-row">
<div class="col s12 m12 l12">
<div class="navigation-section">
    <a title="Beranda" class="fa fa-home" style="float: left;"></a>
</div>    
</div>
</div>
<div class="page-container">
<div class="row">
    <div class="col s12 m12 l12"> 
        <div class="col s12 m4 l4">
            <img src="img/warga/1.jpg" class="responsive-img profile-img">
        </div>
        <div class="col s12 m8 l8 home-welcome-message-container"> 
            <div class="col s12 m12 l12">
                <span class="home-welcome-message">Halo, Pandu Yudhistira Wicaksono</span>
            </div>  
            <div class="col s12 m12 l12" style="margin-top: 20px;">
                <table>    
                <tr>
                <td>
                    <b>No. KTP</b>
                </td>
                <td>
                    3175051802960006
                </td>
                </tr>
                <tr>
                <td>
                    <b>Tempat Lahir</b>
                </td>
                <td>
                    Jakarta
                </td>
                </tr>
                <tr><td>
                    <b>Tanggal Lahir</b>
                </td>
                <td>
                    18 February 1996
                </td>
                </tr>
                <tr>
                <td>
                    <b>No. HP</b>
                </td>
                <td>
                    081286492330
                </td>
                </tr>
                <tr>
                <td>
                    <b>No. Telp</b>
                </td>
                <td>
                    0218722474
                </td>
                </tr>
                <tr>
                <td>
                    <b>Alamat</b>
                </td>
                <td>
                    Jl. Kirai Indah RT 06 RW 010 No. 14A Kel. Kalisari Kec. Pasar Rebo
                </td>
                </tr>
                <tr>
                <td>
                    <b>Keluarga Dari</b>
                </td>
                <td>
                    Bpk. Rachmat Susanto
                </td>
                </tr>
                <tr>
                <td>
                    <b>Status</b>
                </td>
                <td>
                    Anak
                </td>
                </tr>
                <tr>
                <td>
                    <b>Profesi</b>
                </td>
                <td>
                    Mahasiswa
                </td>
                </tr>
                </table>
            </div>
        </div>
        <div class="col s12 m12 l12 center-align">
            <button class="btn btn-blue waves-effect waves-light">Rubah Data</button>
        </div>
    </div>
</div>
</div>


<?php
echo javaScriptCall();
?>
</body>
</html>
