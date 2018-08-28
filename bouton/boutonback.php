<html>
<head>
	<style type="text/css">
	body {
		margin: 0px;
	}
	#btQuitter {
		background-color:#777777;
		color:#FFF;
		border-width: 0px;
		border-radius: 5px;
		padding: 6px 14px 6px 14px;
		text-transform: uppercase;
		font-family:Arial, Helvetica, sans-serif;
		font-size: 13px;
		font-weight:bold;
	}
	#btQuitter:hover {
		background-color:#575757;
	}
	</style>
</head>
<body>
<form>
  <input id="btQuitter" type="button" value="quitter le cours" onClick="parent.history.back()">
</form>
</body>
</html>