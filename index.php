<?php

    /*
    * Date: 2021-09-29  
    * Author: David Musa
    * Description: In this file you can write a breed and it will pull up a picture of a subbreed!
    */

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Dog API Example</title>
            <link rel="shortcut icon" href="">
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
            <div class="container">
                <h1>Dog API: A Simple Example</h1>
                
                <form>
                    <label for="breed">Breed</label>
                    <input type="search" id="breed" placeholder="Enter Breed" title="dog breeds"/>

                <input type="submit" value="Get a dog pic!">
                </form>
                <section class="results hidden">
                <h2>Look at this dog!</h2>
                <img class="results-img" alt="placeholder">
                </section>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
                    $('.results-img').replaceWith(
                    `<img src="${responseJson.message}" class="results-img">`
                    )
                    $('.results').removeClass('hidden');
                }

                function watchForm() {
                    $('form').submit(event => {
                        event.preventDefault();
                        getDogImage($('#breed').val());
                    });
                }

                $(function() {
                    console.log('App loaded! Waiting for submit!');
                    watchForm();
                });

                            
            </script>   

        </body>

    </html>