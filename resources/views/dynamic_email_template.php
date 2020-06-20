<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  	<p> Hi, <?php echo $data['customer_name']; ?></p>
	<p> I have some query Like <?php echo $data['description']; ?></p>
	<p> It would be appriciative, if you gone through this FeedBack.</p>
</div>

</body>
</html>
