<?php

$mail_from = trim($_POST['form_user']); // ������ ��������ּ� 
$mail_to = trim($_POST['form_user']); // �޴»�� �����ּ� 

$mailheaders.= "Return-Path : ". trim($_POST['form_user'])." \r\n";	//���ϵǴ� ������ �޴� �ּ�
$mailheaders.= "From : SendMailTest \r\n";
$Headers .= "from: ������ <formmail> \r\n";
$Headers .= "Content-Type: text/html; charset=EUC-KR \r\n";

$subject =  trim($_POST['subject']);
$contents = $_POST['content'];

mail($mail_to,$subject,$contents,$Headers);
echo "������ ���½��ϴ�.";
?>