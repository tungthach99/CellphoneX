
function hienthiform(id)
{
	if(document.getElementById(id).style.display=="block")
		document.getElementById(id).style.display="none";
	else
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
			document.getElementById("bottom_1").style.backgroundColor="#172f87";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 100){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#172f87";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 200){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#172f87";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 300){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#172f87";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 400){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#172f87";
		}
}
function prevSlide(){
	kichThuoc -= 100;
	if(kichThuoc<0) kichThuoc=400;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	if(kichThuoc == 0){
			document.getElementById("bottom_1").style.backgroundColor="#172f87";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
	if(kichThuoc == 100){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#172f87";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 200){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#172f87";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 300){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#172f87";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
		}
		if(kichThuoc == 400){
			document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#172f87";
		}
}
setInterval(function(){
	nextSlide();
}, 7000);
	
var mg=0;
function nextTinTuc()
{
	mg-=13;
	if(mg<=-39) mg=-0;
	document.getElementById("tinTuc").style.marginLeft = mg + '%';
}
function prevTinTuc()
{
		mg+=13;
	if(mg>=0) mg=-39;
	document.getElementById("tinTuc").style.marginLeft = mg + '%';
}
setInterval(function(){
		nextTinTuc();
}, 5000);
function dieuHuong(){
	kichThuoc = 0;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#172f87";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong2(){
	kichThuoc = 100;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#172f87";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong3(){
	kichThuoc = 200;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#172f87";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong4(){
	kichThuoc = 300;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#172f87";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function dieuHuong5(){
	kichThuoc = 400;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#172f87";
}

function zoom(image){
	var anh= image.src;
	image.style.opacity = "100%";
	document.getElementById("noiDungPhongTo").style.display="block";
	document.getElementById("anhPhongTo").src= anh;
}