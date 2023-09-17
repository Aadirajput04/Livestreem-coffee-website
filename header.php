<header class="side-padding page-width">
    <?php
function isCurrentPage($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $pageName;
}
?>
    <div id="brand"><a href="./index.php"><img src="./img/nav-logo.png" alt=""></a></div>
    <nav>
        <ul>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about.php')) echo 'class="active-nav"' ; ?> href="./about.php" >About</a>
            </li>
            <li><a <?php if (isCurrentPage('products.php')) echo 'class="active-nav"' ; ?> href="./products.php" >
                    Products</a></li>
            <li><a <?php if (isCurrentPage('services.php')) echo 'class="active-nav"' ; ?> href="./services.php" >
                    Services</a></li>
            <li><a <?php if (isCurrentPage('blog.php')) echo 'class="active-nav"' ; ?> href="./blog.php" >
                    Blog</a></li>
                    <li><a <?php if (isCurrentPage('gallery.php')) echo 'class="active-nav"' ; ?> href="./gallery.php" >
                        Gallery</a></li>
            <li><a <?php if (isCurrentPage('contact.php')) echo 'class="active-nav"' ; ?> href="./contact.php" >
                    Contact Us</a></li>



        </ul>
    </nav>


    <a class="contact-btn" href="#">Contact Now <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
            fill="none">
            <path
                d="M26.4916 13.1752L18.3249 5.00853C18.1049 4.79601 17.8102 4.67842 17.5043 4.68107C17.1984 4.68373 16.9058 4.80643 16.6895 5.02274C16.4732 5.23905 16.3505 5.53166 16.3478 5.83756C16.3451 6.14346 16.4627 6.43816 16.6752 6.65819L22.8504 12.8334H2.33341C2.024 12.8334 1.72725 12.9563 1.50846 13.1751C1.28966 13.3939 1.16675 13.6906 1.16675 14C1.16675 14.3094 1.28966 14.6062 1.50846 14.825C1.72725 15.0438 2.024 15.1667 2.33341 15.1667H22.8504L16.6752 21.3419C16.5638 21.4495 16.4749 21.5782 16.4138 21.7206C16.3527 21.8629 16.3205 22.016 16.3191 22.1709C16.3178 22.3258 16.3473 22.4794 16.406 22.6228C16.4646 22.7662 16.5512 22.8964 16.6608 23.006C16.7703 23.1155 16.9006 23.2022 17.044 23.2608C17.1873 23.3195 17.341 23.349 17.4959 23.3477C17.6508 23.3463 17.8039 23.3141 17.9462 23.253C18.0886 23.1918 18.2173 23.103 18.3249 22.9915L26.4916 14.8249C26.7103 14.6061 26.8332 14.3094 26.8332 14C26.8332 13.6907 26.7103 13.394 26.4916 13.1752Z"
                fill="white" />
        </svg></a>


    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about.php')) echo 'class="active-nav"' ; ?> href="./about.php" >About</a>
            </li>
            <li><a <?php if (isCurrentPage('products.php')) echo 'class="active-nav"' ; ?> href="./products.php" >
                    Products</a></li>
            <li><a <?php if (isCurrentPage('services.php')) echo 'class="active-nav"' ; ?> href="./services.php" >
                    Services</a></li>
            <li><a <?php if (isCurrentPage('blog.php')) echo 'class="active-nav"' ; ?> href="./blog.php" >
                    Blog</a></li>
                    <li><a <?php if (isCurrentPage('gallery.php')) echo 'class="active-nav"' ; ?> href="./gallery.php" >
                        Gallery</a></li>
            <li><a <?php if (isCurrentPage('contact.php')) echo 'class="active-nav"' ; ?> href="./contact.php" >
                    Contact Us</a></li>
        </ul>
    </div>
</header>
<script>
    function toggleMobileMenu(menu) {
        menu.classList.toggle('open');
    }
</script>