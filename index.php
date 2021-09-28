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
            
            <div class="container">

                <h1>Dogs</h1>

                    <form>
                        <label for="breed">Breed</label>
                        <input type="search" name="phone" id="breed" placeholder="Enter Breed" title="dog breeds"/>
                        <input type="submit" value="Get a dog pic!">
                    </form>

                        <section class="results hidden">
                            <h2>Look at this dog!</h2>
                            <img class="results-img" alt="placeholder">
                        </section>

            </div>

            <script>

                'use strict';
                
                function getDogImage(breed) {
                    fetch(`https://dog.ceo/api/breed/${breed}/images/random`)
                    .then(response => response.json())
                    .then(responseJson => 
                    displayResults(responseJson))
                    .catch(error => alert('Something went wrong. Try again later.'));
                }

                function displayResults(responseJson) {
                    console.log(responseJson);
                    //replace the existing image with the new one
                    $('.results-img').replaceWith(
                    `<img src="${responseJson.message}" class="results-img">`
                    )
                    //display the results section
                    $('.results').removeClass('hidden');
                }

                function watchForm() {
                    $('form').submit(event => {
                    event.preventDefault();
                    getDogImage($('#breed').val());
                    });
                }

                $(document).ready(function() {
                    console.log('App loaded! Waiting for submit!');
                    watchForm();
                });
                    
            </script>                

        </body>
    </html>

    