<link rel="stylesheet" href="css/style-dashboard.css">
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>


<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
<ul class="nav flex-column pl-1">			
<?php if($user->isAdmin()) { ?>	
	<li class="nav-item">
                        <a href="dashboard.php">
						<iconify-icon inline icon="akar-icons:dashboard" width="18" height="18"></iconify-icon>
                            <span class="text nav-text" style = "font-size:20px;"><strong>Dashboard</strong></span>
                        </a>
                    </li>	
		<hr>
		<li class="nav-item">
		<li class="nav-item">
                        <a href="#submenu1" data-toggle="collapse" data-target="#submenu1">
						<iconify-icon inline icon="ph:books" style="color: orange;" width="22" height="22"></iconify-icon>
                            <span class="text nav-text" style = "font-size:20px;color:orange;"><strong>Books</strong></span>
                        </a>
                    </li>
					<ul class="list-unstyled flex-column pl-3 collapse show" id="submenu1" aria-expanded="false">
						<li class="nav-item"><a class="nav-link" href="books.php" style = "color:orange;font-size:15px;"><strong>Manage Books</strong></a></li>
						<li class="nav-item"><a class="nav-link" href="category.php" style = "color:orange;font-size:15px;"><strong>Category</strong></a></li>
						<li class="nav-item"><a class="nav-link" href="author.php" style = "color:orange;font-size:15px;"><strong>Author</strong></a></li>
						<li class="nav-item"><a class="nav-link" href="publisher.php" style = "color:orange;font-size:15px;"><strong>Publisher</strong></a></li>
						<li class="nav-item"><a class="nav-link" href="rack.php" style = "color:orange;font-size:15px;"><strong>Rack</strong></a></li>	
					</ul>
		</li>
		<li class="nav-item">
                        <a href="issue_books.php">
						<iconify-icon inline icon="material-symbols:library-books-outline-rounded" style="color: orange;" width="18" height="18"></iconify-icon>
                            <span class="text nav-text" style = "font-size:20px;color:orange;"><strong>Issue</strong></span>
                        </a>
        </li>	

		<li class="nav-item">
                        <a href="user.php">
						<iconify-icon inline icon="lucide:users" style="color: orange;" width="18" height="18"></iconify-icon>
                            <span class="text nav-text"style = "font-size:20px;color:orange;"><strong>Users</strong></span>
                        </a>
        </li>	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<hr>
		<li class="nav-item">
                        <a href="logout.php">
							<iconify-icon inline icon="lucide:log-out" width="20" height="20"></iconify-icon>
                            <span class="text nav-text" style = "font-size:20px;"><strong>Log Out</strong></span>
                        </a>
        </li>



<?php } else { ?>

<?php } ?>
</ul>
</div>




