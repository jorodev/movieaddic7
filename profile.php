<?php include 'includes/nav.inc.php' ?>

<?php 
    if (!isset($_SESSION['logged_in'])) {
        header("location: index.php");
        die();
    }
?>

    <div class="profile-wrapper">
        <main class="profile-box container">
            <h6 class="profile-box--heading">Profile</h6>
            <div class="profile-box--avatar">
                <img src="#" alt="">
            </div>
            <h6><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?></h6>
            <div class="profile-box--watchlist">
                <div class="watchlist-sum">100</div>
                <i class="fa fa-plus" aria-hidden="true"></i> <a class="watchlist-text" href="#">Watchlist</a>
            </div>
            <div class="profile-box--seenlist">
                <div class="seenlist-sum">100</div>
                <i class="fa fa-check" aria-hidden="true"></i> <a class="seenlist-text" href="#">Seenlist</a>
            </div>
            <div class="profile-box--favorites">
                <div class="favorites-sum">100</div>
                <i class="fa fa-heart" aria-hidden="true"></i> <a class="favorites-text" href="#">Favorites</a>
            </div>
            <div class="profile-box--ratings">
                <div class="ratings-sum">100</div>
                <i class="fa fa-star" aria-hidden="true"></i> <a class="ratings-text" href="#">Ratings</a>
            </div>
            <div class="profile-box--settings">
                <i class="fa fa-cog fa-1x" aria-hidden="true"></i> <a class="settings-text" href="#">Settings</a>
            </div>
            <div class="profile-box--lastwatchlist">
                <h5>Your watchlist</h5>
                <div class="lastwatchlist-imgs">
                    <a href="#"><img src="assets/images/m1.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m2.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m3.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m4.png" alt=""></a><br />
                </div>
                <a class="button-more" href="#">See more</a>
            </div>
            <div class="profile-box--lastseenlist">
                <h5>Your seenlist</h5>
                <div class="lastseenlist-imgs">
                    <a href="#"><img src="assets/images/m1.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m2.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m3.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m4.png" alt=""></a><br />
                </div>
                <a class="button-more" href="#">See more</a>
            </div>
            <div class="profile-box--lastfavorites">
                <h5>Your favorites</h5>
                <div class="lastfavorites-imgs">
                    <a href="#"><img src="assets/images/m1.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m2.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m3.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m4.png" alt=""></a><br />
                </div>
                <a class="button-more" href="#">See more</a>
            </div>
            <div class="profile-box--lastratings">
                <h5>Your ratings</h5>
                <div class="lastratings-imgs">
                    <a href="#"><img src="assets/images/m1.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m2.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m3.jpg" alt=""></a>
                    <a href="#"><img src="assets/images/m4.png" alt=""></a><br />
                </div>
                <a class="button-more" href="#">See more</a>
            </div>
        </main>
    </div>

<?php include 'includes/footer.inc.php' ?>