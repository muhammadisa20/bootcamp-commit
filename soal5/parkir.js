//variable
var durasi;
var data=new Array(2000,1000,10000);
var temp
var z=0;
var biaya;
//fungsi
function hitungParkir(durasi){
	console.log(durasi +" Jam \n");
	if(durasi <= 1){
		biaya = durasi * data[0];
	}else if(durasi < 10){
		biaya= data[0]+(durasi*data[1]);
	}else{
		biaya=data[2];
	}
	console.log(biaya+"\n");
}


//eksekusi fungsi
hitungParkir(10);