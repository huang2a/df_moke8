<?php header('Content-Type: text/html; charset=gbk2312');echo 'www.dzfuns.com QQ:3035511681���ڳн�Discuz��վ���衢discuz��վ�޸� ��װ����������ҵ�ҵ��';exit;?>
</div>


	</div>
    
    
<!--{if empty($topic) || ($topic[usefooter])}-->
	<!--{eval $focusid = getfocus_rand($_G[basescript]);}-->
	<!--{if $focusid !== null}-->
		<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
		<!--{eval $focusnum = count($_G['setting']['focus'][$_G[basescript]]);}-->
		<div class="focus" id="sitefocus">
			<div class="bm">
				<div class="bm_h cl">
					<a href="javascript:;" onclick="setcookie('nofocus_$_G[basescript]', 1, $_G['cache']['focus']['cookie']*3600);$('sitefocus').style.display='none'" class="y" title="{lang close}">{lang close}</a>
					<h2>
						<!--{if $_G['cache']['focus']['title']}-->{$_G['cache']['focus']['title']}<!--{else}-->{lang focus_hottopics}<!--{/if}-->
						<span id="focus_ctrl" class="fctrl"><img src="{IMGDIR}/pic_nv_prev.gif" alt="{lang footer_previous}" title="{lang footer_previous}" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/$focusnum</em> <img src="{IMGDIR}/pic_nv_next.gif" alt="{lang footer_next}" title="{lang footer_next}" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
					</h2>
				</div>
				<div class="bm_c" id="focus_con">
				</div>
			</div>
		</div>
		<!--{eval $focusi = 0;}-->
		<!--{loop $_G['setting']['focus'][$_G[basescript]] $id}-->
				<div class="bm_c" style="display: none" id="focus_$focusi">
					<dl class="xld cl bbda">
						<dt><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2" target="_blank">$_G['cache']['focus']['data'][$id]['subject']</a></dt>
						<!--{if $_G['cache']['focus']['data'][$id][image]}-->
						<dd class="m"><a href="{$_G['cache']['focus']['data'][$id]['url']}" target="_blank"><img src="{$_G['cache']['focus']['data'][$id]['image']}" alt="$_G['cache']['focus']['data'][$id]['subject']" /></a></dd>
						<!--{/if}-->
						<dd>$_G['cache']['focus']['data'][$id]['summary']</dd>
					</dl>
					<p class="ptn cl"><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2 y" target="_blank">{lang focus_show} &raquo;</a></p>
				</div>
		<!--{eval $focusi ++;}-->
		<!--{/loop}-->
		<script type="text/javascript">
			var focusnum = $focusnum;
			if(focusnum < 2) {
				$('focus_ctrl').style.display = 'none';
			}
			if(!$('focuscur').innerHTML) {
				var randomnum = parseInt(Math.round(Math.random() * focusnum));
				$('focuscur').innerHTML = Math.max(1, randomnum);
			}
			showfocus();
			var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
		</script>
	<!--{/if}-->
	<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
		<div class="focus patch" id="patch_notice"></div>
	<!--{/if}-->

	<!--{ad/footerbanner/wp a_f/1}--><!--{ad/footerbanner/wp a_f/2}--><!--{ad/footerbanner/wp a_f/3}-->
	<!--{ad/float/a_fl/1}--><!--{ad/float/a_fr/2}-->
	<!--{ad/couplebanner/a_fl a_cb/1}--><!--{ad/couplebanner/a_fr a_cb/2}-->
	<!--{ad/cornerbanner/a_cn}-->

	<!--{hook/global_footer}-->
    <!--{if $_G['basescript'] === 'portal' && CURMODULE === 'index'}-->
    <div class="main-info">
    <dl><dt>������ô�ã��Ҳ������ʵ�Discuz��Դ�ˣ�</dt>
        <dd>����������뷨������˵˵���أ�<a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3035511681&amp;site=qq&menu=yes" class="showbox" target="_blank">��ϵ����</a>
        </dd>
    </dl>
</div>
<!--{/if}-->
<!--footers-->
<div class="footer">
    <div class="f_Grid1">
        <div class="f_Box1 z">
            <div class="f_t">��������</div>
            <ul id="menu-ifanr-footer-1" class="dmenu">
                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes">���ⶨ��</a>
                </li>
                <li><a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&action=nav">����Ͷ��</a>
                </li>
                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes">������</a>
                </li>
            </ul>
        </div>
        <div class="f_Box2 z">
            <div class="f_t">�����ĵ�</div>
            <ul id="menu-ifanr-footer-2" class="dmenu">
                <li><a href="forum.php?mod=forumdisplay&fid=44" title="�����İ�" target="_blank">�����İ�</a>
                </li>
                <li><a href="forum.php?mod=forumdisplay&fid=45" title="��������" target="_blank">��������</a>
                </li>
                <li><a href="forum.php?mod=forumdisplay&fid=46" title="Discuz�̳�" target="_blank">Discuz�̳�</a>
                </li>
            </ul>
        </div>
        <div class="f_Box3 z">
            <div class="f_t">���ǵķ���</div>
            <div id="xztag">
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="discuz��װ">discuz��װ</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="discuz���" >discuz���</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="discuz���ѽ��" >discuz���ѽ��</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="mysql���޸�" >mysql���޸�</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="discuzģ�嶨��" >discuzģ�嶨��</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="discuzģ����ο���">discuzģ����ο���</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="��ҵվ����" >��ҵվ����</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="����֧��" >����֧��</a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes"  title="��ϵ����" >��ϵ����</a>
            </div>
        </div>
        <div class="f_Box4 z">
            <p>��������վ��������/Դ�������ԭ���⣬����������ת�أ���Ȩ��ԭ�������У�������ַ�������Ȩ�棬����ϵ��վɾ����лл������</p>
            <p>��վ�Ŷӳ�Ա��
            	 <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes">mrpauper</a> | 
                 <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes">�Ͼ�</a> |
                 <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes">����</a> |
                 <a href="http://wpa.qq.com/msgrd?v=3&uin=3035511681&site=DZFUNS&menu=yes">��������</a>
			</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="f_Box5"> &copy;  2014-2015 <strong><a href="$_G['setting']['siteurl']" target="_blank">$_G['setting']['sitename']</a></strong>  All Rights Reserved. | Powered by <a href="http://www.discuz.net" target="_blank" rel="nofollow" >Discuz!</a> <em>$_G['setting']['version']</em><!--{if !empty($_G['setting']['boardlicensed'])}--> <a href="http://license.comsenz.com/?pid=1&host=$_SERVER[HTTP_HOST]" target="_blank">Licensed</a><!--{/if}-->,Theme by <a href="http://www.dzfuns.com" target="_blank" title="dzfuns">Dzfuns</a>  <!--{if $_G['setting']['icp']}--><a href="http://www.miitbeian.gov.cn/" target="_blank">| $_G['setting']['icp']</a> <!--{/if}-->
    <!--{hook/global_footerlink}-->
				<!--{if $_G['setting']['statcode']}-->| $_G['setting']['statcode']<!--{/if}-->
</div>
<div class="f_Box6">
<p class=" xs0">
				{lang time_now}
				<span id="debuginfo">
				<!--{if debuginfo()}-->, Processed in $_G[debuginfo][time] second(s), $_G[debuginfo][queries] queries
					<!--{if $_G['gzipcompress']}-->, Gzip On<!--{/if}--><!--{if C::memory()->type}-->, <!--{echo ucwords(C::memory()->type)}--> On<!--{/if}-->.
				<!--{/if}-->
				</span>
			</p>
</div>
</div>
<!--footerend-->
	<div id="ft" class="wp cl"  style="padding:0; height:0;">
		
		
		<!--{eval updatesession();}-->
		<!--{if $_G['uid'] && $_G['group']['allowinvisible']}-->
			<script type="text/javascript">
			var invisiblestatus = '<!--{if $_G['session']['invisible']}-->{lang login_invisible_mode}<!--{else}-->{lang login_normal_mode}<!--{/if}-->';
			var loginstatusobj = $('loginstatusid');
			if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
			</script>
		<!--{/if}-->
	</div>
<!--{/if}-->

<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']}-->
	<!--{if $_G[uid] && !isset($_G['cookie']['checkpm'])}-->
	<script type="text/javascript" src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]"></script>
	<!--{/if}-->

	<!--{if $_G[uid] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])}-->
	<script type="text/javascript" src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=$_G[timestamp]"></script>
	<!--{/if}-->

	<!--{if !isset($_G['cookie']['sendmail'])}-->
	<script type="text/javascript" src="home.php?mod=misc&ac=sendmail&rand=$_G[timestamp]"></script>
	<!--{/if}-->

	<!--{if $_G[uid] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])}-->
	<script type="text/javascript" src="misc.php?mod=patch&action=checkpatch&rand=$_G[timestamp]"></script>
	<!--{/if}-->
<!--{/if}-->

<!--{if $_GET['diy'] == 'yes'}-->
	<!--{if check_diy_perm($topic) && (empty($do) || $do != 'index')}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script>
		<script type="text/javascript" src="{$_G[setting][jspath]}portal_diy{if !check_diy_perm($topic, 'layout')}_data{/if}.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $space['self'] && CURMODULE == 'space' && $do == 'index'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script>
		<script type="text/javascript" src="{$_G[setting][jspath]}space_diy.js?{VERHASH}"></script>
	<!--{/if}-->
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
	<script type="text/javascript">patchNotice();</script>
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])}-->
	<div class="focus plugin" id="plugin_notice"></div>
	<script type="text/javascript">pluginNotice();</script>
<!--{/if}-->
<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])}-->
	<div class="focus plugin" id="ip_notice"></div>
	<script type="text/javascript">ipNotice();</script>
<!--{/if}-->
<!--{if $_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G[uid]]) || $_G['cookie']['promptstate_'.$_G[uid]] != $_G['member']['newprompt']) && $_GET['do'] != 'notice'}-->
	<script type="text/javascript">noticeTitle();</script>
<!--{/if}-->

<!--{if ($_G[member][newpm] || $_G[member][newprompt]) && empty($_G['cookie']['ignore_notice'])}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}html5notification.js?{VERHASH}"></script>
	<script type="text/javascript">
	var h5n = new Html5notification();
	if(h5n.issupport()) {
		<!--{if $_G[member][newpm] && $_GET[do] != 'pm'}-->
		h5n.shownotification('pm', '$_G[siteurl]home.php?mod=space&do=pm', '<!--{avatar($_G[uid],small,true)}-->', '{lang newpm_subject}', '{lang newpm_notice_info}');
		<!--{/if}-->
		<!--{if $_G[member][newprompt] && $_GET[do] != 'notice'}-->
				<!--{loop $_G['member']['category_num'] $key $val}-->
					<!--{eval $noticetitle = lang('template', 'notice_'.$key);}-->
					h5n.shownotification('notice_$key', '$_G[siteurl]home.php?mod=space&do=notice&view=$key', '<!--{avatar($_G[uid],small,true)}-->', '$noticetitle ($val)', '{lang newnotice_notice_info}');
				<!--{/loop}-->
		<!--{/if}-->
	}
	</script>
<!--{/if}-->

<!--{eval userappprompt();}-->
<!--{if $_G['basescript'] != 'userapp'}-->
<div id="scrolltop">
	<!--{if $_G[fid] && $_G['mod'] == 'viewthread'}-->
	<span><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&page=$page{if $_GET[from]}&from=$_GET[from]{/if}" onclick="showWindow('reply', this.href)" class="replyfast" title="{lang fastreply}"><b>{lang fastreply}</b></a></span>
	<!--{/if}-->
	<span hidefocus="true"><a title="{lang scrolltop}" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>{lang scrolltop}</b></a></span>
	<!--{if $_G[fid]}-->
	<span>
		<!--{if $_G['mod'] == 'viewthread'}-->
		<a href="forum.php?mod=forumdisplay&fid=$_G[fid]" hidefocus="true" class="returnlist" title="{lang return_list}"><b>{lang return_list}</b></a>
		<!--{else}-->
		<a href="forum.php" hidefocus="true" class="returnboard" title="{lang return_forum}"><b>{lang return_forum}</b></a>
		<!--{/if}-->
	</span>
	<!--{/if}-->
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<!--{/if}-->
<!--{if isset($_G['makehtml'])}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}html2dynamic.js?{VERHASH}"></script>
	<script type="text/javascript">
		var html_lostmodify = {TIMESTAMP};
		htmlGetUserStatus();
		<!--{if isset($_G['htmlcheckupdate'])}-->
		htmlCheckUpdate();
		<!--{/if}-->
	</script>
<!--{/if}-->
<!--{if $_G['basescript'] == 'portal' && CURMODULE == 'index'}-->
<script type="text/javascript">
Qfast.add('widgets', { path: "{$_G['style']['styleimgdir']}/js/Terminator2.2.min.js", type: "js", requires: ['fx'] });
Qfast(false, 'widgets', function () {
    K.tabs({
        id: 'flash_box',   //����ͼ����id
        conId: "flash_con",  //** ��ͼ�����id
        tabId:"fbtn_con",
		tabTn:"a",
	    conCn: '.split', //** ��ͼ������class			
        auto: 1,   //�Զ�����
        effect: 'fade',   //Ч������
        eType: 'click', //** ����¼�
		pageBt:true,//�Ƿ��а�ť�л�ҳ��
		bns: ['.prev', '.next'],//** ǰ��ť����class								
        interval: 4000  //** ͣ��ʱ��
          })

})
</script>
<!--{/if}-->

<!--{eval output();}-->
<!--{template common/toolbar}-->
</body>
</html>
