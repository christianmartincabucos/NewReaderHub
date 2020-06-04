<template>
    <div id="slide-out" class="side-nav fixed" style="transform: translateX(0px)!important;width: 210px;">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#" class="ml-3">
                        <img :src="profile" class="rounded-circle align-content-top"></a>
                </div>
            </li>
            <li>
                <ul class="side-profile text-black">
                    <li>
                        <h5 class="font-weight-bold" style="margin-top: -55px;">John Doe</h5>
                    </li>
                    <li>
                        <h6>Artist</h6>
                    </li>
                    <li>
                        <h6 class="h6-responsive text-muted">1.5m Followers</h6>
                    </li>
                    <li>
                        <h6 class="h6-responsive text-muted" style="font-size: 0.7rem">followed by Jane Doe and 45 others</h6>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a href="/feed" class="collapsible-header waves-effect arrow-r">Feed</a>
                    </li>
                    <li>
                        <a href="/articles" class="collapsible-header waves-effect arrow-r">Articles</a>
                    </li>
                    <li>
                        <a href="/games" class="collapsible-header waves-effect arrow-r">Games</a>
                    </li>
                    <li>
                        <a href="/profile" class="collapsible-header waves-effect arrow-r">Profile</a>
                    </li>
                    <li>
                        <a href="/notifications" class="collapsible-header waves-effect arrow-r">Notifications</a>

                    </li>
                    <li>
                        <a href="/works" class="collapsible-header waves-effect arrow-r">Works</a>
                    </li>
                    <li>
                        <a href="/saved" class="collapsible-header waves-effect arrow-r">Saved</a>
                    </li>
                    <li>
                        <a href="/settings" class="collapsible-header waves-effect arrow-r">Settings</a>
                    </li>

                </ul>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a href="/" class="collapsible-header waves-effect arrow-r mb-5">Logout</a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
    <div class="sidenav-bg"></div>
</div>

</template>
<script>
export default {
    props:['profile'],
}
</script>
