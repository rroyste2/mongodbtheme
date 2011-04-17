<div class="sidebar">
            <ul>	
               <li>
                    <h4><span>Our <strong>Pages</strong></span></h4>
                    <ul class="blocklist">
						<li><a href="index.php">Home</a></li>
                        <li><a href="parks.php">Parks</a></li>
                        <li><a href="rides.php">Rides</a></li>
                        <li><a href="searchPark.php">Search Parks</a></li>
                        <li><a href="about.php">About Us</a></li>
                    </ul>
              </li>
                
                <li>
                    <h4 class="h4"><span>User <strong>Account</strong></span></h4>
                    <?php
                    	if (isset($_SESSION['username'])){
                    	echo "<ul class='blocklist'><br />";
                    	echo "<li><h1>Welcome {$_SESSION['username']}</h1><br />";
                    	echo "<li><a href='addPark.php'><strong>Add Park</strong></a></li>";
                    	echo "<li><a href='deletePark.php'><strong>Delete Park</strong></a></li>";
                    	echo "<li><a href='addRide.php'><strong>Add Ride</strong></a></li>";
                    	echo "<li><a href='deleteRide.php'><strong>Delete Ride</strong></a></li>";
                    	echo "<li><a href='logout.php'><strong>Log Off</strong></a></li>";
                    	}
                    	else {
                    	echo "<ul>";
                     	echo "<li><a href='login.php'><strong>Login</strong></a> - Login to your account here at <strong>themeparkDatabase</strong></li>";
                     	echo "<li><a href='register.php'><strong>Create Account</strong></a> - Create an account if you don't alreaedy have one</li>";
                     	}
                    ?>
                    </ul>
                </li>
                
                <li>
                    <h4><span>About <strong>Us</strong></span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Themepark database is a comprehensive guide to theme parks and rides within the united states.</p>
                        </li>
                    </ul>
                </li>
                
            </ul> 
        </div>