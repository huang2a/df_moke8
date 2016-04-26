<?php exit; ?>
<!--{if $_G['uid']}-->
<!-- userinfo -->
<div class="user-ed" id="islogin">
  <!--<div class="lot"><a href="#" class="tit czjb" title="充值中心"></a> </div>-->
  <div class="lot"><a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav" class="tit pub" title="分享资源"></a></div>
  <div class="lot" id="ui-msg"><a href="javascript:;" class="tit msg" title="消息"></a>
    <ul class="uimsgshow">
      <li class="um-reply"><a href="home.php?mod=space&do=notice" id="myprompt">查看提醒<span><!--{if $_G[member][newprompt]}-->+($_G[member][newprompt])<!--{/if}--></span></a></li>
      <li><a href="home.php?mod=space&do=pm">查看消息</a></li>
    </ul>
    <!--{if $_G[member][newprompt]}--><i style="display: inline;" class="num">$_G[member][newprompt]</i><!--{/if}--></div>
  <div class="lot"><a href="home.php?mod=space&uid=$_G[uid]" class="tit key" title="账号"><!--{avatar($_G[uid],small)}--></a>
    <ul>
      <li class="um-reply"><strong class="vwmy {if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}"><a href="home.php?mod=space&uid=$_G[uid]" class="user-name">$_G[member][username]</a></strong> </li>
      <li><a href="home.php?mod=spacecp&ac=usergroup" target="_blank">用户组：$_G[group][grouptitle]</a><!--<a class="y none" style="color:#f60;" href="#">升VIP</a>--></li>
      <!--<li><a href="#">申请转正</a></li>-->
      <li><a href="home.php?mod=spacecp">个人设置</a></li>
      <!--{if check_diy_perm($topic)}-->
					<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">打开DIY</a></li>
                    <style>#samplepanel{ position:relative; z-index:99999;}#controlpanel{z-index:99990;}#button_more_menu{ z-index:99999 !important;}</style>
					<!--{/if}-->
       <!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}--> 
     <li><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a> </li>
    <!--{/if}--> 
    <!--{if $_G['uid'] && $_G['group']['radminid'] > 1}--> 
     <li><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a> </li>
    <!--{/if}--> 
    <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}--> 
     <li><a href="admin.php" target="_blank">{lang admincp}</a> </li>
    <!--{/if}--> 
      <li><a href="forum.php?mod=guide&view=my" _style="background-image:url(static/image/feed/thread_b.png) !important">我的帖子</a></li>
      <li><a href="home.php?mod=space&do=favorite&view=me" _style="background-image:url(static/image/feed/favorite_b.png) !important">我的收藏</a></li>
      <li><a href="home.php?mod=spacecp&ac=credit">金币：<em style="color:#f60"><!--{eval echo getuserprofile('extcredits2');}--></em>&nbsp;<em class="c4095CE y"><!--赞助--></em></a></li>
      <li style="padding:2px 7px">贡献：<em style="color:#f60"><!--{eval echo getuserprofile('extcredits3');}--></em><!-- &nbsp;
     <a class="c4095CE y none" href="home.php?mod=spacecp&ac=plugin&op=credit&id=evinm_apply:apply">提现</a><a class="c4095CE y none" style="margin-right:7px;" href="home.php?mod=spacecp&amp;ac=credit&amp;op=buy">充值</a>--></li>
      <li class="last border-top1"><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">退出</a></li>
    </ul>
  </div>
</div>




<div id="um" style="display:none;">
  <div class="avt y"><a href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a></div>
  <p> <strong class="vwmy{if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}"><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a></strong> 
    <!--{if $_G['group']['allowinvisible']}--> 
    <span id="loginstatus"> <a id="loginstatusid" href="member.php?mod=switchstatus" title="{lang login_switch_invisible_mode}" onclick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a> </span> 
    <!--{/if}--> 
    <!--{hook/global_usernav_extra1}--> 
    <span class="pipe">|</span><!--{hook/global_usernav_extra4}--><a href="javascript:;" id="myitem" class="showmenu" onmouseover="showMenu({'ctrlid':'myitem'});">{lang myitem}</a> <span class="pipe">|</span><a href="home.php?mod=spacecp">{lang setup}</a> <span class="pipe">|</span><a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a> <span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt" class="a showmenu{if $_G[member][newprompt]} new{/if}" onmouseover="showMenu({'ctrlid':'myprompt'});">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span> 
    <!--{if empty($_G['cookie']['ignore_notice']) && ($_G[member][newpm] || $_G[member][newprompt_num][follower] || $_G[member][newprompt_num][follow] || $_G[member][newprompt])}--><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><!--{/if}--> 
    <!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><span class="pipe">|</span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}--> 
    <!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}--> 
    <span class="pipe">|</span><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a> 
    <!--{/if}--> 
    <!--{if $_G['uid'] && $_G['group']['radminid'] > 1}--> 
    <span class="pipe">|</span><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a> 
    <!--{/if}--> 
    <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}--> 
    <span class="pipe">|</span><a href="admin.php" target="_blank">{lang admincp}</a> 
    <!--{/if}--> 
    <!--{hook/global_usernav_extra2}--> 
    <span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a> </p>
  <p> 
    <!--{hook/global_usernav_extra3}--> 
    <a href="home.php?mod=spacecp&ac=credit&showcredit=1" id="extcreditmenu"{if !$_G[setting][bbclosed]} onmouseover="delayShow(this, showCreditmenu);" class="showmenu"{/if}>{lang credits}: $_G[member][credits]</a> <span class="pipe">|</span><a href="home.php?mod=spacecp&ac=usergroup" id="g_upmine" class="showmenu" onmouseover="delayShow(this, showUpgradeinfo)">{lang usergroup}: $_G[group][grouptitle]<!--{if $_G[member]['freeze']}--><span class="xi1">({lang freeze})</span><!--{/if}--></a> </p>
</div>

<!-- userinfo end -->  

<!--{elseif !empty($_G['cookie']['loginuser'])}-->
<!-- userregester -->  
<p> <strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong> <span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a> <span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a> </p>
<!--{elseif !$_G[connectguest]}--> 
<div class="user-ed ">
<a href="member.php?mod={$_G[setting][regname]}" rel="nofollow">免费注册</a><span class="ml10 mr10">|</span><a href="member.php?mod=logging&action=login" rel="nofollow">登录</a><br>
            <a class="qq" href="connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple" rel="nofollow">QQ登录</a>
            <!--<a class="wb" href="javascript:;" rel="nofollow">微博登录</a>--></div>
            
          
 <!-- userregester end -->              
<!--{else}-->
<!-- QQ -->  
<div id="um">
  <div class="avt y"><!--{avatar(0,small)}--></div>
  <p> <strong class="vwmy qq">{$_G[member][username]}</strong> 
    <!--{hook/global_usernav_extra1}--> 
    <span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a> </p>
  <p style="display:none;"> <a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a> <span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle] </p>
</div>
<!-- QQ END -->  
<!--{/if}-->