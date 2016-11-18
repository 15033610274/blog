<extend file='public/master'/>
<block name="content">
    <article>
        <div class="_head category_title">
            <h2>
                {{$headData['type']}}：
                <!--分类：-->
                {{$headData['name']}}
            </h2>
								<span>
									共 {{$headData['totle']}} 篇文章
								</span>
        </div>
    </article>
    <foreach from = "$arcs" key = "$k" value = "$v">
            <article>
                <div class="_head">
                    <h1>{{$v['title']}}</h1>
                                    <span>
                                    作者：
                                    {{$v['author']}}
                                    </span>
                    •
                    <!--pubdate表⽰示发布⽇日 期-->
                    <time pubdate="pubdate" datetime="{{date('Y-m-d',$v['sendtime'])}}">{{date('Y-m-d',$v['sendtime'])}}</time>
                    •
                    分类：
                    <a href="{{u('listpage/index',array('cid'=>$v['cid']))}}">{{$v['cname']}}</a>
                </div>
                <div class="_digest">
                    <img src="{{__ROOT__}}/{{$v['thumb']}}"  class="img-responsive"/>
                    <p>
                        {{$v['digest']}}
                    </p>
                </div>
                <div class="_more">
                    <a href="{{u('content/index',array('aid'=>$v['aid']))}}" class="btn btn-default">阅读全文</a>
                </div>
                <div class="_footer">
                    <i class="glyphicon glyphicon-tags"></i>
                    <foreach from = "$v['tags']" key = "$key" value = "$value">
                        <a href="{{u('listpage/index',array('tid'=>$value['tid']))}}">{{$value['tname']}}</a>、
                    </foreach>
                </div>
            </article>
    </foreach>
    {{$page}}
</block>