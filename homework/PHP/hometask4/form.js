;(function () {
	'use strict';
	
	window.onload = function(){
		var form = document.getElementById('form');
		form.addEventListener('submit', submitForm);
		var inp = 	document.getElementById("f1");
		var lab = document.getElementById("lab");
		var ref = document.getElementById("ref");
				inp.onmouseover = function(){
					lab.style.color = "skyblue";
				};
				inp.onmouseout = function(){
					lab.style.color = "black";
				};
	//ref.addEventListener('click', checkRef);				
		//ref.addEventListener('click', function(e){//if (check()){
			//	e.preventDefault();
			//alert('Введите имя');
			//	}
		//	});
		function submitForm(event){
			event.preventDefault();
			if (check()){
				
			} else{
				form.submit();
			};
		};
		/*function checkRef(e){
			if (!check()){
			e.preventDefault();}
			else {
				
			};
		};*/
		function check(){
			if (inp.value=="") {
				return false;}
		}
	};	
}());

		  