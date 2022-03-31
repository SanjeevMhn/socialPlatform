<aside class="side-nav">
    <h2 class="side-nav__header-text">
        notfacebook
    </h2>
    <nav class="side-nav__menu">
        <h2 class="menu-header-text">
            Menu
        </h2>
        <ul class="menu-list">
            <?php 
                $menuIcons = ["home","book","pin","document","images","calendar"];
                $menuItems = ["Home","Latest News","Explore","Files","Gallery","Events"];
            ?> 
            <?php 
                for($i=0; $i<count($menuIcons); $i++){
                    echo"<li class='menu-list__item'>
                            <div class='icon-container'>
                                <ion-icon name=".$menuIcons[$i]."></ion-icon>
                            </div>
                            <div class='link-text'>".$menuItems[$i]."</div>
                        </li>";
                }
            ?> 
        </ul>
    </nav>
</aside>