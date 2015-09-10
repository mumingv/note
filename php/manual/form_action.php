<html>
<head>
    <title>form_action.php</title>
</head>
<body>
<p>Hi <?php echo htmlspecialchars($_POST['name']); ?>.</p> 
<p>You are <?php echo htmlspecialchars($_POST['age']); ?> years old.</p> 
</body>
</html>
