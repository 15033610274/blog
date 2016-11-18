<!doctype html>
<html>
<head>
    <meta charset="gb2312">
    <title>黑色Html5响应式个人博客模板――主题《如影随形》</title>
    <meta name="keywords" content="个人博客模板,博客模板,响应式" />
    <meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
    <link href="<?php echo __ROOT__?>/web/home/view/public/css/base.css" rel="stylesheet">
    <link href="<?php echo __ROOT__?>/web/home/view/public/css/index.css" rel="stylesheet">
    <link href="<?php echo __ROOT__?>/web/home/view/public/css/media.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="<?php echo __ROOT__?>/web/home/view/public/js/modernizr.js"></script>
    <![endif]-->
    <style>
        .content {
            position:relative;
            line-height:1.4em;
            /* 3 times the line-height to show 3 lines */
            height:8.2em;
            overflow:hidden;
        }
        .content::after {
            content:"...";
            font-weight:bold;
            position:absolute;
            bottom:0;
            right:0;
            padding:0 20px 1px 45px;
            background:url(http://css88.b0.upaiyun.com/css88/2014/09/ellipsis_bg.png) repeat-y;
        }
    </style>
</head>
<body>
<div class="ibody">
    <header>
        <h1>如影随形</h1>
        <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
        <div class="logo"><a href="<?php echo u('index')?>"></a></div>
        <nav id="topnav">
            <a href="<?php echo u('index')?>">首页</a>
            <?php foreach ((array)$navs as $key=>$value){?>
            <a href="<?php echo index?>"><?php echo $value['cname']?></a>
<!--            <a href="about.html">关于我</a>-->
<!--            <a href="newlist.html">慢生活</a>-->
<!--            <a href="share.html">模板分享</a>-->
<!--            <a href="new.html">模板主题</a>-->
            <?php }?>
        </nav>
    </header>
    <article>
        <div class="banner">
            <ul class="texts">
                <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
                <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
            </ul>
        </div>
        <div class="bloglist">
            <h2>
                <p><span>推荐</span>文章</p>
            </h2>
            <?php foreach ((array)$data as $key=>$value){?>
                <div class="blogs">
                    <h3><a href=""><?php echo $value['title']?></a></h3>
                    <figure style="height: 150px;"><img src="<?php echo $value['thumb']?>" ></figure>
                    <ul>
                        <p class="content">
                            <?php echo $value['content']?>
                        </p>
                        <a href="" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                    </ul>
                    <p class="autor"><span>作者：杨青</span><span>分类：【<a href="/">日记</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
                    <div class="dateview">2014-04-08</div>
                </div>
            <?php }?>
        </div>
    </article>
    <aside>
        <div class="avatar"><a href="about.html"><span>关于杨青</span></a></div>
        <div class="topspaceinfo">
            <h1>执子之手，与子偕老</h1>
            <p>于千万人之中，我遇见了我所遇见的人....</p>
        </div>
        <div class="about_c">
            <p>网名：DanceSmile | 即步非烟</p>
            <p>职业：Web前端设计师、网页设计 </p>
            <p>籍贯：四川省―成都市</p>
            <p>电话：13662012345</p>
            <p>邮箱：dancesmiling@qq.com</p>
        </div>
        <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
        <div class="tj_news">
            <h2>
                <p class="tj_t1">最新文章</p>
            </h2>
            <ul>
                <li><a href="/">犯错了怎么办？</a></li>
                <li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>
                <li><a href="/">春暖花开-走走停停-发现美</a></li>
                <li><a href="/">琰智国际-Nativ for Life官方网站</a></li>
                <li><a href="/">个人博客模板（2014草根寻梦）</a></li>
                <li><a href="/">简单手工纸玫瑰</a></li>
                <li><a href="/">响应式个人博客模板（蓝色清新）</a></li>
                <li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>
            </ul>
            <h2>
                <p class="tj_t2">推荐文章</p>
            </h2>
            <ul>
                <li><a href="/">犯错了怎么办？</a></li>
                <li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>
                <li><a href="/">春暖花开-走走停停-发现美</a></li>
                <li><a href="/">琰智国际-Nativ for Life官方网站</a></li>
                <li><a href="/">个人博客模板（2014草根寻梦）</a></li>
                <li><a href="/">简单手工纸玫瑰</a></li>
                <li><a href="/">响应式个人博客模板（蓝色清新）</a></li>
                <li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>
            </ul>
        </div>
        <div class="links">
            <h2>
                <p>友情链接</p>
            </h2>
            <ul>
                <li><a href="/">杨青个人博客</a></li>
                <li><a href="/">3DST技术社区</a></li>
            </ul>
        </div>
        <div class="copyright">
            <ul>
                <p> Design by <a href="/">DanceSmile</a></p>
                <p>蜀ICP备11002373号-1</p>
                </p>
            </ul>
        </div>
    </aside>
    <script src="js/silder.js"></script>
    <div class="clear"></div>
    <!-- 清除浮动 -->
</div>
</body>
</html>
