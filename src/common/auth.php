<?php
// セッションが開始されていなければ開始
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * ログインしているかチェックする
 * @return bool
 */
function isLogin() {
    return isset($_SESSION['user']);
}

/**
 * ログインしているユーザーの表示用ユーザー名を取得
 * @return string
 */
function getLoginUserName() {
    if (isset($_SESSION['user'])) {
        $name = $_SESSION['user']['name'];
        if (mb_strlen($name) > 7) {
            $name = mb_substr($name, 0, 7) . "...";
        }
        return $name;
    }
    return "";
}

/**
 * ログインしているユーザーIDを取得する
 * @return int|null
 */
function getLoginUserId() {
    return $_SESSION['user']['id'] ?? null;
}
?>


