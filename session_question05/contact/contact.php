<?php
	session_start();

	// リダイレクト処理
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
	<body>
		■session_question05<br>
		・お名前の入力欄にはログイン中のusernameを入力した状態にして下さい<br>
		・確認ボタンをクリックしたら、確認ページ（confirm.php）に画面遷移するようにして下さい<br>
		・また、confirm.phpから移動してきたとき、入力した内容を反映させるようにして下さい<br>
		・戻るをクリックしたら、welcome.phpを表示するようにしてください
		<form action="confirm.php" method="post" style="border: 1px; background-color: lightsteelblue;">
			<h2>お問い合わせ</h2>

			<br>
			<label>お名前:</label><br>
			<input type="text" name="username" value="<?php echo $_SESSION['username'] ?>"><br>

			<br>
			<label>種別:</label><br>
			<input type="radio" name="category" value="A">Aについて<br>
			<input type="radio" name="category" value="B">Bについて<br>
			<input type="radio" name="category" value="C">Cについて<br>

			<br>
			<label>お問い合わせ内容:</label><br>
			<textarea name="comment" cols="30" rows="5"><?php echo $_SESSION['comment'] ?></textarea>

			<br><br>
			<button type="submit">確認</button>
		</form>

		<br>
		<a href="../welcome.php">戻る</a>

		<script type="text/javascript">
			var radios = document.getElementsByName('category');
			for (var i = 0; i < radios.length; i++) {
		    var opt = radios[i];
		    if (opt.value === '<?php echo $_SESSION['category'] ?>') {
		      opt.checked = true;
		      break;
		    }
		  }
		</script>
	</body>
</html>
