<?php header('Content-Type: text/html; charset=gbk2312');echo 'VR����-������ȫ���VR������ʵ��Դ�����뼼������ƽ̨';exit;?>
<!--{if $_G['uid']}-->

<link href="{IMGDIR}/toolbar/iconfont.css" rel="stylesheet" type="text/css"/>
<link href="{IMGDIR}/toolbar/toolbar.css" rel="stylesheet" type="text/css"/>

<div class="toolbar">
  <ul class="icon_lists cl">
    <div class="tool-lis"> <i class="icon iconfont">
      <a href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a></i>
      <div class="name"><a href="home.php?mod=spacecp&ac=usergroup">$_G[group][grouptitle]</a></div>
      <ul>
        <li class="um-reply"><strong class="vwmy {if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}" style="margin-left:0px;background-position:0px 3px;"><a href="home.php?mod=space&uid=$_G[uid]" class="user-name">$_G[member][username]</a></strong> <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" class="y">�˳�</a></li>
        <li><a href="home.php?mod=spacecp">��������</a></li>
      </ul>
    </div>
    <div class="tool-lis"> <a href="forum.php?mod=guide&view=my"> <i class="icon iconfont">��</i>
      <div class="name">����</div>
      </a> </div>
    <div class="tool-lis"> <a href="home.php?mod=space&do=favorite&view=me"> <i class="icon iconfont">�z</i>
      <div class="name">�ղ�</div>
      </a> </div>
    <div class="tool-lis"> <a href="home.php?mod=space&do=notice"> <i class="icon iconfont">�{</i>
      <div class="name">����</div>
      </a>
      <ul>
        <li class="um-reply"><a href="home.php?mod=space&do=notice" id="myprompt">�鿴����
        <span class="y" style="color:#f60"><!--{if $_G[member][newprompt]}-->+$_G[member][newprompt]<!--{/if}--></span></a></li>
        <li class="um-reply"><a href="home.php?mod=space&do=pm" id="myprompt">�鿴��Ϣ</a></li>
      </ul>
     <!--{if $_G[member][newprompt]}--><i style="display: inline;" class="num">$_G[member][newprompt]</i><!--{/if}--></div>
    <div class="tool-lis"> <a href="javascript:void(0);"> <i class="icon iconfont">�t</i>
      <div class="name">���</div>
      </a>
      <ul>
        <li>��ң�<em style="color:#f60"><!--{eval echo getuserprofile('extcredits2');}--></em>&nbsp;</li>
      </ul>
    </div>
    <div class="tool-lis"> <a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav"> <i class="icon iconfont">��</i>
      <div class="name">�ϴ�</div>
      </a> </div>
    <div class="tool-lis"> <a href="javascript:void(0);"> <i class="icon iconfont">�B</i>
      <div class="name">����</div>
      </a>
      <ul style="width:190px;">
        <li><a href="home.php?mod=spacecp&ac=promotion">���������׬���</a></li>
        <li> </li>
      </ul>
    </div>
    <div class="tool-lis"> <a href="#"> <i class="icon iconfont">��</i>
      <div class="name">����</div>
      </a>
      <ul>
        <li><a target="_blank" href="portal.php?mod=view&aid=29">���ڵ���</a><a target="_blank" href="portal.php?mod=view&aid=29" class="y">���ڻ���</a></li>
        <li><a target="_blank" href="portal.php?mod=view&aid=33">���ڻ�Ա�ȼ�</a> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1055198140&amp;site=qq&menu=yes" class="y">���ⷴ��</a></li>
      </ul>
    </div>
    <div class="tool-lis"> <a onclick="window.scrollTo('0','0')" href="javascript:void(0);"> <i class="icon iconfont">��</i>
      <div class="name">�ض���</div>
      </a> </div>
  </ul>
</div>
<!--{/if}-->
