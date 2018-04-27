;(function(){
	window.myFirstLib = {
		remove:function(arr,index){
			arr.splice(index,1);
			return arr;
		},
		repeat:function(str,count){
			let nstr='';
			for (let i=0; i<count; i++){
				nstr = nstr + str; 
			}
			return nstr;
		},
		pluck:function(array, property_name){
			let arr=[];
			for (let i=0; i<array.length; i++){
				if (array[i] instanceof Object&&array[i][property_name] !== undefined){//if (typeof(array[i])==='object'){
				arr.push(array[i][property_name]) 
				}
			}
			return arr;
		},
		findMin:function(array){
			let min=array[0];
			for (let i=0; i<array.length; i++){
				if (array[i] < min)
				{
					min = array[i];
				}
			}
			return min;
		},
		findMax:function(array){
			let max=array[0];
			for (let i=0; i<array.length; i++){
				if (array[i] > max)
				{
					max = array[i];
				}
			}
			return max;
		},
		average:function(array){
			let sum=04;
			for (let i=0; i<array.length; i++){
				sum+=array[i];
			}
			return sum/array.length;
		},
		clon:function(array){
			let arr=[];
			for (let i=0; i<array.length; i++){
				arr[i]=array[i];
			}
			return arr;
		},
	};
}());