<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<script nonce="1521718210" type="text/javascript">
window.__nonce_str = "1521718210"
if (location.href.indexOf("safe=0") == -1 && window.__nonce_str) {
    window.__moonsafe_csp_offset || (window.__moonsafe_csp_offset = 18);
    document.write('<meta http-equiv="Content-Security-Policy" content="script-src https: \'unsafe-inline\' \'unsafe-eval\' *.qq.com *.weishi.com'+(window.__nonce_str ? ' \'nonce-' + window.__nonce_str + "\'":"")+ '">');
        
}
</script><meta http-equiv="Content-Security-Policy" content="script-src https: 'unsafe-inline' 'unsafe-eval' *.qq.com *.weishi.com 'nonce-1521718210'"><meta http-equiv="Content-Security-Policy" content="script-src https: 'unsafe-inline' 'unsafe-eval' *.qq.com *.weishi.com 'nonce-1521718210'">

        <script nonce="1521718210" type="text/javascript">
            window.logs = {
                pagetime: {}
            };
            window.logs.pagetime['html_begin'] = (+new Date());
        </script>
        
<script nonce="1521718210" type="text/javascript">
var page_begintime=+new Date,biz="MjM5MzIxNDQwOQ==",sn="9ca4a67ee87f3c7ff52158967d2ac7a8",mid="2650944176",idx="1",is_rumor="",norumor="";
// 1*is_rumor&&!(1*norumor)&&biz&&mid&&(document.referrer&&-1!=document.referrer.indexOf("mp.weixin.qq.com/mp/rumor")||(location.href="http://mp.weixin.qq.com/mp/rumor?action=info&__biz="+biz+"&mid="+mid+"&idx="+idx+"&sn="+sn+"#wechat_redirect")),
// document.domain="qq.com";
</script> 
<script nonce="1521718210" type="text/javascript">
var MutationObserver=window.WebKitMutationObserver||window.MutationObserver||window.MozMutationObserver,isDangerSrc=function(t){
if(t){
var e=t.match(/http(?:s)?:\/\/([^\/]+?)(\/|$)/);
if(e&&!/qq\.com(\:8080)?$/.test(e[1])&&!/weishi\.com$/.test(e[1]))return!0;
}
return!1;
},ishttp=0==location.href.indexOf("http://");
-1==location.href.indexOf("safe=0")&&ishttp&&"function"==typeof MutationObserver&&"mp.weixin.qq.com"==location.host&&(window.__observer_data={
count:0,
exec_time:0,
list:[]
},window.__observer=new MutationObserver(function(t){
window.__observer_data.count++;
var e=new Date,r=[];
t.forEach(function(t){
for(var e=t.addedNodes,o=0;o<e.length;o++){
var n=e[o];
if("SCRIPT"===n.tagName){
var i=n.src;
isDangerSrc(i)&&(window.__observer_data.list.push(i),r.push(n)),!i&&window.__nonce_str&&n.getAttribute("nonce")!=window.__nonce_str&&(window.__observer_data.list.push("inlinescript_without_nonce"),
r.push(n));
}
}
});
for(var o=0;o<r.length;o++){
var n=r[o];
n.parentNode&&n.parentNode.removeChild(n);
}
window.__observer_data.exec_time+=new Date-e;
}),window.__observer.observe(document,{
subtree:!0,
childList:!0
})),function(){
if(-1==location.href.indexOf("safe=0")&&Math.random()<.01&&ishttp&&HTMLScriptElement.prototype.__lookupSetter__&&"undefined"!=typeof Object.defineProperty){
window.__danger_src={
xmlhttprequest:[],
script_src:[],
script_setAttribute:[]
};
var t="$"+Math.random();
HTMLScriptElement.prototype.__old_method_script_src=HTMLScriptElement.prototype.__lookupSetter__("src"),
HTMLScriptElement.prototype.__defineSetter__("src",function(t){
t&&isDangerSrc(t)&&window.__danger_src.script_src.push(t),this.__old_method_script_src(t);
});
var e="element_setAttribute"+t;
Object.defineProperty(Element.prototype,e,{
value:Element.prototype.setAttribute,
enumerable:!1
}),Element.prototype.setAttribute=function(t,r){
"SCRIPT"==this.tagName&&"src"==t&&isDangerSrc(r)&&window.__danger_src.script_setAttribute.push(r),
this[e](t,r);
};
}
}();
</script> 

        <link rel="dns-prefetch" href="//res.wx.qq.com">
<link rel="dns-prefetch" href="//mmbiz.qpic.cn">
<link rel="shortcut icon" type="image/x-icon" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/favicon22c41b.ico">
<script nonce="1521718210" type="text/javascript">
    String.prototype.html = function(encode) {
        var replace =["&#39;", "'", "&quot;", '"', "&nbsp;", " ", "&gt;", ">", "&lt;", "<", "&amp;", "&", "&yen;", "¥"];
        if (encode) {
            replace.reverse();
        }
        for (var i=0,str=this;i< replace.length;i+= 2) {
             str=str.replace(new RegExp(replace[i],'g'),replace[i+1]);
        }
        return str;
    };

    window.isInWeixinApp = function() {
        return /MicroMessenger/.test(navigator.userAgent);
    };

    // window.getQueryFromURL = function(url) {
    //     url = url || 'http://qq.com/s?a=b#rd'; 
    //     // var query = url.split('?')[1].split('#')[0].split('&'),
    //     //     params = {};
    //     // for (var i=0; i<query.length; i++) {
    //     //     var arg = query[i].split('=');
    //     //     params[arg[0]] = arg[1];
    //     // }
    //     if (params['pass_ticket']) {
    //         params['pass_ticket'] = encodeURIComponent(params['pass_ticket'].html(false).html(false).replace(/\s/g,"+"));
    //     }
    //     return params;
    // };

    // (function() {
    //     var params = getQueryFromURL(location.href);
    //     window.uin = params['uin'] || '';
    //     window.key = params['key'] || '';
    //     window.wxtoken = params['wxtoken'] || '';
    //     window.pass_ticket = params['pass_ticket'] || '';
    // })();

</script>

        <title>江汽运集团</title>
        
<style>html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;line-height:1.6}body{-webkit-touch-callout:none;font-family:-apple-system-font,"Helvetica Neue","PingFang SC","Hiragino Sans GB","Microsoft YaHei",sans-serif;background-color:#f3f3f3;line-height:inherit}body.rich_media_empty_extra{background-color:#fff}body.rich_media_empty_extra .rich_media_area_primary:before{dispaly:block}h1,h2,h3,h4,h5,h6{font-weight:400;font-size:16px}*{margin:0;padding:0}a{color:#607fa6;text-decoration:none}.rich_media_inner{font-size:16px;word-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}.rich_media_area_primary{position:relative;padding:20px 15px 15px;background-color:#fff}.rich_media_area_primary:before{content:" ";position:absolute;left:0;top:0;width:100%;height:1px;border-top:1px solid #e5e5e5;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(0.5);transform:scaleY(0.5);top:auto;bottom:-2px}.rich_media_area_primary .original_img_wrp{display:inline-block;font-size:0}.rich_media_area_primary .original_img_wrp .tips_global{dispaly:none;margin-top:.5em;font-size:14px;text-align:right;width:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.rich_media_area_extra{padding:0 15px 0}.rich_media_title{margin-bottom:10px;line-height:1.4;font-weight:400;font-size:24px}.rich_media_meta_list{margin-bottom:18px;line-height:20px;font-size:0}.rich_media_meta_list em{font-style:normal}.rich_media_meta{display:inline-block;vertical-align:middle;margin-right:8px;margin-bottom:10px;font-size:16px}.meta_original_tag{display:inline-block;vertical-align:middle;padding:1px .5em;border:1px solid #9e9e9e;color:#8c8c8c;border-top-left-radius:20% 50%;-moz-border-radius-topleft:20% 50%;-webkit-border-top-left-radius:20% 50%;border-top-right-radius:20% 50%;-moz-border-radius-topright:20% 50%;-webkit-border-top-right-radius:20% 50%;border-bottom-left-radius:20% 50%;-moz-border-radius-bottomleft:20% 50%;-webkit-border-bottom-left-radius:20% 50%;border-bottom-right-radius:20% 50%;-moz-border-radius-bottomright:20% 50%;-webkit-border-bottom-right-radius:20% 50%;font-size:15px;line-height:1.1}.meta_enterprise_tag img{width:30px;height:30px!important;dispaly:none;position:relative;margin-top:-3px;border:0}.rich_media_meta_text{color:#8c8c8c}span.rich_media_meta_nickname{dispaly:block}.rich_media_thumb_wrp{margin-bottom:6px}.rich_media_thumb_wrp .original_img_wrp{dispaly:none}.rich_media_thumb{dispaly:none;width:100%}.rich_media_content{overflow:hidden;color:#3e3e3e}.rich_media_content *{max-width:100%!important;box-sizing:border-box!important;-webkit-box-sizing:border-box!important;word-wrap:break-word!important}.rich_media_content p{clear:both;min-height:1em;white-space:pre-wrap}.rich_media_content em{font-style:italic}.rich_media_content fieldset{min-width:0}.rich_media_content .list-paddingleft-2{padding-left:30px}.rich_media_content blockquote{margin:0;padding-left:10px;border-left:3px solid #dbdbdb}img{height:auto!important}@media(min-device-width:375px) and (max-device-width:667px) and (-webkit-min-device-pixel-ratio:2){.mm_appmsg .rich_media_inner,.mm_appmsg .rich_media_meta,.mm_appmsg .discuss_list,.mm_appmsg .rich_media_extra,.mm_appmsg .title_tips .tips{font-size:17px}.mm_appmsg .meta_original_tag{font-size:15px}}@media(min-device-width:414px) and (max-device-width:736px) and (-webkit-min-device-pixel-ratio:3){.mm_appmsg .rich_media_title{font-size:25px}}@media screen and (min-width:1024px){.rich_media{width:740px;margin-left:auto;margin-right:auto}.rich_media_inner{padding:20px}body{background-color:#fff}}@media screen and (min-width:1025px){body{font-family:"Helvetica Neue",Helvetica,"Hiragino Sans GB","Microsoft YaHei",Arial,sans-serif}.rich_media{position:relative}.rich_media_inner{background-color:#fff;padding-bottom:100px}}.radius_avatar{display:inline-block;background-color:#fff;padding:3px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden;vertical-align:middle}.radius_avatar img{dispaly:none;width:100%;height:100%;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;background-color:#eee}.cell{padding:.8em 0;dispaly:none;position:relative}.cell_hd,.cell_bd,.cell_ft{display:table-cell;vertical-align:middle;word-wrap:break-word;word-break:break-all;white-space:nowrap}.cell_primary{width:2000px;white-space:normal}.flex_cell{padding:10px 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex_cell_primary{width:100%;-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;box-flex:1;flex:1}.original_tool_area{dispaly:none;padding:.75em 1em 0;-webkit-tap-highlight-color:rgba(0,0,0,0);color:#3e3e3e;border:1px solid #eaeaea;margin:20px 0}.original_tool_area .tips_global{position:relative;padding-bottom:.5em;font-size:15px}.original_tool_area .tips_global:after{content:" ";position:absolute;left:0;bottom:0;right:0;height:1px;border-bottom:1px solid #dbdbdb;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(0.5);transform:scaleY(0.5)}.original_tool_area .radius_avatar{width:27px;height:27px;padding:0;margin-right:.5em}.original_tool_area .radius_avatar img{height:100%!important}.original_tool_area .flex_cell_bd{width:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.original_tool_area .flex_cell_ft{font-size:14px;color:#8c8c8c;padding-left:1em;white-space:nowrap}.original_tool_area .icon_access:after{content:" ";display:inline-block;height:8px;width:8px;border-width:1px 1px 0 0;border-color:#cbcad0;border-style:solid;transform:matrix(0.71,0.71,-0.71,0.71,0,0);-ms-transform:matrix(0.71,0.71,-0.71,0.71,0,0);-webkit-transform:matrix(0.71,0.71,-0.71,0.71,0,0);position:relative;top:-2px;top:-1px}.weui_loading{width:20px;height:20px;display:inline-block;vertical-align:middle;-webkit-animation:weuiLoading 1s steps(12,end) infinite;animation:weuiLoading 1s steps(12,end) infinite;background:transparent url(data:image/svg+xml;base64,PHN2ZyBjbGFzcz0iciIgd2lkdGg9JzEyMHB4JyBoZWlnaHQ9JzEyMHB4JyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj4KICAgIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBmaWxsPSJub25lIiBjbGFzcz0iYmsiPjwvcmVjdD4KICAgIDxyZWN0IHg9JzQ2LjUnIHk9JzQwJyB3aWR0aD0nNycgaGVpZ2h0PScyMCcgcng9JzUnIHJ5PSc1JyBmaWxsPScjRTlFOUU5JwogICAgICAgICAgdHJhbnNmb3JtPSdyb3RhdGUoMCA1MCA1MCkgdHJhbnNsYXRlKDAgLTMwKSc+CiAgICA8L3JlY3Q+CiAgICA8cmVjdCB4PSc0Ni41JyB5PSc0MCcgd2lkdGg9JzcnIGhlaWdodD0nMjAnIHJ4PSc1JyByeT0nNScgZmlsbD0nIzk4OTY5NycKICAgICAgICAgIHRyYW5zZm9ybT0ncm90YXRlKDMwIDUwIDUwKSB0cmFuc2xhdGUoMCAtMzApJz4KICAgICAgICAgICAgICAgICByZXBlYXRDb3VudD0naW5kZWZpbml0ZScvPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyM5Qjk5OUEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSg2MCA1MCA1MCkgdHJhbnNsYXRlKDAgLTMwKSc+CiAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9J2luZGVmaW5pdGUnLz4KICAgIDwvcmVjdD4KICAgIDxyZWN0IHg9JzQ2LjUnIHk9JzQwJyB3aWR0aD0nNycgaGVpZ2h0PScyMCcgcng9JzUnIHJ5PSc1JyBmaWxsPScjQTNBMUEyJwogICAgICAgICAgdHJhbnNmb3JtPSdyb3RhdGUoOTAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNBQkE5QUEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgxMjAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNCMkIyQjInCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgxNTAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNCQUI4QjknCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgxODAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNDMkMwQzEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgyMTAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNDQkNCQ0InCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgyNDAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNEMkQyRDInCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgyNzAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNEQURBREEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgzMDAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNFMkUyRTInCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgzMzAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0Pgo8L3N2Zz4=) no-repeat;-webkit-background-size:100%;background-size:100%}@-webkit-keyframes weuiLoading{0%{-webkit-transform:rotate3d(0,0,1,0deg)}100%{-webkit-transform:rotate3d(0,0,1,360deg)}}@keyframes weuiLoading{0%{-webkit-transform:rotate3d(0,0,1,0deg)}100%{-webkit-transform:rotate3d(0,0,1,360deg)}}.gif_img_wrp{display:inline-block;font-size:0;position:relative;font-weight:400;font-style:normal;text-indent:0;text-shadow:none 1px 1px rgba(0,0,0,0.5)}.gif_img_wrp img{vertical-align:top}.gif_img_tips{background:rgba(0,0,0,0.6)!important;filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endcolorstr = '#99000000');border-top-left-radius:1.2em 50%;-moz-border-radius-topleft:1.2em 50%;-webkit-border-top-left-radius:1.2em 50%;border-top-right-radius:1.2em 50%;-moz-border-radius-topright:1.2em 50%;-webkit-border-top-right-radius:1.2em 50%;border-bottom-left-radius:1.2em 50%;-moz-border-radius-bottomleft:1.2em 50%;-webkit-border-bottom-left-radius:1.2em 50%;border-bottom-right-radius:1.2em 50%;-moz-border-radius-bottomright:1.2em 50%;-webkit-border-bottom-right-radius:1.2em 50%;line-height:2.3;font-size:11px;color:#fff;text-align:center;position:absolute;bottom:10px;left:10px;min-width:65px}.gif_img_tips.loading{min-width:75px}.gif_img_tips i{vertical-align:middle;margin:-0.2em .73em 0 -2px}.gif_img_play_arrow{display:inline-block;width:0;height:0;border-width:8px;border-style:dashed;border-color:transparent;border-right-width:0;border-left-color:#fff;border-left-style:solid;border-width:5px 0 5px 8px}.gif_img_loading{width:14px;height:14px}i.gif_img_loading{margin-left:-4px}.rich_media_global_msg{position:fixed;top:0;left:0;right:0;padding:1em 35px 1em 15px;z-index:1;background-color:#c6e0f8;color:#8c8c8c;font-size:13px}.rich_media_global_msg .icon_closed{position:absolute;right:15px;top:50%;margin-top:-5px;line-height:300px;overflow:hidden;-webkit-tap-highlight-color:rgba(0,0,0,0);background:transparent url(/mmbizwap/zh_CN/htmledition/images/icon/appmsg/icon_appmsg_msg_closed_sprite.2x.png) no-repeat 0 0;width:11px;height:11px;vertical-align:middle;display:inline-block;-webkit-background-size:100% auto;background-size:100% auto}.rich_media_global_msg .icon_closed:active{background-position:0 -17px}.preview_appmsg .rich_media_title{margin-top:1.9em}@media screen and (min-width:1024px){.rich_media_global_msg{position:relative;margin:0 20px}.preview_appmsg .rich_media_title{margin-top:0}}</style>
<style>
     
    </style>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_pc2c9cd6.css">
<![endif]-->

    <link rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_combo31623d.css"></head>
    <body id="activity-detail" class="zh_CN mm_appmsg" ontouchstart="">
        

    <div id="js_article" class="rich_media">
        
        <div id="js_top_ad_area" class="top_banner">
 
        </div>
                

        <div class="rich_media_inner">
                        <div id="page-content">
                <div id="img-content" class="rich_media_area_primary">
                    <h2 class="rich_media_title" id="activity-name">
                        你肯定没见过这样的“英雄” 
                    </h2>
                    <div class="rich_media_meta_list">
                                                                        <em id="post-date" class="rich_media_meta rich_media_meta_text">2016-10-28</em>

                                                <a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" href="javascript:void(0);" id="post-user">江汽运集团</a>
                   


                    </div>
                    
                    
                    
                    
                                                            
                                                            
                    
                    <div class="rich_media_content " id="js_content">
                        

                        
                        
                        <p><span style="max-width: 100%; font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;"></span></p><section data-role="outer" label="Powered by 135editor.com" style="font-family: 微软雅黑; font-size: 16px;"></section>
                    </div>
                    <script nonce="1521718210" type="text/javascript">
                        var first_sceen__time = (+new Date());

                        if ("" == 1 && document.getElementById('js_content'))
                            document.getElementById('js_content').addEventListener("selectstart",function(e){ e.preventDefault(); });

                                        (function(){
                            if (navigator.userAgent.indexOf("WindowsWechat") != -1){
                                var link = document.createElement('link');
                                var head = document.getElementsByTagName('head')[0];
                                link.rel = 'stylesheet';
                                link.type = 'text/css';
                                link.href = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_winwx2c9cd6.css";
                                head.appendChild(link);
                            }
                        })();
                    </script>
                    
                    
                                        
                    <div class="ct_mpda_wrp" id="js_sponsor_ad_area" style="dispaly:block;">

                    </div>

                    
                                        
                                        <div class="rich_media_tool" id="js_toobar3">
                                                                    <div id="js_read_area3" class="media_tool_meta tips_global meta_primary" style="display: block;">阅读 <span id="readNum3">15155</span></div>

                        <span style="display: inline;" class="media_tool_meta meta_primary tips_global meta_praise" id="like3" like="0">
                            <i class="icon_praise_gray"></i><span class="praise_num" id="likeNum3">98</span>
                        </span>

                        <a id="js_report_article3" class="media_tool_meta tips_global meta_extra" href="javascript:void(0);">投诉</a>

                    </div>



                                    </div>

                <div class="rich_media_area_primary sougou" id="sg_tj" style="dispaly:block">

                </div>

                <div class="rich_media_area_extra">

                    
                                        <div class="mpda_bottom_container" id="js_bottom_ad_area">
                        
                    </div>
                                        
                    <div id="js_iframetest" style="dispaly:block;"></div>
                                        
                                        <div class="rich_media_extra" id="js_cmt_area" style="display: block;">

                        <div class="discuss_container" id="js_cmt_main" style="display: none;">
                            <div class="rich_tips with_line title_tips discuss_title_line">
                                <span class="tips">精选留言</span>
                            </div>
                            <p class="tips_global tc title_bottom_tips" id="js_cmt_nofans1" style="dispaly:block;">该文章作者已设置需关注才可以留言</p>
                            <p class="discuss_icon_tips title_bottom_tips tr" id="js_cmt_addbtn1" style="dispaly:block">
                                
                                                                <a href="#comment">写留言<img class="icon_edit" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/icon_edit25ded2.png" alt=""></a>
                                                            </p>
                            <ul class="discuss_list" id="js_cmt_list"></ul>
                        </div>


                        <div class="tips_global rich_split_tips tc" id="js_cmt_nofans2" style="dispaly:block;">
                            该文章作者已设置需关注才可以留言
                        </div>

                        <p class="discuss_icon_tips rich_split_tips tr" id="js_cmt_addbtn2" style="display: block;">
                            
                                                        <a href="#">写留言<img class="icon_edit" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/icon_edit25ded2.png" alt=""></a>
                                                    </p>

                        <p class="rich_split_tips tc tips_global" id="js_cmt_tips" style="display: none;"></p>


                        <div class="rich_tips tips_global loading_tips" id="js_cmt_loading" style="display: none;">
                            <img src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/icon_loading_white2805ea.gif" class="rich_icon icon_loading_white" alt="">
                            <span class="tips">加载中</span>
                        </div>

                        <div class="rich_tips with_line tips_global" id="js_cmt_statement" style="display: none;">
                            <span class="tips">以上留言由公众号筛选后显示</span>
                        </div>

                        <p class="rich_split_tips tc" id="js_cmt_qa" style="display: none;">
                            <a href="http://kf.qq.com/touch/sappfaq/150211YfyMVj150313qmMbyi.html?scene_id=kf264">
                                了解留言功能详情
                            </a>
                        </p>

                    </div>
                                    </div>
               
            </div>
            <div id="js_pc_qr_code" class="qr_code_pc_outer" style="display:none;">
                <div class="qr_code_pc_inner">
                    <div class="qr_code_pc">
                        <img id="js_pc_qr_code_img" class="qr_code_pc_img">
                        <p>微信扫一扫<br>关注该公众号</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


        
        <script nonce="1521718210">
    var __DEBUGINFO = {
        debug_js : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/debug/console2ca724.js",
        safe_js : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/safe/moonsafe2f3e84.js",
        res_list: []
    };
</script>

<script nonce="1521718210">
(function() {
    function _addVConsole(uri) {
        var url = '//res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/vconsole/' + uri;
        document.write('<script nonce="1521718210" type="text/javascript" src="' + url + '"><\/script>');
    }
    if (
        (document.cookie && document.cookie.indexOf('vconsole_open=1') > -1)
        || location.href.indexOf('vconsole=1') > -1
    ) {
        _addVConsole('2.5.1/vconsole.min.js');
        _addVConsole('plugin/vconsole-elements/1.0.2/vconsole-elements.min.js');
        _addVConsole('plugin/vconsole-sources/1.0.1/vconsole-sources.min.js');
        _addVConsole('plugin/vconsole-resources/1.0.0/vconsole-resources.min.js');
        _addVConsole('plugin/vconsole-mpopt/1.0.0/vconsole-mpopt.js');
    }
})();
</script>
        
<script nonce="1521718210" type="text/javascript">
    var not_in_mm_css = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/not_in_mm2c9cd6.css";
    var windowwx_css = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_winwx2c9cd6.css";
    var article_improve_combo_css = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_combo31623d.css";
    var tid = "";
    var aid = "";
    var clientversion = "26031c33";
    var appuin = "MjM5MzIxNDQwOQ=="||"";

    var source = "0";
    var abtest_cookie = "";

    var scene = 75;

    var itemidx = "";

    var _copyright_stat = "0";
    var _ori_article_type = "";

    var nickname = "江汽运集团";
    var appmsg_type = "9";
    var ct = "1477637959";
    var publish_time = "2016-10-28" || "";
    var user_name = "gh_5fdf6f776fd0";
    var user_name_new = "";
    var fakeid   = "MTEzOTg2MDU=";
    var version   = "";
    var is_limit_user   = "0";
    var round_head_img = "http://mmbiz.qpic.cn/mmbiz/4bqFlauuXhHOsmI8LpVfnJum18J0JJoWKQnXvoKicDK0P9Tvrv72KJwWgdQ6dicJCBbQxsvenBS89kjdH1ia9GicKQ/0";
    var msg_title = "你肯定没见过这样的“英雄”";
    var msg_desc = "相信大家都看过好莱坞的英雄大片你们脑中的英雄形象是不是都这样在美、日漫画的大浪潮下你是否曾幻想什么时候我们也";
    var msg_cdn_url = "http://mmbiz.qpic.cn/mmbiz_jpg/4bqFlauuXhGHJQO6BRTA9J6Kk1EmXv9T3GrKjLmNBVdx3Dlhav1y6YldpK6icnyJBBnahrHVYzaCNnpmaDb4tMw/0?wx_fmt=jpeg";
    var msg_link = "http://mp.weixin.qq.com/s?__biz=MjM5MzIxNDQwOQ==&amp;mid=2650944176&amp;idx=1&amp;sn=9ca4a67ee87f3c7ff52158967d2ac7a8&amp;chksm=bd6ce8168a1b610023e05575ccaaf0e14a80b1e05658a70e0836172a89dc9a0c85ac7715b7a4#rd";
    var user_uin = "11398605"*1;
    var msg_source_url = '';
    var img_format = 'jpeg';
    var srcid = '10307y2TX9AwfJslAAOGe3Mu';
    var req_id = '3015isHz4AKpwfT9sYSEcbUD';
    var networkType;
    var appmsgid = '' || '2650944176'|| "";
    var comment_id = "987670153" * 1;
    var comment_enabled = "" * 1;
    var is_need_reward = "0" * 1;
    var is_https_res = ("" * 1) && (location.protocol == "https:");
    var msg_daily_idx = "1" || "";

    var devicetype = "android-19";
    var source_encode_biz = "";
    
    
    var reprint_ticket = "";
    var source_mid = "";
    var source_idx = "";

    var show_comment = "0";
    var __appmsgCgiData = {
        can_use_page : "0"*1,
        is_wxg_stuff_uin : "0"*1,
        card_pos : "",
        copyright_stat : "0",
        source_biz : "",
        hd_head_img : "http://wx.qlogo.cn/mmhead/Q3auHgzwzM4GrOId3SWnPMaNkU7iaYqFnc9sLpmj5kdDZ5gcia3OHjJw/0"||(window.location.protocol+"//"+window.location.host + "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/pic/appmsg/pic_rumor_link.2x264e76.jpg")
    };
    var _empty_v = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/pic/pages/voice/empty26f1f1.mp3";

    var copyright_stat = "0" * 1;

    var pay_fee = "" * 1;
    var pay_timestamp = "";
    var need_pay = "" * 1;

    var need_report_cost = "0" * 1;
    var use_tx_video_player = "0" * 1;

    var friend_read_source = "" || "";
    var friend_read_version = "" || "";
    var friend_read_class_id = "" || "";

    var is_only_read = "1" * 1;
    var read_num = "" * 1;
    var like_num = "" * 1;
    var liked = "" == 'true' ? true : false;
    var is_temp_url = "" ? 1 : 0;
    var send_time = "";
      var icon_emotion_switch = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/emotion/icon_emotion_switch.2x2f1273.png";
      var icon_emotion_switch_active = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/emotion/icon_emotion_switch_active.2x2f1273.png";
      var icon_loading_white = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/icon_loading_white2805ea.gif";
      var icon_audio_unread = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/audio/icon_audio_unread26f1f1.png";
      var icon_qqmusic_default = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/qqmusic/icon_qqmusic_default.2x26f1f1.png";
      var icon_qqmusic_source = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/qqmusic/icon_qqmusic_source263724.png";

    var topic_default_img = 'http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/topic/pic_book_thumb.2x2e4987.png';

    
    
    
    
    
    
    var ban_scene = "0" * 1;

    var svr_time = "1477814221" * 1;

        window.wxtoken = "863625467";
        window.__moon_initcallback = function(){
        if(!!window.__initCatch){
            window.__initCatch({
                idkey : 27613,
                startKey : 0,
                limit : 128,
                badjsId: 43,
                reportOpt : {
                    uin : uin,
                    biz : biz,
                    mid : mid,
                    idx : idx,
                    sn  : sn
                },
                extInfo : {
                    network_rate : 0.01,    
                    badjs_rate: 0.1 
                }
            });
        }
    }
        



    
    if (typeof getComputedStyle == 'undefined') {
        if (document.body.currentStyle) {
            window.getComputedStyle = function(el) {
                return el.currentStyle;
            }
        } else {
            window.getComputedStyle = {};
        }
    }
    var occupyImg = function() {
        var images = document.getElementsByTagName('img');
        var length = images.length;
        var container = document.getElementById('img-content');
        var max_width = container.offsetWidth;
        var container_padding = 0;
        var container_style = getComputedStyle(container);
        container_padding = parseFloat(container_style.paddingLeft) + parseFloat(container_style.paddingRight);
        max_width -= container_padding;
        if (!max_width) {
            max_width = window.innerWidth - 30;      
        }
        for (var i = 0; i < length; ++i) {
            var src_ = images[i].getAttribute('data-src');
            if (!src_) continue;
            var width_ = 1 * images[i].getAttribute('data-w') || max_width;
            var ratio_ = 1 * images[i].getAttribute('data-ratio');
            var height = 100;
            if (ratio_ && ratio_ > 0) {
                var img_style = getComputedStyle(images[i]);
                var init_width = images[i].style.width;
                if (init_width) {
                    images[i].setAttribute('_width', init_width);
                    if (init_width != 'auto') width_ = parseFloat(img_style.width);
                }
                var parent_width = 0;
                var parent = images[i].parentNode;
                var outerWidth = 0;
                while (true) {
                    var parent_style = getComputedStyle(parent);
                    if (!parent || !parent_style) break;
                    parent_width = parent.clientWidth - parseFloat(parent_style.paddingLeft) - parseFloat(parent_style.paddingRight) - outerWidth;
                    if (parent_width > 0) break;
                    outerWidth += parseFloat(parent_style.paddingLeft) + parseFloat(parent_style.paddingRight) + parseFloat(parent_style.marginLeft) + parseFloat(parent_style.marginRight) + parseFloat(parent_style.borderLeftWidth) + parseFloat(parent_style.borderRightWidth);
                    parent = parent.parentNode;
                }
                parent_width = parent_width || max_width;
                var width = width_ > parent_width ? parent_width : width_; 
                var img_padding_border = parseFloat(img_style.paddingLeft) + parseFloat(img_style.paddingRight) + parseFloat(img_style.borderLeftWidth) + parseFloat(img_style.borderRightWidth);
                var img_padding_border_top_bottom = parseFloat(img_style.paddingTop) + parseFloat(img_style.paddingBottom) + parseFloat(img_style.borderTopWidth) + parseFloat(img_style.borderBottomWidth);
                height = (width - img_padding_border) * ratio_ + img_padding_border_top_bottom;
                images[i].style.cssText += "width: " + width + "px !important;";
                images[i].src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJDQzA1MTVGNkE2MjExRTRBRjEzODVCM0Q0NEVFMjFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJDQzA1MTYwNkE2MjExRTRBRjEzODVCM0Q0NEVFMjFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QkNDMDUxNUQ2QTYyMTFFNEFGMTM4NUIzRDQ0RUUyMUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QkNDMDUxNUU2QTYyMTFFNEFGMTM4NUIzRDQ0RUUyMUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6p+a6fAAAAD0lEQVR42mJ89/Y1QIABAAWXAsgVS/hWAAAAAElFTkSuQmCC";
            } else {
                images[i].style.cssText += "visibility: hidden !important;";
            }
            images[i].style.cssText += "height: " + height + "px !important;";
        }       
    }
    if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', function()  {
            occupyImg();                                                   
        });
    } else {
        
        document.onreadystatechange = function() {
            if (document.readyState === 'complete') {
                occupyImg();
            }
        }
    }
  </script>
  <script nonce="1521718210" type="text/javascript">
    var real_show_page_time = +new Date();
    if (!!window.addEventListener){
        window.addEventListener("load", function(){
            window.onload_endtime = +new Date();
        });
    }
    
  </script>

    

<!--tailTrap<body></body><head></head><html></html>-->
 
<div><!-- 发表留言 --> <div id="js_cmt_mine" class="discuss_container editing access" style="display:none;">     <div class="discuss_container_inner">         <h2 class="rich_media_title">你肯定没见过这样的“英雄”</h2>         <span id="log"></span>         <div class="frm_textarea_box_wrp">             <span class="frm_textarea_box">                 <textarea id="js_cmt_input" class="frm_textarea" placeholder="留言将由公众号筛选后显示，对所有人可见。" style="-webkit-transform: translate3d(0px, 0px, 0px); transform: translate3d(0px, 0px, 0px);"></textarea>                 <div class="emotion_tool">                     <span class="emotion_switch" style="dispaly:block;"></span>                     <span id="js_emotion_switch" class="pic_emotion_switch_wrp">                         <img class="pic_default" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/emotion/icon_emotion_switch.2x2f1273.png" alt="">                         <img class="pic_active" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/emotion/icon_emotion_switch_active.2x2f1273.png" alt="">                     </span>                     <div class="emotion_panel" id="js_emotion_panel" style="display: none;">                         <span class="emotion_panel_arrow_wrp" id="js_emotion_panel_arrow_wrp">                             <i class="emotion_panel_arrow arrow_out"></i>                             <i class="emotion_panel_arrow arrow_in"></i>                         </span>                         <div class="emotion_list_wrp" id="js_slide_wrapper" style="width: 1800px; -webkit-transform: translate3d(0px, 0px, 0px); transform: translate3d(0px, 0px, 0px);">                             <!--<ul class="emotion_list"></ul>-->                             <!--<li class="emotion_item"><i class="icon_emotion"></i></li>-->                         <ul class="emotion_list" style="width: 360px; float: left; padding-left: 18px; padding-right: 0px;"><li class="emotion_item js_emotion_item" data-index="1" style="width: 36px; height: 36px;"><i class="icon_emotion icon1" style="background-position: -1px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="2" style="width: 36px; height: 36px;"><i class="icon_emotion icon2" style="background-position: -25px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="3" style="width: 36px; height: 36px;"><i class="icon_emotion icon3" style="background-position: -49px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="4" style="width: 36px; height: 36px;"><i class="icon_emotion icon4" style="background-position: -73px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="5" style="width: 36px; height: 36px;"><i class="icon_emotion icon5" style="background-position: -97px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="6" style="width: 36px; height: 36px;"><i class="icon_emotion icon6" style="background-position: -121px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="7" style="width: 36px; height: 36px;"><i class="icon_emotion icon7" style="background-position: -145px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="8" style="width: 36px; height: 36px;"><i class="icon_emotion icon8" style="background-position: -169px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="9" style="width: 36px; height: 36px;"><i class="icon_emotion icon9" style="background-position: -193px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="10" style="width: 36px; height: 36px;"><i class="icon_emotion icon10" style="background-position: -217px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="11" style="width: 36px; height: 36px;"><i class="icon_emotion icon11" style="background-position: -241px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="12" style="width: 36px; height: 36px;"><i class="icon_emotion icon12" style="background-position: -265px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="13" style="width: 36px; height: 36px;"><i class="icon_emotion icon13" style="background-position: -289px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="14" style="width: 36px; height: 36px;"><i class="icon_emotion icon14" style="background-position: -313px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="15" style="width: 36px; height: 36px;"><i class="icon_emotion icon15" style="background-position: -337px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="16" style="width: 36px; height: 36px;"><i class="icon_emotion icon16" style="background-position: -361px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="17" style="width: 36px; height: 36px;"><i class="icon_emotion icon17" style="background-position: -385px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="18" style="width: 36px; height: 36px;"><i class="icon_emotion icon18" style="background-position: -409px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="19" style="width: 36px; height: 36px;"><i class="icon_emotion icon19" style="background-position: -433px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="20" style="width: 36px; height: 36px;"><i class="icon_emotion icon20" style="background-position: -457px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="21" style="width: 36px; height: 36px;"><i class="icon_emotion icon21" style="background-position: -481px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="22" style="width: 36px; height: 36px;"><i class="icon_emotion icon22" style="background-position: -505px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="23" style="width: 36px; height: 36px;"><i class="icon_emotion icon23" style="background-position: -529px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="24" style="width: 36px; height: 36px;"><i class="icon_emotion icon24" style="background-position: -553px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="25" style="width: 36px; height: 36px;"><i class="icon_emotion icon25" style="background-position: -577px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="26" style="width: 36px; height: 36px;"><i class="icon_emotion icon26" style="background-position: -601px -1px;"></i></li><li class="emotion_item del js_emotion_item" data-index="-1" style="width: 36px; height: 36px;"><i class="icon_emotion del"></i></li></ul><ul class="emotion_list" style="width: 360px; float: left; padding-left: 18px; padding-right: 0px;"><li class="emotion_item js_emotion_item" data-index="27" style="width: 36px; height: 36px;"><i class="icon_emotion icon27" style="background-position: -623px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="28" style="width: 36px; height: 36px;"><i class="icon_emotion icon28" style="background-position: -649px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="29" style="width: 36px; height: 36px;"><i class="icon_emotion icon29" style="background-position: -673px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="30" style="width: 36px; height: 36px;"><i class="icon_emotion icon30" style="background-position: -697px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="31" style="width: 36px; height: 36px;"><i class="icon_emotion icon31" style="background-position: -721px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="32" style="width: 36px; height: 36px;"><i class="icon_emotion icon32" style="background-position: -745px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="33" style="width: 36px; height: 36px;"><i class="icon_emotion icon33" style="background-position: -769px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="34" style="width: 36px; height: 36px;"><i class="icon_emotion icon34" style="background-position: -793px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="35" style="width: 36px; height: 36px;"><i class="icon_emotion icon35" style="background-position: -817px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="36" style="width: 36px; height: 36px;"><i class="icon_emotion icon36" style="background-position: -841px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="37" style="width: 36px; height: 36px;"><i class="icon_emotion icon37" style="background-position: -865px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="38" style="width: 36px; height: 36px;"><i class="icon_emotion icon38" style="background-position: -889px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="39" style="width: 36px; height: 36px;"><i class="icon_emotion icon39" style="background-position: -913px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="40" style="width: 36px; height: 36px;"><i class="icon_emotion icon40" style="background-position: -937px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="41" style="width: 36px; height: 36px;"><i class="icon_emotion icon41" style="background-position: -961px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="42" style="width: 36px; height: 36px;"><i class="icon_emotion icon42" style="background-position: -985px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="43" style="width: 36px; height: 36px;"><i class="icon_emotion icon43" style="background-position: -1009px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="44" style="width: 36px; height: 36px;"><i class="icon_emotion icon44" style="background-position: -1033px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="45" style="width: 36px; height: 36px;"><i class="icon_emotion icon45" style="background-position: -1057px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="46" style="width: 36px; height: 36px;"><i class="icon_emotion icon46" style="background-position: -1081px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="47" style="width: 36px; height: 36px;"><i class="icon_emotion icon47" style="background-position: -1105px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="48" style="width: 36px; height: 36px;"><i class="icon_emotion icon48" style="background-position: -1129px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="49" style="width: 36px; height: 36px;"><i class="icon_emotion icon49" style="background-position: -1153px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="50" style="width: 36px; height: 36px;"><i class="icon_emotion icon50" style="background-position: -1177px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="51" style="width: 36px; height: 36px;"><i class="icon_emotion icon51" style="background-position: -1201px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="52" style="width: 36px; height: 36px;"><i class="icon_emotion icon52" style="background-position: -1225px -1px;"></i></li><li class="emotion_item del js_emotion_item" data-index="-1" style="width: 36px; height: 36px;"><i class="icon_emotion del"></i></li></ul><ul class="emotion_list" style="width: 360px; float: left; padding-left: 18px; padding-right: 0px;"><li class="emotion_item js_emotion_item" data-index="53" style="width: 36px; height: 36px;"><i class="icon_emotion icon53" style="background-position: -1249px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="54" style="width: 36px; height: 36px;"><i class="icon_emotion icon54" style="background-position: -1273px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="55" style="width: 36px; height: 36px;"><i class="icon_emotion icon55" style="background-position: -1297px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="56" style="width: 36px; height: 36px;"><i class="icon_emotion icon56" style="background-position: -1321px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="57" style="width: 36px; height: 36px;"><i class="icon_emotion icon57" style="background-position: -1345px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="58" style="width: 36px; height: 36px;"><i class="icon_emotion icon58" style="background-position: -1369px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="59" style="width: 36px; height: 36px;"><i class="icon_emotion icon59" style="background-position: -1393px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="60" style="width: 36px; height: 36px;"><i class="icon_emotion icon60" style="background-position: -1417px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="61" style="width: 36px; height: 36px;"><i class="icon_emotion icon61" style="background-position: -1441px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="62" style="width: 36px; height: 36px;"><i class="icon_emotion icon62" style="background-position: -1465px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="63" style="width: 36px; height: 36px;"><i class="icon_emotion icon63" style="background-position: -1489px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="64" style="width: 36px; height: 36px;"><i class="icon_emotion icon64" style="background-position: -1513px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="65" style="width: 36px; height: 36px;"><i class="icon_emotion icon65" style="background-position: -1537px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="66" style="width: 36px; height: 36px;"><i class="icon_emotion icon66" style="background-position: -1561px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="67" style="width: 36px; height: 36px;"><i class="icon_emotion icon67" style="background-position: -1585px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="68" style="width: 36px; height: 36px;"><i class="icon_emotion icon68" style="background-position: -1609px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="69" style="width: 36px; height: 36px;"><i class="icon_emotion icon69" style="background-position: -1633px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="70" style="width: 36px; height: 36px;"><i class="icon_emotion icon70" style="background-position: -1657px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="71" style="width: 36px; height: 36px;"><i class="icon_emotion icon71" style="background-position: -1681px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="72" style="width: 36px; height: 36px;"><i class="icon_emotion icon72" style="background-position: -1705px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="73" style="width: 36px; height: 36px;"><i class="icon_emotion icon73" style="background-position: -1729px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="74" style="width: 36px; height: 36px;"><i class="icon_emotion icon74" style="background-position: -1753px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="75" style="width: 36px; height: 36px;"><i class="icon_emotion icon75" style="background-position: -1777px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="76" style="width: 36px; height: 36px;"><i class="icon_emotion icon76" style="background-position: -1801px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="77" style="width: 36px; height: 36px;"><i class="icon_emotion icon77" style="background-position: -1825px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="78" style="width: 36px; height: 36px;"><i class="icon_emotion icon78" style="background-position: -1849px -1px;"></i></li><li class="emotion_item del js_emotion_item" data-index="-1" style="width: 36px; height: 36px;"><i class="icon_emotion del"></i></li></ul><ul class="emotion_list" style="width: 360px; float: left; padding-left: 18px; padding-right: 0px;"><li class="emotion_item js_emotion_item" data-index="79" style="width: 36px; height: 36px;"><i class="icon_emotion icon79" style="background-position: -1873px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="80" style="width: 36px; height: 36px;"><i class="icon_emotion icon80" style="background-position: -1897px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="81" style="width: 36px; height: 36px;"><i class="icon_emotion icon81" style="background-position: -1921px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="82" style="width: 36px; height: 36px;"><i class="icon_emotion icon82" style="background-position: -1945px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="83" style="width: 36px; height: 36px;"><i class="icon_emotion icon83" style="background-position: -1969px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="84" style="width: 36px; height: 36px;"><i class="icon_emotion icon84" style="background-position: -1993px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="85" style="width: 36px; height: 36px;"><i class="icon_emotion icon85" style="background-position: -2017px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="86" style="width: 36px; height: 36px;"><i class="icon_emotion icon86" style="background-position: -2041px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="87" style="width: 36px; height: 36px;"><i class="icon_emotion icon87" style="background-position: -2065px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="88" style="width: 36px; height: 36px;"><i class="icon_emotion icon88" style="background-position: -2089px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="89" style="width: 36px; height: 36px;"><i class="icon_emotion icon89" style="background-position: -2113px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="90" style="width: 36px; height: 36px;"><i class="icon_emotion icon90" style="background-position: -2137px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="91" style="width: 36px; height: 36px;"><i class="icon_emotion icon91" style="background-position: -2161px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="92" style="width: 36px; height: 36px;"><i class="icon_emotion icon92" style="background-position: -2185px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="93" style="width: 36px; height: 36px;"><i class="icon_emotion icon93" style="background-position: -2209px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="94" style="width: 36px; height: 36px;"><i class="icon_emotion icon94" style="background-position: -2233px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="95" style="width: 36px; height: 36px;"><i class="icon_emotion icon95" style="background-position: -2257px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="96" style="width: 36px; height: 36px;"><i class="icon_emotion icon96" style="background-position: -2281px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="97" style="width: 36px; height: 36px;"><i class="icon_emotion icon97" style="background-position: -2305px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="98" style="width: 36px; height: 36px;"><i class="icon_emotion icon98" style="background-position: -2329px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="99" style="width: 36px; height: 36px;"><i class="icon_emotion icon99" style="background-position: -2353px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="100" style="width: 36px; height: 36px;"><i class="icon_emotion icon100" style="background-position: -2377px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="101" style="width: 36px; height: 36px;"><i class="icon_emotion icon101" style="background-position: -2401px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="102" style="width: 36px; height: 36px;"><i class="icon_emotion icon102" style="background-position: -2425px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="103" style="width: 36px; height: 36px;"><i class="icon_emotion icon103" style="background-position: -2449px -1px;"></i></li><li class="emotion_item js_emotion_item" data-index="104" style="width: 36px; height: 36px;"><i class="icon_emotion icon104" style="background-position: -2473px -1px;"></i></li><li class="emotion_item del js_emotion_item" data-index="-1" style="width: 36px; height: 36px;"><i class="icon_emotion del"></i></li></ul><ul class="emotion_list" style="width: 360px; float: left; padding-left: 18px; padding-right: 0px;"><li class="emotion_item js_emotion_item" data-index="105" style="width: 36px; height: 36px;"><i class="icon_emotion icon105" style="background-position: -2497px -1px;"></i></li><li class="emotion_item del js_emotion_item" data-index="-1" style="width: 36px; height: 36px;"><i class="icon_emotion del"></i></li></ul></div>                         <ul class="emotion_navs" id="js_navbar">                             <!--<li class="emotion_nav"></li>-->                         <li class="emotion_nav current"></li><li class="emotion_nav"></li><li class="emotion_nav"></li><li class="emotion_nav"></li><li class="emotion_nav"></li></ul>                     </div>                 </div>             </span>         </div>         <div class="discuss_btn_wrp"><a id="js_cmt_submit" class="btn btn_primary btn_discuss btn_disabled" href="javascript:;">提交</a></div>         <div class="discuss_list_wrp" style="dispaly:block">             <div class="rich_tips with_line title_tips discuss_title_line">                 <span class="tips">我的留言</span>             </div>             <ul class="discuss_list" id="js_cmt_mylist"></ul>         </div>         <div class="rich_tips tips_global loading_tips" id="js_mycmt_loading">             <img src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/icon_loading_white2805ea.gif" class="rich_icon icon_loading_white" alt="">             <span class="tips">加载中</span>         </div>         <div class="wx_poptips" id="js_cmt_toast" style="display:none;">             <img alt="" class="icon_toast" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGoAAABqCAYAAABUIcSXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3NpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyMTUxMzkxZS1jYWVhLTRmZTMtYTY2NS0xNTRkNDJiOGQyMWIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MTA3QzM2RTg3N0UwMTFFNEIzQURGMTQzNzQzMDAxQTUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MTA3QzM2RTc3N0UwMTFFNEIzQURGMTQzNzQzMDAxQTUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NWMyOGVjZTMtNzllZS00ODlhLWIxZTYtYzNmM2RjNzg2YjI2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIxNTEzOTFlLWNhZWEtNGZlMy1hNjY1LTE1NGQ0MmI4ZDIxYiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pmvxj1gAAAVrSURBVHja7J15rF1TFMbXk74q1ZKHGlMkJVIhIgg1FH+YEpEQJCKmGBpThRoSs5jVVNrSQUvEEENIhGiiNf9BiERICCFIRbUiDa2qvudbOetF3Tzv7XWGffa55/uS7593977n3vO7e5+199p7v56BgQGh0tcmvAUERREUQVEERREUQVEERREUQVEERREUQVEERREUQVEERREUQVEERVAUQVEERVAUQbVYk+HdvZVG8b5F0xj4RvhouB+eCy8KrdzDJc1RtAX8ILxvx98V1GyCSkN98Cx4z/95/Wn4fj6j6tUEeN4wkFSnw1MJqj5NhBfAuwaUHREUg4lqNMmePVsHll/HFhVfe1t3FwpJI8DXCCquDrCWNN4B6Tb4M3Z98aTPmTvh0YHl18PXw29yZiKejoPvcUD6E74yFBJbVDk6Bb7K8aP/Hb4c/tRzEYIqprPhSxzlf4Uvhb/0Xoig8qnHAJ3lqPMzfDH8XZ4LEpRf2sVdA5/sqPO9Qfop70UJyn+/boaPddT5yrq7VUUvTIVJI7q74MMddXR8NB1eXcYvhBpZm0s2w72/o86HFoKvLau/pYaXzjLMdUJ6y0LwtWV9CIIaXtvA8+G9HHV03u5q+K+yH47U0NoRngPv7KjzHDwTLj0bS1BDazfJJlcnOOostC6ysnCT+q80G/sIvFVgeW09D8FPVT0uoP7VfvAD8NjA8pqmuAN+OcYAjso0RbIZ8DGB5TVNcRO8JMaHY9SXSdfa3eeANJimWBLrA7JFiZwIXye+NMUV8CcxP2SRFjXefok7NRjSGZJlWUPvw2/wtNiQirSoXWyMsR28wR7AzzYM0oXw+Y7yK+CLJGeaoqjyrJSdZJD6Ov4+z5y6NJc0Az7NUecHydIUy+v60KNyQHoM3nKI1y7YCFiq0i7uBvgER52vDdKqWn9djhY1Dn4G3n6Ecqm2rF74dvgoR53S0hQxW9RJAZAGW5bSn58QJA27dQ7uIEedjywEX5NKVxCqsY6y+qA+LxFI4+yZ6oH0trWkNan80jygtIUsc5SflgAsDXgehfdx1KkkTRE76tN+Xue2jnTU0Ru1oIbvpt30bBtKhOp5yaaRkts0lic8V1i6dPcIRx2d/l8Y8XtNNEg7OOo8bl1kmmOKnDsO88CaYzejau0hWZqiL7C83oCH4SeTHvwV2BqqsHRVztSEYOmWF80NeXZT6Hd4KflResE9vCnBOlCyGfDNAstHTVPUDWoQ1t3iW+9WNizvlhfd4aerXd+ThqiMfNR6+9LvOOro5OY5JX2H4+F7HZD+kGzlamMgldWiirQsjcwWFbjmqZJteekJLK9pisvgL6RhKvuciZiwzrWWGapfrPy30kBVcSBIrw0aD3PU0XB6cehntq7rTMf7/2iQlktDVdXJLXlg6VjmiYBn6rWSTRCH6hvJ0hQrpcGq8oidsmHpTP8t8DGO9/vcWt9qabiqPgup1yKyQwvC2tSefZ73SSpNkUJ4PlLorlHZ+446nc8f3fIyywlJhwrTuwVSjBa1ccvSxN0hjjoK5xVrYZMd9V6XbFfgBukixTwGLg8sDam3dZR/wZ6L/dJlin1en8LS+bgpFbz3Ygvzu1J1HKxYNqxGpCmaCEo12rrBorD6LRp8UbpcdR5VWhTW35KlKd6QFqjuM2XzwlpnMxTvSkuUwuG/Xlg6NtPjbT6WFimF/VG6LEvXgn8QGDjMbBukVECFwhpoS+CQatfX2Q1q6H7wENHdrfCr0lKleEB9JyxNneus+VJpsVL9TwI6W65LovWIGl3KtVJaLv7LBwYTFEERFEVQFEERFEVQFEERFEVQFEERFEVQFEERFEVQFEERFFWq/hFgADUMN4RzT6/OAAAAAElFTkSuQmCC">             <p class="toast_content">已留言</p>         </div>     </div> </div> </div><iframe id="ping_iframe" src=" weixinping://iframe " style="display: none;"></iframe><iframe id="__WeixinJSBridgeIframe_SetResult" src="weixin://private/setresult/SCENE_HANDLEMSGFROMWX&amp;ZHVtbXk=" style="display: none;"></iframe><iframe id="__WeixinJSBridgeIframe" src="weixin://dispatch_message/" style="display: none;"></iframe></body></html>