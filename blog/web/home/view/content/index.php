<extend file='public/master'/>
<block name="content">
    <article>
        <div class="_head">
            <h1>{{$arcs['title']}}</h1>
								<span>
								作者：
								<a href="">{{$arcs['author']}}</a>
								</span>
            •
            <!--pubdate表⽰示发布⽇日期-->
            <time pubdate="pubdate" datetime="{{date('Y年m月d日',$arcs['sendtime'])}}">{{date('Y年m月d日',$arcs['sendtime'])}}</time>
            •
            <span>
                点击量：
			    (<a href="">{{$arcs['click']}}</a>)
			</span>
        </div>
        <div class="_digest">
            {{$arcs['content']}}
        </div>
        <div class="_footer">
            <i class="glyphicon glyphicon-tags"></i>
            <foreach from = "$arcs['tags']" key = "$key" value = "$value">
                <a href="{{u('listpage/index',array('tid'=>$value['tid']))}}">{{$value['tname']}}</a>、
            </foreach>

        </div>

            <nav>
                <ul class="pagination">
                    <?php if($_GET['k'] == 0) {?>
                        <li class="disabled">
                            <span>上一页</span>
                        </li>
                    <?php }else{ ?>
                        <li>
                            <a href="{{u('content/index',array('aid'=>$aids[(q('get.k')-1)],'k' => (q('get.k')-1)))}}">上一页</a>
                        </li>
                    <?php } ?>

                    <foreach from="$aids" key = "$key" value = "$value">
                        <li <if value="q('get.aid') == $value">class="active"</if> >
                            <a href="{{u('content/index',array('aid'=>$value,'k'=>$key))}}">{{$key+1}}</a>
                        </li>
                    </foreach>


                    <?php if($_GET['k'] == (count($aids)-1)) {?>
                        <li class="disabled">
                            <span>下一页</span>
                        </li>
                    <?php }else{ ?>
                        <li>
                            <a href="{{u('content/index',array('aid'=>$aids[(q('get.k')+1)],'k' => (q('get.k')+1)))}}">下一页</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
    </article>

    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="{{$arcs['aid']}}" data-title="{{$arcs['title']}}" data-url="{{u('content/index',array('aid'=>$arcs['aid']))}}"></div>
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





</block>