<extend file='public/master'/>
<block name="content">
	<article class="_carousel">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{__ROOT__}}/web/home/view/public/images/1.jpg">
				</div>
				<div class="item">
					<img src="{{__ROOT__}}/web/home/view/public/images/2.jpg">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			</a>
		</div>
	</article>
	<foreach from = "$arcs" key = "$key" value = "$value">
		<article>
			<div class="_head">
				<h1>{{$value['title']}}</h1>
								<span>
								作者：
								{{$value['author']}}
								</span>
				•
				<!--pubdate表⽰示发布⽇日期-->
				<time pubdate="pubdate" datetime="{{date('Y-m-d',$value['sendtime'])}}">{{date('Y-m-d',$value['sendtime'])}}</time>
				•
				分类：
				<a href="{{u('listpage/index',array('cid'=>$value['cid']))}}">{{$value['cname']}}</a>
			</div>
			<div class="_digest">
				<img src="{{__ROOT__}}/{{$value['thumb']}}"  class="img-responsive"/>
				<p>
					{{$value['digest']}}
				</p>
			</div>
			<div class="_more">
				<a href="{{u('content/index',array('aid'=>$value['aid']))}}" class="btn btn-default">阅读全文</a>
			</div>
			<div class="_footer">
				<i class="glyphicon glyphicon-tags"></i>
				<foreach from = "$value['tags']" key = "$k" value = "$v">
					<a href="{{u('listpage/index',array('tid'=>$v['tid']))}}">{{$v['tname']}}</a>、
				</foreach>
			</div>
		</article>
	</foreach>
	{{$page}}
</block>