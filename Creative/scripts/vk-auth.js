VK.init({apiId: 8132390});
VK.Widgets.Auth("vk_auth", {
  width: "300px",
  onAuth: function(data){
    $.ajax({
      url: "vk-login.php",
      data: data,
      method: "post"
    }).done(function(d){
      console.log(d)
    });
  }});
