<html>
<head>
<title>start_end_flag.php</title>
</head>
<body>
<?php echo 'if you want to serve XHTML or XML documents, do it like this'; ?>

<p></p>

<script language="php">
echo 'some editors (like FrontPage) don\'t like processing instructions';
</script>

<p></p>

<?php $val = 'shorttag'; echo $val ?>
<?php echo $val ?>

<!--
<? echo 'this is the simplest, an SGML processing instruction'; ?>
<?= expression ?> This is a shortcut for "<? echo expression ?>"

<p></p>

<% echo 'You may optionally use ASP-style tags'; %>
<%= $variable; # This is a shortcut for "<% echo . . ." %>
-->

</body>
</html>
