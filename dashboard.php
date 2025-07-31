<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['user'])) {
  header('location:login.php');
  exit();
}

$conn = new mysqli("localhost", "root", "", "todo");

// Add task
if (isset($_POST["addtask"])) {
  $task = $_POST["task"];
  $conn->query("INSERT INTO task (Task) VALUES ('$task')");
  header("Location: dashboard.php");
  exit();
}

// Delete task
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("DELETE FROM task WHERE id = $id");
  header("Location: dashboard.php");
  exit();
}

// Mark as completed
if (isset($_GET['complete'])) {
  $id = $_GET['complete'];
  $conn->query("UPDATE task SET status='completed' WHERE id = $id");
  header("Location: dashboard.php");
  exit();
}

// Fetch tasks
$result = $conn->query("SELECT * FROM task ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>To Do App</title>
  <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Nunito Sans', sans-serif;
    background: #f3f7f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background: #ffffff;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    width: 100%;
    max-width: 600px;
    text-align: center;
  }

  h1 {
    font-family: 'Oswald', sans-serif;
    color: #4A9782;
    margin-bottom: 25px;
    font-size: 2.2rem;
    letter-spacing: 1px;
  }

  form {
    display: flex;
    gap: 10px;
    justify-content: center;
    margin-bottom: 30px;
    flex-wrap: wrap;
  }

  #input {
    padding: 14px 18px;
    border: 1px solid #c3ddd5;
    border-radius: 8px;
    width: 70%;
    font-size: 1rem;
    outline: none;
    transition: 0.3s;
    box-shadow: none;
  }

  #input:focus {
    border-color: #4A9782;
  }

  button {
    background-color: #4A9782;
    color: white;
    border: none;
    padding: 13px 20px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s;
    font-family: 'Oswald', sans-serif;
  }

  button:hover {
    background-color: #3c7d6b;
  }

  ul {
    list-style: none;
    padding: 0;
    margin-top: 10px;
  }

  li {
    background: #eaf5f1;
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #335c50;
    font-size: 1.05rem;
    transition: background 0.3s;
  }

  li.completed {
    text-decoration: line-through;
    color: #aaa;
    background-color: #dbece7;
  }

  .actions {
    display: flex;
    gap: 10px;
  }

  #complete,
  #delete {
    text-decoration: none;
    padding: 8px 14px;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: bold;
    transition: 0.2s;
  }

  #complete {
    background-color: #4A9782;
    color: white;
  }

  #complete:hover {
    background-color: #3b7a68;
  }

  #delete {
    background-color: #e05c4e;
    color: white;
  }

  #delete:hover {
    background-color: #c14f42;
  }

  @media (max-width: 600px) {
    #input {
      width: 100%;
    }

    .actions {
      flex-direction: column;
    }

    li {
      flex-direction: column;
      align-items: flex-start;
    }
  }
        
         </style>
</head>
<body>
  <div class="container">
    <h1>To Do App</h1>
    <form action="dashboard.php" method="post">
      <input type="text" name="task" placeholder="Enter New Task..." required id="input"/>
      <button type="submit" name="addtask">Add Task</button>
    </form>
    <ul>
      <?php while($row = $result->fetch_assoc()) : ?>
        <li class="<?php echo $row['Status']; ?>">
          <?php echo $row['Task']; ?>
          <a href="dashboard.php?complete=<?php echo $row['id']; ?>" id="complete">Complete</a>
          <a href="dashboard.php?delete=<?php echo $row['id']; ?>" id="delete">Delete</a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</body>
</html>
