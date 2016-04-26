<?php header('Content-Type: text/html; charset=gbk2312');echo 'VR岛国-国内最全面的VR虚拟现实资源分享与技术交流平台';exit;?>
<!--{if $_G['uid']}-->

<link href="{IMGDIR}/toolbar/iconfont.css" rel="stylesheet" type="text/css"/>
<link href="{IMGDIR}/toolbar/toolbar.css" rel="stylesheet" type="text/css"/>

<div class="toolbar">
  <ul class="icon_lists cl">
    <div class="tool-lis"> <i class="icon iconfont">
      <a href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a></i>
      <div class="name"><a href="home.php?mod=spacecp&ac=usergroup">$_G[group][grouptitle]</a></div>
      <ul>
        <li class="um-reply"><strong class="vwmy {if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}" style="margin-left:0px;background-position:0px 3px;"><a href="home.php?mod=space&uid=$_G[uid]" class="user-name">$_G[member][username]</a></strong> <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" class="y">退出</a></li>
        <li><a href="home.php?mod=spacecp">设置中心</a></li>
      </ul>
    </div>
    <div class="tool-lis"> <a href="forum.php?mod=guide&view=my"> <i class="icon iconfont"></i>
      <div class="name">贴子</div>
      </a> </div>
    <div class="tool-lis"> <a href="home.php?mod=space&do=favorite&view=me"> <i class="icon iconfont"></i>
      <div class="name">收藏</div>
      </a> </div>
    <div class="tool-lis"> <a href="home.php?mod=space&do=notice"> <i class="icon iconfont"></i>
      <div class="name">提醒</div>
      </a>
      <ul>
        <li class="um-reply"><a href="home.php?mod=space&do=notice" id="myprompt">查看提醒
        <span class="y" style="color:#f60"><!--{if $_G[member][newprompt]}-->+$_G[member][newprompt]<!--{/if}--></span></a></li>
        <li class="um-reply"><a href="home.php?mod=space&do=pm" id="myprompt">查看消息</a></li>
      </ul>
     <!--{if $_G[member][newprompt]}--><i style="display: inline;" class="num">$_G[member][newprompt]</i><!--{/if}--></div>
    <div class="tool-lis"> <a href="javascript:void(0);"> <i class="icon iconfont"></i>
      <div class="name">金币</div>
      </a>
      <ul>
        <li>金币：<em style="color:#f60"><!--{eval echo getuserprofile('extcredits2');}--></em>&nbsp;</li>
      </ul>
    </div>
    <div class="tool-lis"> <a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav"> <i class="icon iconfont"></i>
      <div class="name">上传</div>
      </a> </div>
    <div class="tool-lis"> <a href="javascript:void(0);"> <i class="icon iconfont"></i>
      <div class="name">任务</div>
      </a>
      <ul style="width:190px;">
        <li><a href="home.php?mod=spacecp&ac=promotion">做任务免费赚金币</a></li>
        <li> </li>
      </ul>
    </div>
    <div class="tool-lis"> <a href="#"> <i class="icon iconfont"></i>
      <div class="name">帮助</div>
      </a>
      <ul>
        <li><a target="_blank" href="portal.php?mod=view&aid=29">关于岛国</a><a target="_blank" href="portal.php?mod=view&aid=29" class="y">关于积分</a></li>
        <li><a target="_blank" href="portal.php?mod=view&aid=33">关于会员等级</a> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1055198140&amp;site=qq&menu=yes" class="y">问题反馈</a></li>
      </ul>
    </div>
    <div class="tool-lis"> <a onclick="window.scrollTo('0','0')" href="javascript:void(0);"> <i class="icon iconfont"></i>
      <div class="name">回顶部</div>
      </a> </div>
  </ul>
</div>
<!--{/if}-->
