<?php echo 'www.dzfuns.com QQ:3035511681 长期承接Discuz网站建设、discuz仿站修改 安装、升级、搬家等业务';exit;?>
<!--{template common/header}-->
<style id="diy_style" type="text/css"></style>
<div class="th_1 cl"> 
  <!--[diy=diy_flash_box]-->
  <div id="diy_flash_box" class="area"></div>
  <!--[/diy]--> 
</div>
<style>
.th_1{ box-shadow:none;}
</style>
<div class="wp"> 
  
  <!--[diy=diy1]-->
  <div id="diy1" class="area"></div>
  <!--[/diy]-->
  <div class="lanmk cl mt20">
    <div class="deannotice">
      <div class="dean_nl"> 
        <!--[diy=diyn1]-->
        <div id="diyn1" class="area"></div>
        <!--[/diy]--> 
        
      </div>
      <div class="dean_nm">
        <div class="dean_nmc">
          <div class="deantubiao"></div>
          <i>$df_lang[0]：</i>
          <div class="deanmj"> 
            <!--[diy=diyn2]-->
            <div id="diyn2" class="area"></div>
            <!--[/diy]--> 
            
          </div>
          
          <div class="clear"></div>
        </div>
      </div>
      <div class="dean_nr"><a  href="forum.php?mod=misc&amp;action=nav" onclick="showWindow('nav', this.href, 'get', 0)" target="_blank">$df_lang[1]</a></div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="lanmk cl mt20 pb20ie7">
    <div class="df_col_t"> 
      <!--[diy=diydfmk8t1]-->
      <div id="diydfmk8t1" class="area"></div>
      <!--[/diy]--> 
      
    </div>
    <div class="df_col_list"> 
      
      <!--[diy=diylm1]-->
      <div id="diylm1" class="area"></div>
      <!--[/diy]--> 
      
    </div>
  </div>
  <!--[diy=diygg1]-->
  <div id="diygg1" class="area"></div>
  <!--[/diy]-->
  <div class="lanmk cl mt20 pb20ie7">
    <div class="df_col_t"> 
      <!--[diy=diydfmk8t2]-->
      <div id="diydfmk8t2" class="area"></div>
      <!--[/diy]--> 
      
    </div>
    <div class="df_col_list"> 
      
      <!--[diy=diylm2]-->
      <div id="diylm2" class="area"></div>
      <!--[/diy]--> 
      
    </div>
  </div>
  <!--[diy=diygg2]-->
  <div id="diygg2" class="area"></div>
  <!--[/diy]-->
  
  <div class="lanmk cl mt20 pb20ie7">
    <div class="df_col_t"> 
      <!--[diy=diydfmk8t3]-->
      <div id="diydfmk8t3" class="area"></div>
      <!--[/diy]--> 
      
    </div>
    <div class="df_col_list">
      <div class="lanmbig">
        <div class="listbox"> 
          
          <!--[diy=diy11]-->
          <div id="diy11" class="area"></div>
          <!--[/diy]--> 
        </div>
        <div class="listbox"> 
          
          <!--[diy=jjs]-->
          <div id="jjs" class="area"></div>
          <!--[/diy]--> 
        </div>
        <div class="listboc"> 
          
          <!--[diy=jjs1]-->
          <div id="jjs1" class="area"></div>
          <!--[/diy]--> 
        </div>
      </div>
    </div>
  </div>
  <div class="lanmk cl mt20 pb20ie7">
    <div class="df_col_t"> <span class="lantt">$df_lang[2]</span> </div>
    <div class="df_col_list"> 
      
      <!--[diy=diylm6]-->
      <div id="diylm6" class="area"></div>
      <!--[/diy]--> 
      
    </div>
  </div>
</div>
<script language="javascript">
jq(function(){ 
var scrtime; 
jq(".deanmj").hover(function(){clearInterval(scrtime);},function(){scrtime = setInterval(function(){var jqul = jq(".deanmj ul");var liHeight = jqul.find("li:last").height();jqul.animate({marginTop : liHeight+1 +"px"},1000,function(){jqul.find("li:last").prependTo(jqul);jqul.find("li:first").hide();jqul.css({marginTop:0});jqul.find("li:first").fadeIn(1000);});	},3000);}).trigger("mouseleave");}); 
</script>
<!--{template common/footer}--> 
