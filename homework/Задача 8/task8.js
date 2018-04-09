;(function(){
		
	window.matrix = {
		getPage:function(parentId, obj){
			let parentEl = document.getElementById(parentId);
			parentEl.style.width = "100vw";
			parentEl.style.height = "100vh";
			parentEl.style.backgroundColor = 'gray';
			parentEl.style.color = 'skyblue';
			parentEl.style.fontFamily = "Comic Sans MS";
				let caption = document.createElement('h2');
				caption.innerText= obj.name;
				caption.style.marginLeft = '100px'
				parentEl.appendChild(caption);
				let art = document.createElement('p');
				art.innerText = 'арт. '+obj.kode;
				parentEl.appendChild(art);
				let pic = document.createElement('img');
				pic.setAttribute('src',obj.image);
				pic.style.height = 200 + 'px';
				pic.style.width = 300 + 'px';
				parentEl.appendChild(pic);
				let disc = document.createElement('h3');
				disc.innerText = 'Описание';
				parentEl.appendChild(disc);
				let discription = document.createElement('p');
				discription.innerText = obj.discription;
				parentEl.appendChild(discription);
				let character = document.createElement('h3');
				character.innerText = 'Характеристики ';
				parentEl.appendChild(character);
				let list = document.createElement('ul');
				parentEl.appendChild(list);
				for( let i in obj.characteristics){
					let point = document.createElement('li');
					point.innerText = i +' '+ obj.characteristics[i];
					list.appendChild(point);
				};
	
		}
	};
	
}());