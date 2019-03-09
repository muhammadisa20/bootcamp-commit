//variable
var uangkeluar;
var uangbayar;
var temp = 0;
var data=new Array(50000,20000,10000,5000,2000,1000, 500);
var z=0;
var kurang;
//fungsi
function hitungKembalian(uangbayar, uangkeluar){
	temp = uangkeluar - uangbayar;
	console.log("Rp. "+uangkeluar +"- Rp. "+uangbayar+"\n");
	for(i=0;i<=6;i++){
		z = 0;
		while(temp >= data[i]){
			temp = temp - data[i];
			z++
		}
	if(z>0){
	console.log(z+' x '+data[i]);
	}
	}
	console.log("\n");
}


//eksekusi fungsi
hitungKembalian(15500, 50000);
hitungKembalian(15500, 100000);