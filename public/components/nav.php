<?php
    $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<nav class="d-flex d-flex-row flex-align-center flex-justify-between">
    <div class="logo">
        <img src="/public/assets/images/logo.png" alt="logo">
    </div>
    <div class="links d-flex d-flex-row flex-align-center">
        <a <?=explode('/', $url)[3] == '' ? 'href="#home"' : 'href="/"' ?>>Home</a>
        <a class="modal-open" data-modal="about_us">About</a>
        <a <?=explode('/', $url)[3] == 'blog' ? '#' : 'href="/blog"' ?>>Our Stories</a>
        <a class="modal-open" data-modal="live_chat">Contact</a>
    </div>
</nav>
<div class="mobile-nav">
    <div class="mobile-nav-opener close">
        <i class="las la-arrow-right"></i>
    </div>
</div>
