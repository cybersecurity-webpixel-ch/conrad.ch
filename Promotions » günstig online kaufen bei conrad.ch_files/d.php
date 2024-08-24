var um_um1726kanal = 0;if (document.location.href.match('gclid')) um_um1726kanal = 1; 
    var um_um172622host = encodeURIComponent(document.location.href.split('/')[2]);
    var um_um172622loc = encodeURIComponent(document.location.href);
    var um_um172622referrer = encodeURIComponent(document.referrer);

      
  
      
    
        /* bident: D3220DA791194D075ADFCA6C1CE048E3 */
        var um23617_cs = '';
        
        function um_26251_setCookie(cname, cvalue, seconds) {
            var d = new Date();
            seconds = seconds*1000;
            d.setTime(d.getTime() + seconds);
            var expires = 'expires='+ d.toUTCString();
            var domain = ";domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)[0]) + ";"; 
            document.cookie = 'usm_' + cname + '=' + cvalue + ';' + expires + ';path=/';
        }

        function um23617_b64EncodeUnicode(str) {
          return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
              function toSolidBytes(match, p1) {
                  var um_str_enc = String.fromCharCode('0x' + p1);
                  return um_str_enc;
          }));
        }
        if (document.cookie) {
            var um23617_ca = document.cookie.split(';');
            var um23617_al = [];
            var um23617_um_rt = '';
            var um23617_cs_t = [];
            
            for (var i=0; i<um23617_ca.length; i++) {
                um23617_se = um23617_ca[i].split('=');
                if (um23617_se[0].substr(1, 4) == 'usm_') {
                    um23617_cs_t = um23617_cs_t + um23617_se[0] + '=' + um23617_se[1] + '&';
                }       
            }

            var um23617_cs = um23617_b64EncodeUnicode(um23617_cs_t+'|e1f43c');  
            
        }








      function um1726getParameter(key) {
          var query = window.location.search.substring(1); 
          var pairs = query.split('&');
          
          for (var i = 0; i < pairs.length; i++) {
          var pair = pairs[i].split('=');
          if(pair[0] == key) {
              if(pair[1].length > 0)
              return pair[1];
          }  
          }
          
          return undefined;  
      };
                var um172622referrer = encodeURIComponent(document.referrer);
                    var um172622loc = um_um172622loc;
                      var um1726w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      var um1726iOS = /iPhone|iPod/.test(navigator.userAgent) && !window.MSStream; 
      if (um1726iOS == true) um1726w = 400;
      var um1726h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
      var um1726pid = um1726getParameter('pid');
      if (um1726pid == 'undefined') um1726pid = '';  
      var um172622ext_ident = '';
      var um172622ext_par1 = '';
      var um_ext_vars = "";
      if (um172622referrer == '') {
      um172622referrer = 'leer';
      }
      if (document.location.href.match('google_brand')) um172622referrer += "sem_brand"; 
      if (document.location.href.match('bing_brand')) um172622referrer += "sem_brand";
      if (document.location.href.match('gclid')) um172622referrer += "sem_brand"; 
      if (document.location.href.match('utm_source=bing')) um172622referrer += "sem_brand"; 
      if (document.location.href.match('utm_medium=cpc')) um172622referrer += "sem_brand"; 
      if (document.location.href.match('refid=sem')) um172622referrer += "sem_brand"; 
      if (document.location.href.match('um_coupon=djad7hshw7hs72jale73s')) { um172622um_coupon = 'djad7hshw7hs72jale73s'; } else { um172622um_coupon = ''; } 
                                  
              
        
      

          if (typeof(document.getElementsByClassName("cmsVatDropdown__button")[0]) != "undefined") {
            if(document.getElementsByClassName("cmsVatDropdown__button")[0].getElementsByClassName("cmsVatDropdown__button__text__lineOne")[0].innerHTML.indexOf("Gesch") == 0) {
              um_um172622loc = um_um172622loc + ';usmb2b';
            } else {
              um_um172622loc = um_um172622loc + ';usmb2c'; 
            }
          } else {
            if (typeof(dataLayer) != "undefined") {
              var um_userType = "";
              if (typeof(dataLayer[4]) != "undefined") {
                um_userType = dataLayer[4]["userType"];
              } else if (typeof(dataLayer[7]) != "undefined") {
                um_userType = dataLayer[7]["userType"];
              } else if (typeof(dataLayer[12]) != "undefined") {
                um_userType = dataLayer[12]["userType"];
              }

              if (um_userType == "b2c") {
                um_um172622loc = um_um172622loc + ';usmlib2c'; 
              } else if (um_userType == "b2b") {
                um_um172622loc = um_um172622loc + ';usmlib2b'; 
              }

            }

        }


          if(dataLayer) {
          for (let i=0; i<dataLayer.length; i++) {
              if(typeof dataLayer[i].userId == "string") {
              um172622ext_ident = dataLayer[i].userId;
              }
              if(typeof dataLayer[i].userMail == "string") {
              um172622ext_par1 = btoa(dataLayer[i].userMail);
              }
          }
          }

            var um_extvars_str = "";
var um_userType = "";

if (document.getElementsByClassName("cmsLanguageDropdown__button__text")[0].innerHTML.indexOf("de") == true) {
    um_extvars_str = "um_language=de";
} else {
   um_extvars_str = "um_language=fr";
}

if (typeof(document.getElementsByClassName("cmsVatDropdown__button")[0]) != "undefined") {
    if(document.getElementsByClassName("cmsVatDropdown__button")[0].getElementsByClassName("cmsVatDropdown__button__text__lineOne")[0].innerHTML.indexOf("Gesch") == 0 || document.getElementsByClassName("cmsVatDropdown__button")[0].getElementsByClassName("cmsVatDropdown__button__text__lineOne")[0].innerHTML.indexOf("Clients") == 0) {
        um_extvars_str += "um_user=b2b";
    } else {
        um_extvars_str += "um_user=b2c";
    }
} else {
if (typeof(dataLayer) != "undefined") {

  if (typeof(dataLayer[4]) != "undefined") {
    um_userType = dataLayer[4]["userType"];
  } else if (typeof(dataLayer[7]) != "undefined") {
    um_userType = dataLayer[7]["userType"];
  } else if (typeof(dataLayer[12]) != "undefined") {
    um_userType = dataLayer[12]["userType"];
  }

  if (um_userType == "b2c") {
     um_extvars_str += "um_user=b2c";
  } else if (um_userType == "b2b") {
     um_extvars_str += "um_user=b2b";
  }

}

}



um_ext_vars = encodeURIComponent(um_extvars_str);
  

      var um172622scriptTag = document.createElement('script');
      um172622scriptTag.type = 'text/javascript';
      um172622scriptTag.async = true;
      um172622scriptTag.src = 'https://www.usemaxserver.de/d.php?campaign_id=34110&place=2&product_id=ext_page&u=1&dv=&cbt=1724510124&um_coupon='+um172622um_coupon+'&pid='+um1726pid+'&w='+um1726w+'&h='+um1726h+'&referrer='+um172622referrer+'&ext_ident='+um172622ext_ident+'&rt=1&ext_par1='+um172622ext_par1+'&ext_vars='+um_ext_vars+'&loc='+um_um172622loc+'&k0='+um_um1726kanal+'&host='+um_um172622host+'&ci='+um23617_cs;

      

        
     document.body.appendChild(um172622scriptTag);

        
              
    