<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f4f4f9;
			color: #333;
		}
		.topnav {
			background-color:rgb(90, 0, 0);
			overflow: hidden;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			z-index: 10;
			}

		.topnav a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
			font-size: 18px;
			font-weight: 500;
		}
		.topnav a:hover {
			background-color: white;
			color: rgb(25, 83, 130);
		}

		.topnav input[type=text] {
			float: right;
			padding: 8px;
			margin: 8px 16px;
			border: none;
			margin-top: 8px;
			margin-right: 16px;
			font-size: 17px;
			width: 300px;
		border-radius: 5px;
			width: 250px;
		}

		/* Sidebar dhe Contenti */
		.layout {
			display: flex;
			margin-top: 60px;
		}
		.sidebar {
			width: 250px;
			height: 100vh;
			background-color: rgb(25, 83, 130);
			color: white;
			display: flex;
			flex-direction: column;
			padding-top: 20px;
			box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.3);
			position: fixed;
			left: 0;
			top: 50px; /* Align below the top navbar */
			}
		.sidebar a {
			text-decoration: none;
			color: white;
			padding: 15px 20px;
			font-size: 18px;
			transition: all 0.3s ease;
		}

		.sidebar a:hover {
			background-color:white;
			color: rgb(25, 83, 130);

		}
		.content {
			margin-left: 250px;
			margin-top: 50px; 
			padding: 20px;
			width: calc(100% - 250px);
		}
        .content h2 {
           font-weight: 700;
           margin-bottom: 20px;
           color: #8f83d8;
        }

        /* Tabela */
        table {
          width: 100%; 
          border-collapse: collapse; 
          background-color: white;
          border-radius: 8px;
          overflow: hidden;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table thead {
          background-color: #8f83d8;
          color: white;
        }
        th, td {
          padding: 12px 15px;
          text-align: left;
        }

        tr:nth-child(even) {
          background-color: #f9f9f9;
        }
        tr:hover {
          background-color: #f1f1f1;
        }
        td a {
          text-decoration: none;
          color: white;
          padding: 6px 12px;
          background-color: #8f83d8;
          border-radius: 4px;
          transition: background 0.3s;
          font-size: 14px;
        }
        td a:hover {
          background-color: #8f83d8;
        }
        .add-user-btn {
          text-decoration: none;
          color: white;
          padding: 10px 20px;
          background-color: #8f83d8;
          border-radius: 5px;
          display: inline-block;
          margin-top: 20px;
          font-size: 16px;
          transition: background 0.3s;
        }

        .add-user-btn:hover {
            background-color: #8f83d8;
        }
        </style>

<script>

function showSection(sectionId) {
    document.querySelectorAll('.section').forEach(section => {
        section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';
}
</script>
</head>


<a href="#" onclick="showSection('dashboard')">Home</a>

  		<input type="text" placeholder="Search.." class="search">

	</div>

	<div class="sidebar">
        <h2 style="text-align: center;">Menu</h2>
        <a href="home.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="movies.php">Movies</a>
        <a href="bookings.php">Bookings</a>
    </div>

	<div class="content">
		<div id="dashboard" class="section">

			<?php 
				include_once('config.php');
				$getUsers = $conn->prepare("SELECT * FROM users");
				$getUsers->execute();
				$users = $getUsers->fetchAll();
			?>
			<h2>Dashboard</h2>
			<table>
				<thead>
					<tr>
						<th class="id-th">ID</th>
						<th>Username</th>
						<th>Name</th>
						<th>Email</th>
						<th class="actions">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td><?= $user['username'] ?></td>
						<td><?= $user['name'] ?></td>
						<td><?= $user['email'] ?></td>
						<td>
							<a href="delete.php?id=<?= $user['id'] ?>">Delete</a> | 
							<a href="edit.php?id=<?= $user['id'] ?>">Update</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<a href="index.php" class="add-user-btn">Add a new user</a>
		</div>
<body>
    </html>