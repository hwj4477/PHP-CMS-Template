<h1><?=$title?></h1>

<p>Login</p>

<?
echo form_open("/main/login");
?>
<table>
	<tr>
		<td class="header">ID</td>
		<td><?=form_input("username", "")?></td>
	</tr>
	<tr>
		<td class="header">PW</td>
		<td><?=form_password("password", "")?></td>
	</tr>
</table>
<?
echo form_submit("login", "Login");
echo form_close();
?>

<br>