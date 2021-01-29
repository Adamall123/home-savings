<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script src="resources/js/homesaves.js"></script>
     <title>HomeSavings</title>
</head>

<body>
   
    <div id="incomePanel">
        <div id="upperIncomePanel">
            <div id="upperIncomePanelText">
                Adding Income
            </div>

        </div>
        <div class="lowerPanel" style="height: 355px;">
            <form>
                <div class="inputPanel">
                    <input type="number" name="amount" step="0.01" placeholder="0.00" min="0.00" max="99999999.99" class="form-control" value="">
                </div>

                <div class="inputPanel">
                    <input type="date" name="date" class="form-control" id="enterDate" value="">
                </div>

                <div class="inputPanel">

                    <select class="form-control" name="income_category_id">
                        <option value="">Salary</option>
                        <option value="">Interest</option>
                        <option value="">Allegro</option>
                        <option value="">Default</option>
                    </select>
                </div>

                <div class="inputPanel">
                    <input type="text" name="comment" class="form-control" placeholder="Add comment to the income" value="">
                </div>
                <input type="submit" class="btn btn-warning button1" value="ADD">
                <input type="button" class="btn btn-warning button1" value="CANCEL">
            </form>
        </div>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>