<html>

<link href="css/global.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/md5.js"></script>

<input type="text" id="test-text" value="">

</br>

<input type="button" onclick="Test()">

</html>

<script>

function Test()
{
  var Texte = document.getElementById('test-text').value;

  var hash = md5.create();
  hash.update(Texte);
  //hash.hex();

  alert(hash);

  alert(Texte);
}

</script>