'use strict';


	var thumbnails 	= document.getElementsByClassName('thumbnail'),
		path 		= '/images/gallery/',
		index;
	
	//Attaches modal event listener
	for (var i=0; i < thumbnails.length; i++) {
		
		
		(function(index) {
			thumbnails[i].onclick = function() {
				modalOpen(index);
				
				//modal.modalElem.setAttribute('onclick', 'cycle('+index+');');
			}
		})(i);
	}
	
	//Cycles through the gallery of images
	function modalCycle() {
		//Incremenent index
		index = index+1;
		
		if(index > 6) {
			index = 1;
		}
		
		var image = index+'.jpg';
		document.getElementById('modal-image').setAttribute('src', path+image);
	}
	
	//Opens gallery modal
	function modalOpen(i) {
			index 	= i+1;
		var image 	= index+'.jpg';
		
		var modal = picoModal({
			content: "<img id='modal-image' src='"+path+image+"' onclick='modalCycle()'/>",
			width: 900,
			closeButton: false,
			overlayStyles: {
				backgroundColor: '#000',
				opacity: 0.8
	          }
		});
		return modal;
	}
	
	
/*
	var cycle = function(i) {
		console.log(i);
		var image = (i+2)+'.jpg';
		document.getElementById('modal-image').setAttribute('src', path+image);
	}
*/
	
	
	
	/*
	
	
	(function(index){
        g.children[i].onclick = function(){
              alert(index)  ;
        }    
    })(i);
	
	
	*/