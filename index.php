<?php
require 'lessc.inc.php';

$less = new lessc('style.less');
file_put_contents('style.css', $less->parse());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab|Comfortaa" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="stem-wrapper">
        <div class="stem"></div>
        <div class="stem-background"></div>
    </div>

    <div class="section main-content">
        <div class="section-inner">
            <div class="stem-padding"></div>
            <div class="post-wrapper">
                <article class="post bitbucket-icon">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post m-icon" data-stem-color="green">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post music-icon" data-stem-color="yellow">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post twitter-icon" data-stem-color="white">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post bitbucket-icon">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post music-icon" data-stem-color="yellow">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>
                <article class="post bitbucket-icon">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post m-icon" data-stem-color="green">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post music-icon" data-stem-color="yellow">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post twitter-icon" data-stem-color="white">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post bitbucket-icon">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>

                <article class="post music-icon" data-stem-color="yellow">
                    <div class="stem-overlay">
                        <div class="icon"></div>
                        <div class="stem-mask"></div>
                    </div>

                    <div class="post-content">
                        <p class="meta">Written yesterday at 8:56 pm</p>
                        <h2 class="post-title">This is my post title</h2>
                        <div class="entry-content">
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                    </div>
                </article>
            </div> <!-- post-wrapper -->

            <div class="single-stem-icon scroll-to-top trigger-scroll-to-top"></div>

        </div> <!-- section-inner -->
    </div> <!-- main-content -->
</body>
</html>