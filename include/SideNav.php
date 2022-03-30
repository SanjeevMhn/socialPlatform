<aside class="side-nav">
    <nav class="side-nav__menu">
        <ul class="menu-list">
            <?php 
                $menuIcons = ["home","book","pin","document","images","calendar"];
                $menuItems = ["Home","Latest News","Explore","Files","Gallery","Events"];
            ?> 
            <?php 
                for($i=0; $i<count($menuIcons); $i++){
                    echo"<li class='menu-list__item'>
                            <a class='menu-list__link'>
                                <div class='icon-container'>
                                    <ion-icon name=".$menuIcons[$i]."
                                </div>
                                <div class='link-text'>".$menuItems[$i]."
                            </a>
                        </li>";
                }
            ?> 
        </ul>
    </nav>
</aside>