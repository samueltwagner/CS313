<?php
if (isset($_SESSION['msg_info'])) {
  $message->setInfo((String)trim($_SESSION['msg_info']));
  unset($_SESSION['msg_info']);
}
if (isset($_SESSION['msg_error'])) {
  $message->setError((String)trim($_SESSION['msg_error']));
  unset($_SESSION['msg_error']);
}
?>