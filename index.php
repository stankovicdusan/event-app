<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar application</title>
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Calendar Event application</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form_row">
                <h2 class="text-center">Pick a date and time for your event!</h2>
                <form class="form_event">
                    <div class="form-group">
                        <label for="inputName">Your name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Mobile number</label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                        <label for="time-picker">Pick time for your event</label>
                        <input type="time" id="time-picker" class="form-control" placeholder="Select time">
                    </div>  
                    <div class="form-group">
                        <label for="datetime-picker">Pick a date for your event:</label>
                        <input type="date" id="datetime-picker" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>