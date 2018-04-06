/*
 Дана строка, изображающая целое число. Вывести сумму цифр этого числа. 
*/

function calc(x){
     var y=(1/x)+(Math.sqrt(x));
   
    return y;  
}

describe("check ", function(){
    
	it("positive", function(){
        var rez = calc(4);
        expect(rez).toBe(2.25);
    });
	
    it("negative", function(){
        var rez = calc(-1);
        expect(rez).toBeNaN();
    });
});