<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles.css">
            <title>Dogs</title>
        </head>
        <body>
            
            <div class="main_div">
                <div class="header">
                    <h1>Infinite Dog App</h1>
                    <div id="breed">
                        <input type="text" id="dog_breed_input">
                        <button id="request_dog" onclick="dog_input()">GET BREED</button>
                    </div>
                </div>
                <div class="slideshow" id="slideshow">

                </div>
            </div>

        <script>
            
            async function dog_input() {
                
                var word_input = document.getElementById("dog_breed_input").value;
                var endpoint = "https://dog.ceo/api/breeds/list/all";
                var requested_endpoint = endpoint + "?contains=" + word_input + "&amount=";

                var output = "";

                console.log(requested_endpoint)
            }
                
        </script>                

        </body>
    </html>

    