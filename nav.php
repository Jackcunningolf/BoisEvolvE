<body>
    <div id="navigate">
        <ul>
            <li <?php if ($currentPage == "home") { echo 'class="currPage"'; } ?>>
                <a href="home.php"> 
                    home 
                </a>
            </li>
            <li <?php if ($currentPage == "contact") { echo 'class="currPage"'; } ?>>
                <a href="contact.php" >
                    contact
                </a>  
            </li>
            <li <?php if ($currentPage == "about") { echo 'class="currPage"'; } ?>>
                <a href="about.php" >
                    about
                </a>
            </li>
        </ul>  
    </div>
</body>