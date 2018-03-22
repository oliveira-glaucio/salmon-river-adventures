<button onclick="toggleNavMenu()">&#9776;</button>
<ul class="navigation">
    <li <?php if($page == 'home') echo 'class="active"'; ?> ><a href="index.php">Home</a></li>
    <li class="dropdown <?php if($page == 'trips' || $page == 'water-rafting' || $page == 'kayaking' || $page == 'standup-paddle') echo 'active'; ?>"><a href="#">Trips</a>

    <div class="dropdown-content">        
        <a href="water-rafting.php" <?php if($page == 'water-rafting') echo 'class="active"'; ?>>Water white rafing</a>
        <a href="kayaking.php" <?php if($page == 'kayaking') echo 'class="active"'; ?>>Kayaking</a>
        <a href="standup-paddle.php" <?php if($page == 'standup-paddle') echo 'class="active"'; ?>>Stand-up Pedal</a>      
    </div>
        
    </li>
    <li <?php if($page == 'riverguide') echo 'class="active"'; ?> ><a href="river-guide.php">River Guide</a></li>
    <li <?php if($page == 'reservation') echo 'class="active"'; ?>><a href="reservation.php">Reservation</a></li>
    <li <?php if($page == 'contact') echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
</ul>	