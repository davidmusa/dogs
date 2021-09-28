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
                            <input type="search" id="dogs">
                            <button onclick="loadDoc()">GO</button>
                    </div>
                </form>

            </div>

            <div class="slideshow" id="slideshow">

            </div>

            <script>

                function loadDoc() {
                    var dogs = $("#dogs").val();
                    var url = "https://dog.ceo/api/breeds/list/all/jsonp?    symbol=" + dogs;

                    $.ajax({
                        url: url,
                        dataType: 'jsonp',
                        success: function(results){
                            var status = results.Status;
                            var message = results.message;
                            $('#results').append(status + '. Company is: ' + message);
                        }
                    });
                };
                    
            </script>                

        </body>
    </html>

    