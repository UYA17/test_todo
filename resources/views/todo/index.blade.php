<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      <div class="todo">
        <form action="/todo/create" method="post" class="add-area">
          <input type="text" name="content" class="input-add">
          <input type="submit" class="button-add" value="追加">

        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>

            <tr>
              @foreach($tasks as $tasks)
              <td>2021-06-13 03:29:09
                <form action="" method="post"></form>
                <input type="hidden">
              </td>
              <td>
                <input type="text" class="update-input">
              </td>
              <td>
                <button class="update-button">更新</button>
              </td>
              <td>
                <form action="/todo/delete" method="post">
                  <input type="hidden" name="" value="">
                  <button class="delete-button">削除</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>