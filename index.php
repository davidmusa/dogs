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
            
            <div class="app">

                <h1>Dogs</h1>

                <form>
                    <div class="app">
                        <div id="breed"></div>    
                        
                    </div>
                </form>

            </div>

            <div class="slideshow" id="slideshow">

            </div>

            <script>

                async function start() {
                    try {
                        const response = await fetch("https://dog.ceo/api/breeds/list/all")
                        const data = await response.json()
                        createBreedList(data.message)
                    } catch (e) {
                        console.log("There was a problem fetching the breed list.")
                    }
                }

                start()

                function createBreedList(breedList) {
                    document.getElementById("breed").innerHTML = 
                        "<input type='search' id='input_breed' placeholder='Enter Breed' title='dog breeds'/>" + "<input type='submit' value='Get the sub-breeds!'>";
                    
                    
                }
                    
            </script>                

        </body>
    </html>

    