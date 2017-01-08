window.onload = function(){


	var lis = document.querySelectorAll(".nav li");
	//var lastIndex = 0;

	//通过sessionStorage；来缓存每次点击tab的index值
	var myIndex = sessionStorage.getItem("index");
	if(!myIndex){
		lis[0].className = "active";
	}else{
		lis[myIndex].className = "active";
	}
	

	for(var i = 0;i < lis.length;i++){
		lis[i].index  = i;
		lis[i].onclick = function(){

			//没加lastIndex之前，可以用for循环将所有的样式清除
			//但是这样会有冗余代码，
			//因为不是所有的标签都有actvice属性
			// for(var j = 0;j < lis.length;j++){
			// 	lis[j] = className = "";
			// }


			// lis[lastIndex].className = "";
			// this.className ="active";
			// lastIndex = this.index;

			sessionStorage.setItem("index",this.index);
			// alert(this.index)
		}
	}




}