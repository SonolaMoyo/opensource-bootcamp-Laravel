<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend Project - Register Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="register-form">
	      <input type="text" placeholder="username"/>
	      <input type="password" placeholder="password"/>
	      <input type="password" placeholder="confirm password"/>
	      <input type="text" placeholder="email address"/>
	      <button>create</button>
	      <p class="message">Already registered? <a href="{{route('login')}}">Sign In</a></p>
	    </form>
	  </div>

	 <script type="text/javascript" src="script.js"></script>
</div>
</body>
</html>