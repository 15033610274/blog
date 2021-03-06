<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $title?></title>
    <!--描述和摘要-->
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <!--载入公共模板-->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/web/home/view/public/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <script src="<?php echo __ROOT__?>/web/home/view/public/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo __ROOT__?>/web/home/view/public/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/web/home/view/public/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/web/home/view/public/css/backTop.css"/>
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
                <h1><?php echo $webSet['webname']?></h1>
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
                        <li <?php if(CONTROLLER=='Entry'){ ?>class="_active" <?php }?> ><a href="<?php echo __ROOT__?>">首页</a></li>
                        <?php foreach ((array)$navs as $key=>$value){?>
                            <li style="position: relative" <?php if(q('get.cid') == $value['cid']){?>
                class="_active"
               <?php }?> >
                                    <a href="<?php echo u('listpage/index',array('cid'=>$value['cid']))?>"><?php echo $value['cname']?></a>
<!--                                    <ul style="position: absolute;top: 72px;z-index: 999;">-->
<!--                                        <?php foreach ((array)$two as $k=>$v){?>-->
<!--                                            <?php foreach ((array)$v['_data'] as $kk=>$vv){?>-->
<!--                                                <li style="display: block;float: left;left: 0;"><?php echo $vv['cname']?></li>-->
<!--                                            <?php }?>-->
<!--                                        <?php }?>-->
<!---->
<!--                                    </ul>-->
                            </li>
                        <?php }?>
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
                <!--blade_content-->
            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>
                        <a style="padding:7px 7px;transition: all 1s ease 0s;" href="<?php echo u('admin/index/index')?>">
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
                        <?php foreach ((array)$categorys as $key=>$value){?>
                            <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="<?php echo u('listpage/index',array('cid'=>$value['cid']))?>"><?php echo $value['cname']?> (<?php echo $value['total']?>)</a>
                        <?php }?>
                    </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                        <?php foreach ((array)$tags as $key=>$value){?>
                            <a style="margin: 10px 0;padding:7px 7px;transition: all 1s ease 0s;" href="<?php echo u('listpage/index',array('tid'=>$value['tid']))?>"><?php echo $value['tname']?></a>
                        <?php }?>
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
                <?php foreach ((array)$newArc as $key=>$value){?>
                    <div id="" class="_single">
                        <p><a href="<?php echo u('content/index',array('aid'=>$value['aid']))?>"><?php echo $value['title']?></a></p>
                        <time><?php echo date('y-m-d H:i:s',$value['sendtime'])?></time>
                    </div>
                <?php }?>
            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                    <?php foreach ((array)$tags as $key=>$value){?>
                        <a href="<?php echo u('listpage/index',array('tid'=>$value['tid']))?>"><?php echo $value['tname']?></a>
                    <?php }?>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                    <?php foreach ((array)$links as $key=>$value){?>
                        <p><a href="<?php echo $value['url']?>" target="_blank"><?php echo $value['lname']?></a></p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href=""><?php echo $webSet['webname']?></a>
                |
                <a href=""><?php echo $webSet['copy']?></a>
                |
                <a href=""><?php echo $webSet['adminemail']?></a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="<?php echo __ROOT__?>/web/home/view/public/js/backTop.js" type="text/javascript" charset="utf-8"></script>
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