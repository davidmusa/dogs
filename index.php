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
                <div class="header">
                    <h1>Dog App</h1>
                    <div id="breed"></div>
                </div>
                <div class="slideshow">
                    <div class="slide" style="background-image: url('')"></div>
                </div>
            </div>

            <script>

                //Fetch the breed list
                async function dog_request() {

                    const response = await fetch("https://dog.ceo/api/breeds/list/all")
                    const data = await response.json()
                    createList(data.message)
                }

                dog_request()

                //Responsible for creating the select element
                function createList(breedList) {

                    document.getElementById("breed").innerHTML = `
                        <select onchange="loadBreed(this.value)">
                        <option>Choose a dog breed</option>
                        ${Object.keys(breedList).map(function (breed) {
                            return `<option>${breed}</option>`
                        }).join('')}
                        </select>
                    `
                }

                //Responsible to load data
                async function loadBreed(breed) {

                    if (breed != "Choose a dog breed") {
                        const response = await fetch(`https://dog.ceo/api/breed/${breed}/images`)
                        const data =await response.json()
                        createSlideShow(data.message)
                    }
                }


                function createSlideShow(images) {
                    document.getElementById("outer_html").innerHTML = `
                        <div class="slide" style="background-image: url('${images[0]}')"></div>
                    `

                }
                
            </script>                

        </body>
    </html>

    