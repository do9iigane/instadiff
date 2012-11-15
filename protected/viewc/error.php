<?
include 'header.php';

switch ($this->data['code']) {
	case 'user_denied':
		echo 'ユーザ認証が正常に完了しませんでした。<br>もう一度TOP画面からやり直してください。<br><a href="/">TOPへ戻る</a>';
		break;
	
	default:
		
		break;
}

include 'footer.php';