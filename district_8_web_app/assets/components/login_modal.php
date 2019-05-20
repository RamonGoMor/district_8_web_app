<div class="login-form">
	<p>Username</p>
	<input id="user-input" type="text" required>
	<p>Password</p>
	<input id="pass-input" type="password" required>
	<div class="remember-me-form">
		<input id="remember-me" type="checkbox">
		<label for="remember-me">Remember Me</label>
	</div>
	<button id="login-button">Login</button>
	<div class="error-dialog">
		<span id="error"></span>
	</div>
</div>
<script>
	var pass_bool = false, user_bool = false;
	$("#user-input").change(function(){
		if($(this).val() != ""){
			user_bool = true;
		}else{
			user_bool = false;
		}
		loginEvent();
	});
	$("#pass-input").change(function(){
		if($(this).val() != ""){
			pass_bool = true;
		}else{
			pass_bool = false;
		}
		loginEvent();
	});
	function loginEvent(){
		var events = $._data(document.getElementById('login-button'), "events");
		if(user_bool && pass_bool){
			if(events == null){
				$("#login-button").click(function(){
					$.post(
						"../../assets/php/login_controller.php" ,
						{
							user :  $("#user-input").val(),
							pass : $("#pass-input").val(),
							reme : $("#remember-me").is(":checked")
						},
						function(data){
							if(data.code === true){
								$(".modal").toggleClass("visible");
								$(".modal-content").html("");
							}else{
								$("#error").html(data.description);
							}
						},"json"
					)
				});
			
			}
		}else{
			$("#login-button").off("click");
		}
	}
</script>