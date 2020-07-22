<html>
<body>
<?php $out = 180
?>
<h1>Meter Test</h1>
Call with for example <a href='http://localhost/meter.php'>http://localhost/meter.php</a> 
<p>
<label for="yaw">Yaw</label>
<meter id="yaw" value="<?= $out; ?>" min="0" max="360"></meter><br>

<label for="disk_d">Disk usage D:</label>
<meter id="disk_d" value="0.6">60%</meter>

<?php
var_dump($_REQUEST);
?>
</p>
</body>
</html>