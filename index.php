<?php echo "Whats wrong?"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container uk-text -center">
    <div class="uk-grid-column-small uk-grid-row-large" uk-grid>

    <form class="uk-form-stacked">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" placeholder="oo@web.de">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="passsword" placeholder="Password">
        </div>
    </div>

    
    <div class="uk-margin">
       
        
        <button class="uk-button uk-button-default" type="submit">Login</button>
    </div>
    

</form>
    </div>
    </div>
    <!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
</body>
</html>