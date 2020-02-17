<?php
function getdb(){
	$db = null;
	$dbUrl = getenv('DATABASE_URL');
	$dbopts = parse_url($dbUrl);
	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');
	try {
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	}
	catch (PDOException $ex) {
		print "<p>error!: " . $ex->getMessage() . " </p>\n\n";
		die();
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Resources</title>
	</head>
	<body>
		<h1>Scripture Resources</h1>
		<hr>
<?php
$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$book = $row['book'];
	$chapter = $row['chapter'];
	$verse = $row['verse'];
	$content = $row['content'];

	echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
}
?>
	</body>
</html>
