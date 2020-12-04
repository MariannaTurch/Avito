var span;
function handleFileSelect(evt) {
 
    var files = evt.target.files;
    
    for (var i = 0, f; f = files[i]; i++) {
      if (!f.type.match('image.*')) {
        continue;
      }
 
      var reader = new FileReader();
 
      reader.onload = function(e) {
		  if (document.contains(span)) {
			  span.remove();
		  }
           span = document.createElement('span');
          span.innerHTML = ['<img src="'+ e.target.result + '" />'].join('');
          document.getElementById('list').insertBefore(span, null);
       };
 
      reader.readAsDataURL(f);
    }
  }
window.onload = function() {
   document.getElementById('file').addEventListener('change', handleFileSelect, false);
};
   
   const  Lay = document.querySelector('#button');
Lay.onclick = function () {
  document.getElementById('#list').innerHTML= '';
}



