
function hienthiform(id)
{
	document.getElementById(id).style.display="block";
	document.getElementById("header").style.backgroundColor="#000";
}

function dongform(id)
{
	document.getElementById(id).style.display="none";
	document.getElementById("header").style.backgroundColor="#323233";
}
var kichThuoc = 0;
function nextSlide(){
	kichThuoc += 100;
	if(kichThuoc>400) kichThuoc=0;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}
function prevSlide(){
	kichThuoc -= 100;
	if(kichThuoc<0) kichThuoc=400;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}
setInterval(function(){
	nextSlide();
}, 5000);
function dieuHuong(){
	kichThuoc = 0;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}
function dieuHuong2(){
	kichThuoc = 100;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}
function dieuHuong3(){
	kichThuoc = 200;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}
function dieuHuong4(){
	kichThuoc = 300;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}
function dieuHuong5(){
	kichThuoc = 400;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
}

(function($) {
	$(document).ready(function(){
		if(kichThuoc == 0){
			document.getElementById("bottom_1").style.backgroundColor="#fff";
			document.getElementById("bottom_2").style.backgroundColor="none";
			document.getElementById("bottom_3").style.backgroundColor="none";
			document.getElementById("bottom_4").style.backgroundColor="none";
			document.getElementById("bottom_5").style.backgroundColor="none";
		}
		if(kichThuoc == 100){
			document.getElementById("bottom_1").style.backgroundColor="none";
			document.getElementById("bottom_2").style.backgroundColor="#fff";
			document.getElementById("bottom_3").style.backgroundColor="none";
			document.getElementById("bottom_4").style.backgroundColor="none";
			document.getElementById("bottom_5").style.backgroundColor="none";
		}
		if(kichThuoc == 200){
			document.getElementById("bottom_1").style.backgroundColor="none";
			document.getElementById("bottom_2").style.backgroundColor="none";
			document.getElementById("bottom_3").style.backgroundColor="#fff";
			document.getElementById("bottom_4").style.backgroundColor="none";
			document.getElementById("bottom_5").style.backgroundColor="none";
		}
		if(kichThuoc == 300){
			document.getElementById("bottom_1").style.backgroundColor="none";
			document.getElementById("bottom_2").style.backgroundColor="none";
			document.getElementById("bottom_3").style.backgroundColor="none";
			document.getElementById("bottom_4").style.backgroundColor="#fff";
			document.getElementById("bottom_5").style.backgroundColor="none";
		}
		if(kichThuoc == 400){
			document.getElementById("bottom_1").style.backgroundColor="none";
			document.getElementById("bottom_2").style.backgroundColor="none";
			document.getElementById("bottom_3").style.backgroundColor="none";
			document.getElementById("bottom_4").style.backgroundColor="none";
			document.getElementById("bottom_5").style.backgroundColor="#fff";
		}
});
})(jQuery);