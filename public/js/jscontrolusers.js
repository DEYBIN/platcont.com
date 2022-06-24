$(document).ready(function() {});


$('#idLoginUsers').click(function() {
  //if (validar('#id_stc_conten','required')) {
    login();
 // }
});

$('#idChangeLogin').click(function() {
  let oldpassword=$('#idtxtoldPassword').val();
  let newpassword=$('#idtxtnewPassword').val();
  let reppassword=$('#idtxtrepPassword').val();
  if (reppassword==newpassword) {
    changeLogin(oldpassword,newpassword);
  }else{
    alert("Nuevos Password no coinciden");
  }
});

function login(){
    var accion='login';
    var login=$('#txtLogin').val();
    var password=$('#txtPassword').val();
    
    $.ajax({
        url:'../../views/information/controlusers.php',
        async: true,
        dataType: 'json',        
        type: 'POST',
        data:{
            accion:accion,
            login:login,
            password:password
        }
    }).done(function(resp) {
            //alert(resp);
        if (resp.status==200) {
          window.location.href =resp.ref;
        }else if(resp.status==404){
          alert(resp.error);
        }else{
          alert(resp);
        }
          
      }).fail(function(resp) {
         alert(JSON.stringify(resp)); 
      }); 
}

function changeLogin(oldpassword,newpassword){
    var accion='change-login';
    var login=$('#txtLogin').val();
    var password=$('#txtPassword').val();
    
    $.ajax({
        url:'../../views/information/controlusers.php',
        async: true,
        dataType: 'json',        
        type: 'POST',
        data:{
            accion:accion,
            oldpassword:oldpassword,
            newpassword:newpassword
        }
    }).done(function(resp) {
            //alert(resp);
        if (resp.status==200) {
          window.location.href =resp.ref;
        }else if(resp.status==404){
          alert(resp.error);
        }else{
          alert(resp);
        }
          
      }).fail(function(resp) {
         alert(JSON.stringify(resp)); 
      }); 
}



$("#id_stc_conten").keypress(function(e){
  if (e.which==13) {
    if (validar('#id_stc_conten','required')) {
      login();
    }
  }
});