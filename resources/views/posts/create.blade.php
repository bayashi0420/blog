<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>Blog Name</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="content">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル" />
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
        </div>
        <input type="submit" value="store" />
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>

</html>