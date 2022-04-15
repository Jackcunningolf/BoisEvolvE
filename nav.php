<body>
    <div id="navigate">
        

            <a href="home.php" id="homenav" <?php echo ($currentPage == "home") ? 'class="currPage"' : 'class="otherPage"' ?>> 
                home
            </a>

            <a href="about.php" <?php echo ($currentPage == "about") ? 'class="currPage"' : 'class="otherPage"'?>>
                about
            </a>
          
    </div>
</body>
