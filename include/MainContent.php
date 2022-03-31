<main class="main-content">
    <form action="#" method="post" class="search-form">
        <input type="text" name="search" id="" class="search-form__input" placeholder="Search..">
        <ion-icon name="search"></ion-icon>
    </form>
    <div class="user-content">
        <div class="user-content__info">
            <div class="cover-img">
                <img src="./assets/images/img2.jpg" alt="">
            </div>
            <div class="profile">
                <div class="profile__img">
                    <img src="./assets/images/profiles/26.jpg" alt="">
                </div>
                <div class="profile__user-name">
                    Rohan Smith
                </div>
            </div>
            <ul class="menu">
               <?php 
                    $menuItems = ["Timeline","About","Friends","Photos","More"]; 
                    for($i=0; $i<count($menuItems); $i++){
                        echo "<li class='menu__item'>".$menuItems[$i]."</li>";
                    } 
               ?> 
            </ul>
        </div>
        <div class="user-content__timeline">
            <div class="user-info">
                <div class="user-info__introduction">
                    <div class="header-content">
                        <h2 class="header-content__title">
                            Introduction
                        </h2>
                        <div class="header-content__options">
                            <ion-icon name="more"></ion-icon>
                        </div>
                    </div>
                    <ul class="user-data-list">
                        <li class="user-data-list__item">
                            <div class="icon-container">
                                <ion-icon name="briefcase"></ion-icon>
                            </div>
                            <div class="desc">
                                Product Designer at <span>Germany</span>
                            </div>
                        </li>
                        <li class="user-data-list__item">
                            <div class="icon-container">
                                <ion-icon name="home"></ion-icon>
                            </div>
                            <div class="desc">
                                Lives in <span>Kyoto, Japan</span>
                            </div>
                        </li>
                        <li class="user-data-list__item">
                            <div class="icon-container">
                                <ion-icon name="person"></ion-icon>
                            </div>
                            <div class="desc">
                                Username <span>Rohan Smith</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-info__events">
                    <div class="img-container">
                        <img src="./assets/images/img3.jpg" alt=""> 
                    </div>
                    <div class="event-details">
                        <h2 class="event-details__name">
                            Winter Wonderland
                        </h2>
                        <p class="event-details__date">
                            1st Jan, 2019 7:00 AM
                        </p>
                    </div>
                </div>
            </div>
            <div class="user-posts">
                <div class="user-posts__add-status">
                    <ul class="options">
                        <li class="options__item">Status</li>
                        <li class="options__item">Photos</li>
                        <li class="options__item">Videos</li>
                    </ul>
                    <div class="status-text">
                        <div class="img-container">
                            <img src="./assets/images/profiles/26.jpg" alt="">
                        </div>
                        <textarea name="status" id="" cols="30" rows="10" class="status">Write something...</textarea>
                    </div>
                    <div class="actions">
                        <ul class="actions__list">
                            <li class="list-item">
                                <div class="icon-container">
                                    <ion-icon name="person"></ion-icon>
                                </div>
                                <div class="desc">
                                    People
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="icon-container">
                                    <ion-icon name="pin"></ion-icon>
                                </div>
                                <div class="desc">
                                    Check-in
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="icon-container">
                                    <ion-icon name="happy"></ion-icon>
                                </div>
                                <div class="desc">
                                    Mood
                                </div>
                            </li> 
                        </ul>
                        <button class="actions__btn">
                            Share
                        </button>
                    </div>
                </div>
                <div class="user-posts__post">
                    <ul class="post-list">
                        <?php 
                            $userName = 'Rohan Smith';
                            $userProfile = "./assets/images/profiles/26.jpg";
                            $userPosts = ["./assets/images/img1.jpg","./assets/images/img2.jpg","./assets/images/img3.jpg"];
                            $userCaptions = ["Red is my favorite color","Sky is not blue","I wish i could swim"];
                        
                            for($i=0; $i<count($userPosts); $i++){
                                echo "
                                <li class='post-list__item'>
                                    <div class='header-content'>
                                        <div class='header-content__profile'>
                                            <img src=".$userProfile.">
                                        </div>
                                        <div class='header-content__data'>
                                            <div class='user-name'>".$userName."</div>
                                            <div class='user-action'>added a post</div>
                                        </div>
                                        <div class='header-content__more'>
                                            <ion-icon name='more'></ion-icon>
                                        </div>
                                    </div>
                                    <p class='caption'>".$userCaptions[$i]."</p>
                                    <div class='post-img'>
                                        <img src=".$userPosts[$i].">
                                    </div>
                                    <ul class='post-details'>
                                        <li class='post-details__item'>
                                            <div class='icon-container'>
                                                <ion-icon name='heart-empty'><ion-icon>
                                            </div> 
                                            <div class='desc'>".($i * 2 + 34 * 2)."</div>
                                        </li>
                                        <li class='post-details__item'>
                                            <div class='icon-container'>
                                                <ion-icon name='chatbubbles'><ion-icon>
                                            </div> 
                                            <div class='desc'>".($i*20 + 22)."</div>
                                        </li>
                                        <li class='post-details__item'>
                                            <div class='icon-container'>
                                                <ion-icon name='share-alt'><ion-icon>
                                            </div> 
                                            <div class='desc'>Share</div>
                                        </li>
                                    </ul>
                                </li>";
                            }
                        ?>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</main>