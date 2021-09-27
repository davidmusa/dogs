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
                try {
                    const response = await fetch("https://dog.ceo/api/breeds/list/all")
                    const data = await response.json()
                    createBreedList(data.message)
                } catch (e) {
                    console.log("There was a problem fetching the breed list.")
                }
            }

            async function loadByBreed(breed) {
                if (breed != "Choose a dog breed") {
                    const response = await fetch(`https://dog.ceo/api/breed/${breed}/images`)
                    const data = await response.json()
                    createSlideshow(data.message)
                }
            }
        </script>                

        </body>
    </html>

    