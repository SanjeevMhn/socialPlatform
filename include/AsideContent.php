<aside class="user-profile">
    <ul class="user-profile__header">
        <li class="list-item">
            <div class="icon-container">
                <ion-icon name="mail"></ion-icon>
            </div>
        </li>
        <li class="list-item">
            <div class="icon-container">
                <ion-icon name="notifications"></ion-icon>
            </div>
        </li>
        <li class="list-item">
            <div class="user">
                
                <div class="user__img">
                    <img src="./assets/images/profiles/26.jpg" alt="">
                </div>
                <div class="user__name">
                    Rohan Smith
                </div>
            </div>
            <div class="icon-container">
                <ion-icon name="arrow-dropdown"></ion-icon>
            </div>
        </li>
    </ul>
    <ul class="user-profile__online-friends-list">
        <?php
            $onlineFriends = [
                "./assets/images/profiles/2.jpg",
                "./assets/images/profiles/28.jpg",
                "./assets/images/profiles/49.jpg",
                "./assets/images/profiles/53.jpg",
                "./assets/images/profiles/55.jpg",
                "./assets/images/profiles/76.jpg"
            ];
            $friendNames = [
                "Amanda Smith",
                "Kylie Khan",
                "John Surman",
                "Violet Season",
                "Harper John",
                "Kristy Mulan"
            ];
            for($i=0; $i<count($onlineFriends); $i++){
                echo '
                    <li class="list-item">
                        <div class="img-container">
                            <img src='.$onlineFriends[$i].' alt="img">
                        </div>
                        <div class="friend-name">
                            '.$friendNames[$i].'
                        </div>
                        
                    </li>
                ';
            }
         ?>
    </ul>
</aside>