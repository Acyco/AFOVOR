<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div id="b-content" class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-8">
            <div class="row b-one-article">
                <h3 class="col-xs-12 col-md-12 col-lg-12">
                    <a class="b-oa-title" href="" target="_blank">
                        标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                    </a>
                </h3>
                <div class="col-xs-12 col-md-12 col-lg-12 b-date">
                    <ul class="row">
                        <li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user">Acyco</i> </li>
                        <li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 1天前</li>
                        <li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i> <a href="/category/29" target="_blank">后端语言</a>
                        </li>
                        <li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
                            <figure class="b-oa-pic b-style1"><a href="/article/261" target="_blank"><img
                                            src="hoder.js1200x1200"></a>
                                <figcaption><a href="/article/261" target="_blank"></a></figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read">
                            摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要。。。
                        </div>
                    </div>
                </div><!--
                    <a class=" b-readall" href="" target="_blank">阅读全文</a>-->
                
            </div>
         
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 b-page">
                    <div class="page"><a class="first hidden-xs" href="/category/29/p/1">首页</a> <a
                                class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span><a
                                class="num hidden-xs" href="/category/29/p/2">2</a> <a
                                class="next" href="/category/29/p/2">下一页</a> <a class="end hidden-xs"
                                                                                href="/category/29/p/10">末页</a> <span
                                class="rows hidden-xs">共 95 条记录</span></div>
                </div>
            </div>
        </div>
        <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <div class="b-search">
                <form class="form-inline" role="form" action="/Home/Index/search" method="get"><input
                            class="b-search-text" type="text" id="b-search-text" name="search_word"> <input
                            class="b-search-submit" type="button" value="全站搜索"
                            onclick="javascript:var keyword=$('#b-search-text').val();window.location.href='/Home/Index/search/search_word/'+keyword">
                </form>
            </div>
            <div class="b-tags"><h4 class="b-title">热门标签</h4>
                <ul class="b-all-tname">
                    <li class="b-tname"><a class="tstyle-1" href="/tag/29" onclick="return recordId('tid',29)">插件分享
                            (3)</a></li>
                    <li class="b-tname"><a class="tstyle-2" href="/tag/30" onclick="return recordId('tid',30)">报错查错
                            (1)</a></li>
                    <li class="b-tname"><a class="tstyle-3" href="/tag/31" onclick="return recordId('tid',31)">php多进程
                            (5)</a></li>
                    <li class="b-tname"><a class="tstyle-4" href="/tag/32" onclick="return recordId('tid',32)">swoole
                            (15)</a></li>
                    <li class="b-tname"><a class="tstyle-1" href="/tag/33" onclick="return recordId('tid',33)">并发锁
                            (4)</a></li>
                    <li class="b-tname"><a class="tstyle-2" href="/tag/34" onclick="return recordId('tid',34)">mysql集群
                            (1)</a></li>
                </ul>
            </div>
            <div class="b-recommend"><h4 class="b-title">置顶推荐</h4>
                <p class="b-recommend-p">
                    <a class="b-recommend-a" href="/article/244" target="_blank">
                        <span class="fa fa-th-list b-black"></span> 标题标题标题标题标题标题标题标题标题标题标题</a>
                    <a class="b-recommend-a" href="/article/240" target="_blank">
                        <span class="fa fa-th-list b-black"></span> 标题标题标题标题标题标题标题标题标题标题标题</a></p></div>
            <div class="b-link">
                <h4 class="b-title">最新评论</h4>
                <div>
                    <ul class="b-new-comment b-new-commit-first"><img class="b-head-img js-head-img"
                                                                      src="holder.js1000x100"
                                                                      _src=""
                                                                      alt="泡泡糖吧">
                        <li class="b-nickname"> username<span>1天前</span></li>
                        <li class="b-nc-article"> 在<a href="/article/263" target="_blank">title标题title标题title标题</a>中评论</li>
                        <li class="b-content"> commentcommentcommentcommentcomment</li>
                    </ul>
                  
                
                </div>
            </div>
        </div>
    </div>
    <div class="row"><!-- 通用底部文件开始 -->

        <!-- 通用底部文件结束 -->
    </div>
</div>