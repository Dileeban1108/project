<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="signupBody">
<textarea id="typing-text" readonly></textarea>
    <script>
        (() => {
	let TypingSpeed = 50;
	let NxtMsgDelay = 1000;
	let CharacterPos = 0;
	let MsgBuffer = "";
	let MsgIndex = 0;
	let delay;
	let id = document.getElementById("typing-text");
	let messages =
[
	"The best place  for motar spare parts",
	"All your motar spare parts are here",
	"Buy everything that you need"
]

	// https://www.html-code-generator.com/html/typewriter-text-scroller
	const StartTyping = () => {
		if (CharacterPos != messages[MsgIndex].length) {
			MsgBuffer += messages[MsgIndex].charAt(CharacterPos);
			id.value = MsgBuffer+(CharacterPos != messages[MsgIndex].length-1 ? "_":"");
			delay = TypingSpeed;
			id.scrollTop = id.scrollHeight; 
		} else {
			delay = NxtMsgDelay;
			MsgBuffer   = "";
			CharacterPos = -1;
			if (MsgIndex!= messages.length-1){
				MsgIndex++;
			}else {
				MsgIndex = 0;
			}
		}
		CharacterPos++;
		setTimeout(StartTyping, delay);
	}
	StartTyping();
})();
    </script>
<nav class="menu-container">
  <!-- burger menu -->
  <input type="checkbox" aria-label="Toggle menu" />
  <span></span>
  <span></span>
  <span></span>

  <!-- logo -->
  <a href="#" class="menu-logo">
    <img src="logonew.jpg" alt="mcare"/>
  </a>

  <!-- menu items -->
  <div class="menu">
    <ul>
      <li>
        <a href="#home">
          Home
        </a>
      </li>
      <li>
        <a href="#pricing">
          Services
        </a>
      </li>
      <li>
        <a href="#blog">
          About us
        </a>
      </li>
      <li>
        <a href="signup.php" >
          Sign-up
        </a>
      </li>
      <li>
        <a href="login.php" >
          Login
        </a>
      </li>
    </ul>

  </div>
</nav>
    <div class="containerSU">
    <form action="register.php" method="POST" >
        <div class="signup"><h4>Sign Up</h4></div>
        <label for=UserName">User Name:</label>
        <input style="float:right;" type="text" name="userName" placeholder="USER NAME" required><br><br>
        <label for="NIC">NIC:</label>
        <input style="float:right;" type="text" name="NIC" placeholder="NIC" required><br><br>
        <label for="Email">Email:</label>
        <input style="float:right;" type="email" name="Email" placeholder="Email" required><br><br>
        <label for="password">password:</label>
        <input style="float:right;" type="password" name="password" placeholder="password" required><br>
        <button class="submitbtnSU">sign up</button><br>
        <a style="color:blue" href="login.php">Already have an Account?Log In</a>
    </form>
    </div>
</body>
</html>