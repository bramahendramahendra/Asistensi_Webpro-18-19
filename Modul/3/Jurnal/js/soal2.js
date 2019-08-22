function validasi() {
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var alamat = document.getElementById("alamat").value;
        if (nama != "" && email!="" && alamat !="") {
			alert('Halo ' + nama + ' selamat datang!');
            return true;
        }else{
            alert('Anda harus mengisi data dengan lengkap !');
        }
    }

function changebackground() {
      document.body.style.background = "url('image.jpg')";
    }

function changefontfamily(){
   document.getElementById("telkom").style.fontFamily="Algerian";
   }

function changefontsize(){
  document.getElementById("telkom").style.fontSize="42px";
  }
  
 function changefontcolor(){
  document.getElementById("telkom").style.color="green";
  }

function hapus(){
 document.getElementById("telkom").remove();
 }
