<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title></title>
    <!--描述和摘要-->
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <!--载入公共模板-->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/home/view/public/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/web/home/view/public/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/web/home/view/public/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/home/view/public/css/index.css" />
    <link rel="stylesheet" type="text/css" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/home/view/public/css/backTop.css"/>
    <style>
        section aside ._widget a:hover{
        	transform: rotate(360deg);
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>如影随形</h1>
            </div>
        </div>
    </div>
</header>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">

                        <span class="sr-only">切换导航</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="_menu" >
                        <li  ><a href="http://c70_yangyuhui.houdunphp.com/hdphp">首页</a></li>
                                                    <li style="position: relative"  >
                                    <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=2">关于我</a>
<!--                                    <ul style="position: absolute;top: 72px;z-index: 999;">-->
<!--                                        -->
<!---->
<!--                                    </ul>-->
                            </li>
                                                    <li style="position: relative"  >
                                    <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=4">美文</a>
<!--                                    <ul style="position: absolute;top: 72px;z-index: 999;">-->
<!--                                        -->
<!---->
<!--                                    </ul>-->
                            </li>
                                            </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <!--标签规定文档的主要内容main-->
            <main class="col-md-8">
                <!--				这个是子集的内容-->
                
    <article>
        <div class="_head">
            <h1><?php echo $arcs['title']?></h1>
								<span>
								作者：
								<a href=""><?php echo $arcs['author']?></a>
								</span>
            •
            <!--pubdate表⽰示发布⽇日期-->
            <time pubdate="pubdate" datetime="<?php echo date('Y年m月d日',$arcs['sendtime'])?>"><?php echo date('Y年m月d日',$arcs['sendtime'])?></time>
            •
            <span>
                点击量：
			    (<a href=""><?php echo $arcs['click']?></a>)
			</span>
        </div>
        <div class="_digest">
            <?php echo $arcs['content']?>
        </div>
        <div class="_footer">
            <i class="glyphicon glyphicon-tags"></i>
            <?php foreach ((array)$arcs['tags'] as $key=>$value){?>
                <a href="<?php echo u('listpage/index',array('tid'=>$value['tid']))?>"><?php echo $value['tname']?></a>、
            <?php }?>

        </div>

            <nav>
                <ul class="pagination">
                    <?php if($_GET['k'] == 0) {?>
                        <li class="disabled">
                            <span>上一页</span>
                        </li>
                    <?php }else{ ?>
                        <li>
                            <a href="<?php echo u('content/index',array('aid'=>$aids[(q('get.k')-1)],'k' => (q('get.k')-1)))?>">上一页</a>
                        </li>
                    <?php } ?>

                    <?php foreach ((array)$aids as $key=>$value){?>
                        <li <?php if(q('get.aid') == $value){?>
                class="active"
               <?php }?> >
                            <a href="<?php echo u('content/index',array('aid'=>$value,'k'=>$key))?>"><?php echo $key+1?></a>
                        </li>
                    <?php }?>


                    <?php if($_GET['k'] == (count($aids)-1)) {?>
                        <li class="disabled">
                            <span>下一页</span>
                        </li>
                    <?php }else{ ?>
                        <li>
                            <a href="<?php echo u('content/index',array('aid'=>$aids[(q('get.k')+1)],'k' => (q('get.k')+1)))?>">下一页</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
    </article>

    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="<?php echo $arcs['aid']?>" data-title="<?php echo $arcs['title']?>" data-url="<?php echo u('content/index',array('aid'=>$arcs['aid']))?>"></div>
    <!-- 多说评论框 end -->
    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
    <script type="text/javascript">
        var duoshuoQuery = {short_name:"abc123yyh"};
        (function() {
            var ds = document.createElement('script');
            ds.type = 'text/javascript';ds.async = true;
            ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
            ds.charset = 'UTF-8';
            (document.getElementsByTagName('head')[0]
            || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
    </script>
    <!-- 多说公共JS代码 end -->






            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>
                        <a style="padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=admin/index/index">
                           	 关于自己
                        </a>
                    </h4>
                    <div class="_info">
                        <p>杨宇辉，男，一个90后草根男站长！16年入行。从搬砖一样的生活方式换成了现在有“单”而...</p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            目前就职于
                            <a href="http://www.houdunwang.com" target="_blank">北京后盾网</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=8">抒情文章 (0)</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=2">关于我 (1)</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=3">日志 (0)</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=4">美文 (0)</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=5">伤感散文 (0)</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=6">伤感文章 (3)</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&cid=7">抒情散文 (3)</a>
                                            </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=1">伤感日志</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=2">伤感散文</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=3">经典文章</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=4">情感文章</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=5">原创文章</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=6">伤感文章</a>
                                                    <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=7">心情文章</a>
                                            </div>
                </div>

            </aside>
        </div>
    </div>
</section>
<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="_title">最新文章</h4>
                                    <div id="" class="_single">
                        <p><a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/content/index&aid=8">123123123</a></p>
                        <time>16-09-14 15:45:09</time>
                    </div>
                                    <div id="" class="_single">
                        <p><a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/content/index&aid=7">我想我们再也回不去了</a></p>
                        <time>16-09-13 22:38:19</time>
                    </div>
                                    <div id="" class="_single">
                        <p><a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/content/index&aid=6">Just about me</a></p>
                        <time>16-09-13 18:30:38</time>
                    </div>
                            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=1">伤感日志</a>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=2">伤感散文</a>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=3">经典文章</a>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=4">情感文章</a>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=5">原创文章</a>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=6">伤感文章</a>
                                            <a href="http://c70_yangyuhui.houdunphp.com/hdphp/index.php?s=home/listpage/index&tid=7">心情文章</a>
                                    </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                                            <p><a href="http://www.yangqq.com" target="_blank">杨青个人博客</a></p>
                                            <p><a href="http://www.jd.com" target="_blank">京东</a></p>
                                            <p><a href="http://www.houdunwang.com" target="_blank">后盾网</a></p>
                                    </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="">如影随形</a>
                |
                <a href="">Design by DanceSmile 蜀ICP备11002373号-1</a>
                |
                <a href="">2218006427@qq.com</a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="http://c70_yangyuhui.houdunphp.com/hdphp/web/home/view/public/js/backTop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        //插件使用
        $('.back_top').backTop({right:30});
    })
</script>
<div class="back_top hidden-xs hidden-md">
    <i class="glyphicon glyphicon-menu-up"></i>
</div>
</body>
</html>
