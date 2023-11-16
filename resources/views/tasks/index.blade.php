<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>

<body>
  <header>
    Todoアプリ
  </header>

  <main>
    <p>今日何するの?</p>
    <form action="{{ route('tasks.store') }}" method="post">
      @csrf
      <label>
        <input type="text" name="task_name" placeholder="洗濯物をする・・">
        @error('task_name')
        {{ $message }}
        @enderror
      </label><br>
      <button type="submit">
        追加する
      </button>
    </form>
  </main>

  <footer>
    <p>Todoアプリ</p>
  </footer>

</body>

</html>