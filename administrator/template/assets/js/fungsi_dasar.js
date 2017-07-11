		function munculkanNama (student,nim) {
			var student 
			var x,nim,i=1;
			for(x in student){
				if(x%2){
					document.write("<tr style='background-color:#f9acff'>");	
				}else{
					document.write("</tr>");
				}
				document.write("<td>"+i+"</td>");
				document.write("<td>"+nim[x]+"</td>")
				document.write("<td>"+student[x]+"</td>");
				document.write("</tr>");
				i++;
			}
		}

function jumlahData(data){
	var jumlah=0;
	for(x in data){
		jumlah++;
	}
	return jumlah;
}
window.alert()
function peringatan(nama) {
	alert("Halo"+nama);
}

window.alert('Selamat Datang');
