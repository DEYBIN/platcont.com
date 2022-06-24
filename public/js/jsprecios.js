
var price=[];
price.push({p1: 300, d1:document.getElementById("id_cont_1"), k1: 1, p2: 375, d2:document.getElementById("id_cont_2"), k2: 1, p3: 450, d3:document.getElementById("id_cont_3"), k3: 1})
price.push({ p1: 300, d1:document.getElementById("id_fina_1"), k1: 0, p2: 375, d2:document.getElementById("id_fina_2"), k2: 0, p3: 450, d3:document.getElementById("id_fina_3"), k3: 0 })
price.push({ p1: 300, d1:document.getElementById("id_stoc_1"), k1: 0, p2: 375, d2:document.getElementById("id_stoc_2"), k2: 0, p3: 450, d3:document.getElementById("id_stoc_3"), k3: 0 })
price.push({ p1: 125, d1:document.getElementById("id_rrhh_1"), k1: 0, p2: 150, d2:document.getElementById("id_rrhh_2"), k2: 0, p3: 175, d3:document.getElementById("id_rrhh_3"), k3: 0 })
price.push({ p1: 125, d1:document.getElementById("id_ctae_1"), k1: 0, p2: 150, d2:document.getElementById("id_ctae_2"), k2: 0, p3: 175, d3:document.getElementById("id_ctae_3"), k3: 0 })
price.push({ p1: 125, d1:document.getElementById("id_cost_1"), k1: 0, p2: 150, d2:document.getElementById("id_cost_2"), k2: 0, p3: 175, d3:document.getElementById("id_cost_3"), k3: 0 })
$DOM = {
	id_tota_1: document.getElementById("id_tota_1"),
	id_cont_1: document.getElementById("id_cont_1"),
	id_fina_1: document.getElementById("id_fina_1"),
	id_stoc_1: document.getElementById("id_stoc_1"),
	id_rrhh_1: document.getElementById("id_rrhh_1"),
	id_ctae_1: document.getElementById("id_ctae_1"),
	id_cost_1: document.getElementById("id_cost_1"),
	id_tota_2: document.getElementById("id_tota_2"),
	id_cont_2: document.getElementById("id_cont_2"),
	id_fina_2: document.getElementById("id_fina_2"),
	id_stoc_2: document.getElementById("id_stoc_2"),
	id_rrhh_2: document.getElementById("id_rrhh_2"),
	id_ctae_2: document.getElementById("id_ctae_2"),
	id_cost_2: document.getElementById("id_cost_2"),
	id_tota_3: document.getElementById('id_tota_3'),
	id_cont_3: document.getElementById('id_cont_3'),
	id_fina_3: document.getElementById('id_fina_3'),
	id_stoc_3: document.getElementById('id_stoc_3'),
	id_rrhh_3: document.getElementById('id_rrhh_3'),
	id_ctae_3: document.getElementById('id_ctae_3'),
	id_cost_3: document.getElementById('id_cost_3')
};
$(document).ready(function() {
	 load();
});

$DOM.id_cont_1.addEventListener("click",function ()  {
	price[0].k1 = (this.classList.contains("text-muted")) ? 1:0;
	load();
});
$DOM.id_cont_2.addEventListener("click", function() {
	price[0].k2 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_cont_3.addEventListener("click", function() {
	price[0].k3 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});


$DOM.id_fina_1.addEventListener("click", function() {
	price[1].k1 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_fina_2.addEventListener("click", function() {
	price[1].k2 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_fina_3.addEventListener("click", function() {
	price[1].k3 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});


$DOM.id_stoc_1.addEventListener("click", function() {
	price[2].k1 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_stoc_2.addEventListener("click", function() {
	price[2].k2 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_stoc_3.addEventListener("click", function() {
	price[2].k3 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});


$DOM.id_rrhh_1.addEventListener("click", function() {
	price[3].k1 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_rrhh_2.addEventListener("click", function() {
	price[3].k2 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_rrhh_3.addEventListener("click", function() {
	price[3].k3 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});


$DOM.id_ctae_1.addEventListener("click", function() {
	price[4].k1 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_ctae_2.addEventListener("click", function() {
	price[4].k2 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_ctae_3.addEventListener("click", function() {
	price[4].k3 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});


$DOM.id_cost_1.addEventListener("click", function() {
	price[5].k1 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_cost_2.addEventListener("click", function() {
	price[5].k2 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
$DOM.id_cost_3.addEventListener("click", function() {
	price[5].k3 = this.classList.contains("text-muted") ? 1 : 0;
	load();
});
// $('#idLoginUsers').click(function() {
//   //if (validar('#id_stc_conten','required')) {
//     login();
//  // }
// });

// $('#idChangeLogin').click(function() {
//   let oldpassword=$('#idtxtoldPassword').val();
//   let newpassword=$('#idtxtnewPassword').val();
//   let reppassword=$('#idtxtrepPassword').val();
//   if (reppassword==newpassword) {
//     changeLogin(oldpassword,newpassword);
//   }else{
//     alert("Nuevos Password no coinciden");
//   }
// });

// function login(){
//     var accion='login';
//     var login=$('#txtLogin').val();
//     var password=$('#txtPassword').val();
    
//     $.ajax({
//         url:'../../views/information/controlusers.php',
//         async: true,
//         dataType: 'json',        
//         type: 'POST',
//         data:{
//             accion:accion,
//             login:login,
//             password:password
//         }
//     }).done(function(resp) {
//             //alert(resp);
//         if (resp.status==200) {
//           window.location.href =resp.ref;
//         }else if(resp.status==404){
//           alert(resp.error);
//         }else{
//           alert(resp);
//         }
          
//       }).fail(function(resp) {
//          alert(JSON.stringify(resp)); 
//       }); 
// }

// function changeLogin(oldpassword,newpassword){
//     var accion='change-login';
//     var login=$('#txtLogin').val();
//     var password=$('#txtPassword').val();
    
//     $.ajax({
//         url:'../../views/information/controlusers.php',
//         async: true,
//         dataType: 'json',        
//         type: 'POST',
//         data:{
//             accion:accion,
//             oldpassword:oldpassword,
//             newpassword:newpassword
//         }
//     }).done(function(resp) {
//             //alert(resp);
//         if (resp.status==200) {
//           window.location.href =resp.ref;
//         }else if(resp.status==404){
//           alert(resp.error);
//         }else{
//           alert(resp);
//         }
          
//       }).fail(function(resp) {
//          alert(JSON.stringify(resp)); 
//       }); 
// }



// $("#id_stc_conten").keypress(function(e){
//   if (e.which==13) {
//     if (validar('#id_stc_conten','required')) {
//       login();
//     }
//   }
// });

function load() {
	let s_tota_1=0;
	let s_tota_2=0;
	let s_tota_3=0;
	price.map((i)=>{
		if (i.k1==0) {			
			i.d1.classList.add("text-muted");
		}else{
			s_tota_1 += i.p1;
			if (i.d1.classList.contains("text-muted")) {
					i.d1.classList.remove("text-muted");
			}
		
		}
		if (i.k2 == 0) {			
			i.d2.classList.add("text-muted");
		} else {
			s_tota_2 += i.p2;
			if (i.d2.classList.contains("text-muted")) {
				i.d2.classList.remove("text-muted");
			}
			
		}
		if (i.k3 == 0) {		
			i.d3.classList.add("text-muted");
		} else {
				s_tota_3 += i.p3;
			if (i.d3.classList.contains("text-muted")) {
				i.d3.classList.remove("text-muted");
			}
			
		}
	})
	$DOM.id_tota_1.innerHTML = s_tota_1;
	$DOM.id_tota_2.innerHTML = s_tota_2;
	$DOM.id_tota_3.innerHTML = s_tota_3;
}