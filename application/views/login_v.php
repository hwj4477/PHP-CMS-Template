<div class="common">
<h1><?=$title ?></h1>
<hr/>
<?
echo form_open("/main/login");
?>
<div style="width: 300px;">
<div class="form-group">
    <label>ID</label>
    <input name="user_id" type="text" class="form-control" placeholder="Enter ID">
</div>
<div class="form-group">
    <label>Password</label>
    <input name="user_pass" type="password" class="form-control" placeholder="Enter Password">
</div>

<button type="submit" class="btn btn-default">Login</button>
<?
echo form_close();
?>
<br>
</div>
</div>