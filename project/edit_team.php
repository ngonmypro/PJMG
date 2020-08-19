<? session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';

$sql_tuser = 'SELECT * FROM tbl_users';
$objtuser = mysql_query($sql_tuser);
?>
<form action="">
<div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Team</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="" id="teamed" multiple>
            <?php while ($row = mysql_fetch_array($objtuser)) { ?>
                <option value="<? echo $row['UserSname'];?>"><? echo $row['UserSname'];?></option>
            <? } ?>
        </select>
        </div>
      </div>
</form>
