
   var p = 0, t = 81;
			jq(window).scroll(function(e){
			p = jq(this).scrollTop();
     		if(t < p){
			   jq('.head').removeClass('headscroll');
    			jq('.head').css({position:"relative"});
				jq('.addhead').css({display:"none"});
				
     		}else{
				jq('.head').addClass('headscroll');
				jq('.head').css({position:"fixed",top:"0px"}).fadeIn(500);
				jq('.addhead').css({display:"block"});
			    
     		}
			setTimeout(function(){
								t = p;
								}, 0);
		});
 
	jq(document).ready(function(){
	jq(".user-ed .lot").hover(function(){
			jq(this).addClass("hover");
			
		},function(){
			jq(this).removeClass("hover");  
			
		}
	); 
	jq(".nav-mo .nav-lis ").hover(function(){
			jq(this).addClass("hover");
		},function(){
			jq(this).removeClass("hover");  
		}
	); 
	

	
	 jq(".seatext").each(function(){
     var thisVal=jq(this).val();

     if(thisVal!=""){
       jq(this).siblings("em").hide();
      }else{
       jq(this).siblings("em").show();
      }
 
     jq(this).focus(function(){
       jq(this).siblings("em").hide();
      }).blur(function(){
        var val=jq(this).val();
        if(val!=""){
         jq(this).siblings("em").hide();
        }else{
         jq(this).siblings("em").show();
        } 
      });
    })
	 
	 jq(".seatext").each(function(){
     var thisVal=jq(this).val();

     if(thisVal!=""){
       
	   jq('.seabutton').addClass("focus");
      }else{
       
	   jq('.seabutton').removeClass("focus");  
      }
      jq(this).keyup(function(){
       var val=jq(this).val();
       
	   jq('.seabutton').addClass("focus");
      }).blur(function(){
        var val=jq(this).val();
        if(val!=""){
         
		 jq('.seabutton').addClass("focus");
        }else{
         
		 jq('.seabutton').removeClass("focus");  
        }
       })
     }) 
	
    });