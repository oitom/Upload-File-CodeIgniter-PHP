<html>
<head>
    <title>Codeigniter Upload</title>
</head>
<body>

<?php echo $msg;?>

<?php echo form_open_multipart('upload');?>

<input type="file" name="arquivo" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>