<?php

if (!isset($_SESSION)) {
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

mb_substr('こんにちは世界', 0, 5); // => こんにちは

/**
 * ログインしているユーザーIDを取得する
 * @return int|null
 */
function getLoginUserId() {
    return $_SESSION['user']['id'] ?? null;
}

?>

