<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="loginBody">
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
  <div id="loginTextArea">
  <input type="checkbox" aria-label="Toggle menu" />
  </div>
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
    <div class="containerL">
    
    <form action="check.php" method="POST">
        <div class="login"><h4>Log In</h4></div>
        <br>
        <label for=UserName">User Name:</label>
        <input type="text" name="userName" style="float:right" required><br><br>

        <label for="password">password:</label>
        <input type="password" name="password" style="float:right" required><br><br>
        <button class="loginSU">log in</button><br>
        <a style="color:blue" href="signup.php">Don't you have an Account?Create One</a>
    </form>
    </div>
    
</body>
</html>