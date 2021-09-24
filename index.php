<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dogs</title>
        </head>
        <body>
            <div id="inside_container">
                <input type="text" id="input_dog" value="" placeholder="Write your dog breed">
                <button id="request_dog" onclick="dog_request()">GET BREED</button>
            </div>
            <div id="outside_container">Get the subbreed here</div>

            <script>

                function dog_request() {

                var dogURL = "https://dog.ceo/api/breed";
                var dog_input = document.getElementById("input_dog").value;
                var endpoint = "https://dog.ceo/api/breed/"+dogURL+"/images/random";
                var requested_endpoint = endpoint + dog_input;
                
                var output = "";

                }
            </script>                

        </body>
    </html>

    