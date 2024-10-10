<?php 
if(isset($_POST['todo'])) {
  $data = $_POST['todo'];
  $todos[] = [
    'todo' => $data,
    'status' => 0
  ];

  file_put_contents('todos.json', json_encode($todos));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo-App</title>
</head>
<body>
  <form action="">
    <label for="todo">
      Mau Angapain NIHHH?
      </label>
      <input type="text" name="todo">
      <button type="submit">Save</button>
  </form>

  <ul>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label>todo 1</label>
      <a href="#">Delete</a>
    </li>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label>todo 1</label>
      <a href="#">Delete</a>
    </li>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label>todo 1</label>
      <a href="#">Delete</a>
    </li>
  </ul>
</body>
</html>