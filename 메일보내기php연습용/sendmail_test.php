<!--test-->
<style>
td { color:#999999; font-size:12px; }
</style>

<script>
function check() {
	form = document.sendmail;
	if ( form.form_user.value == '' ) {
		alert('�޴»���� ���� �ּҸ� �Է����ּ���.');
		form.form_user.focus();
		return false;
	}
	if ( form.subject.value == '' ) {
		alert('���� ������ �Է����ּ���.');
		form.subject.focus();
		return false;
	}

	form.submit();
}
</script>

<form name='sendmail' action='sendmail_test_ok.php' method='post'>

	<table width='500' border='0' cellpadding='0' cellspacing='0' style='border:1px solid #999999;'>
		<tr height='30'>
			<td align='center' colspan='2' style='border-bottom:1px solid #999999;'>
				SendMail �׽�Ʈ
			</td>
		</tr>
		<tr height='30'>
			<td width='100' align='right' style='border-bottom:1px solid #999999;'>
				�޴� ��� : &nbsp; &nbsp;
			</td>
			<td style='border-bottom:1px solid #999999;'>
				<input type='text' name='form_user'>
			</td>
		</tr>
		<tr height='30'>
			<td align='right' style='border-bottom:1px solid #999999;'>
				���� :  &nbsp; &nbsp;
			</td>
			<td style='border-bottom:1px solid #999999;'>
				<input type='text' name='subject'>
			</td>
		</tr>
		<tr height='30'>
			<td align='right'>
				���� :  &nbsp; &nbsp;
			</td>
			<td>
				<textarea name='content' style='width:380px; height:100px;'>���� �׽�Ʈ</textarea>
			</td>
		</tr>
	</table>

	<table width='500' border='0' cellpadding='0' cellspacing='0'>
		<tr height='50'>
			<td align='center'>
				<input type='button' value='���� ������' onclick='check();'>
			</td>
		</tr>
	</table>
</form>