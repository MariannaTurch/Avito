const
      ChoseColor   = document.querySelector('#btn-Color-hidden'),
      ResetButton  = document.querySelector('#btn-reset'),
      LayerSVG     = document.querySelector('#path');

    var PathColor = LayerSVG.target;
	
    LayerSVG.onclick= function(e){
      ChoseColor.click();
     }

    ChoseColor.onchange= function(_) {
      LayerSVG.setAttribute('fill', ChoseColor.value)
    }

    

