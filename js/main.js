
function hienthiform(id)
{
	document.getElementById(id).style.display="block";
}

function dongform(id)
{
	document.getElementById(id).style.display="none";
}
var kichThuoc = 0;
function nextSlide(){
	kichThuoc += 100;
	if(kichThuoc>400) kichThuoc=0;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	if(kichThuoc == 0){
			document.getElementById("bottom_1").style.backgroundColor="#fff";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 100){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#fff";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 200){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#fff";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 300){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#fff";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 400){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#fff";
		}
}
function prevSlide(){
	kichThuoc -= 100;
	if(kichThuoc<0) kichThuoc=400;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	if(kichThuoc == 0){
			document.getElementById("bottom_1").style.backgroundColor="#fff";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
	if(kichThuoc == 100){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#fff";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 200){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#fff";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 300){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#fff";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 400){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#fff";
		}
}
setInterval(function(){
	nextSlide();
}, 5000);
function dieuHuong(){
	kichThuoc = 0;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#fff";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong2(){
	kichThuoc = 100;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#fff";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong3(){
	kichThuoc = 200;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#fff";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong4(){
	kichThuoc = 300;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#fff";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong5(){
	kichThuoc = 400;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#fff";
}
