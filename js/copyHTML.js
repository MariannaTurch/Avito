const 	ButtonCopy = document.querySelector('#copyHTML'),
		Banner     = document.querySelector('#banner');

/* 
    ButtonCopy.onclick.execCommand("copy"); */
 ButtonCopy.onclick = function(){
	 

  var copyText = Banner.innerHTML;
   copyText.select();
  document.execCommand("copy");
  
 }
 
