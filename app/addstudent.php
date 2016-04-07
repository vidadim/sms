<!DOCTYPE html>
<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <h3> ADD STUDENT <span class="total-items"></span></h3>
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <!-- <label for="first_name">First Name</label> -->
                    <input placeholder="Name" id="first_name" type="text">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Surname" id="last_name" type="text">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" placeholder="E-mail">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" placeholder="Password">
                </div>
            </div>
        </form>
    </div>
    <div class="input-field col s12">
        <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
        <label>Teacher</label>
    </div>
    <div class="input-field col s12">
        <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
        <label>Student</label>
    </div>
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
});
</script>
