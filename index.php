<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dogs</title>
        </head>
        <body>
            <h1>Dog App</h1>

            <div id="breed">

            </div>

            <script>

                async function dog_request() {

                    const response = await fetch("https://dog.ceo/api/breeds/list/all")
                    const data = await response.json()
                    createList(data.message)
                }

                dog_request()

                function createList(breedList) {

                    document.getElementById("breed").innerHTML = `
                        <select>
                        <option>Choose a dog breed</option>
                        ${Object.keys(breedList).map(function (breed) {
                            return `<option>${breed}</option>`
                        }).join('')}
                        </select>
                    `
                }
                
            </script>                

        </body>
    </html>

    